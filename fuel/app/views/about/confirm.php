<div class="widewrapper main">
    <div class="container about">
        <div class="col-md-6 col-md-offset-3 heyg-superblock" id="contact">
            <aside class="create-comment margin-top-5" id="create-comment">
                <h2>
                    これでよろしいですか？
                </h2>

                <form action="confirmed" method="post" accept-charset="utf-8">
                    <div class="row">
                        <input type="hidden" name="name" value=<?php echo Input::post("name",null);?>>
                        <input disabled type="text" name="name" placeholder="No name" class="form-control input-lg" value=<?php echo Input::post("body",null);?>>
                        <input type="hidden" name="email" value=<?php echo Input::post("email",null);?>>
                        <input disabled type="email" name="email" placeholder="No mailaddress" class="form-control input-lg" value=<?php echo Input::post("email",null);?>>
                        <input type="hidden" name="body" value=<?php echo Input::post("body",null);?>>
                        <textarea disabled rows="10" name="body" placeholder="No body" class="form-control input-lg"><?php echo Input::post("body",null);?></textarea>

                        <div class="buttons clearfix">
                            <button type="submit" class="btn btn-xlarge btn-heyg-one">おっけ</button>
                            <a href=<?php echo $_SERVER['HTTP_REFERER']; ?> class="btn btn-xlarge btn-heyg-two">きゃんせる</a>
                        </div>
                    </form>
                </aside>
            </div>
        </div>
    </div>
