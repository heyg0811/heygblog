<div class="widewrapper main">
    <div class="container about">
        <h1>
            現在サーバーは[<span style="text-decoration:underline; color:#69bc87;">稼働中</span>]<br><br>
            <span style="font-size:0.7em">接続情報は<span style="text-decoration:underline;">申請後に案内</span>します。</span><br>
            <span style="font-size:0.7em">申請は<a href="#contact" class="text-success">下記フォーム</a>より</span>
        </h1>
        <hr>
        <span class="about-small">
            <h2> - ご利用ユーザーの皆様へ<span style="font-size:0.5em">　使用上の注意をよく読み用法・要領を守って正しくご使用ください。</span></h2>
            <p>　サーバーの状態は[<span style="color:#69bc87;">稼働中</span>] [<span style="color:#428bca;">メンテナンス中</span>] [<span style="color:#74549f;">休止中</span>]があります。稼働中に停止している場合は下記より連絡して頂けると管理者は大喜びします。連絡してあげてください。</p>
            <?php echo Asset::img("ts3.png",array("class"=>"about-portrait img-responsive"));?>
            <p>　鯖管に関しては此方が信用出来ると思った方だけに権限を付与しますので、鯖管の申請は全て却下いたします。悪しからず。</p>
            <p>　このサーバーは管理人の自己満足で動いているので、突然休止する事になっても怒らないでくださいね...下記のフォームからメッセージ飛ばしまくるとかしないで下さいね。ふりじゃないですよ。</p>
            <p>　目に余るユーザーは管理人の独断と偏見で処置しますので、文句がある場合も下記のフォームから連絡お願いします。</p>
            <p class="text-warning" style="font-size:0.9em">※当サーバをご利用されたことで生じたユーザー間トラブルや、その他の不利益に関しまして管理者は一切責任を負わないものとしますので、ご了承の上ご利用下さい。</p>
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

                <form action="/ts/confirm" method="post" accept-charset="utf-8" class="contact-form">
                    <input type="text" name="name" id="contact-name" placeholder="なまえ" class="form-control input-lg validate[required]">
                    <input type="email" name="email" id="contact-email" placeholder="めーる" class="form-control input-lg validate[required,custom[email]">
                    <textarea rows="10" name="body" id="contact-body" placeholder="申請の場合はチャンネル名・パスワード・ユーザー名・使用人数・使用目的(ゲーム名等)を御記入ください。" class="form-control input-lg validate[required]"></textarea>
                    <div class="buttons clearfix">
                        <button type="submit" class="btn btn-xlarge btn-heyg-one">そうしん</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>