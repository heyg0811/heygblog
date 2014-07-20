<div class="col-md-8 blog-main">
	<?php foreach($article as $val):?>
	<form action="/blog/confirm" method="post" accept-charset="utf-8">
		<input type="hidden" name="id" value=<?php echo $val["article_id"];?>>
		<article class="blog-post">
			<header>
				<h1><?php echo $val["title"]?></h1>
				<div class="lead-image">
					<?php echo Asset::img('blog/'.$val["img"].".gif",array('class'=>'img-responsive'));?>
					<div class="meta clearfix">
						<div class="author">
							<i class="icon-user"></i> <span class="data"><?php echo $val["name"]?></span>
						</div>
						<div class="date">
							<i class="icon-calendar"></i> <span class="data">
							<?php  echo date("d F Y",$val["created_at"])?>
						</span>
					</div>
					<div class="comments">
						<i class="icon-comments"></i> <span class="data"><a
						href="#comments"><?php echo count($comment);?> こめんと</a></span>
					</div>
				</div>
			</div>
		</header>
		<div class="body">
			<?php if(strpos($val["body"],"@") == false):?>
				<?php echo nl2br($val["body"]);?>
			<?php else:?>
				<?php $temp = explode("@",$val["body"]);?>
				<?php for($i=0;$i<count($temp);$i++):?>
					<?php if($i % 2 == 0):?>
						<?php echo nl2br($temp[$i]);?>
					<?php else:?>
						<?php echo htmlspecialchars_decode($temp[$i]);?>
					<?php endif;?>
				<?php endfor;?>
			<?php endif;?>
		</div>
	</article>

	<aside class="social-icons clearfix">
		<a href=<?php echo "http://twitter.com/intent/tweet?text=".Uri::base()."blog?id=".$val["article_id"];?> class="social-icon color-one" onClick="window.open(encodeURI(decodeURI(this.href)),'tweetwindow','width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!'); return false;">
			<div class="inner-circle"></div> <i class="icon-twitter"></i>
		</a> <a href="" onclick="window.open('https://plus.google.com/share?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title),null,'width=550px,height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!');" class="social-icon color-two">
		<div class="inner-circle"></div> <i class="icon-google-plus"></i>
	</a>
	<a href="" onclick=<?php echo "window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]."')+'&t='+encodeURIComponent('".$val["title"]."'),null,'width=550px,height=350px');return false;"?> class="social-icon color-three">
	<div class="inner-circle"></div> <i class="icon-facebook"></i>
</a>
</aside>

<aside class="comments" id="comments">
	<hr>

	<h2>
		<i class="icon-comments"></i> <?php echo count($comment);?> こめんと
	</h2>
	<?php foreach($comment as $val):?>
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
		<div class='body'><?php echo nl2br($val["body"]);?></div>
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
			placeholder="なまえ(必須)" class="form-control input-lg validate[required]">
		</div>
		<div class="col-md-6">
			<input type="email" name="email" id="comment-email"
			placeholder="めーる(不要)" class="form-control input-lg validate[custom[email]]">
		</div>
	</div>

	<input type="url" name="url" id="comment-url"
	placeholder="うぇぶさいと(不要)" class="form-control input-lg validate[custom[url]]">

	<textarea rows="10" name="body" id="comment-body"
	placeholder="なにか書いてね(必須)" class="form-control input-lg validate[required]"></textarea>
	<div class="buttons clearfix">
		<button type="submit" class="btn btn-xlarge btn-heyg-one">そうしん</button>
	</div>
</aside>
</form>
<?php endforeach;?>
</div>