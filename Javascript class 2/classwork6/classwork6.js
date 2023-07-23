// let name = 'Davud ' ;
// let surname = 'Muradli';

// let fullname = name.concat(surname);

// console.log('Mu full name is', fullname, '.') ; 



// let text = "Dublin Coding School" ;

// const array = text.split(" ");

// console.log(array[0],array[1].toUpperCase(),array[2]) ; 
// console.log(array[2],array[1],array[0]) ; 

// console.log(array.reverse());


// function multipy(){
//     const first = document.getElementById("first").value;
//     const second = document.getElementById("second").value;
//     const third = document.getElementById("third").value;

//     const product = first*second*third;

//     console.log(product)

// }



function reverseWordOrder() {
    let text = document.getElementById("text").value;
    const text2 = text.split(" ");

    if(text2[1]== null || text2[1] == ' '){
        console.log("Please write 2 or more words")
    }
    else{
        console.log(text2.reverse())
    }
}


// function logUserData() {
//     let personName = document.getElementById("personName").value;
//     let age = document.getElementById("age").value;
//     console.log("User: " + personName  + " is " + age + " years old.")
// }