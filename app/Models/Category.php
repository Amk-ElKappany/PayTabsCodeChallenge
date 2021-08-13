<?php

namespace App\Models;

use CodeIgniter\Model;

class Category extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'categories';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'name', 'parent'
    ];
    protected $returnType       = 'array';
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';

    protected $validationRules    = [
        'name'      => 'required|alpha_numeric_space',
        'parent'    => 'permit_empty|numeric',
    ];
    protected $validationMessages = [
        'name'      => 'Please provide a valid category name. Only characters, numbers, and spaces are allowed',
        'parent'    => 'Please provide a valid category',
    ];
    protected $skipValidation     = false;

    //load the constructor
    function __construct()
    {
        //inherit the parent constructor
        parent::__construct();
    }
}
