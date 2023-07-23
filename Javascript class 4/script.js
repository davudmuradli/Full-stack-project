// function OnceMyPageIsLoaded() {
//     const houses = ['orlando','Tampa','Lake Lona','Palm Beach','Miami']

//     let htmllink ='<ul>';

//     for(let i=0; i<houses.length ; i++){
//         htmllink = htmllink + '<li> <a href="https://www.google.com/search?q=${houses[i]}"'>$houses[i] 
//     }

//     const d = document.getElementById('search_cities');
//     d.innerHTML = htmlLink + `<ul>`;
//   }



let lottoNumbers = [10,23,11,73,44,57];
let newArr=[];

for (let i = 0; i < lottoNumbers.length; i++) {
    if (lottoNumbers[i]%2==0) {
        newArr=lottoNumbers[i];
    }
    
}
console.log(newArr)
// function findeven(){
//     let lottoNumbers2 =[]

//     for(i=0; i<lottoNumbers.length ; i++){
//         if(lottoNumbers[i]%2 === 0){
//             lottoNumbers2.push(lottoNumbers[i]);
//         }
//     }
//     console.log(lottoNumbers2)
// }

// Lottogame

// function lottogame(){
//     let lottoNumbers3 =[11,82,13,55,44,73]
//     let lottoNumberwinner = []
//     for (i=0; i<lottoNumbers3.length ; i++){
//         for(a=0; a<lottoNumbers.length; a++){
//             if(lottoNumbers[i] == lottoNumbers3[a]){
//                 lottoNumberswinner.push(lottoNumbers[i]); 

//             }

//         }

//     }

// }