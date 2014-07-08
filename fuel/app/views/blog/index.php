<div class="col-md-8 blog-main">
	<div class="tabbable">
		<ul class="nav nav-tabs">
			<?php foreach($newArt as $val):?>
			<?php if($val["article"][0]["category"] == $category):?>
			<li class="active">
				<a href=<?php echo "#".$val["article"][0]["category"];?> data-toggle="tab" class="tab">
					<?php echo $val["article"][0]["category"];?>
				</a>
			</li>
		<?php else:?>
		<li class="">
			<a href=<?php echo "#".$val["article"][0]["category"];?> data-toggle="tab" class="tab">
				<?php echo $val["article"][0]["category"];?>
			</a>
		</li>
	<?php endif;?>
<?php endforeach;?>
</ul>
<div id="my-tab-content" class="tab-content">
	<?php foreach($newArt as $val):?>
	<?php if($val["article"][0]["category"] == $category):?>
	<div class="tab-pane active" id=<?php echo $val["article"][0]["category"];?>>
	<?php else:?>
	<div class="tab-pane" id=<?php echo $val["article"][0]["category"];?>>
	<?php endif;?>
	<form action="/blog/confirm" method="post" accept-charset="utf-8">
		<input type="hidden" name="id" value=<?php echo $val["article"][0]["article_id"];?>>
		<article class="blog-post">
			<header>
				<h1><?php echo $val["article"][0]["title"]?></h1>
				<div class="lead-image">
					<?php echo Asset::img('blog/'.$val["article"][0]["img"].".gif",array('class'=>'img-responsive'));?>
					<div class="meta clearfix">
						<div class="author">
							<i class="icon-user"></i> <span class="data"><?php echo $val["article"][0]["name"]?></span>
						</div>
						<div class="date">
							<i class="icon-calendar"></i> <span class="data">
							<?php  echo date("d F Y",$val["article"][0]["created_at"])?>
						</span>
					</div>
					<div class="comments">
						<i class="icon-comments"></i> <span class="data"><a
						href="#comments"><?php echo count($val["comment"]);?> こめんと</a></span>
					</div>
				</div>
			</div>
		</header>
		<div class="body">
			<?php if(strpos($val["article"][0]["body"],"@") == false):?>
				<?php echo nl2br($val["article"][0]["body"]);?>
			<?php else:?>
				<?php $temp = explode("@",$val["article"][0]["body"]);?>
				<?php for($i=0;$i<count($temp);$i++):?>
					<?php if($i % 2 == 0):?>
						<?php echo nl2br($temp[$i]);?>
					<?php else:?>
						<pre class="brush: php;"><?php echo $temp[$i];?></pre>
					<?php endif;?>
				<?php endfor;?>
			<?php endif;?>
		</div>
	</article>

	<aside class="social-icons clearfix">
		<a href=<?php echo "http://twitter.com/intent/tweet?text=".Uri::base()."blog?id=".$val["article"][0]["article_id"];?> class="social-icon color-one" onClick="window.open(encodeURI(decodeURI(this.href)),'tweetwindow','width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!'); return false;">
			<div class="inner-circle"></div> <i class="icon-twitter"></i>
		</a> <a href="" onclick="window.open('https://plus.google.com/share?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title),null,'width=550px,height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!');" class="social-icon color-two">
		<div class="inner-circle"></div> <i class="icon-google-plus"></i>
	</a>
	<a href="" onclick=<?php echo "window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]."')+'&t='+encodeURIComponent('".$val["article"][0]["title"]."'),null,'width=550px,height=350px');return false;"?> class="social-icon color-three">
	<div class="inner-circle"></div> <i class="icon-facebook"></i>
</a>
</aside>

<aside class="comments" id="comments">
	<hr>

	<h2>
		<i class="icon-comments"></i> <?php echo count($val["comment"]);?> こめんと
	</h2>
	<?php foreach($val["comment"] as $val):?>
	<?php if($val["admin"] == 0):?>
	<article class='comment'>
		<header class='clearfix'>
			<?php echo Asset::img('user.png',array('class'=>'avatar'));?>
		<?php else:?>
		<article class='comment reply'>
			<header class='clearfix'>
				<?php echo Asset::img('admin.jpeg',array('class'=>'avatar'));?>
			<?php endif;?>
			<div class='meta'>
				<h3><?php echo $val["name"];?></h3>
				<span class='date'>
					<?php echo date("d F Y",$val["created_at"])?>
				</span>
			</div>
		</header>
		<div class='body'><?php echo $val["body"]?></div>
	</article>
<?php endforeach;?>
</aside>

<aside class="create-comment" id="create-comment">
	<hr>

	<h2>
		れっつ <i class="icon-heart"></i>  こめんと
	</h2>

	<div class="row">
		<div class="col-md-6">
			<input type="text" name="name" id="comment-name"
			placeholder="なまえ" class="form-control input-lg validate[required]">
		</div>
		<div class="col-md-6">
			<input type="email" name="email" id="comment-email"
			placeholder="めーる" class="form-control input-lg validate[custom[email]]">
		</div>
	</div>

	<input type="url" name="url" id="comment-url"
	placeholder="うぇぶさいと" class="form-control input-lg validate[custom[url]]">

	<textarea rows="10" name="body" id="comment-body"
	placeholder="なにか書いてね" class="form-control input-lg validate[required]"></textarea>
	<div class="buttons clearfix">
		<button type="submit" class="btn btn-xlarge btn-heyg-one">そうしん</button>
	</div>
</aside>
</form>
</div>
<?php endforeach;?>

<div class="tab-pane" id="Real">
	<div id="cd_talbe">
		<p>Real</p>
	</div>
</div>
<div class="tab-pane" id="Game">
	<div id="live_talbe">
		<p>Game</p>
	</div>
</div>
</div>
</div>


</div>