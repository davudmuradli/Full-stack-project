function init() {
    const paragraph = document.createElement('p');
    const anchor = document.createElement('a');
    const span = document.createElement('span');
    
    anchor.href = 'https://www.google.com/';
    anchor.inertext ='link here';

    paragraph.appendChild(anchor);

    document.body.appendChild(paragraph);
    
    const div = document.getElementById('toRemove');
    div.remove();

    
}