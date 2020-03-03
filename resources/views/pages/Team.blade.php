@extends('layouts.app')


@section('content')

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
                        <li><a href="{{ url('/home') }}" class="active">Home</a></li>
                        <li class="dropdown"><a href="Shop">Shop<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="Shop">Products</a></li>
                                <li><a href="product-details">Product Details</a></li>
                                <li><a href="cart">Cart</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="Team">About<i class="fa fa-angle-down"></i></a>
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

<div class="container">
	<div class="about-section">
		<h1>Sunflower Garden Shopper</h1>
		<address>
					<p>Flower Garnden</p>
					<p>Pacol Naga City </p>
					<p>Cam Sur.</p>
					<p>Mobile: +639153229295</p>
	 </address>
	</div>

	<h2 style="text-align:center">Our Team</h2>
	<div class="row">
		<div class="column">
			<div class="card">
				<img src="images/Team/patricPD.jpg" alt="starfish" style="width:100%">
				<div class="container">
					<h2>Patrick Lanuzo</h2>
					<p class="title">CEO & Founder</p>
					<p>Skills: Front-end developer, php, c#, MySQL and c++,</p>
					<p> Leadership, Comunication</p>
					<p>starfish@gmail.com</p>
					<p><button class="#">Contact</button></p>
				</div>
			</div>
		</div>

		<div class="column">
			<div class="card">
				<img src="images/Team/pangaProfile.jpg" alt="Panga" style="width:100%">
				<div class="container">
					<h2>Josh Panga</h2>
					<p class="title">Art Director</p>
					<p>Skills: php, c#, MySQL and java</p>
					<p>Panga@gmail.com</p>
					<p><button class="#">Contact</button></p>
				</div>
			</div>
		</div>

		<div class="column">
			<div class="card">
				<img src="images/Team/AngeloProfile.jpg" alt="Angelo" style="width:100%">
				<div class="container">
					<h2>Angelo</h2>
					<p class="title">Designer</p>
					<p>Skills: php, c#, MySQL and java</p>
					<p>angelo@gmail.com</p>
					<p><button class="#">Contact</button></p>
				</div>
			</div>
		</div>
	</div>
	</div>

@endsection
