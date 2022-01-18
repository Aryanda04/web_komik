function darkMode() {
    var element = document.body;
    var element2 = document.getElementsByClassName("badan");
    var element3 = document.getElementsByClassName("grid-container");
    element.classList.toggle("dark-mode");
    element2[0].classList.toggle("badan-darkmode");
    for(let item of element3) {
        item.classList.toggle("grid-darkmode");
    }
}