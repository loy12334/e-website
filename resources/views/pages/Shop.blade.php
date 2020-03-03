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
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <input type="text" placeholder="Search"/>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-bottom-->

<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Valentines Day
                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">sunflower bouquet</a></li>
                                            <li><a href="#">rose bouquet </a></li>
                                            <li><a href="#">Chrysanthemum </a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            All Souls Day Flower Arrangements
                                        </a>
                                    </h4>
                                </div>
                                <div id="mens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">White Carnations flower</a></li>
                                            <li><a href="#">Pink Carnations flower</a></li>
                                            <li><a href="#">Sea Lavender</a></li>
                                            <li><a href="#">gladiolus flower</a></li>
                                            <li><a href="#">tulip flower</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Wedding Anniversary</a></h4>
                                </div>
                            </div>
                        </div><!--/category-products-->

                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="150" data-slider-max="1500" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">₱ 150</b> <b class="pull-right">₱ 1500</b>
                            </div>
                        </div><!--/price-range-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="card">
                                        <div class="productinfo text-center">
                                            <img src="images/products/single_sunflower.jpg" alt="" />
                                            <h2>₱250</h2>
                                            <p>Single sunflower bouquet</p>
                                            <a href="login" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="login"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="card">
                                    <div class="productinfo text-center">
                                        <img src="images/products/sunflower_basket.jpg" alt="" />
                                        <h2>₱550</h2>
                                        <p>Basket sunflower bouquet</p>
                                        <a href="login" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="login"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="card">
                                        <div class="productinfo text-center">
                                            <img src="images/products/vasesunflower1.jpg" alt="" />
                                            <h2>₱400</h2>
                                            <p>Vase sunflower bouquet</p>
                                            <p>7pcs sunflower</p>
                                            <a href="login" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="login"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/products/SingleFlower.jpg" alt="" />
                                        <h2>₱35</h2>
                                        <p>1pc Sunflower</p>
                                        <a href="login" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                    <img src="images/home/new.png" class="new" alt="" />
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="login"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/products/idkFlower.jpg" alt="" />
                                        <h2>₱130</h2>
                                        <p>Flower</p>
                                        <a href="login" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                    <img src="images/home/new.png" class="new" alt="" />
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="login"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/products/rose.jpeg" alt="" />
                                        <h2>₱400</h2>
                                        <p>Rose bouquet</p>
                                        <a href="login" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="login"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div><!--features_items-->

                </div>
            </div>
        </section>

@endsection
