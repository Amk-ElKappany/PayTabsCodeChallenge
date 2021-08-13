<div id="addCategory" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Add New Category</b></h4>
                <button type="button" class="close pull-left" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <table class="table table-hover">
                        <tr>
                            <td><b>New Category Name</b></td>
                            <td><input id="category_name" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><b>Sub-Category?</b></td>
                            <td><input id="not_parent" type="checkbox" onclick="if($(this).is(':checked')){$('#parentCategoriesRow').show()}else{$('#parentCategoriesRow').hide()}"></td>
                        </tr>
                        <tr id="parentCategoriesRow" style="display: none">
                            <td><b>Parent Category</b></td>
                            <td>
                                <select class="form-control" id="parent_category">
                                    <option value="0" selected>-- Select Category--</option>
                                    <?php foreach ($categories as $category){ ?>
                                        <option value="<?php echo base64_encode($category['id']) ?>" option_name="<?php echo $category['name'] ?>"><?php echo $category['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="storeNewCategory">Save</button>
            </div>
        </div>

    </div>
</div>
