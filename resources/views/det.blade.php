<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish:300,400,600,700,800,900">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-- <link rel="stylesheet" href="/css/index.css"> -->
 	<link rel="stylesheet" href="/css/style.css"> 

    <title>Mutuku Water</title>
  </head>
  <body class="Register">

  <?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  ftco-navbar-light site-navbar-target" id="ftco-navbar">
	
				<ul>
				
					<li><a href="#" class="nav-link"><span>Blog</span></a></li>
					<li ><a href="#" class="nav-link"><span>Contact</span></a></li>
          
          <li ><a href="#" class="nav-link"  data-toggle="modal" data-target="#mymodal" >
          <span>REGISTER</span></a></li>
          
          @if(Session::has('user'))
          <li class="dropdown">

            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['fname']}}
            <span class="caret"></span></a>
            
              <li><a href="/logout" style="color:black">Logout</a></li>
           
          </li>
          <li><a href="/checkout">cart({{$total}})</a></li>
          @else
          <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter" >Login</a></li>
          @endif
         				</ul>

               
	</nav>
<!-- modal register -->
<div class="modal" tabindex="-1" role="dialog" id="mymodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="/register" method="POST">@csrf
      <div class="container">
                                    <div class="address">
                                        <div class="row">

                                            <div class="col-md-6">
                                            <label for="fname" class="ft">First Name</label>
                                            <div >
                                                <input type="text" id="fname" class="inpt"
                                                        name="fname">
                                            </div>
                                            </div>

                                            <div class="col-md-6">
                                            <label for="lname" class="ft">Last Name</label>
                                            <div >
                                                <input type="text" id="lnaame" class="inpt"
                                                        name="lname">
                                            </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
       

      </div>
      
      <div class="container">
                                    <div class="address">
                                        <div class="row">

                                            <div class="col-md-6">
                                            <label for="email" class="ft">Email</label>
                                            <div >
                                                <input type="email" id="email" class="inpt"
                                                        name="email">
                                            </div>
                                            </div>

                                            <div class="col-md-6">
                                            <label for="password" class="ft">Password</label>
                                            <div >
                                                <input type="password" id="password" class="inpt"
                                                        name="password">
                                            </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                
                                
                        <button type="submit" class="btn" >REGISTER</button>

      </div>
      </form>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<!-- modal login -->
  <div class="modal" tabindex="-1" role="dialog" id="exampleModalCenter">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/login" method="post">@csrf
      <div class="container">
                                    <div class="address">
                                        <div class="row">

                                            <div class="col-md-6">
                                            <label for="email" class="ft">Email</label>
                                            <div >
                                                <input type="email" id="email" class="inpt"
                                                        name="email">
                                            </div>
                                            </div>

                                            <div class="col-md-6">
                                            <label for="passwors" class="ft">Password</label>
                                            <div >
                                                <input type="password" id="password" class="inpt"
                                                        name="password">
                                            </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        <button type="submit" class="btn" >LOG IN</button>
</form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
  
<!-- start of section -->
<section class="ts-block mt-5 py-5">

 <div class="container"><!-- start of container -->

  <div class="row"><!-- start of row -->

<div class="col-md-6"> <!-- start of the left side -->

<div class="row">
<div class="container">
<div class="col-md-2">
<img src="/images/v1.svg" >

</div>


<div class="col-md-8">
<p class="toptext " >Back Home</p>

</div>
</div>
</div>


    <div>
    <img  class="prdimg1 img-fluid" src="{{ asset('storage/images/' . $product['image']) }}">
   </div>

   <div >
    <p class="cuctomereview">Customer's Reviews</p>
   </div>

   <div class="container">
   <div class="dvicuctomereview csmreviews">
   <div class="container">  
    <p class="reviewname">Alexander</p>
  
    <div class="reviews">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
         Mauris hendrerit condimentum sapien ut convallis.
    </div>
  
    <p class="reviewtime">February 10, 2021 </p>
  </div>

    
   </div>
</div>
<!---->

