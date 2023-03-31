<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/component/resultCard.css">
    <link rel="stylesheet" href="css/component/devCard.css">
    <link rel="stylesheet" href="css/component/button.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <title>貯金平均算出システム</title> 

</head>

<body>
    <div>
        <!-- モーダルバックグラウンド -->
        <div id="modal-bg"class="active"></div>
        <!-- モーダル表示内容 -->
        <div id="modal-container"class="active">
            <span class="circle"></span>
            <!-- <div id="modal-close" >閉じる</div> -->
        </div>

        <h1 class="text">結果画面</h1>

        <div class="dev-div">
            <h2 class="dev-title"><span class="dev-title-span">あなたの貯金偏差値</span></h2>
            <h1 id="dev-result"></h1>
            <h3>※偏差値は入力頂いた資産を元に計算しています。</h3>
            <h3>※標準偏差は下記データを元に計算しています。</h3>
            <h3>※正確な数値ではないのであくまでも参考程度にご利用ください。</h3>
        </div>

        <p id="result-start"></p>
        <a id="btn" href="javascript:back();" class="btn btn--yellow btn--cubic">戻る</a>

    </div>

    <script src="js/result.js"></script>
</body>

</html>