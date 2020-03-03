

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register | Sunflower Garden</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <style>
        html,body{

        }
        .header-bottom{
            background-color: #fff;
        }

    </style>
</head><!--/head-->

<body>
 <header id="header"><!--header-->
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <h3>Sunflower Garden</h3>
                        </div>
                        <div class="btn-group pull-right">
                            
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                                <li><a href="checkouts"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="login"><i class="fa fa-lock"></i> Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{ url('/') }}" class="active">Home</a></li>
                                <li class="dropdown"><a href="Shop">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="Shop">Products</a></li>
                                        <li><a href="product-details.html">Product Details</a></li> 
                                        <li><a href="cart.html">Cart</a></li> 
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">About<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="Team">Team</a></li>
                                    </ul>
                                </li> 
                                <li><a href="contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->

    </header><!--/header-->
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h1>New User Signup!</h1>
						<form action="register_action" method="post">

                            <input type="hidden" name="_token" value="{{csrf_token()}}">

							<input type="text" name="name" placeholder="Name"/>
                            @if($errors->has('name')) 
                                <p> {{$errors->first('email')}}</p>
                            @endif
							<input type="email" name="email" placeholder="Email Address"/>
                            @if($errors->has('email')) 
                                <p> {{$errors->first('email')}}</p>
                            @endif
							<input type="password" name="password" placeholder="Password"/>
                            @if($errors->has('password')) 
                                <p> {{$errors->first('email')}}</p>
                            @endif
                            <input type="password" name="ConfirmPassword" placeholder="confirm-password"/>
                            @if($errors->has('ConfirmPassword')) 
                                <p> {{$errors->first('email')}}</p>
                            @endif
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	     <div class="header_top"><!--header_button-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="https://www.gmail.com"><i class="fa fa-envelope"></i> pacolflowergarden@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.gmail.com"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>