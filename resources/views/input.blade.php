<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/component/textBox.css">
    <link rel="stylesheet" href="css/component/selectBox.css">
    <link rel="stylesheet" href="css/component/button.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <title>貯金平均算出システム</title>
</head>

<body>

<h1 class="text">貯金平均算出システム</h1>

    <div class="wrap">
        <div class="text-div">
            <label for="age">年齢※</label>
            <input id="age" name="age" type="text" class="cool"/>
        </div>

        <div class="cp_ipselect">
            <select id= "sex" name="sex" class="cp_sl06" required>
                <option value="" hidden disabled selected></option>
                <option value="1">男性</option>
                <option value="2">女性</option>
                <option value="3">その他</option>
            </select>
            <span class="cp_sl06_highlight"></span>
            <span class="cp_sl06_selectbar"></span>
            <label class="cp_sl06_selectlabel">性別</label>
        </div>

        <div class="cp_ipselect">
        <select id="resident" name="resident" class="cp_sl06" required>
            <option value="" hidden disabled selected></option>
        </select>
        <span class="cp_sl06_highlight"></span>
        <span class="cp_sl06_selectbar"></span>
        <label class="cp_sl06_selectlabel">住居</label>
        </div>

        <div class="cp_ipselect">
        <select id="is_marriage" name="is_marriage" class="cp_sl06" required>
            <option value="" hidden disabled selected></option>
            <option value="0">非回答</option>
            <option value="1">なし</option>
            <option value="2">あり</option>
        </select>
        <span class="cp_sl06_highlight"></span>
        <span class="cp_sl06_selectbar"></span>
        <label class="cp_sl06_selectlabel">結婚</label>
        </div>

        <div class="text-div">
            <label for="annual_income">年収</label>
            <input id="annual_income" name="annual_income" type="text" class="cool"/>
            万円
        </div>

        <div class="text-div">
            <label for="assets">資産※</label>
            <input id="assets" name="assets" type="text" class="cool"/>
            万円
        </div>

        <!-- </div>
        <label for="etc_income">その他</label>
        <input id="etc_income" name="etc_income"></input>
        万円
        <div> -->
        <div class="text-div">
            <label for="debt">負債</label>
            <input id="debt" name="debt" type="text" class="cool"/>
            万円
        </div>

        <div>
            <a href="javascript:addOption();" onclick="addOption();" class="btn btn--yellow btn--cubic">計算開始</a>
        </div>

    </div>

        <script src="js/input.js"></script>
        <script src="js/component/textBox.js"></script>
        <script src="js/component/selectBox.js"></script>
</div>
</body>

</html>