function func(){
    console.log("hello world")
    const name = document.getElementById("firstname");
    const surname = document.getElementById("surname");
    const email = document.getElementById("email");
    const password = document.getElementById("password");

    if(name.value == "" || name.value == undefined || name.value == null){
        name.classList.add("error");
    }
    if(surname.value === "" || surname.value === undefined || surname.value === null){
        surname.classList.add("error");
    }
    if(email.value === "" || email.value === undefined || email.value === null){
       email.classList.add("error");
    }
    if(password.value === "" || password.value === undefined || password.value === null){
        password.classList.add("error");
    }
}

function init(){
    const sign = document.getElementById('sign');
    sign.addEventListener('click', func)
}