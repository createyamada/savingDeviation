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


        <div>
            <label for="age">年齢</label>
            <input id="age" name="age" ></input>
        <div>

        <div>
        <label for="sex">性別</label>
        <select id="sex" name="sex">
            <option value="00"></option>
            <option value="男性">男性</option>
            <option value="女性">女性</option>
            <option value="その他">その他</option>
        </select>
        <div>

        <div> 
        <label for="Resident">居住</label>
        <select id="Resident" name="Resident">
            <option value="00"></option>
        </select>
        <div>


        </div>
        <label for="maregge">結婚</label>
        <select id="maregge" name="maregge">
            <option value="00"></option>
            <option value="あり">あり</option>
            <option value="なし">なし</option>

        </select>
        </div>

        <div>
        <label for="nennsyuu">年収</label>
        <input id="nennsyuu" name="nennsyuu"></input>
        万円
        <div>

        </div>
        <label for="sisann">資産</label>
        <input id="sisann" name="sisann"></input>
        万円
        <div>

        </div>
        <label for="sonota">その他</label>
        <input id="sonota" name="sonota"></input>
        万円
        <div>

        <div>
        <label for="fusai">負債</label>
        <input id="fusai" name="fusai"></input>
        万円
        </div>

        <div>
            <button onclick="addOption()" >計算開始</button>
        </div>
</body>

</html>