<div class="container">
   <div class="dvicuctomereview csmreviews">
   <div class="container">  
    <p class="reviewname">Alexander</p>
  
    <div class="reviews">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
         Mauris hendrerit condimentum sapien ut convallis.
    </div>
  
    <p class="reviewtime">February 10, 2021 </p>
  </div>

    
   </div>
</div>
<!---->

<div class="container">
   <div class="dvicuctomereview csmreviews">
   <div class="container">  
    <p class="reviewname">Alexander</p>
  
    <div class="reviews">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
         Mauris hendrerit condimentum sapien ut convallis.
    </div>
  
    <p class="reviewtime">February 10, 2021 </p>
  </div>

    
   </div>
</div>
<!---->

<div class="container text-center">
     <button class="btnshowall">Show All</button>
    </div>
</div><!-- end of left side -->

<div class="col-md-6"> <!-- start of the rigth side -->
  <div class="container">
    <p class="prdcname">{{$product['product_Name']}}</p>

    <p class="prdextradetail">{{$product['details']}}</p>
  

        <div class="row">
            <div class="col-md-3">
              @if($product['inStock']>0)
              <div class="prdstockbtn "><p class="prdstocktext">Out of Stock</p></div>
              @else
              <div class="prdstockbtn "><p class="prdstocktext">In Stock</p></div>
              @endif
            </div>

            <div class="col-md-9">
              <p class="deliveryperiod">Delivery: 2 - 5 Hours</p>

            </div>
       </div>

       <!-- continue here -->
            <div class="row">

                <div class="col-md-6">
                  <div class="extraprddetailtitlebox">
                    <p class="extraprddetailtitle">Type:</p>
                    <p class="extraprddetailtitle">Capacity:</p>
                    <p class="extraprddetailtitle">Source:</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="extraprddetailbox">
                    <p class="extraprddetail">{{$product['Type']}}</p>
                    <p class="extraprddetail">{{$product['capacity']}}</p>
                    <p class="extraprddetail">{{$product['source']}}</p>
                  </div>
                <div>
  
            </div>
            </div>
        <!------------------>
        @if(Session::has('user'))
            <div class="container">
              <div class="carttitals">
                <div class="row">

                  <div class="col-md-6">
                    <p class="totalcost mt-5">Total: Ksh. {{$product['price']}}</p>
                    <p class="ttlcosts">@Ksh. {{$product['price']}}</p>
                  </div>

                  

                  <div class="col-md-3 mt-5 text-center">
                      <div class="input-group cartqtybtn">
                       
                      
                        <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="number" name="qty" id="qty" value="1" min="1" class="form-control" >
                        <input type="number" name="user_id" id="user_id" value="{{Session::get('user')['id']}}" hidden >
                      </div>
                  </div>

                  <div class="col-md-3 mt-5 text-center">
                 
                          <input type="hidden" name="product_id" value={{$product['id']}}>
                          
                          <button class="btnadtocart"><p class="addtocart">
                            Add to cart</p>
                          </button>

                        </form>
                        
                  </div>

                </div>
              </div>
            </div>
            <!------------------------------------>

            
            @else
                       
                          
          <!------------------>
         
            <div class="container">
              <div class="carttitals">
                <div class="row">

                  <div class="col-md-6">
                    <p class="totalcost mt-5">Total: Ksh. {{$product['price']}}</p>
                    <p class="ttlcosts">@Ksh. {{$product['price']}}</p>
                  </div>

                  

                  <div class="col-md-3 mt-5 text-center">
                      <div class="input-group cartqtybtn">
                       
                      
                       
                        <input type="number" name="qty" id="qty" value="1" min="1" class="form-control" >
                      
                      </div>
                  </div>

                  <div class="col-md-3 mt-5 text-center">
                 
                        
                           <button class="btnadtocart" data-toggle="modal" data-target="#Addcart"><p class="addtocart">
                                Add to cart</p>
                              </button>

                        
                        
                  </div>

                </div>
              </div>
            </div>
            <!------------------------------------>
                          <!-- modal login -->
                          <div class="modal" tabindex="-1" role="dialog" id="Addcart">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                          <form action="/login" method="post">@csrf
                                          <div class="container">
                                            <div class="address">
                                                <div class="row">

                                            <div class="col-md-6">
                                            <label for="email" class="ft">Email</label>
                                            <div >
                                                <input type="email" id="email" class="inpt"
                                                        name="email">
                                            </div>
                                            </div>

                                            <div class="col-md-6">
                                            <label for="passwors" class="ft">Password</label>
                                            <div >
                                                <input type="password" id="password" class="inpt"
                                                        name="password">
                                            </div>
                                            </div>

                                        </div>
                                                    </div>
                                                </div>
                                        <button type="submit" class="btn" >LOG IN</button>
                                              </form>
                                                    </div>
                                                    <div class="modal-footer">
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>     
                          
                       @endif

            <div>
             <p class="description">Description</p>
            </div>

            <!-------------------->

            <div class="container">
              <p class="prcdescription">

              {{$product['description']}}
              </p>

            </div>

            <!----------------->

            <div class="container">
              <table class=" table table-borderless" style="margin-top:85px">
                <thead>
                  <tr>
                    <td scope="col"><p class="nutrisinvalue">Nutritional Value:</p></td>
                    <td scope="col"></td>
                    <td scope="col">
                      <div class="w3-dropdown-hover" style="background-color:#FAFAFA">
                          <img src="/images/arrow1.svg" class="dropdownbtn">
                              <div class="w3-dropdown-content" style="right:0;">
                            
                                <div  style="margin-top:30px">
                                  <p style="white-space: pre-line">{{$product['nutrition']}}</p>
                                
                                </div>
                              </div>
                        </div>
                    </td>
                  
                  </tr>

                  <tr>
                    <td scope="col"><p class="nutrisinvalue">Vitamins:</p></td>
                    <td scope="col"></td>
                    <td scope="col">
                      <div class="w3-dropdown-hover" style="background-color:#FAFAFA">
                          <img src="/images/arrow1.svg" class="dropdownbtn">
                              <div class="w3-dropdown-content" style="right:0;">
                            
                                <div style="margin-top:30px">
                                  <p style="white-space: pre-line">{{$product['vitamins']}}</p>
                                
                                </div>
                              </div>
                        </div>
                    </td>
                  
                  </tr>

                  <tr>
                    <td scope="col"><p class="nutrisinvalue">Minerals:</p></td>
                    <td scope="col"></td>
                    <td scope="col">
                      <div class="w3-dropdown-hover" style="background-color:#FAFAFA">
                          <img src="/images/arrow1.svg" class="dropdownbtn">
                              <div class="w3-dropdown-content" style="right:0;">
                            
                                <div style="margin-top:30px">
                                  <p style="white-space: pre-line">{{$product['minerals']}}</p>
                                
                                </div>
                              </div>
                        </div>
                    </td>
                  
                  </tr>
                </thead>

                <tbody>
                      <tr>
                            <td scope="col"></td>
                            <td></td>
                             <td scope="col"> </td>
                       </tr>
                </tbody>
              </table>
            </div>


  </div><!-- end of container -->
</div><!-- end of right side -->


</div><!-- end of row -->
</div>


</section>

<!-- end of section -->

<section class="ts-block mt-5 py-5">

  <div class="container">
    <div class="divnxtsec">

    </div>

  </div>
  <div class="container">
    <p class="pal">People also like</p>
  </div>
</section>

<section>
		<div class="container" style="margin-top:50px" >
		
			<div class="row mb-5">
			@foreach($products as $product)
			
				<div class="col-md-3">
					<div class="card" style="width:100%;height:217px;border-radius:18px;">
						<div class="text-center"><img src="{{ asset('storage/images/' . $product->image) }}" class="card-img-top img-fluid" alt="..."></div>
						<div class="card-body">
						<h5 class="card-title text-center">{{$product->product_Name}}</h5>
						<p class="card-text text-center text-secondary text-opacity-50 fs-6">{{$product->details}}</p>
						<p class="text-left text-primary fw-bold">Ksh. {{$product->price}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
    @endforeach
	</section>

 

    <script src="js/bootstrap.min.js"></script>
 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    
    
    <script src="js/main.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

  </body>
</html>
