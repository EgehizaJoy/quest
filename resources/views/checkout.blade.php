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

	<link rel="stylesheet" href="css/style.css">
  <script data-require="jquery" data-semver="2.1.4" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  
  <script src="js/index.js"></script>
 
    <title>Mutuku Water</title>
  </head>
  

  <body class="Register">
  


  <section class="ts-block mt-5 py-5">

 <div class="container"><!-- start of container -->

  <div class="row"><!-- start of row -->

<div class="col-md-6"> <!-- start of the left side -->


<div class="row">
<div class="container">

<div class="col-md-2">
<img src="images/v1.svg" >
</div>


<div class="col-md-8">
<p class="toptext " >Back Home</p>
</div>

</div>
</div>

<div class="container">
<p class="title1">
Checkout<p>
</div>

<div class="container" style="margin-top:30px">
<p class="psi">Personal Information</p>
</div>


<form>

<div class="container">
  <div class="address">
<div class="row" >

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
      <input type="text" id="lname" class="inpt"
             name="lname">
</div>
</div>

</div>
</div>
</div>

<div class="container">
  <div class="address">
<div class="row" >

<div class="col-md-6">
<label for="pgone" class="ft">Phone</label>
<div >
      <input type="phone" id="phone" class="inpt"
            name="phone">
</div>
</div>

<div class="col-md-6">
<label for="email" class="ft">Email</label>
<div >
      <input type="email" id="email" class="inpt"
             name="email">
</div>
</div>

</div>
</div>
</div>

<div class="container">
    <div style="margin-top:55px">
<p class="psi">Delivery Details</p>
</div>
</div>

<div class="container">
<p class="tsa">This is a</p>
</div>

<div class="container">
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label rb" for="flexRadioDefault1">
   Home Delivery
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label rb" for="flexRadioDefault2">
    Office Delivery
  </label>
</div>
</div>



<div class="container">
  <div class="address">
<div class="row">

<div class="col-md-6">
<label for="county" class="ft">County</label>
<div >
      <input type="text" id="county" class="inpt"
            name="county">
</div>
</div>

<div class="col-md-6">
<label for="town" class="ft">Town/City</label>
<div >
      <input type="text" id="town" class="inpt"
             name="town">
</div>
</div>

</div>
</div>
</div>


<div class="container">
  <div class="address">
<div class="row">

<div class="col-md-6">
<label for="road" class="ft">Road/ House Number</label>
<div >
      <input type="text" id="road" class="inpt"
            name="road">
</div>
</div>

<div class="col-md-6">
<label for="addinfo" class="ft">Additional Information</label>
<div >
      <textarea class="inpt"></textarea>
</div>
</div>

</div>
</div>
</div>


<div class="container">
  <div class="address">
<div class="row" >

<div class="col-md-6">
<label for="deliveryday" class="ft">Expected Delivery Day</label>
<div >
      <input type="date" style="color:grey" id="deliveryday" class="inpt"
            name="deliveryday">
</div>
</div>

<div class="col-md-6">
<label for="deliverytime" class="ft">Select Delivery Time</label>
<div >
      <input type="time" id="deliverytime" class="inpt"
             name="deliverytime">
</div>
</div>

</div>
</div>
</div>


<div class="container">
    <div style="margin-top:55px">
<p class="psi">Payment</p>
</div>
</div>

<div class="container">
  <div class="address">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Cash on Delivery
  </label>
</div>
</div>

<div class="address">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Mpesa
  </label>
</div>
</div>
</div>



<div class="container">
  <div class="address">
<div class="row" >

<div class="col-md-6">
<label for="pgone" class="ft">Name</label>
<div >
      <input type="text" id="name" class="inpt"
            name="name">
</div>
</div>
</form>
<!-------------->
<div class="col-md-6">
<label for="phone" class="ft">Mpesa Number</label>
<div >
<!------------TOTALS------------->
@php
    $total = 0;
@endphp

@foreach($products as $item)

<input type="number" class="cartbtn" value="{{$item->cart_qty}}" hidden>
@php
    $total += $item->price * $item->cart_qty;
@endphp

@endforeach


<!------------MPESA FORM ------------>
<form class="needs-validation"  action="{{ route('lipa',$total)}}"
            onsubmit="return mymodal(this)"
             method="POST" id="recap">
                
             <input type="phone" id="phone" class="inpt"
             name="phone">
</div>
</div>

</div>
</div>
</div>



</div><!-- end of left side -->


<div class="col-md-6"> <!-- start of the right side -->



<!-- your subtotals -->
<div class="container" style="margin-top:130px">
<p class="psi">Your Order</p>
</div>

<div class="container">
<div class="row">
 
  <div class="col-md-10">
<div class="extraprddetailtitlebox">
<p class="extraprddetail">Subtotal</p>
<p class="extraprddetail">Delivery fee</p>
</div>
</div>

<div class="col-md-2">
<div class="extraprddetailbox">

<p class="extraprddetail">Ksh. {{ $total }}</p>
<p class="extraprddetail">Ksh. 470</p>
</div>
<div>

</div>
</div>

<!-- end--->
<div class="container">
<div class="Line1"></div></div>

<!--total -->
<div class="container">
<div class="row">
 
  <div class="col-md-9">
<div class="extraprddetailtitlebox">
<p class="ttl">Total</p>
</div>
</div>

<div class="col-md-3">
<div class="extraprddetailbox">
<p class="ttl"></p>
</div>
<div>


</div>
</div>
<!-- end -->

          
     

<!-- button -->
<button class="btn btn-primary btn-lg btn-block" 
                type="submit" >@lang('Pay Now')</button>



<!-- end -->

</form>

<button class="placeorder">
  <p class="plc">Place Order</p>
</button>
<div class="container" style="margin-top:78px">
<p class="psi">Cart</p>
</div>

<!-- cart -->

<table class=" table-sm table-borderless" >
<thead>
<tr>
<td scope="col"></td>
<td scope="col"></td>
<td scope="col"></td>
</tr>
</thead>


@foreach($products as $item)




<tbody>
  
<tr>
<td scope="col"><img src="{{ asset('storage/public/' . $item->image) }}"
 alt="{{$item->product_Name}}" class="img-fluid rounded"  width="50"  height="93"></td>

<td scope="col">
  <p class="itemname">{{$item->product_Name}}</p>
 
 <!-- <input type="number" min="0" class="cartbtn" id="quantity" value="{{$item->cart_qty}}">
  <input type="text" class="form-control" id="price" value="{{ $item->price}}" readonly>
  <input type="text" class="form-control" id="subTotal" value="{{ $item->price * $item->cart_qty}}"> -->
 
  <input type="text" class="form-control" id="price" value="{{ $item->price}}" hidden readonly>
  <input type="number" id="quantity" name="quantity" class="cartbtn" value="{{$item->cart_qty}}" min="1" max="10" >
 
        
</td>

<td scope="col">
<a href="/removecart/{{$item->cart_id}}" style="text-decoration: none;"
class="close" ><span aria-hidden="true">&times;</span></a>
<!--<button type="button" class="close" >
          <span aria-hidden="true">&times;</span>
        </button>--><br><br>
        <p class="itemname float-right">Ksh. {{ $item->price * $item->cart_qty}} </p> 
            

</td>

</tr>
</tbody>



@endforeach
</table>


<!-- end -->

</div><!-- end of right side -->


</div><!-- end of row -->

</div><!-- end of container -->

</section>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    
    
    <script src="js/main.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	
  </body>
</html>
