<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <?php echo html_tag('link',array('rel' => 'icon','type' => 'image/gif','href' => Asset::get_file('favicon.gif', 'img'),)); ?>
    <?php echo html_tag('link',array('rel' => 'shortcut icon','type' => 'image/gif','href' => Asset::get_file('favicon.gif', 'img'),)); ?>

    <!-- Bootstrap styles -->
    <?php echo Asset::css('vendor/bootstrap/bootstrap.css');?>
    <?php echo Asset::css('vendor/bootstrap/bootstrap-theme.css');?>

    <!-- SyntaxHightlighter styles -->
    <?php echo Asset::css('syntaxhighlighter/shCore.css')?>
    <?php echo Asset::css('syntaxhighlighter/shThemeDefault.css')?>

    <!-- Font-Awesome -->
    <?php echo Asset::css('vendor/font-awesome/font-awesome.css');?>

    <!-- Styles -->
    <?php echo Asset::css('heygblog.css');?>

    <!-- validationEngine -->
    <?php echo Asset::css('validationengine/validationEngine.css')?>

    <!--[if lt IE 9]>
        <link rel="stylesheet" href="css/ie8.css">
        <script src="js/vendor/google/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery/jquery-1.9.1.min.js"><\/script>')</script>

    </head>
    <body>
        <header>
            <div class="widewrapper masthead">
                <div class="container">
                    <a href="/" id="logo">
                        <?php echo Asset::img('logo.png',array('class'=>'img-responsive'));?>
                    </a>

                    <div id="mobile-nav-toggle" class="pull-right">
                        <a href="#" data-toggle="collapse" data-target=".heyg-nav .navbar-collapse" class="mobilenav">
                            <i class="icon-reorder"></i>
                        </a>
                    </div>

                    <nav class="pull-right heyg-nav">
                        <div class="collapse navbar-collapse">
                            <ul class="nav nav-pills navbar-nav">
                                <li class=<?php echo $title == "とっぷ"?"active":"";?>><a href="/">とっぷ</a></li>
                                <li class=<?php echo $title == "ぶろぐ"||$title=="じゃんる"?"active dropdown":"dropdown";?>>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="/">
                                        ぶろぐ<b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/blog/">最新記事</a></li>
                                        <li><a href="/util/category">かてごり検索</a></li>
                                    </ul>
                                </li>
                                <li class=<?php echo $title == "てぃーえす"?"active":"";?>><a href="/ts/">てぃーえす</a></li>
                                <li class=<?php echo $title == "がいだんす"?"active":"";?>><a href="/guidance/">がいだんす</a></li>
                                <li class=<?php echo $title == "あばうと"?"active":"";?>><a href="/about/">あばうと</a></li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>

            <div class="widewrapper subheader">
                <div class="container">
                    <div class="heyg-breadcrumb">
                        <a href="/">Top</a>
                        <?php if(!empty($breadcrumb)): ?>
                        <?php foreach ($breadcrumb as $val): ?>
                        <span class="separator">&#x2F;</span>
                        <a href="<?php echo $val["url"] ?>"><?php echo $val["name"]; ?></a>
                    <?php endforeach; ?>
                <?php endif?>
            </div>

            <div class="heyg-searchbox">
                <form action="/util/search" method="post" accept-charset="utf-8">
                    <button class="searchbutton" type="submit">
                        <i class="icon-search"></i>
                    </button>
                    <input class="searchfield" name="sword" id="searchbox" type="text" value="" placeholder="記事検索">
                </form>
            </div>
        </div>
    </div>
</header>

<div class="widewrapper main">
    <div class="container">
        <div class="row">
            <?php echo $content;?>
            <aside class="col-md-4 blog-aside">
                <div class="aside-widget">
                    <header>
                        <h3>おしらせ</h3>
                    </header>
                    <div class="body">
                        <ul class="heyg-list">
                            <li><a href="/util/category">カテゴリ検索追加しました。</a></li>
                            <li><a href="/blog?id=1">ついにリリースできました。</a></li>
                        </ul>
                    </div>
                </div>

                <div class="aside-widget">
                    <header>
                        <h3>おすすめきじ</h3>
                    </header>
                    <div class="body">
                        <ul class="heyg-list">
                            <?php $popArt = Model_Counter::getPop();?>
                            <?php foreach($popArt as $val):?>
                            <li><a href=<?php echo "/blog?id=".$val["article_id"];?>><?php echo $val["title"];?></a></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>

            <div class="aside-widget">
                <header>
                    <h3>たぐ</h3>
                </header>
                <?php $result = Model_Article::getTag();?>
                <div class="body clearfix">
                    <ul class="tags">
                        <?php foreach($result as $val):?>
                        <?php if(strpos($val['tag'],' ')):?>
                        <?php $tempTag = explode(" ",$val['tag']);?>
                        <?php foreach($tempTag as $tagVal):?>
                        <li><a href=<?php echo "/util/tag?tag=".$tagVal;?>><?php echo $tagVal?></a></li>
                    <?php endforeach;?>
                <?php else:?>
                <li><a href=<?php echo "/util/tag?tag=".$val['tag'];?>><?php echo $val['tag']?></a></li>
            <?php endif;?>
        <?php endforeach;?>
    </ul>
