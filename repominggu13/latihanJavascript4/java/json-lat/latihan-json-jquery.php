<!DOCTYPE html>
<html lang="en">

<head align="center">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar AJAX dengan JQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>

<body align="center">
    <div>
        <p>Aditya Anugrah<br>
            A11.2019.12010</p>
    </div>
    <pre id="result"></pre>

    <script align="center">
        $("#result").load("http://localhost/java/json-lat/game.php");
    </script>
</body>

</html>