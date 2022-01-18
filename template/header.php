    <ul class="tulisanNav">
        <li><img src="img/logo.webp" width="200px" alt="" style="margin-top: 5px;"></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="genre.php">Genre</a></li>
        <li><a href="Release.php">Latest Release</a></li>
        <label class="switch" style="margin-top: 17px; float: right; margin-right: 10px;">
            <input type="checkbox" onclick="darkMode()">
            <span class="slider round"></span>
        </label>
        <input type="text" placeholder="Search.." class="Searchbox">
    </ul>
    
    <script>
        const node = document.getElementsByClassName("Searchbox")[0];
        node.addEventListener("keyup", function(event) {
            if (event.key === "Enter" || event.keyCode === 13) {
                value = node.value;
                window.open(`search.php?pencarian=${value}`,"_self");
            }
        });
    </script>