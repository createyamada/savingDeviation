
// ページ読み込み時に実行
window.onload = function() {


    const modalBg = document.getElementById('modal-bg');
    const container = document.getElementById('modal-container');
    const close = document.getElementById('modal-close');
    const button = document.getElementById('btn');

    modalChange(true);


    let query = location.search;
    // 先頭から2文字を削除
    const param = query.slice( 1 ) ;
    console.log(param);

    const xhr = new XMLHttpRequest();

    xhr.open('post','http://127.0.0.1:8000/api/calc');
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded;charset=UTF-8');
    xhr.send(param);


    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            modalChange(false);
            console.log(JSON.parse(xhr.responseText));
            resSet(JSON.parse(xhr.responseText) , param);

        }
    }

    /**
    * モーダル表示、非表示切り替え
    * @param  boolean mode
    */
    function modalChange(mode) {
        if(mode) {
            // 表示処理
            $("#btn").css({ 'pointer-events': 'none' , 'opacity' : 0});
            container.classList.add('active');
            modalBg.classList.add('active');
        } else {
            // 非表示処理
            $("#btn").css({ 'pointer-events': 'auto' , 'opacity' : 1});
            container.classList.remove('active');
            modalBg.classList.remove('active'); 
        }
    }

    // 閉じるボタン押下イベント
    // close.addEventListener('click', () => {
    //     modalChange(false);
    // })

    /**
    * APIレスポンスをデータに格納
    * @param  Object res
    * @param  Object param
    */
    function resSet(res , param) {

        // paramを整形
        let data = param.split('&');
        console.log(data);

        // 挿入する目印の要素を取得
        let resultStart = document.getElementById('result-start');

        // 新しいHTML要素を作成
        for (let i=0;i<res.length;i++) {
            if(res[i].name === "偏差値") { 
                let devResult = document.getElementById('dev-result');
                devResult.textContent = res[i].value;
                continue;
            }

            console.log('ここまで来てる？')
            // 挿入する要素を作成
            let card = document.createElement('div');
            let titleDiv = document.createElement('div');
            let title = document.createElement('h2');
            let resultDiv = document.createElement('div');
            let resultText = document.createElement('h2');

            // 要素に属性を設定
            card.setAttribute("id", i); 
            card.setAttribute("class" ,"card");
            title.setAttribute("class" , "title");
            resultDiv.setAttribute("class" , "result-div");
            resultText.setAttribute("class" , "result-text");

            // レスポンスの結果をセット
            title.textContent = res[i].name;
            resultText.textContent = "平均は：" + res[i].value + "万円";
            

            // 作成したdivに要素を追加
            titleDiv.appendChild(title);
            resultDiv.appendChild(resultText);
            // 自身で入力したものを出力
            let youData = document.createElement('h2');
            let diff = document.createElement('h2');
            result = dataGet(i , data);
            switch(i) {
                case 0:
                    //　金融純資産残高
                    youData.textContent = 'あなたの純資産は、' + result　+ "万円";
                    resultDiv.appendChild(youData);
                    break;

                case 1:
                    //　金融資産残高
                    youData.textContent = 'あなたの資産は、' + result　+ "万円";
                    resultDiv.appendChild(youData);
                    break;
                case 4:
                    //　金融負債残高
                    youData.textContent = 'あなたの負債は、' + result　+ "万円";
                    resultDiv.appendChild(youData);
                    break;
                default:
                    break;
            }

            // card内に表示要素を追加
            card.appendChild(titleDiv)
            card.appendChild(resultDiv)

            console.log(card)
            // 作成した要素を追加
            resultStart.appendChild(card);
        }
    }


    /**
    * 必要なデータを返す
    * @param  int mode
    * @return String result
    */
    function dataGet(mode, data) {
        let assets = [];
        let debt = [];
        let result = '';
        switch(mode) {
            case 0: 
                assets = data[5].split('=');
                debt = data[6].split('=');
                result = Number(assets[1]) - Number(debt[1]);
                break;
            case 1: 
                assets = data[5].split('=');
                result = assets[1];
                break;
            case 4:
                debt = data[6].split('=');
                result = debt[1];
                break;
            default:
                break;
        }
        return result;
    }
}


    /**
    * 入力値との差分を返す空なら空を返す
    * @param  boolean mode
    * @param  boolean mode
    * @return String result
    */
    function dataDiff(mode, data) {
        let assets = [];
        let debt = [];
        let result = '';
        switch(mode) {
            case 0: 
                assets = data[5].split('=');
                debt = data[6].split('=');
                result = Number(assets[1]) - Number(debt[1]);

                break;
            case 1: 
                assets = data[5].split('=');
                result = assets[1];
                break;
            case 4:
                debt = data[6].split('=');
                result = debt[1];
                break;
            default:
                break;
        }
        return result;
    }


/**
* 戻るボタン押下イベント
* @param  null
*/
function back() {
    console.log("戻るボタン押下")
    history.back();
}


