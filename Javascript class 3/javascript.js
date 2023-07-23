function findaperson(name){
    const people = ['Davud','Cavid','Qudret','Mansur','Yusif','Nihad','Nariman','Sina','Yunus','Ayxan','Togrul'];

    for(let i=0 ; i<people.length ; i++){
        if(people[i] === name){
            console.log(name +'were found,and its position is:' + i)
            break;
        }
        else{
            console.log(name+'was not found')
        }
    }
}

findaperson('Cavid')