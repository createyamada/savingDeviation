<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
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

        <p id="result-start">
            結果はこちら
        </p>
        <a id="btn" href="javascript:back();" class="btn btn--yellow btn--cubic">戻る</a>

    </div>

    <script src="js/result.js"></script>
</body>

</html>