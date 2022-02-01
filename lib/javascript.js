function debounce(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this, args = arguments;
        var later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    }
}

$('#senha').on('keyup',debounce(function(){
    var senha = $('#senha').val();
    var regex = /^(?=(?:.*?[A-Z]){1})(?=(?:.*?[0-9]){2})(?=(?:.*?[!@#$%*()_+^&}{:;?.]){1})(?!.*\s)[0-9a-zA-Z!@#$%;*(){}_+^&]*$/;

    if(senha.length < 8)
    {
        alert("A senha deve conter no minímo 8 digitos!");
        senha.focus();
        return false;
    }
    else if(!regex.exec(senha))
    {
        alert("A senha deve conter no mínimo 1 caracteres em maiúsculo, 2 números e 1 caractere especial!");
        senha.focus();
        return false;
    }
    else{
        alert('A senha está certa');
    }
    return true;
},1000));