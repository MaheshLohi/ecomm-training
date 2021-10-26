<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Additem</title>
    <link rel="stylesheet" href="{{asset('css/additem.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <div class="body">
     <form class="addItem" id="addItem" method="POST">
         {{csrf_field()}}
         <h2>Add Items</h2>
         <div>
            <label>Name</label>
            <br>
            <input type="text" id="details" placeholder="Enter product name">
         </div>
         <br>
         <div class="image">
            <label>Image</label>
            <br>
            <input type="file">
         </div>
         <br>
         <div>
           <label>Description</label>
           <br>          
            <textarea class="textarea" id="details" name="Product description" rows="3" cols="91" maxlength="100" minlength="3" placeholder="Enter product description"></textarea>
         </div>   
         <br>
         <div>
            <label>Quantity</label>
            <br> 
            <input type="number" id="details" placeholder="Enter product quantity" min="1" required>
         </div> 
         <br>
         <div>
            <label>Price</label>
           <br>
           <input type="number" id="details" placeholder="Enter product price" required>
         </div> 
         <br>  
         <div class="Btn">
           <button type="submit" class="AddBtn">Add item</button>
         </div>  
        </form>  
    </div>          
</body>
</html>