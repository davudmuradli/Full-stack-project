
function any() {
    const loginform = document.getElementById("login-form")
    const loginsubmit = document.getElementById('form-submit')
    const error = document.getElementById("errortxt")
    
    loginform.addEventListener("submit",(e) => {
        e.preventDefault();
        const username = loginform.username.value;
        const password = loginform.password.value;
    
        if(username === 'your_email' && password === "password123"){
            window.location.href = "http://127.0.0.1:5500/class%206/classwork6-login/welcome.html";
            error.style.opacity = 0;
        }
        else{
        
            error.style.opacity= 1;
        }
    })

}










