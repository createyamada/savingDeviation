<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="saveDev icon" href="{{ asset('/favicon.ico') }}">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/component/button.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6327142963568803"
        crossorigin="anonymous"></script>
    <title>貯金平均算出システム</title>

</head>

<body>

    <div id="titleImg">
        <img src="{{ asset('/image/title.png') }}" alt="貯金偏差値" title="貯金偏差値">
    </div>

    <div id="start-button">
        <a href="javascript:calc_start();" class="btn btn--yellow btn--cubic">入力画面へ</a>
    </div>

    <h5 id="estat-credit" class="text">このサービスは、政府統計総合窓口(e-Stat)のAPI機能を使用していますが、サービスの内容は国によって保証されたものではありません。</h5>


    <script src="js/top.js"></script>
</body>

</html>