<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->
    <link href="css/login.css" rel="stylesheet">

</head>

<body>
    <div class="header">
        <div class="header-right">
            <span class="logo">
                <img src="https://ekartlogistics.com/assets/images/ekWhiteLogo.png" alt="">
            </span>
        </div>


        

    </div>

    <div id="main-container">


        <form id="login" action="/login" method="POST">
            {{ csrf_field() }}
            
            <p>Email Id</p>
            <input type="text" name="email_id"  id="email_id">
          
            <p class="label">Password
                <span class="required">*</span>
                <span class="forgot-pass-fl-right">Forgot Password?</span>
            </p>
            <input type="password" name="password" id="password">

            <div id="user">

               
                <input type="radio" class ="usertype" name="user_type" checked id="consumer" value="Consumer"><label for="consumer">Consumer</label>
                  <input type="radio" class="usertype" name="user_type" id="provider" value="Provider"><label for="consumer">Provider</label><br>

            </div>



            <div id="bottom-login">
                <input type="submit" id="submit-button" value="Login">

                <input type="submit" id="submit-button" value="Back To Home">



            </div>
            <p class="msg">{{session('alert')}}</p>
        </form>
    </div>
</body>

</html>