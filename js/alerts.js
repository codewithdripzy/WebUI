window.onload = function(){
    let link = document.createElement('link');
    link.href = 'http://localhost/WebUI/css/alerts.css';
    document.body.append(link);
}

function showAlert(type, message){
    let alert = document.createElement('div');

    alert.classList.add(type);
    alert.innerText = message;

    setTimeout(()=>{
        alert.classList.add('hide-alert');
    }, 3000)
}
