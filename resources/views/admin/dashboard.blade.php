<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{!! asset('css/dashboard.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Dashboard</title>
</head>

<body>
    <div class="header">
        <div class="header-right">
            <span class="logo">
                <img src="https://ekartlogistics.com/assets/images/ekWhiteLogo.png" alt="boost_logo">
            </span>
        </div>


        <div class="header-left">
            <span class="name">
               @if(session('admin'))
            {{session('admin')->name}}
            @endif
            </span>
            <a href="/admin/logout" class="logout-btn">Logout</a>
        </div>

    </div>


    <div class="content">
        <div class="products">
            <div class="list-head">
                <span class="heading">
                 Category -  {{session('admin')->category}}
                </span>
                <a href="dashboard/add" class="add-btn">Add Item</a>
            </div>
            <div class="table-responsive">


                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>

                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                        <tr>
                            <td>{{$data->product_name}}</td>
                            <td><img height="100" width="100" src="/images/{{$data->image_url}}" alt="product-image"></td>
                            <td class="description">{{$data->description}}</td>
                            <td>{{$data->quantity}}</td>
                            <td>{{$data->price}}</td>
                            <td><a href="" class="btn btn-primary">Update</a></td>
                            <td><a href="/dashboard/{{$data->id}}" class="btn btn-warning">Delete</a></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>




            </div>
        </div>


        <div class="orders">
            <div class="list-head">
                <span class="heading">
                    Orders 
                </span>
            </div>
            <div class="order-list">
                <div class="order">

                    <div class="order-top">
                        <span class="name">
                            Anandhu
                        </span>
                        <span class="time">
                            2021-10-11 05:58:56
                        </span>
                        <span class="status-red">Pending</span>
                    </div>

                    <div class="order-bottom">
                        <a href="" class="btn-details">View Details -></a>
                    </div>
                </div>
                <div class="order">

                    <div class="order-top">
                        <span class="name">
                            Anandhu
                        </span>
                        <span class="time">
                            2021-10-11 05:58:56
                        </span>
                        <span class="status-red">Pending</span>
                    </div>

                    <div class="order-bottom">
                        <a href="" class="btn-details">View Details -></a>
                    </div>
                </div>


                <div class="order">

                    <div class="order-top">
                        <span class="name">
                            Anandhu
                        </span>
                        <span class="time">
                            2021-10-11 05:58:56
                        </span>
                        <span class="status-green">Shipped</span>
                    </div>

                    <div class="order-bottom">
                        <a href="" class="btn-details">View Details -></a>
                    </div>
                </div>
                <div class="order">

                    <div class="order-top">
                        <span class="name">
                            Anandhu
                        </span>
                        <span class="time">
                            2021-10-11 05:58:56
                        </span>
                        <span class="status-green">Shipped</span>
                    </div>

                    <div class="order-bottom">
                        <a href="" class="btn-details">View Details -></a>
                    </div>
                </div>
                <div class="order">

                    <div class="order-top">
                        <span class="name">
                            Anandhu
                        </span>
                        <span class="time">
                            2021-10-11 05:58:56
                        </span>
                        <span class="status-red">Pending</span>
                    </div>

                    <div class="order-bottom">
                        <a href="" class="btn-details">View Details -></a>
                    </div>
                </div>


            </div>

        </div>

    </div>

    <footer>
        <ul class="footer-items">



            <li> Help Center</li>
            <li> Privacy Policy </li>
            <li>Terms & Conditions</li>
            <li>Support : letstalk@ekart.support</li>
        </ul>

    </footer>

</body>

</html>