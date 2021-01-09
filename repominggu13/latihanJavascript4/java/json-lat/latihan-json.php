<!DOCTYPE html>
<html>

<body>
    <h1>latihan-json</h1>
    <div id="hasil"></div>
    <button onclick="loadContent()">Load Content</button>
    <script>
        function loadContent() {
            var xhr = new XMLHttpRequest();
            var url = "http://localhost/java/json-lat/data.json";
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("hasil").innerHTML = this.responseText;
                }
            };
            xhr.open("GET", url, true);
            xhr.send();
        }
    </script>
</body>


</html>