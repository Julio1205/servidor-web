@extends('layouts.app')

@section('content')
<!doctype <!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JQuery Login</title>

    <!-- jQuery 3.3.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

    <!-- Bootstrap 4.3.1 -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- font awesome library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- jQuery Login -->     
    <script src="assets/js/jquery-login.js"></script>

    <!-- main css -->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/dist/style.min.css" />     

</head>
<body>
    
<!-- login area -->
<aside id="login" class="col-sm-4">    
    <div class="card">
        <div class="card-body">
            <a href="" class="float-right btn btn-outline-primary">Registro</a>
            <h4 class="card-title mb-4 mt-1">Acceso</h4> <!-- margins -->
            <p>
                <!-- social login-->
                <a href="" class="btn btn-block btn-outline-info"> <i class="fab fa-twitter"></i> Acceso con Twitter</a>
                <a href="" class="btn btn-block btn-outline-info"> <i class="fab fa-facebook-f"></i> Acceso con Facebook</a>
            </p>
            <hr />
            <!-- start form -->
            <form name="login_form" id="login_form" action="">
                <div class="form-group">
                    <input name="" class="form-control" placeholder="Email or login" type="email" id="email" value="jose@artegrafico.net" />
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="******" type="password" id="password">
                </div>                                    
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" id="access" name="access">Acceso</button>
                        </div> 
                    </div>
                    <div class="col-md-6 pt-2 pr-4 text-right">
                        <a class="small" href="#" class="">¿Olvidó su contraseña?</a>
                    </div>                                            
                </div>      
            </form> <!-- end form -->      
                
            <!-- messages area -->
            <div class="row">
                <div class="col-12">
                    <div class="outer-loader" id="message-area">
                        <span class="inner-loader"></span>     
                    </div>
                    <span class="debug"></span>    
                </div>
            </div> <!-- end messages area-->     
        </div>
    </div> 
</aside> <!-- end login area-->


</body>
</html>
@endsection
