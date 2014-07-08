<div class="widewrapper main">
    <div class="container about">
        <h2 class="text-center">
            ようこそ<span class="about-bold" style="color:#69bc87;">HeyG</span>ブログへ！
        </h2>
        <span class="about-small">
            <p>　<span style="color:#69bc87;">HeyG</span>はハンドルネームとして使っております。</p>
            <p>　長らくブログを作りたかったのですが、時間的に作れておりませんでした。</p>
            <p>　合間を見つけて作っていく中で此の様なブログが出来ました。</p>
            <p>　出来映えはさておき、動いているので良いじゃないかなと...</p>
            <p>　ちょいちょい更新していくので、長い目で見守ってください。</p>
        </span>

        <div class="about-button">
            <a class="btn btn-xlarge btn-heyg-one" href="#contact">ご意見・ご感想</a>
        </div>
    <hr>
    </div>
    <div class="container heyg-superblock" id="portfolio">
        <h2>ぽーとふぉりお</h2>
        <div class="col-md-6">
            <article class="blog-post">
                <header>
                    <div class="lead-image">
                        <a href="exam?id=1"><?php echo Asset::img('portfolio/heygblog.png',array('class'=>'img-responsive'));?></a>
                        <div class="meta clearfix">
                            <div class="author">
                                <i class="icon-folder-open"></i> <span class="data">HeyG Blog</span>
                            </div>
                            <div class="date">
                                <i class="icon-eye-open"></i> <span class="data">WEB</span>
                            </div>
                    </div>
                </header>
            </article>
        </div>
        <div class="col-md-6">
            <article class="blog-post">
                <header>
                    <div class="lead-image">
                        <a href="exam?id=2"><?php echo Asset::img('portfolio/mufee.png',array('class'=>'img-responsive'));?></a>
                        <div class="meta clearfix">
                            <div class="author">
                                <i class="icon-folder-open"></i> <span class="data">Mufee</span>
                            </div>
                            <div class="date">
                                <i class="icon-eye-open"></i> <span class="data">WEB</span>
                            </div>
                        </div>
                    </div>
                </header>
            </article>
        </div>
        <div class="col-md-6">
            <article class="blog-post">
                <header>
                    <div class="lead-image">
                        <a href="exam?id=3"><?php echo Asset::img('portfolio/eta.png',array('class'=>'img-responsive'));?></a>
                        <div class="meta clearfix">
                            <div class="author">
                                <i class="icon-folder-open"></i> <span class="data">eta</span>
                            </div>
                            <div class="date">
                                <i class="icon-eye-open"></i> <span class="data">WEB</span>
                            </div>
                        </div>
                    </div>
                </header>
            </article>
        </div>
        <div class="col-md-6">
            <article class="blog-post">
                <header>
                    <div class="lead-image">
                        <a href="exam?id=4"><?php echo Asset::img('portfolio/hitoridachi.gif',array('class'=>'img-responsive'));?></a>
                        <div class="meta clearfix">
                            <div class="author">
                                <i class="icon-folder-open"></i> <span class="data">eta</span>
                            </div>
                            <div class="date">
                                <i class="icon-eye-open"></i> <span class="data">Android</span>
                            </div>
                        </div>
                    </div>
                </header>
            </article>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <hr>
            <div class="col-md-8 col-md-offset-2 heyg-superblock">
                <h2>そーしゃる</h2>
                <div class="social-icons clearfix">
                    <a href="https://twitter.com/heyg0811" class="social-icon color-one">
                        <div class="inner-circle" ></div>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="https://www.facebook.com/wkm0811" class="social-icon color-three">
                        <div class="inner-circle" ></div>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="https://github.com/heyg0811" class="social-icon color-two">
                        <div class="inner-circle" ></div>
                        <i class="icon-github-alt"></i>
                    </a>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 heyg-superblock" id="contact">
                <h2>ご意見・感想</h2>
                <form action="/about/confirm" method="post" accept-charset="utf-8" class="contact-form">
                    <input type="text" name="name" id="contact-name" placeholder="なまえ" class="form-control input-lg validate[required]" value="">
                    <input type="email" name="email" id="contact-email" placeholder="めーる" class="form-control input-lg validate[custom[email]]" value="">
                    <textarea rows="10" name="body" id="contact-body" placeholder="なにか書いてね" class="form-control input-lg validate[required]"></textarea>
                    <div class="buttons clearfix">
                        <button type="submit" class="btn btn-xlarge btn-heyg-one">そうしん</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>