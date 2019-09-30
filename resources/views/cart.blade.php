@extends('layout.main')

@section('title' , 'Cart')

@section('content')


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y border-top">
	<div class="container">

		<div class="row">
			<main class="col">

				<div class="cart-section container">
					@if(session()->has('success_message'))
					<div class="alert alert-success">
						{{session()->get('success_message')}}
					</div>
					@endif

					@if(count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>
								{{$error}}
							</li>
							@endforeach
						</ul>
					</div>
					@endif
				</div>
				@if(Cart::count() == 0)
				<h3 class="m">{{Cart::count()}} item(s) in Shopping Cart</h3>
				</a>
				@else
				<div class="card">


					<table class="table table-hover shopping-cart-wrap">
						<thead class="text-muted">
							<tr>
								<th scope="col">Product</th>
								<th scope="col" width="120">Price</th>
								<th scope="col" class="text-right" width="200">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach(Cart::content() as $item)
							<tr>
								<td>
									<figure class="media">
										<div class="img-wrap"><img src="images/items/{{$item->model->picture}}" class="img-thumbnail img-sm"></div>
										<figcaption class="media-body">
											<h6 class="title text-truncate"> {{$item->model->name}} </h6>
											<dl class="dlist-inline small">
												<dt>Quantity : </dt>
												<dd>{{$item->qty}}</dd>
											</dl>
											<dl class="dlist-inline small">
												<dt>Color : </dt>
												<dd>Orange color</dd>
											</dl>
										</figcaption>
									</figure>
								</td>
								<td>
									<div class="price-wrap">
										<var class="price">Rp.{{presentPrice($item->qty * $item->model->price)}}</var>
										<small class="text-muted">(Rp. {{$item->model->presentPrice()}} each)</small>
									</div> <!-- price-wrap .// -->
								</td>
								<td class="text-right">
									<form action="/cart/{{$item->rowId}}" method="post">
										@csrf
										@method('delete')
										<button type="submit" class="btn btn-outline-danger"> × Remove</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div> <!-- card.// -->
				@endif

			</main> <!-- col.// -->
			<aside class="col-sm-3">

				<dl class="dlist-align">
					<dt>Total price: </dt>
					<dd class="text-right">Rp.{{Cart::subtotal()}}</dd>
				</dl>
				<dl class="dlist-align">
					<dt>Discount:</dt>
					<dd class="text-right">Rp.0</dd>
				</dl>
				<dl class="dlist-align h4">
					<dt>Total:</dt>
					<dd class="text-right"><strong>Rp.{{Cart::total()}}</strong></dd>
				</dl>
				<hr>
				<div>
					<a href="/" class="btn btn-warning">Continue Shopping</a>
					<a href="/checkout" class="float-right btn btn-success">Checkout</a>
				</div>


			</aside> <!-- col.// -->
		</div>

	</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

@endsection('content')