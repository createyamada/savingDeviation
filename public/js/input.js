

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

window.onload = function(){
    // selectタグを取得する
    var select = document.getElementById("resident");
    console.log(select)
    for (let i = 0; i < residents.length; i++) {
        console.log("i = " + residents[i]);
        // optionタグを作成する
        var option = document.createElement("option");
        // optionタグのテキストを4に設定する
        option.text = residents[i];
        // optionタグのvalueを4に設定する
        option.value = residents[i];
        // selectタグの子要素にoptionタグを追加する
        select.appendChild(option);
    }
}


function addOption() {
    // 年齢を取得する
    var select = document.getElementById("age");
    age = select.value

    var select = document.getElementById("sex");
    sex =select.value

    var select = document.getElementById("resident");
    residence = select.value

    var select = document.getElementById("marriage");
    is_marriage = select.value

    var select = document.getElementById("annual_income");
    annual_income = select.value

    var select = document.getElementById("assets");
    assets = select.value

    // var select = document.getElementById("etc_income");
    // etc_income = select.value

    var select = document.getElementById("debt");
    debt = select.value

    var xhr = new XMLHttpRequest();

    xhr.open('post','http://127.0.0.1:8000/api/test');
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded;charset=UTF-8');
    xhr.send( 
              'age=' + age + 
              '&' + 'sex=' + sex + 
              '&' + 'residence=' + residence + 
              '&' + 'is_marriage=' + is_marriage + 
              '&' + 'annual_income=' + annual_income + 
              '&' + 'assets=' + assets + 
            //   '&' + 'etc_income=' + etc_income + 
              '&' +'debt=' + debt
    );

    xhr.onreadystatechange = function(){
        if (xhr.readyState == 4){
          if (xhr.status == 200){
            let data = xhr.responseText;
            console.log(JSON.parse(data));
          }
        }
    }

    // location.href = 'http://127.0.0.1:8000/result?age=' + encodeURIComponent(age)
    //                 + "&annual_income=" + encodeURIComponent(annual_income)
    //                 + "&assets=" + encodeURIComponent(assets)
    //                 + "&etc_income=" + encodeURIComponent(etc_income)
    //                 + "&debt=" + encodeURIComponent(debt);




}






function calc_start() {
    alert("計算開始ボタンがクリックされたよ");
}

