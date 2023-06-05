<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<style>
    .nav {
        display: flex;
        list-style: none;
        flex-direction: row;
        gap: 30px;
        justify-content: flex-end;
        padding: 10px
    }
</style>
<body>
    <header>
        <ul class="nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Animation</a></li>
            <li><a href="#">Tasks</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </header>
    <h1>@yield('heading-title')</h1>
    <p>@yield('paragraph-content')</p>
</body>
</html>