<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/component/button.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <title>貯金平均算出システム</title> 

</head>

<body>
    <div>
        <h1 class="text">貯金平均算出システム</h1>
        <h4 class="text">あなたの入力した情報から平均値を算出するシステムです。</h4>
    </div>

    <div id="start-button">
        <a href="javascript:calc_start();" class="btn btn--yellow btn--cubic">入力画面へ</a>
    </div>

    <h5 id="estat-credit" class="text">このサービスは、政府統計総合窓口(e-Stat)のAPI機能を使用していますが、サービスの内容は国によって保証されたものではありません。</h5> 

    <script src="js/top.js"></script>
</body>
</html>