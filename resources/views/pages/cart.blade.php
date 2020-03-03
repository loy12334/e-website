@extends('layouts.app')


@section('content')

<section id="cart_items">
		<div class="container">
				<div class="breadcrumbs">
						<ol class="breadcrumb">
							<!--/<li><a href="#">Home</a></li> -->
							<li class="active">Shopping Cart</li>
						</ol>
				</div>
				<div class="table-responsive cart_info">
						<table class="table table-condensed">
								<thead>
										<tr class="cart_menu">
												<td class="image">Item</td>
												<td class="description"></td>
												<td class="price">Price</td>
												<td class="quantity">Quantity</td>
												<td class="total">Total</td>
												<td></td>
										</tr>
								</thead>
								<tbody>
										<tr>
												<td class="cart_product">
														<a href=""><img src="" alt=""></a>
												</td>
												<td class="cart_description">
														<h4><a href="">item 1</a></h4>
														<p>Web ID: 1089772</p>
												</td>
												<td class="cart_price">
														<p>₱</p>
												</td>
												<td class="cart_quantity">
														<div class="cart_quantity_button">
																<a class="cart_quantity_up" href=""> + </a>
																<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
																<a class="cart_quantity_down" href=""> - </a>
														</div>
												</td>
												<td class="cart_total">
														<p class="cart_total_price">₱</p>
												</td>
												<td class="cart_delete">
														<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
												</td>
										</tr>

										<tr>
												<td class="cart_product">
														<a href=""><img src="" alt=""></a>
												</td>
												<td class="cart_description">
														<h4><a href="">item 2</a></h4>
														<p>Web ID: 1089772</p>
												</td>
												<td class="cart_price">
														<p>₱</p>
												</td>
												<td class="cart_quantity">
														<div class="cart_quantity_button">
																<a class="cart_quantity_up" href=""> + </a>
																<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
																<a class="cart_quantity_down" href=""> - </a>
														</div>
												</td>
												<td class="cart_total">
														<p class="cart_total_price">₱</p>
												</td>
												<td class="cart_delete">
														<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
												</td>
										</tr>
										<tr>
												<td class="cart_product">
														<a href=""><img src="" alt=""></a>
												</td>
												<td class="cart_description">
														<h4><a href="">item 3</a></h4>
														<p>Web ID: 1089772</p>
												</td>
												<td class="cart_price">
														<p>₱</p>
												</td>
												<td class="cart_quantity">
														<div class="cart_quantity_button">
																<a class="cart_quantity_up" href=""> + </a>
																<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
																<a class="cart_quantity_down" href=""> - </a>
														</div>
												</td>
												<td class="cart_total">
														<p class="cart_total_price">₱</p>
												</td>
												<td class="cart_delete">
														<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
												</td>
										</tr>
								</tbody>
						</table>
				</div>
		</div>
</section> <!--/#cart_items-->

 <section id="do_action">
				<div class="container">
						<div class="heading">
								<h3>What would you like to do next?</h3>
								<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
						</div>
						<div class="row">
								<div class="col-sm-6">
										<div class="chose_area">
												<ul class="user_option">
														<li>
																<input type="checkbox">
																<label>Use Coupon Code</label>
														</li>
														<li>
																<input type="checkbox">
																<label>Use Gift Voucher</label>
														</li>
														<li>
																<input type="checkbox">
																<label>Estemate Shipping</label>
														</li>
												</ul>
												<ul class="user_info">
														<li class="single_field">
																<label>Location:</label>
																<select>
																		<option>Philippines</option>

																</select>

														</li>
														<li class="single_field">
																<label>Region:</label>
																<select>
																		<option>NCR</option>
																		<option>Region I</option>
																		<option>CAR</option>
																		<option>Region II</option>
																		<option>Region III</option>
																		<option>Region V</option>
																</select>

														</li>
														<li class="single_field zip-field">
																<label>Zip Code:</label>
																<input type="text">
														</li>
												</ul>
												<a class="btn btn-default update" href="">Get Quotes</a>
												<a class="btn btn-default check_out" href="">Continue</a>
										</div>
								</div>
								<div class="col-sm-6">
										<div class="total_area">
												<ul>
														<li>Cart Sub Total <span>₱</span></li>
														<li>Eco Tax <span>₱</span></li>
														<li>Shipping Cost <span>Free</span></li>
														<li>Total <span>₱</span></li>
												</ul>
														<a class="btn btn-default update" href="">Update</a>
														<a class="btn btn-default check_out" href="checkouts">Check Out</a>
										</div>
								</div>
						</div>
				</div>
		</section><!--/#do_action-->



@endsection