</div>
</div>
<div class="aside-widget">
    <!-- top -->
    <ins class="adsbygoogle"
     style="margin-left:10px;display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-8972128233832989"
     data-ad-slot="8815518551"></ins>
</div>
</aside>
</div>
</div>
</div>
<footer>
    <div class="widewrapper footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-widget">
                    <h3> <i class="icon-cog"></i>かうんた</h3>

                    <span></span>

                    <div class="stats">
                        <div class="line">
                            <span class="counter"><?php echo Model_Article::count();?></span>
                            <span class="caption">きじ</span>
                        </div>
                        <div class="line">
                            <span class="counter"><?php echo Model_Comment::count();?></span>
                            <span class="caption">こめんと</span>
                        </div>
                        <div class="line">
                            <span class="counter"><?php echo Model_Counter::countAccess();?></span>
                            <span class="caption">あくせす</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 footer-widget">
                    <h3> <i class="icon-star"></i>にんきじじ</h3>
                    <ul class="heyg-list">
                        <?php foreach($popArt as $val):?>
                        <li><a href=<?php echo "/blog?id=".$val["article_id"];?>><?php echo $val["title"];?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>

            <div class="col-md-4 footer-widget">
                <h3> <i class="icon-cog"></i>こんたくと</h3>

                <span></span>

                <span class="email">
                    <a href="/about/">heyg.pw@gmail.com</a>
                </span>
            </div>
        </div>
    </div>
</div>
</footer>
<?php echo Asset::js('vendor/bootstrap/bootstrap.min.js');?>
<?php echo Asset::js('vendor/modernizr/modernizr.js');?>
<?php echo Asset::js('syntaxhighlighter/shCore.js');?>
<?php echo Asset::js('syntaxhighlighter/shAutoloader.js');?>
<?php echo Asset::js('syntaxhighlighter/shBrushXml.js');?>
<?php echo Asset::js('syntaxhighlighter/shBrushPhp.js');?>
<?php echo Asset::js('validationengine/validationEngine-ja.js');?>
<?php echo Asset::js('validationengine/validationEngine.js');?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<?php echo Asset::js('original.js');?>
<script type="text/javascript">
(adsbygoogle = window.adsbygoogle || []).push({});
SyntaxHighlighter.autoloader(
 <?php echo "'bash ".Uri::base()."assets/js/syntaxhighlighter/shBrushBash.js'";?>
 ,<?php echo "'diff ".Uri::base()."assets/js/syntaxhighlighter/shBrushDiff.js'";?>
 ,<?php echo "'css ".Uri::base()."assets/js/syntaxhighlighter/shBrushCss.js'";?>
 ,<?php echo "'html xml xhtml ".Uri::base()."assets/js/syntaxhighlighter/shBrushXml.js'";?>
 ,<?php echo "'js jscript javascript ".Uri::base()."assets/js/syntaxhighlighter/shBrushJScript.js'";?>
 ,<?php echo "'perl pl ".Uri::base()."assets/js/syntaxhighlighter/shBrushPerl.js'";?>
 ,<?php echo "'plain ".Uri::base()."assets/js/syntaxhighlighter/shBrushPlain.js'";?>
 ,<?php echo "'python py ".Uri::base()."assets/js/syntaxhighlighter/shBrushPython.js'";?>
 ,<?php echo "'sql ".Uri::base()."assets/js/syntaxhighlighter/shBrushSql.js'";?>
 ,<?php echo "'tt tt2 ".Uri::base()."assets/js/syntaxhighlighter/shBrushTT2.js'";?>
 ,<?php echo "'yaml yml ".Uri::base()."assets/js/syntaxhighlighter/shBrushYAML.js'";?>
 ,<?php echo "'php ".Uri::base()."assets/js/syntaxhighlighter/shBrushPhp.js'";?>
 );
SyntaxHighlighter.all();
</script>

</body>
</html>