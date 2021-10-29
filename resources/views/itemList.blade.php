<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.css">
    
    <link rel="stylesheet" href="{!! asset('css/Item_list.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
                @if(session('user'))
                {{session('user')->username}}
                @endif
            </span>
            @if(session('user'))
            <a href="/logout" class="logout-btn">Logout</a>
            @else
            <a href="/login" class="logout-btn">Login</a>
            @endif
            <a href="" class="logout-btn">Cart</a>
        </div>
</div>

<div class="container">
    <div class="row text-center py-5 " id="box" >
      @foreach($productList as $data)

      <div class="col-md-3 col-sm-6 my-3 my-md-0 ">
          <form action="/itemlist" method="post">
          <div class="card shadow">
              <div class="item-picture">
                  <img  src="/images/{{$data->image_url}}" alt="item picture " class="img-fluid card-img-top" id="prod-img">
              </div>
              <div class="card-body">
                  <h5 class="card-title">{{$data->product_name}}</h5>
                  <h6>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                  </h6>
                  <p class="card-text">
                     {{$data->description}}
                  </p>
                  <h5>
                      <span class="price">Rs.{{$data->price}}</span>
                  </h5>
                  <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
              </div>
          </div>
          </form>
       
    </div>

      @endforeach
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>