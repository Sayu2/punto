<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/css/bar.css">
</head>
<body>
    <div id="sidebar">
        <div class="toggle-btn">
            <span>&#9776;</span>
        </div>
        <ul>
            <li>
                <img class="logo" src="../src/img/logo.png" alt="Logotipo">
            </li>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
        </ul>
    </div>
    <script src="../src/js/bar.js" charset="utf-8"></script>
</body>
</html>