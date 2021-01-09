<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>A11.2019.12010</title>
    <style>
        body {
            margin: 5%;
            font-family: sans-serif;
            border: 0ch;

        }
    </style>
</head>

<body>
    <h1>Toturial Ajax<button id="btn-clear" onclick="clearResult()">hapus semua</button></h1>
    <div id="hasil"></div>
    <button id="button" onclick="loadContent()">Load Content</button>
    <script>
        function loadContent() {
            var xhr = new XMLHttpRequest();
            var url = "http://localhost/java/kode.json";
            xhr.onloadstart = function() {
                document.getElementById("button").innerHTML = "Loading...";
            }
            xhr.onerror = function() {
                alert("Gagal mengambil data");
            };
            xhr.onloadend = function() {
                if (this.readyState === 4 && this.status === 200) {
                    var data = JSON.parse(this.responseText);
                    var img = document.createElement("img");
                    img.src = data.avatar_url;
                    var name = document.createElement("h3");
                    name.innerHTML = data.name;
                    document.getElementById("hasil").append(img, name);
                    document.getElementById("button").innerHTML = "Done";
                    setTimeout(function() {
                        document.getElementById("button").innerHTML = "LoadLagi ";
                    }, 3000);
                }
            };
            xhr.open("GET", url, true);
            xhr.send();
        }

        function clearResult() {
            document.getElementById("hasil").innerHTML = "";
        }
    </script>
</body>

</html>