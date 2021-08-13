<article id='categories'>
    <h2>Available Categories</h2>
    <span>This is the main categories you have</span>
    <select class="form-control categories">
        <option value="0" selected>-- Select Category--</option>
        <?php foreach ($categories as $category){
            if(! $category['parent']){ ?>
                <option value="<?php echo base64_encode($category['id']) ?>" category="<?php echo $category['name'] ?>"><?php echo $category['name'] ?></option>
            <?php }} ?>
    </select>
</article>