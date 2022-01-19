const node = document.getElementsByClassName("Searchbox")[0];
node.addEventListener("keyup", function(event) {
    if (event.key === "Enter" || event.keyCode === 13) {
        value = node.value;
        window.open(`search.php?pencarian=${value}`,"_self");
    }
});