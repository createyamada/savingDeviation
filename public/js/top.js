

function calc_start () {
    var xhr = new XMLHttpRequest();

    xhr.open('post','http://127.0.0.1:8000/api/input');
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded;charset=UTF-8');
    xhr.send();
    
}
