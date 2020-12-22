// 셀렉트박스 스크립트
const selectBox = document.querySelectorAll('.selectbox');
const opened = '_opened';

for(let i = 0; i < selectBox.length; i++) {
    const currentBox = selectBox[i];
    let sItem = currentBox.children[0];
    let Items = currentBox.children[1].querySelectorAll('li');
    let aRRow = currentBox.children[2];
    
    currentBox.addEventListener('click', function(e){
        if (currentBox.classList.contains(opened)) {
            currentBox.classList.remove(opened);
        } else {
            currentBox.classList.add(opened);
        }
    });
    for(let j = 0; j < Items.length; j++) {
        let t = Items[j].textContent;
        Items[j].addEventListener('click', function(e){
            e.preventDefault;
            sItem.innerHTML = t;
            currentBox.classList.add(opened);
        });
    }
}