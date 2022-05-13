/**
 * 
 * @param {HTMLTableElement}
 * 
 */

function tri() {
    var array = document.getElementByTagName('td');
    for (let i = 0; i < array.length; i++) {
        td[i].addEventListener('click', item(i));
    }

    function item(i) {
        return function tri(){
            console.log(i);
        }
    }
} 