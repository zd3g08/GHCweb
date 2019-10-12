<?php
// htmlentitiesのショートカット関数
function he($str){
    return htmlentities($str, ENT_QUOTES, "UTF-8");
}

$page_error = ""; // エラーメッセージ
// エラーチェック
if (isset($_POST["submit"])) {
    if ($email == "") {
        $page_error = "メールアドレスを入力してください\n";
    }
    if ($page_error == "") {
        if (!preg_match('/^([a-zA-Z0-9\.\_\-\+\?\#\&\%])*@([a-zA-Z0-9\_\-])+([a-zA-Z0-9\.\_\-]+)+$/', $email)) {
            $page_error = "メールアドレスを正しく入力してください\n";
        }
    }
}


    // フォームのボタンが押されたら
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // フォームから送信されたデータを各変数に格納
        $name = $_POST["name"];
        $email = $_POST["email"];
        $kenmei = $_POST["kenmei"];
        $message  = $_POST["message"];
    }

    // 送信ボタンが押されたら
    if (isset($_POST["submit"]) && $page_error == "") {
        // 送信ボタンが押された時に動作する処理をここに記述する

        // 日本語をメールで送る場合のおまじない
        mb_language("ja");
        mb_internal_encoding("UTF-8");
        // mb_send_mail("kikuchanwork@gmail.com", "メール送信テスト", "メール本文");

       // 件名を変数subjectに格納
        $subject = "［自動送信］お問い合わせ内容の確認";

        // メール本文を変数bodyに格納
        $body = <<< EOM
{$name}　様

お問い合わせありがとうございます。
以下の内容が送信されました。
=============================
■お名前：{$name}
■メールアドレス：{$email}
■件名：{$kenmei}
■お問い合わせ内容：
{$message}
==============================
内容を確認の上、担当者から折り返しご連絡いたします。
今しばらくお待ちください。
※なお、こちらのメールアドレスは送信専用となっております。
　ご返信いただきましてもご返答はできかねますので
　ご了承ください。

株式会社GHC
http://ghcjp.com/

EOM;

        // 送信元のメールアドレスを変数fromEmailに格納
        $fromEmail = "kikuchanwork@gmail.com";

        // 送信元の名前を変数fromNameに格納
        $fromName = "株式会社GHC";

        // ヘッダ情報を変数headerに格納する
        $header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

        // メール送信を行う
        mb_send_mail($email, $subject, $body, $header);

        // サンクスページに画面遷移させる
        header("Location: thanks.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>株式会社GHC | お問い合わせ内容の確認</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ress.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon-32x32.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
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
        </section>
    </header>
<main>
        <section class="confirm"  id="contact">
            <article class="confirm">
    <h3>お問い合わせ内容の確認</h3>
    <div>
        <form action="confirm.php" method="post">
                <input type="hidden" name="name" value="<?php echo he($name); ?>">
                <input type="hidden" name="email" value="<?php echo he($email); ?>">
                <input type="hidden" name="kenmei" value="<?php echo he($kenmei); ?>">
                <input type="hidden" name="message" value="<?php echo he($message); ?>">
                <p class="kakunin_title">お問い合わせ内容がよろしければ、「送信する」ボタンを押して下さい。</p>
                <div>
                    <div>
                        <label>お名前</label><!-- <span class="error_text"><?php echo he($page_error); ?></span> -->
                        <p><?php echo he($name); ?></p>
                    </div>
                    <div>
                        <label>メールアドレス</label><span class="error_text"><?php echo he($page_error); ?></span>
                        <p><?php echo he($email); ?></p>
                    </div>
                    <div>
                        <label>件名</label>
                        <p><?php echo he($kenmei); ?></p>
                    </div>
                    <div>
                        <label>お問い合わせ内容</label><!-- <span class="error_text"><?php echo he($page_error); ?></span> -->
                        <p><?php echo nl2br(he($message)); ?></p>
                    </div>
                </div>
            <input class="syusei" type="button" value="内容を修正する" onclick="history.back(-1)">
            <button class="sousin" type="submit" name="submit">送信する</button>
        </form>
    </div>
</article>
</section>
</main>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
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
</html>