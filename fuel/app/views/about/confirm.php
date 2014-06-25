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
                        <input disabled type="text" name="name" value=<?php echo Input::post("body",null);?> id="contact-name" placeholder="なまえ" class="form-control input-lg">
                        <input type="hidden" name="email" value=<?php echo Input::post("email",null);?>>
                        <input disabled type="email" name="email" value=<?php echo Input::post("email",null);?> id="contact-email" placeholder="めーる" class="form-control input-lg">
                        <input type="hidden" name="body" value=<?php echo Input::post("body",null);?>>
                        <textarea disabled rows="10" name="body" id="contact-body" placeholder="なにか書いてね" class="form-control input-lg"><?php echo Input::post("body",null);?></textarea>

                        <div class="buttons clearfix">
                            <button type="submit" class="btn btn-xlarge btn-heyg-one">おっけ</button>
                            <button class="btn btn-xlarge btn-heyg-two">きゃんせる</button>
                        </div>
                    </form>
                </aside>
            </div>
        </div>
    </div>
