<?=$this->extend('paytabs')?>
<?=$this->section("content")?>
<div class="slides">
    <div class="slide" id="1">
        <div class="alert-danger" style="display: none" id="errorDiv"><i class="fa fa-exclamation-triangle"></i> Please enter a valid data</div>

        <div class="content second-content">
            <div id='tabs'>
                <ul>
                    <li><a href='#tabs-1'><span class='fa fa-desktop'></span></a></li>
                    <?php if ($tableExists) {?>
                        <li><a data-toggle="modal" data-target="#addCategory"><span class='fa fa-plus'></span></a></li>
                        <li><a href='#tabs-2'><span class='fa fa-list'></span></a></li>
                    <?php } ?>
                    <li><a href='#tabs-3'><span class='fa fa-user'></span></a></li>
                </ul>
                <section class='tabs-content'>
                    <article id='tabs-1'>
                       <?=$this->include("about_task")?>
                    </article>
                    <?php if ($tableExists) {?>
                        <article id='tabs-2'>
                            <?=$this->include("categories")?>
                        </article>
                    <?php } ?>
                    <article id='tabs-3'>
                        <?=$this->include("about_me")?>
                    </article>
                </section>
                <?=$this->include("new_category")?>
            </div>
        </div>
    </div>
</div>
<?=$this->endSection()?>
