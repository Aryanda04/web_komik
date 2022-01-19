function darkMode() {
    var element = document.body;
    var element2 = document.getElementsByClassName("badan");
    var element3 = document.getElementsByClassName("grid-container");
    var element4 = document.getElementsByClassName("list-produk");
    element.classList.toggle("dark-mode");
    // element2[0].classList.toggle("badan-darkmode");
    for(let item of element2) {
        item.classList.toggle("badan-darkmode");
    }
    for(let item of element3) {
        item.classList.toggle("grid-darkmode");
    }
    for(let item of element4){
        item.classList.toggle("list-darkmode");
    }

    // element2[0].toggle("badan-darkmode");
}