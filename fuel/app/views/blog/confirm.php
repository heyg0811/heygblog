
<div class="col-md-6 col-md-offset-3 heyg-superblock" id="contact">
    <aside class="create-comment margin-top-5" id="create-comment">
        <h2>
            これでよろしいですか？
        </h2>

        <form action="confirmed" method="post" accept-charset="utf-8" id="commentform">
            <div class="row">
                <div class="col-md-6">
                    <input readonly type="text" name="name" id="comment-name"
                    placeholder="No name" class="form-control input-lg" value=<?php echo Input::post("name",null);?>>
                </div>
                <div class="col-md-6">
                    <input readonly type="email" name="email" id="comment-email"
                    placeholder="No mailaddress" class="form-control input-lg" value=<?php echo Input::post("email",null);?>>
                </div>
            </div>

            <input readonly type="url" name="url" id="comment-url"
            placeholder="No website" class="form-control input-lg" value=<?php echo Input::post("url",null);?>>

            <textarea readonly rows="10" name="body" id="comment-body"
            placeholder="No body" class="form-control input-lg"><?php echo Input::post("body",null);?></textarea>
            <input type="hidden" name="id" value=<?php echo Input::post("id",null)?>>

            <div class="buttons clearfix">
                <button type="submit" class="btn btn-xlarge btn-heyg-one">おっけ</button>
                <a href=<?php echo $_SERVER['HTTP_REFERER']; ?> class="btn btn-xlarge btn-heyg-two">きゃんせる</a>
            </div>
        </form>
    </aside>
</div>
