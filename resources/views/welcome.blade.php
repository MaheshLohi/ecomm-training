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
        </div>
        
        
        <div class="header-btns">

            <a id="cart-btn" href="#">My Cart</a>
            @if(session('user'))
            <a id="login-btn" href="/logout">Log out</a>
            @else
            <a id="login-btn" href="/login">Log in</a>
            @endif
        </div>
    </header>

    <div class="content">
        <div class="catagory" id="food-cat" onclick= 'navigate("food")'>
            <h1>Food</h1>
            <div class="shopnow-btn">Shop now</div>
        </div>
        <div class="catagory" id="electronics-cat" onclick= 'navigate("electronics")'>
            <h1>Electronics</h1>
            <div class="shopnow-btn">Shop now</div>
        </div>
        <div class="catagory" id="fashion-cat" onclick= 'navigate("fashion")'>
            <h1>Fashion</h1>
            <div class="shopnow-btn">Shop now</div>
        </div>
    </div>
</body>
<script>
    function navigate(param) {
        window.location.href = `/itemList/${param}`
    }
</script>

</html>