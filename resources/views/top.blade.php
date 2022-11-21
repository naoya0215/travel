<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>新しい旅へ</title>
</head>
<body>
    <h1 class="top_text">ようこそ美しいリゾートへ<br><span>Thank you for viewing</span></h1>
    <header>
        <div class="header_side">
            <ul>
                <li>私たちについて</li>
                <li>美しい景観</li>
                <li>サイトの楽しみ方</li>
                <li>お問い合わせ</li>
                <li>交通案内</li>
                <li><a href="{{ route('auth.login') }}">ログイン</a></li>
            </ul>
        </div>
        <div class="header_top">
            <img src="image/nature007.jpg" alt="風景">
        </div>
    </header>
    <main>
        <div class="bg">
          <div id="particles-js"></div>
        </div>
        <div class="top_image">
            <img class="img" src="image/slide001.jpg" alt="スライド風景画像">
            <img class="img" src="image/slide002.jpg" alt="スライド風景画像">
            <img class="img" src="image/slide003.jpg" alt="スライド風景画像">
            <img class="img" src="image/slide004.jpg" alt="スライド風景画像">
            <img class="img" src="image/slide006.jpg" alt="スライド風景画像">
        </div>
    </main>
    <footer>
        
    </footet>
    <script src="/js/index.js"></script>
    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>