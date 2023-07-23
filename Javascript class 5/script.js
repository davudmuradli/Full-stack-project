function init(){
    // findAndBindMyElement();
    findElementByClassName();
    findElementByTagName();
}

// function findAndBindMyElement(){
//     const doe = document.getElementById('news')
//     DOMException.innerText = 'any text here';

//     const input = document.getElementById('new_input')
//     input.value = 'any text';
// }

function findElementByClassName(){
    const spans = document.querySelector('.BigText')
    if(spans !== undefined){
        console.log(' find spans')
    }
}
function OnceClick(){
    alert ('careful you are leaving my website')

}

function findElementByTagName() {
    const allTagsA = document.querySelectorAll('.BigText > a')
    for (let tag of allTagsA){
        tag.innerHTML = "Read more..."
        tag.setAttribute('href','https://www.google.com/')
        tag.addEventListener('click', OnceClick )
    }
}