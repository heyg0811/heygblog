<div class="col-md-8 blog-main" id="blogMain">
    <div class="col-md-12 next-effect2" id="target">
        <div class="row" id="nowpage">
            <?php foreach($articleNow as $val):?>
            <div class="col-md-6 col-sm-6">
                <article class=" blog-teaser">
                    <header>
                        <?php echo Asset::img(Model_Article::getCategory($val["article_id"]).'.png');?>
                        <h3><a href=<?php echo "blog?id=".$val['article_id'];?>><?php echo $val['title'];?></a></h3>
                        <span class="meta"><?php  echo date("Y年 m月 d日",$val["created_at"])?></span>
                        <hr>
                    </header>
                    <div class="body">
                        <?php echo $val["digest"];?>
                    </div>
                    <div class="clearfix">
                        <a href=<?php echo "blog?id=".$val['article_id'];?> class="btn btn-heyg-one">Read more</a>
                    </div>
                </article>
            </div>
        <?php endforeach;?>
    </div>
</div>
<div class="paging">
    <a class="newer" id="older"><i class="icon-long-arrow-left"></i> まえ</a>
    <span>&bull;</span>
    <a class="older" id="newer">つぎ <i class="icon-long-arrow-right"></i></a>
</div>
</div>