

const residents = [
    "北海道",
    "青森県",
    "岩手県",
    "宮城県",
    "秋田県",
    "山形県",
    "福島県",
    "茨城県",
    "栃木県",
    "群馬県",
    "埼玉県",
    "千葉県",
    "東京都",
    "神奈川県",
    "新潟県",
    "富山県",
    "石川県",
    "福井県",
    "山梨県",
    "長野県",
    "岐阜県",
    "静岡県",
    "愛知県",
    "三重県",
    "滋賀県",
    "京都府",
    "大阪府",
    "兵庫県",
    "奈良県",
    "和歌山県",
    "鳥取県",
    "島根県",
    "岡山県",
    "広島県",
    "山口県",
    "徳島県",
    "香川県",
    "愛媛県",
    "高知県",
    "福岡県",
    "佐賀県",
    "長崎県",
    "熊本県",
    "大分県",
    "宮崎県",
    "鹿児島県",
    "沖縄県"
]

// 画面読み込み時に
window.onload = function () {
    // selectタグを取得する
    var select = document.getElementById("resident");
    console.log(select)
    for (let i = 0; i < residents.length; i++) {
        console.log("i = " + residents[i]);
        // optionタグを作成する
        let option = document.createElement("option");
        // optionタグのテキストを4に設定する
        option.text = residents[i];
        // optionタグのvalueを4に設定する
        option.value = residents[i];
        // selectタグの子要素にoptionタグを追加する
        select.appendChild(option);
    }
}

/**
* 結果画面に遷移、値渡す
* @param  null
*/
function addOption() {

    // 値を取得する

    var age = document.getElementById("age");
    age = age.value

    var assets = document.getElementById("assets");
    assets = assets.value

    var sex = document.getElementById("sex");
    sex = sex.value

    var select = document.getElementById("resident");
    // 値(数値)から値(value値)を取得
    const resident = select.options[select.selectedIndex].value;


    var is_marriage = document.getElementById("is_marriage");
    is_marriage = is_marriage.value



    var annual_income = document.getElementById("annual_income");
    annual_income = annual_income.value

    // var select = document.getElementById("etc_income");
    // etc_income = select.value

    var debt = document.getElementById("debt");
    debt = debt.value

    // 値のヴァリデーション
    if (age === "" && assets === "") {
        alert("年齢は必ず入力してください\n資産は必ず入力してください");
        return null;
    }

    if (age === "") {
        alert("年齢は必ず入力してください");
        return null;
    }

    if (assets === "") {
        alert("資産は必ず入力してください");
        return null;
    }


    // 未選択時の初期値入力

    if (sex === "") {
        sex = "0"
    }

    if (is_marriage === "") {
        is_marriage = "0"
    }

    if (annual_income === "") {
        annual_income = "0"
    }

    if (debt === "") {
        debt = "0"
    }


    location.href = 'https://saving-deviation-com.onrender.com/result?age=' + encodeURIComponent(age)
        + "&sex=" + encodeURIComponent(sex)
        + "&resident=" + encodeURIComponent(resident)
        + "&is_marriage=" + encodeURIComponent(is_marriage)
        + "&annual_income=" + encodeURIComponent(annual_income)
        + "&assets=" + encodeURIComponent(assets)
        // + "&etc_income=" + encodeURIComponent(etc_income)
        + "&debt=" + encodeURIComponent(debt);

}

