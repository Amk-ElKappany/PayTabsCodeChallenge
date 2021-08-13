<?php

namespace App\Controllers;

use App\Models\Category;
use Config\Database;

class CategoriesController extends BaseController
{
	public function index()
	{
        $db = Database::connect();
        if ($tableExists = $db->tableExists('categories'))
        {
            $categories = (new Category())->orderBy('parent')->findAll();
        }else{
            $categories = [];
        }
        return view('index', compact('categories', 'tableExists'));
	}

	public function getSubCategory()
	{
        $category = $this->request->getPost('category');
        $id = base64_decode($category ?? null);
        $categories = (new Category())->where('parent', $id)->findAll();
        if (empty($categories)) {
            return null;
        }

        $select = "<br/><select class='form-control categories'><option disabled selected>-- Select Sub Category--</option>";
        foreach ($categories as $category) {
            $select .= "<option value='" . base64_encode($category['id']) . "'>" . $category['name'] . "</option>";
        }
        $select .= "</select>";

        return $select;
	}

	public function storeNewCategory()
	{
        $db      = Database::connect();
        $builder = $db->table('categories');
        if(! (new Category())->validate([
            'name' => $this->request->getPost('category_name'),
            'parent' => base64_decode($this->request->getPost('parent_category') ?? null)
        ])){
            return 'error';
        }

        $builder->insert([
            'name' => $db->escapeString($this->request->getPost('category_name') ?? null),
            'parent' => ($this->request->getPost('parent_category'))
                        ? intval(base64_decode($this->request->getPost('parent_category')))
                        : null,
        ]);

        return true;
	}
}
