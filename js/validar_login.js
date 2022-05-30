function validar(){
    var user = document.getElementById("inputEmail");
    var pass = document.getElementById("inputPassword");
    if ((user.value == 'admin') && (pass.value == 123)) {
        /* <meta http-equiv="refresh" content="1; URL=www.google.com" /> */
        window.location.href='display.php';

        return true;
    } else {
        alert('Credenciales incorrectas.....');
        return false;
    } 
} 