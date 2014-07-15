<div class="widewrapper main">
    <div class="container no-side tag">
        <h1 class="text-center"><?php echo $tag;?>記事一覧</h1>
        <aside class="comments" id="comments">
    <hr>

    <?php for($i=0;$i<count($article);$i++):?>
        <?php if(($i%2)==0):?>
            <article class='comment'>
                <header class='clearfix'>
                    <?php echo Asset::img('user.png',array('class'=>'avatar'));?>
        <?php else:?>
            <article class='comment reply'>
                <header class='clearfix'>
                    <?php echo Asset::img('admin.jpeg',array('class'=>'avatar'));?>
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