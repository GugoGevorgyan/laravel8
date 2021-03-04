let categories = document.querySelector('.categories');
let dropdown = document.querySelectorAll('.category');

if (categories){
    categories.addEventListener("click", start, false);
}

const categoriesMap = new Map();

dropdown.forEach(function (element) {
    const el = element.children[0];
    if (!categoriesMap.has(el)) {
        categoriesMap.set(el, el.nextElementSibling);
    }
})


function start() {
    let checkedData = 0;
    categoriesMap.forEach((el, index) => {
        const subCategories = el.lastElementChild.children;
        const checked = [...subCategories].some(el => el.children[0].checked);
        // const checked = [].some.call(subCategories, el => el.children[0].checked);      //nuynn e
        if (checked) checkedData = index + 1;
        if (checkedData) {
            categoriesMap.forEach((elem, index) => {
                if (!(index + 1 === checkedData)) elem.classList.add('d-none')
            })
        } else {
            el.classList.remove('d-none');
        }
    })
}
