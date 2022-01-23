function darkMode() {
    var element = document.body;
    var element3 = document.getElementsByClassName("content");
    var element4 = document.getElementsByClassName("rating");
    var element5 = document.getElementsByClassName("view");
    element.classList.toggle("dark-mode");
    element3[0].classList.toggle("content-darkmode");
    element4[0].classList.toggle("rating-darkmode");
    element5[0].classList.toggle("view-darkmode");
}
