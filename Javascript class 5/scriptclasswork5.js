function myFunc() {
    const age = document.getElementById("age").value;
    if (age<18) {
        document.getElementById("age").classList.add("error")
        document.getElementById("info-text").textContent="You are not over 18"

    } 
    else if (age>18) {
        document.getElementById("age").classList.add("ok")
        document.getElementById("info-text").textContent="You are over 18"
    }
}