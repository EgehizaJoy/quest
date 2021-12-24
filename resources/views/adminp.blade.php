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

<div class="row">
<div class="col-sm-12">

<h5 class="">PBooks</h5>
<button type="button" class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#exampleModal">
  Create
</button>

</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  method="POST" action="{{route('adproducts.store')}}" enctype="multipart/form-data">
      @csrf
               <div class="form-group form-group-md">
					<input class="form-control" type="text" name="product_Name" placeholder="Name">
				</div>

                <div class="form-group form-group-md">
					<input class="form-control" type="text" name="details" placeholder="with tap">
				</div>

                <div class="form-group form-group-md">
					<input class="form-control" type="number" name="InStock" placeholder="Stock">
				</div>

                <div class="form-group form-group-md">
					<input class="form-control" type="text" name="Type" placeholder="still water">
				</div>

                <div class="form-group form-group-md">
					<input class="form-control" type="text" name="capacity" placeholder="12 litre">
				</div>

                <div class="form-group form-group-md">
					<input class="form-control" type="text" name="source" placeholder="spring water">
				</div>

                <div class="form-group form-group-md">
					<input class="form-control" type="number" name="price" placeholder="400">
				</div>

				<div class="form-group">
					<textarea class="form-control" rows="5" cols="30" name="description" placeholder="description"></textarea>
				</div>

				<div class="form-group">
					<textarea class="form-control" rows="5" cols="30" name="nutrition" placeholder="nutrients"></textarea>
				</div>

				<div class="form-group">
					<textarea class="form-control" rows="5" cols="30" name="vitamins" placeholder="vitamins"></textarea>
				</div>

				<div class="form-group">
					<textarea class="form-control" rows="5" cols="30" name="minerals" placeholder="minerals"></textarea>
				</div>
				
				<div class="form-group">
					<input class="form-control" type="file" name="image" >
				</div>

                <div class="form-group">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
  </form>
      </div>
     
    </div>
  </div>
</div>

<!-- end modal -->
<div class="card">

<table class="table">
  <thead>
    <tr>
      <th>#Id</th>
      <th >Name</th>
      <th >Price</th>
      <th >Description</th>
      <th>Image</th>
      <th >Actions</th>
    </tr>
  </thead>
  <tbody>


  @foreach($products as $product)

  <tr class="col-12">
      <td>{{$product->id}}</td>
      <td >{{$product->product_Name}}</td>
      <td >{{$product->price}}</td>
      <td class="tda">{{$product->description}}</td>
      
      <td class="col-4"><img src="{{ asset('storage/images/' . $product->image) }}"
      style="margin-right:0px; width:50px;height:50px"  alt="{{$product->product_Name}}"></td>
      
     
      <td class="col-4"> 
      <a class="btn btn-sm btn-primary " href="# " role="button">EDIT</a>

      <button type="button" class="btn btn-sm btn-danger col-md-3"
      
      onClick="event.preventDefault();
      document.getElementById('delete-user-form-{{$product->id}}').submit()">
        
      Delete
</button>
      
      <form id="delete-user-form-{{$product->id}}" action="{{route('adproducts.destroy', $product->id)}}" method="POST" style="display:none">

        @csrf
        @method("DELETE")

       </form>
      </td>
    </tr>

  @endforeach
  
   
  </tbody>
</table>

{{$products->links()}}
</div>


</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>






