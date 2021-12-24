<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish:300,400,600,700,800,900">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700">

	<link rel="stylesheet" href="css/index.css">
 
    <title>Mutuku Water</title>
  </head>
  

  <body>



		<!--Product Catalogue Start-->
	<section class="catalogue_container">
		<div class="container" >
			<h2 class="Product-Catalogue">Product Catalogue</h2>
			<div class="row mb-5">
				<div class="col-md-2">
					<div class="all">All</div>
				</div>
				<div class="col-md-2">
					<div>Refillable</div>
				</div>
				<div class="col-md-2">
					<div class="still">Still Water</div>
				</div>
				<div class="col-md-2">
					<div class="small">Small</div>
				</div>
		
</div>
@foreach($products as $product)

  
          <div class="row">
			
				<div class="col-md-3" style="margin-top:80px">
					<div class="card" style="width:243px;height:217px;border-radius:18px;">
					<a href="det/{{$product['id']}}">	<div class="text-center"><img src="{{ asset('storage/images/'.$product->image) }}" class="card-img-top" alt="..."></div></a>
						<div class="card-body">
						<h5 class="card-title text-center">{{$product->product_Name}}</h5>
						<p class="card-text text-center text-secondary text-opacity-50 fs-6">{{$product->detail}}</p>
						<p class="text-left text-primary fw-bold">{{$product->price}}</p>
						</div>
					</div>
				</div>
			</div>

			@endforeach
		</div>
		
	</section>
	<!--Product Catalogue End-->

    
  </body>
</html