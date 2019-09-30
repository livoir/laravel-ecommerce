@extends('layout.main')

@section('title', $category->name)

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y-sm">
	<div class="container">
		<header class="section-heading heading-line">
			<h4 class="title-section bg text-uppercase">{{$category->name}}</h4>
		</header>
		<div class="row-sm">
			@foreach($products as $product)
			<div class="col-md-3 col-sm-6">
				<a href="/product/{{$product->slug}}" class="title">
					<figure class="card card-product">
						<div class="img-wrap"> <img src="/images/items/{{$product->picture}}"></div>
						<figcaption class="info-wrap">
							{{$product->name}}
							<div class="price-wrap">
								<span class="price-new">Rp. {{$product->presentPrice()}}</span>
							</div> <!-- price-wrap.// -->
						</figcaption>
					</figure> <!-- card // -->
			</div> <!-- col // -->
			</a>
			@endforeach
		</div> <!-- row.// -->


	</div><!-- container // -->
</section>
@endsection('content')
<!-- ========================= SECTION CONTENT .END// ========================= -->