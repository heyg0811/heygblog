<div class="widewrapper main">
    <div class="container no-side tag">
        <h2 class="text-center"><i class="icon-search"></i> <?php echo $word;?>を含む記事一覧</h2>
        <aside class="comments" id="comments">
    <hr>

    <?php for($i=0;$i<count($article);$i++):?>
        <?php if(($i%2)==0):?>
            <article class='comment'>
                <header class='clearfix'>
                    <?php echo Asset::img("blog/".$article[$i]["img"]."_small.gif",array('class'=>'avatar'));?>
        <?php else:?>
            <article class='comment reply'>
                <header class='clearfix'>
                    <?php echo Asset::img("blog/".$article[$i]["img"]."_small.gif",array('class'=>'avatar'));?>
        <?php endif;?>
            <div class='meta'>
                <h3><a href=<?php echo "/blog?id=".$article[$i]["article_id"];?>><?php echo $article[$i]["title"];?></a></h3>
                <span class='date'>
                    <?php echo date("d F Y",$article[$i]['created_at']);?>
                </span>
            </div>
        </header>
        <div class='body'><?php echo $article[$i]['digest'];?></div>
    </article>
    <?php endfor;?>
        </aside>
    </div>
</div>