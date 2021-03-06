let categories = document.querySelector('.categories');
let dropdown = document.querySelectorAll('.category');

if (categories){
    categories.addEventListener("click", start, false);
}

const categoriesMap = new Map();
if (dropdown){
    dropdown.forEach(function (element) {
        const el = element.children[0];
        if (!categoriesMap.has(el)) {
            categoriesMap.set(el, el.nextElementSibling);
        }
    })
    start();
}



function start() {
    let checkedData = 0;
    categoriesMap.forEach((el, index) => {
        const subCategories = el.lastElementChild.children;
        const checked = [...subCategories].some(el => el.children[0].checked);
        // const checked = [].some.call(subCategories, el => el.children[0].checked);      //nuynn e
        if (checked) checkedData = index + 1;
        if (checkedData) {
            categoriesMap.forEach((elem, index) => {
                if (!(index + 1 === checkedData)) {
                    elem.classList.add('d-none');
                }else{
                    elem.parentElement.childNodes[1].classList.add('bg-danger');
                }
            })
        } else {
            el.classList.remove('d-none');
            el.parentElement.childNodes[1].classList.remove('bg-danger');
        }
    })
}
