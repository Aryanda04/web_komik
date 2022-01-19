function darkMode() {
    var element = document.body;
    var element3 = document.getElementsByClassName("content");
    element.classList.toggle("dark-mode");
    element3[0].classList.toggle("content-darkmode");
}
