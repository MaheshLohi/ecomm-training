<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{!! asset('css/cart.css') !!}">
    
    <title>Cart</title>
</head>
<body>
    <div class="header">
        <div class="header-left">
            <span class="ekart">
                <h1>ekart</h1>
            </span>
        </div>
        <div class="header-right">
            <span class="name">
                Urban Enterprises
            </span>
            <button>Logout</button>
        </div>
    </div>

    <div class="container">
        <div class="item-image">
            <span class="image">
                <img src="https://m.media-amazon.com/images/I/51uhx9+E88L._SL1000_.jpg" alt="">
            </span>
        </div>
        <div class="item-details">
            <div class="item-features">
                <h2>Apple MacBook Air (13-inch, Previous Model, 8GB RAM, 128GB Storage, 1.6GHz Intel Core i5) - Gold</h2> 
                <h3>Price : ₹ 89,999</h3>
                <p> Model Name	MacBook Air
                    Brand	Apple
                    Specific Uses For Product	Personal, gaming, business
                    Screen Size	13.3 Inches
                    Operating System	MacOS 10.14 Mojave
                    CPU Manufacturer	Intel
                    Special Feature	Fingerprint reader
                    Colour	Gold
                </p>
                <a href="#">Product details</a> <br>
            <div class="count-container">
                <span>Number of Items </span>
                <div class="item-count"> 
                    <button class="decrement">-</button>
                    <span class="count"> 0 </span>
                    <button class="increment">+</button>
                </div>
            </div>
        </div>
        <div class="item-btns">
            <button>Remove from Cart</button>
            <button>Place Order</button>
        </div>
        </div>
    </div>


    

    
    <div class="footer">
        <ul class="footer-items">
            <li> Help Center</li>
            <li> Privacy Policy </li>
            <li>Terms & Conditions</li>
            <li>Support : letstalk@ekart.support</li>
        </ul>
    </div>
</body>
</html>