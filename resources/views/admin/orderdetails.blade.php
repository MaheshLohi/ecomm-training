<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="css/orderdetails.css">

</head>

<body>
    <div class="header">
        <div class="header-right">
            <span class="logo">
                <img src="https://ekartlogistics.com/assets/images/ekWhiteLogo.png" alt="">
            </span>
        </div>


        <div class="header-left">
            <span class="name">
                Urban Enterprises
            </span>
            <a href="" class="logout-btn">Logout</a>
        </div>

    </div>
    <div class="order">
        <div class="info">Order Details</div>
        <table>

            <tr>
                <td>Order No</td>
                <td>123</td>
            </tr>
            <tr>
                <td>Date</td>
                <td>25/10/2021</td>
            </tr>


        </table>
        <div class="info">Buyer Information</div>
        <table>

            <tr>
                <td>Name</td>
                <td>Robin</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>robinbabu@gmail.com</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>123245</td>
            </tr>


        </table>
        <div class="info">Product Details</div>
        <table>
            <table>
                <tr>
                    <th>No.</th>
                    <th>Product Name</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Shoe</td>
                    <td>600</td>
                    <td>2</td>
                    <td>1200</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Shirt</td>
                    <td>800</td>
                    <td>1</td>
                    <td>800</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Food kit</td>
                    <td>300</td>
                    <td>3</td>
                    <td>1200</td>
                </tr>
                <tr><td></td><td></td><td></td><td>Subtotal</td><td>3200</td></tr>
                    <tr><td></td><td></td><td></td><td>Tax</td><td>108</td>
                    <tr id="totalamount"><td></td><td></td><td></td><td>TOTAL</td><td>3308</td></tr>
            </table>
            

            <div class="orderbottom">
                <input type="button" id="button1" value="Back To History">
                <input type="button" id="button1" value="Completed">
                <input type="button" id="button1" value="Shipped">


            </div>

            


    </div>
</body>

</html>