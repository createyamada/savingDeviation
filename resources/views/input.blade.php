<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>偏差値計算システム</title>
    <script src="js/input.js"></script>
</head>

<body>
    <div class="wrap">
        <h1 class="text">貯金偏差値計算システム</h1>

        <form method="post" action="http://127.0.0.1:8000/api/test">
        <div>
            <label for="age">年齢</label>
            <input id="age" name="age" ></input>
        <div>

        <div>
        <label for="sex">性別</label>
        <select id="sex" name="sex">
            <option value="0"></option>
            <option value="1">男性</option>
            <option value="2">女性</option>
            <option value="0">その他</option>
        </select>
        <div>

        <div> 
        <label for="resident">居住</label>
        <select id="resident" name="resident">
            <option value="00"></option>
        </select>
        <div>


        </div>
        <label for="marriage">結婚</label>
        <select id="marriage" name="marriage">
            <option value="0"></option>
            <option value="0">非回答</option>
            <option value="1">なし</option>
            <option value="2">あり</option>
        </select>
        </div>

        <div>
        <label for="annual_income">年収</label>
        <input id="annual_income" name="annual_income"></input>
        万円
        <div>

        </div>
        <label for="assets">資産</label>
        <input id="assets" name="assets"></input>
        万円
        <div>

        <!-- </div>
        <label for="etc_income">その他</label>
        <input id="etc_income" name="etc_income"></input>
        万円
        <div> -->

        <div>
        <label for="debt">負債</label>
        <input id="debt" name="debt"></input>
        万円
        </div>

        <div>
            <input type="submit" value="計算開始" />
        </div>
        </form>
</body>

</html>