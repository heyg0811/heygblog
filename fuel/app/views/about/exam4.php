<div class="widewrapper main">
    <div class="container about heyg-superblock">
            <h2>ひトリだち</h2>
            <div class="col-md-6">
                <dl class="dl-horizontal">
                    <dt>作品名</dt>
                    <dd>ひトリだち</dd>
                    <dt>制作期間</dt>
                    <dd>H24-10 ~ H25-2(実働4ヶ月)</dd>
                    <dt>コンセプト</dt>
                    <dd>ひトリぐらしをより楽しく</dd>
                    <dt>サービス背景</dt>
                    <dd>一人暮らしを支援するアプリを作ろうと言う話になり、一番大事なお金の面を支援する家計簿を作る事になったが、同じ様な家計簿を作った所で他の二番煎じになってしまうので、家計簿・料理を更新するとトリが育つ育成機能を付与したら面白いのではないかと思ったので作るに至った。</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>制作人数</dt>
                    <dd>4人</dd>
                    <dt>職</dt>
                    <dd>プログラマ兼リーダー</dd>
                    <dt>言語</dt>
                    <dd>JAVA SQL(SQlite)</dd>
                    <dt>動作範囲</dt>
                    <dd>480*800の画面サイズでのみ動作を確認、他デバイスでも動作するものの、画面サイズによるずれには未対応</dd>
                    <dt>全体作業比率</dt>
                    <dd>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                <span >デザイン・UI(50)</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                <span>マネジメント(100)</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span>データベース(90)</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                <span>プログラム(50)</span>
                            </div>
                        </div>
                    </dd>
                    <dt>作業部分</dt>
                    <dd><ul>
                        <li>UI設計とデザイン(絵についてはデザイナーに依頼)</li>
                        <li>家計簿画面全般(グラフ一部とカレンダーを除く)</li>
                        <li>用語検索全般</li>
                        <li>ブックマーク機能の修正</li>
                    </ul></dd>
                    <dt>補足</dt>
                    <dd>メニュー画面の段階設定ボタンは発表用に付与してあるものです。実際にはありません。</dd>
            </div>
            <div class="col-md-6 portfolio">
                <?php $title = array(
                    0=>"スタート(外装)",1=>"画面説明ポップアップ",2=>"メニュー(内装)",3=>"外装(お城Ver)",4=>"内装(お城Ver)",
                    5=>"料理(cookpad)",6=>"ブックマーク登録",7=>"用語検索",8=>"切り方検索",9=>"下準備検索",
                    10=>"家計簿(支出)",11=>"家計簿(収入)",12=>"項目登録",13=>"カレンダー(日詳細)",14=>"月別グラフ(初期画面)",
                    15=>"ガチャガチャ",16=>"アイテムゲット",17=>"図鑑(トリ)",18=>"図鑑(家具)",19=>"図鑑(内外装)",
                )?>
                <?php for($i=0;$i<=19;$i++):?>
                    <div class="col-md-3 item-cover">
                        <a href=<?php echo Uri::base()."assets/img/portfolio/hitoridachi".$i.".png";?> data-lightbox="hitoridachi" data-title=<?php echo $title[$i];?>>
                            <?php echo Asset::img('portfolio/hitoridachi'.$i.'.png',array('class'=>'img-responsive item'));?>
                        </a>
                    </div>
                <?php endfor;?>
            </div>
    </div>
</div>