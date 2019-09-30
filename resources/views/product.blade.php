@extends('layout.main')

@section('title', $product->name)

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y-sm">
	<div class="container">

		<div class="row">
			<div class="col-xl-12 col-md-9 col-sm-12">


				<main class="card">
					<div class="row no-gutters">
						<aside class="col-sm-6 border-right">
							<article class="gallery-wrap">
								<div class="img-wrap">
									<div> <a href="/images/items/{{$product->picture}}" data-fancybox=""><img src="/images/items/{{$product->picture}}"></a></div>
								</div> <!-- slider-product.// -->

							</article> <!-- gallery-wrap .end// -->
						</aside>
						<aside class="col-sm-6">
							<article class="card-body">
								<!-- short-info-wrap -->
								<h3 class="title mb-3">{{$product->name}}</h3>

								<div class="mb-3">
									<var class="price h3 text-warning">
										<span class="currency">Rp </span><span class="num">{{$product->presentPrice()}}</span>
									</var>
								</div> <!-- price-detail-wrap .// -->
								<dl>
									<dt>Product Detail</dt>
									<dd>
										<p>{{$product->detail}}</p>
									</dd>
								</dl>
								<dl class="row">
									<dt class="col-sm-3">Category</dt>
									<a href="/category/{{$product->categories->name}}" class="col-sm-9">{{$product->categories->name}} </a>

									<dt class="col-sm-3">Delivery</dt>
									<dd class="col-sm-9">Indonesia, Russia, USA, and Europe </dd>
								</dl>
								<div class="rating-wrap">

									<ul class="rating-stars">
										<li style="width:80%" class="stars-active">
											<i class="fa fa-star"></i> <i class="fa fa-star"></i>
											<i class="fa fa-star"></i> <i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</li>
										<li>
											<i class="fa fa-star"></i> <i class="fa fa-star"></i>
											<i class="fa fa-star"></i> <i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</li>
									</ul>
									<div class="label-rating">132 reviews</div>
									<div class="label-rating">154 orders </div>
								</div> <!-- rating-wrap.// -->
								<hr>

								<form action="/cart" method="post">
									@csrf
									<div class="row">
										<div class="col-sm-4">
											<dl class="dlist-inline">
												<dt>Quantity: </dt>
												<dd>
													<select name="qty" class="form-control form-control-sm" style="width:70px;">
														<option value="1"> 1 </option>
														<option value="2"> 2 </option>
														<option value="3"> 3 </option>
													</select>
												</dd>
											</dl> <!-- item-property .// -->
										</div> <!-- col.// -->
										<div class="col-sm-7">


											<input type="hidden" name="id" value="{{$product->id}}">
											<input type="hidden" name="name" value="{{$product->name}}">
											<input type="hidden" name="price" value="{{$product->price}}">
											<button type="submit" class="btn btn-warning">Add to Cart</button>

										</div> <!-- col.// -->
									</div> <!-- row.// -->
								</form>
								<hr>
								<a href="#" class="btn  btn-outline-warning"> <i class="fa fa-envelope"></i> Contact Supplier </a>
								<!-- short-info-wrap .// -->
							</article> <!-- card-body.// -->
						</aside> <!-- col.// -->
					</div> <!-- row.// -->
				</main> <!-- card.// -->

				<!-- PRODUCT DETAIL -->
				<article class="card mt-3">
					<div class="card-body">
						<h4>Product Description</h4>
						<p>{!!$product->description!!}</p>
					</div> <!-- card-body.// -->
				</article> <!-- card.// -->

				<!-- PRODUCT DETAIL .// -->

				<article class="card mt-3">
					<div class="card-body">
						<h4>You might also like...</h4>
						<div class="row-sm">
							@foreach($alsoLike as $product)
							<div class="col-md-3">
								<a href="/product/{{$product->slug}}">
									<figure class="card h-100 card-product" style="">
										<div class="img-wrap"> <img src="/images/items/{{$product->picture}}"></div>
										<figcaption class="info-wrap">
											<h6 class="title ">{{$product->name}}
											</h6>
											<div class="price-wrap">
												<span class="price-new">Rp. {{$product->presentPrice()}}</span>
											</div> <!-- price-wrap.// -->
										</figcaption>
									</figure> <!-- card // -->
								</a>
							</div> <!-- col // -->
							@endforeach
						</div> <!-- row.// -->
					</div> <!-- card-body.// -->
				</article> <!-- card.// -->
			</div> <!-- col // -->
		</div> <!-- row.// -->



	</div><!-- container // -->
</section>
<!-- ========================= SECTION CONTENT .END// ========================= -->

@endsection