document.querySelector("#pass-toggle").addEventListener('click', function (e) {
    const hidden = document.getElementById("password");

    if (hidden.type === 'password') {
        document.getElementById("password").type = "text";
        e.target.classList.remove("fa-eye");
        e.target.classList.add("fa-eye-slash");
    } else {
        document.getElementById("password").type = "password";
        e.target.classList.remove("fa-eye-slash");
        e.target.classList.add("fa-eye");
    }

});
function showToast(message){
    const toast= document.getElementById("toast-container");
    toast.querySelector("p").innerText=message;
    toast.style.right='0';
    
}
function hideToast(){
const toast= document.getElementById("toast-container");
    toast.style.right='-100%';
}