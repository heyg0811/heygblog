<div class="widewrapper main">
    <div class="container about">
        <h1>
            現在<span class="about-bold">ＴＳ３</span>は
            [<span style="text-decoration:underline; color:#69bc87;">稼働中</span>]です
        </h1>
        <span class="about-medium">
            <p>チャンネル作成依頼は下記のより</p>
        </span>
        <hr>
        <span class="about-small">
            <h2> - ご利用ユーザーの皆様へ<span style="font-size:0.5em">　使用上の注意をよく読み用法・要領を守って正しくご使用ください。</span></h2>
            <p>　サーバーの状態は[<span style="color:#69bc87;">稼働中</span>] [<span style="color:#428bca;">メンテナンス中</span>] [<span style="color:#74549f;">休止中</span>]があります。稼働中に停止している場合は下記より連絡して頂けると管理者は大喜びします。連絡してあげてください。</p>
            <?php echo Asset::img("ts3.png",array("class"=>"about-portrait img-responsive"));?>
            <p>　鯖管に関しては此方が信用出来ると思った方だけに権限を付与しますので、鯖管の申請は全て却下いたします。悪しからず。</p>
            <p>　このサーバーは管理人の自己満足で動いているので、突然休止する事になっても怒らないでくださいね...下記のフォームからメッセージ飛ばしまくるとかしないで下さいね。ふりじゃないですよ。</p>
            <p>　目に余るユーザーは管理人の独断と偏見で処置しますので、文句がある場合も下記のフォームから連絡お願いします。</p>
        </span>

        <div class="about-button">
            <a class="btn btn-xlarge btn-heyg-one" href="#contact">TSに関する申請・連絡</a>
        </div>
        <hr>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 heyg-superblock" id="contact">
                <h2>申請・連絡</h2>

                <form action="/about/confirm" method="post" accept-charset="utf-8" class="contact-form">
                    <input type="text" name="name" id="contact-name" placeholder="なまえ" class="form-control input-lg">
                    <input type="email" name="email" id="contact-email" placeholder="めーる" class="form-control input-lg">
                    <textarea rows="10" name="body" id="contact-body" placeholder="申請の場合はチャンネル名・パスワード・ユーザー名・使用目的を御記入ください。" class="form-control input-lg"></textarea>
                    <div class="buttons clearfix">
                        <button type="submit" class="btn btn-xlarge btn-heyg-one">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>