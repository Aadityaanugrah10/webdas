<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar AJAX dengan JQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
</head>

<body>
    <h1>
        Load Data
    </h1>
    <img id="avatar" src="" width="100" height="100">
    <br>
    <h3 id="name">
    </h3>
    <p id="location">
    </p>
    <p id="email">
    </p>
    <p id="nim">
    </p>



    <script>
        var url = "http://localhost/java/kode.json";
        $.get(url, function(data, status) {
            $("#avatar").attr("src", data.avatar_url);
            $("#name").text(data.name);
            $("#location").text(data.location);
            $("#email").text(data.email);
            $("#nim").text(data.nim);

        });
    </script>
</body>

</html>