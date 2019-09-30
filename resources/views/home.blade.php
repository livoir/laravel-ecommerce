@extends('layout.main')

@section('title', 'E-Commerce')

@section('content')
<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-y-sm">
	<div class="container">
		<div class="card">
			<div class="card-body">
				<div class="row row-sm">
					<div class="col">
						<!-- ================= main slide ================= -->
						<div class="owl-init slider-main owl-carousel" data-items=" 1" data-nav="true" data-dots="false">
							<div class="item">
								<img src="images/banners/banner1.jpg">
							</div>
							<div class="item">
								<img src="images/banners/banner2.jpg">
							</div>
							<div class="item">
								<img src="images/banners/banner3.png">
							</div>
						</div>
						<!-- ============== main slidesow .end // ============= -->
					</div> <!-- col.// -->
				</div> <!-- row.// -->
			</div> <!-- card-body .// -->
		</div> <!-- card.// -->
	</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION MAIN END// ========================= -->



<!-- ========================= SECTION ITEMS ========================= -->
<section class="section-request bg padding-y-sm">
	<div class="container">
		<header class="section-heading heading-line">
			<h4 class="title-section bg text-uppercase">Recommended items</h4>
		</header>
		<div class="row-sm">
			@foreach($products as $product)
			<div class="col-md-3">
				<a href="/product/{{$product->slug}}">
					<figure class="card h-100 card-product" style="">
						<div class="img-wrap"> <img src="images/items/{{$product->picture}}"></div>
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
		<br>
		<ul class="nav justify-content-center">
			<li class="nav-item">
				{{$products->links()}}

			</li>
		</ul>
	</div><!-- container // -->

</section>

<!-- ========================= SECTION ITEMS .END// ========================= -->

@endsection('content')