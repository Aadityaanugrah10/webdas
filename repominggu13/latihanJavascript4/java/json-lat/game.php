<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>sabarr boss</title>
</head>
<style>
    .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .no-js #loader {
        display: none;
    }

    .js #loader {
        display: block;
        position: absolute;
        left: 100px;
        top: 0;
    }

    .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(https://smallenvelop.com/wp-content/uploads/2014/08/Preloader_11.gif) center no-repeat #fff;
    }
</style>
$(window).load(function() {
// Animate loader off screen
$(".se-pre-con").fadeOut("slow");;
});

<body>
    <div class="se-pre-con"></div>
    <div class="loader"></div>
</body>

</html>