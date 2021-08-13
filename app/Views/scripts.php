<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/owl.js"></script>
<script src="assets/js/accordations.js"></script>
<script src="assets/js/main.js"></script>

<script type="text/javascript">
    var base_url = "<?php echo base_url()?>";
    $(document).on('change', '.categories', function(){
        var div = $("#categories").html();
        var currentArticle = "categories"+$(this).val();
        if(div.indexOf(currentArticle) == -1) {
            $.ajax({
                url: base_url + '/sub-category',
                type: 'POST',
                data: {category: $(this).val()},
                success: function (html) {
                    if (html != null && html != "") {
                        $("#tabs-2").append("<article id='"+currentArticle+"'><br/><h4>Selected Category Sub-Categories</h4><span>This is the sub categories for the one you have selected</span>" + html + "</article>");
                    }
                }
            });
        }
        $(this).parent().nextAll('article').remove();
    });
    $(document).on('click', '#storeNewCategory', function(){
        var parent = '';
        if($('#not_parent').is(":checked")){
            parent = $('#parent_category').val();
        }
        $.ajax({
            url: base_url + '/store/category',
            type: 'POST',
            data: {category_name: $('#category_name').val(), parent_category: parent},
            success: function (html) {
                $('#errorDiv').hide();
                if(html != 'error'){
                    alert('Category Saved Successfully');
                    window.location.reload();
                }else{
                    $('#errorDiv').show();
                }
            }
        });
    });
</script>
<style>
    .modal-backdrop {
        z-index: -1;
    }
</style>