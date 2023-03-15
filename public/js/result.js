window.onload = function() {
    // ページ読み込み時に実行

    var query = location.search;
    // 先頭から2文字を削除
    var param = query.slice( 1 ) ;
    console.log(param);

    var xhr = new XMLHttpRequest();

    xhr.open('post','http://127.0.0.1:8000/api/test');
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded;charset=UTF-8');
    xhr.send( 'age=' + age + '&' + 'sex=' + sex + '&' + 'residence=' + residence + '&' + 'is_marrige=' + is_marrige + '&' + 'annual_income=' + annual_income + '&' + 'assets=' + assets + '&' + 'etc_income=' + etc_income +'&' +'debt=' + debt);


    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            console.log(JSON.parse(xhr.responseText))
        }
    }
}