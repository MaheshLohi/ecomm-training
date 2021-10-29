<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eKart</title>
    <link rel="stylesheet" href="css/itemdetails.css">
</head>

<body>


    <header>

        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/E-kart-logo.png">
        </div>
        <div>
            <a id="cart-btn" href="#">My Cart</a>
            <a id="login-btn" href="#">Log in</a>
        </div>

    </header>

    <div class="container">

        <div class="singleproduct">
            <div class="img">
                <img height="400" width="300" src="images/{{$productData->image_url}}">
            </div>
        </div>
        <div class="select">

            <p>Category - {{$productData->product_category}}</p><br>
            <h1>{{$productData->product_name}}</h1><br>
            <h4>Price - ₹{{$productData->price}}</h4><br>

            <form action="/order" method="POST">
                <input type="number" value="1" placeholder="quantity"><br><br>




                <h3> Product Details </h3><br>

                <p>{{$productData->description}}</p>
                <a href="" class="btn">Add to cart</a>
                <button type="submit" class="btn">Buy now</button>
            </form>
        </div>
    </div>
</body>

</html>