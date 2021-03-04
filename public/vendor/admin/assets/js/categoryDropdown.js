let categories = document.querySelector('.categories');
if (categories){
    categories.addEventListener("click", start, false);
    start();
}
function start() {
    let dropdown = document.querySelectorAll('.category');
    let subCategories = [];
    dropdown.forEach(function (element) {
        element.addEventListener("click", d_flex, false);
        subCategories.push(element.lastElementChild.lastElementChild.children);
    })

    function d_flex() {
        for (let i = 0; i < subCategories.length; i++) {
            dropdown[i].lastElementChild.classList.remove('d-none');
        }
        check_checked();
    }

    function check_checked() {
        for (let i = 0; i < subCategories.length; i++) {
            for (let j = 0; j < subCategories[i].length; j++) {
                if (subCategories[i][j].children[0].checked) {
                    let index = subCategories.indexOf(subCategories[i]);
                    for (let n = 0; n < subCategories.length; n++) {
                        if (n != index) {
                            dropdown[n].lastElementChild.classList.add('d-none');
                            j = subCategories[i].length + 1;
                        }
                    }
                }
            }
        }

    }
}

