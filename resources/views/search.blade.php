@extends('layout.main')

@section('title', 'Search')

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y-sm">
	<div class="container">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-3-24"> <strong>Filter by:</strong> </div> <!-- col.// -->
					<div class="col-md-21-24">
						<ul class="list-inline">
							<li class="list-inline-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Supplier type </a>
								<div class="dropdown-menu p-3" style="max-width:400px;"">	
		      <label class=" form-check">
									<a href="#">
										<input type="checkbox" class="form-check-input"> Good supplier
									</a>
									</label>
									<label class="form-check">
										<a href="#">
											<input type="checkbox" class="form-check-input"> Best supplier
										</a>
									</label>
									<label class="form-check">
										<a href="#">
											<input type="checkbox" class="form-check-input"> New supplier
										</a>
									</label>
								</div> <!-- dropdown-menu.// -->
							</li>
							<li class="list-inline-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Country </a>
								<div class="dropdown-menu p-3" style="max-width:400px;"">	
		      <label class=" form-check">
									<a href="#">
										<input type="checkbox" class="form-check-input"> China
									</a>
									</label>
									<label class="form-check">
										<a href="#">
											<input type="checkbox" class="form-check-input"> Japan
										</a>
									</label>
									<label class="form-check">
										<a href="#">
											<input type="checkbox" class="form-check-input"> Uzbekistan
										</a>
									</label>
									<label class="form-check">
										<a href="#">
											<input type="checkbox" class="form-check-input"> Russia
										</a>
									</label>
								</div> <!-- dropdown-menu.// -->
							</li>
							<li class="list-inline-item"><a href="#">Product type</a></li>
							<li class="list-inline-item"><a href="#">Brand name</a></li>
							<li class="list-inline-item"><a href="#">Color</a></li>
							<li class="list-inline-item"><a href="#">Size</a></li>
							<li class="list-inline-item">
								<div class="form-inline">
									<label class="mr-2">Price</label>
									<input class="form-control form-control-sm" placeholder="Min" type="number">
									<span class="px-2"> - </span>
									<input class="form-control form-control-sm" placeholder="Max" type="number">
									<button type="submit" class="btn btn-sm ml-2">Ok</button>
								</div>
							</li>
						</ul>
					</div> <!-- col.// -->
				</div> <!-- row.// -->
			</div> <!-- card-body .// -->
		</div> <!-- card.// -->

		<div class="padding-y-sm">
			<span>{{$products->count()}} result(s) for "{{request()->input('query')}}"</span>
		</div>

		<div class="row-sm">
			@foreach($products as $product)
			<div class="col-md-3 col-sm-6">
				<a href="/product/{{$product->slug}}" class="title">
					<figure class="card card-product">
						<div class="img-wrap"> <img src="images/items/{{$product->picture}}"></div>
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
		<ul class="nav justify-content-center">
			<li class="nav-item">
				{{$products->appends(request()->input())->links()}}

			</li>
		</ul>
	</div><!-- container // -->
</section>
@endsection('content')
<!-- ========================= SECTION CONTENT .END// ========================= -->