<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <header>
            <div class="left">
                <h1>E-commerce web</h1>
                <div class="user-name">
                    <h4>Hello, Sam Sunil</h4>
                </div>
            </div>
            <div class="header-btns">
                <a id="cart-btn" href="#">My Cart</a>
                <a id="login-btn" href="/login">Log in</a>
            </div>
        </header>

        <div class="content">
            <div class="catagory" id="food-cat">
                <h1>Food</h1>
                <div class ="shopnow-btn">Shop now</div>
            </div>
            <div class="catagory" id = "electronics-cat">
                <h1>Electronics</h1>
                <div class ="shopnow-btn">Shop now</div>
            </div>
            <div class="catagory" id = "fashion-cat">
                <h1>Fashion</h1>
                <div class ="shopnow-btn">Shop now</div>
            </div>
        </div>
    </body>
</html>
