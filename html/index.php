<?php
// htmlentitiesのショートカット関数
function he($str){
    return htmlentities($str, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>株式会社GHC | Executive Search Firm </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ress.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon-32x32.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body id="top">
    <p id="page-top"><a href="#wrap"><i class="fa fa-caret-up fa-2x" aria-hidden="true"></i><br>TOP</a></p>

    <header>
        <section class="triangle">
            <div class="triangle_right"></div>
            <div class="triangle_left"></div>
        </section>
        <section class="title">
            <div class="title_logo"></div>
            <div class="title_text">
                <h1>Executive&nbsp;Search&nbsp;Firm</h1>
                <!-- <h5>Good&nbsp;Hospitality&nbsp;Consulting</h5> -->
            </div>
<!--             <div class="grade">
            <i class="fa fa-comments-o fa-2x" aria-hidden="true"><br><span>About</span></i>
            <i class="fa fa-handshake-o fa-2x" aria-hidden="true"><br><span>Service</span></i>
            <i class="fa fa-user-circle fa-2x" aria-hidden="true"><br><span>Ceo</span></i>
            <i class="fa fa-building fa-2x" aria-hidden="true"><br><span>Campany</span></i>
            <i class="fa fa-map-marker fa-2x" aria-hidden="true"><br><span>Access</span></i>
            <i class="fa fa-envelope fa-2x" aria-hidden="true"><br><span>Contact</span></i>
            </div> -->
        </section>
    </header>
    <div class="box">
        <div class="arrowWrap">
            <div class="arrow"><span></span></div>
        </div>
    </div>
    <div class="box2">
        <div class="arrowWrap">
            <div class="arrow"><span></span></div>
        </div>
    </div>
    <div class="box3">
        <div class="arrowWrap">
            <div class="arrow"><span></span></div>
        </div>
    </div>
    <main>
        <section class="triangle_main">
            <div class="triangle_main_right"></div>
            <div class="triangle_main_left"></div>
        </section>
        <section class="news">
            <h3>NEWS</h3>
            <article>
                    <time datetime="2019-10-13">2019年10月13日</time>&nbsp;&nbsp;Webサイトをリニューアル
            </article>
        </section><!-- newsここまで -->
        <section class="about" id="about">
            <article data-aos="fade-up">
                <h3>About Us</h3>
                <p>株式会社GHCは、エグゼクティブクラスのヘッドハンティングを中心とした人財紹介会社として、2014年に設立されました。</p>
                <p>社長・役員・経営幹部・士業など、ハイキャリアな方々のキャリアコンサルティングを専門としております。</p>
                <p>また、人財のご紹介にとどまらず、企業分析、事業戦略立案、アセスメント等のコンサルティングサービスもご提供しております。</p>
            </article>
        </section><!-- aboutここまで -->
        <section class="service" id="service">
            <article data-aos="fade-up">
                <h3>Service</h3>
                <p>株式会社GHCのミッションは、<br><span>人と人とのご縁を作ることで社会の発展に貢献すること</span></p>
                <p><i class="fa fa-handshake-o fa-2x" aria-hidden="true"></i></p>
                <p class="honne">ご相談者と長期的な関係構築を目指し、本音トークで納得のいくキャリア設計を、興味・能力・価値観・その他特性をもとに、ご支援いたします。</p>
            </article>
            <figure>
                <img src="images/service.jpg" alt="サービス内容の画像">
            </figure>
        </section><!-- serviceここまで -->
        <section class="ceo" id="ceo">
            <article data-aos="fade-left">
                <h3>CEO&nbsp;Profile</h3>
                <h4>代表取締役&nbsp;&nbsp;川上光彦のご紹介</h4>
                <p>六甲学院中学校・高等学校卒業。
                    一橋大学法学部卒業。三菱商事株式会社入社。金属グループ貴金属部に配属され、貴金属ディーリング、実需取引、宝飾品事業に従事。１０年間勤務後に起業独立。日印貿易、日中貿易、経営コンサル、M&Aコンサルを行う。2012年よりエグゼクティブサーチのコンサルタントに従事。2014年株式会社GHCを設立。
                </p>
            </article>
        </section><!-- ceoここまで -->
        <section class="triangle_2">
            <div class="triangle_right2"></div>
            <div class="triangle_left2"></div>
        </section>
        <section class="company" id="company">
            <h3>COMPANY</h3>
            <article data-aos="fade-up">
                <table>
                    <tr>
                        <th>会社名</th>
                        <td>株式会社ＧＨＣ</td>
                    </tr>
                    <tr>
                        <th>本社</th>
                        <td>東京都千代田区丸の内２丁目３番２号&nbsp;&nbsp;郵船ビルディング１階</td>
                    </tr>
                    <tr>
                        <th>事業内容</th>
                        <td>・エグゼクティブ・サーチ<br><small>（厚生労働大臣許可番号：13-ユ-306730）</small><br>・医療機関の経営コンサル、業務請負</td>
                    </tr>
                    <tr>
                        <th>代表</th>
                        <td>代表取締役社長&nbsp;&nbsp;川上光彦</td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td>2014年6月30日</td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td>１１００万円</td>
                    </tr>
                </table>
            </article>
        </section><!-- companyここまで -->

        <section class="access" id="access">
            <h3>Access</h3>
            <figure>
                <img class="yus" src="images/yus.jpg" alt="優先ビルディングの外観">
                <figcaption class="yus">
                </figcaption>
            </figure>
            <article>
                <p><i class="fa fa-subway jr_color" aria-hidden="true"></i>JR各線「東京駅」丸の内南口より徒歩3分</p>
                <p><i class="fa fa-subway maru_color" aria-hidden="true"></i>丸ノ内線「東京駅」4b出口より徒歩2分</p>
                <p><i class="fa fa-subway chi_color" aria-hidden="true"></i>千代田線「二重橋前(丸の内)駅」7番出口正面</p>
                <p><i class="fa fa-subway mita_color" aria-hidden="true"></i>三田線「大手町駅」7番出口正面</p>
            </article>
            <figure>
                <a href="images/map3.png" data-lightbox="group"><img src="images/map.png" alt="地図の画像"></a>
                <figcaption><a href="https://goo.gl/maps/yXws2pzdo73JLPH56" target="_blank">GoogleMapで開く&nbsp;&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i></a></figcaption>
            </figure>
        </section><!-- accessここまで -->

        <section class="contact"  id="contact">
            <article id="googleform">
            <h3>CONTACT</h3>
         <p class="contact_title">GHCへのお問合せは、以下のフォームからお願いいたします。</p>
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeM6_JBsLs-8CDI0O4Q9L_C1b4aL8vu1lLfvxpFWOHV4rTrwg/viewform?embedded=true" width="100%" height="800" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>

<!--                 <div id="form-main">
                    <div id="form-div"> -->
<!--                         <form class="form" id="form1" action="confirm.php" method="post" name="form" onsubmit="return validate()">
                            <p class="name">
                                <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input"  placeholder="お名前" value="<?php echo he($name); ?>" id="name" />
                            </p>
                            <p class="email">
<?php echo he($page_error); ?>
                                <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="メールアドレス" value="<?php echo he($email); ?>" />
                            </p>
                            <p class="kenmei">
                                <input name="kenmei" type="text" class="validate[required,custom[onlyLetter]] feedback-input" id="kenmei"  name="kenmei" placeholder="件名" value="<?php echo he($kenmei); ?>" />
                            </p>
                            <p class="message">
                                <textarea name="message" class="validate[required,length[6,300]] feedback-input" id="message" placeholder="本文"><?php echo he($message); ?></textarea>
                            </p>
                            <div class="submit">
                                        <button type="submit" name="confirm" id="button-blue">確認画面へ</button>
                            </div>
                        </form>
                    </div>
                </div> -->
            </article>
        </section><!-- contactここまで -->
    </main>
            <section class="triangle_footer">
            <div class="triangle_footer_right"></div>
            <div class="triangle_footer_left"></div>
            </section>
    <footer>
        <div class="copy">©&nbsp;2014&nbsp;GHC&nbsp;Co.,Ltd.</div>
            <h3>RECOMMENDED&nbsp;&nbsp;SONG</h3>
                    <iframe class="movie" width="100%" max-width="600px" height="350px" src="https://www.youtube-nocookie.com/embed/BUvW1R8seOI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </footer>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- <script type="text/javascript" src="sample.js"></script> -->
<script>
/*topへ戻るボタン*/
$(function() {
    var showFlag = false;
    var topBtn = $('#page-top');
    topBtn.css('bottom', '-100px');
    var showFlag = false;
    //スクロールが100に達したらボタン表示
    $(window).scroll(function() {
        if ($(this).scrollTop() > 5) {
            if (showFlag == false) {
                showFlag = true;
                topBtn.stop().animate({ 'bottom': '20px' }, 100);
            }
        } else {
            if (showFlag) {
                showFlag = false;
                topBtn.stop().animate({ 'bottom': '-50px' }, 100);
            }
        }
    });
    //スクロールしてトップ
    topBtn.click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
</script>
<script>
  AOS.init();
</script>
<!-- <script>
    $(document).ready(function () {
    $("#googleform").submit(function (event) {
        var name = $("#googleform input[name=name]").val();
        var email = $("#googleform input[name=email]").val();
        var message = $("#googleform textarea[name=message]").val();

        $.ajax({
            url: "https://docs.google.com/forms/d/e/1FAIpQLSeM6_JBsLs-8CDI0O4Q9L_C1b4aL8vu1lLfvxpFWOHV4rTrwg/formResponse?embedded=true",
            data: {
                "entry.932565245": name,
                "entry.1847117979": email,
                "entry.654007863": message
            },
            type: "POST",
            dataType: "xml",
            statusCode: {
                0: function () {
                    //送信に成功したときの処理
                    $("form").slideUp();
                    $('#success').slideDown();
                },
                200: function () {
                    //送信に失敗したときの処理
                    $("form").slideUp();
                    $('#error').slideDown();
                }
            }
        });
        event.preventDefault();
    });
});
</script> -->
</html>