window.onload = start;
function start() {
    const psw = document.querySelector("#psw");
    const pserepeat = document.querySelector("#pswrepeat");

    // Så fort när användaren skriver i något i rutorna så..
    psw.addEventListener("change", valideraPsw);
    pswrepeat.addEventListener("keyup", valideraPsw);

    //Om rutornas innehåll inte är lika, visa en varning

    function valideraPsw() {
        if (psw.value != pswrepeat.value) {
            pswrepeat.setCustomValidity("Password doesnt match");
        } else {
            pswrepeat.setCustomValidity('');
        }
    }
}
