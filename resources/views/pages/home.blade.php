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
       <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>Flower</span>-Shopper</h1>
                                    <h2>For Valentines flower</h2>
                                    <p>Valentine’s Day flowers are a very popular way to express one’s love and affection, which is why they play an important role in Valentine’s Day gifting. Red roses, orchids and myrtle flowers are some of the best gifts to give on Valentine’s Day because they represent love and romance. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/products/simplesinglesunflower.jpg" class="girl img-responsive" alt="" />
                                    <img src=""  class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Flower</span>-Shopper</h1>
                                    <h2>All Soul day flower</h2>
                                    <p>Without a doubt, one of the most challenging mysteries in life comes from dealing with loss. Losing someone hurts; it takes a lot out of us to lose someone who means a lot to us. When this happens, most people will choose to look for an adequate commemoration for the person who has passed away. Many times, that is flowers. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/products/idkFlower.jpg" class="girl img-responsive" alt="" />
                                    <img src=""  class="pricing" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Flower</span>-Shopper</h1>
                                    <h2>For Anniversary flower</h2>
                                    <p>Searching flower for your man or women of life? It doesn't matter where you go in life, what you do it's who you have beside you. We have changed over the years, but the sparkle in your eyes is as bright as ever, and my love for you is even stronger. Side by side- year by year. Love begins in a moment, grows over time, and lasts for eternity.</p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/products/SingleFlower.jpg" class="girl img-responsive" alt="" />
                                    <img src="" class="pricing" alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->

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
                        @foreach($errors as $product)
                            <div class="product">
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="card">
                                                <div class="productinfo text-center">
                                                    <img src="images/products/single_sunflower.jpg" alt="" />

                                                    <a href="#"><div class="product-name">{{ $product->name }}</div></a>
                                                    <div class="product-price">{{ $product->price }}</div>
                                                    <a href="login" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="choose">
                                            <ul class="nav nav-pills nav-justified">
                                                <li><a href="product-details"><i class="fa fa-plus-square"></i>view details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

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
                                        <li><a href="product-details"><i class="fa fa-plus-square"></i>view details</a></li>

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
                                        <li><a href="product-details"><i class="fa fa-plus-square"></i>view details</a></li>

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
                                        <li><a href="product-details"><i class="fa fa-plus-square"></i>view details</a></li>

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
                                        <li><a href="product-details"><i class="fa fa-plus-square"></i>view details</a></li>

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
                                        <li><a href="product-details"><i class="fa fa-plus-square"></i>view details</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/products/tulipsBoquete.jpg" alt="" />
                                        <h2>₱175</h2>
                                        <p>Tulips bouquet</p>
                                        <a href="login" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="product-details"><i class="fa fa-plus-square"></i>view details</a></li>

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
