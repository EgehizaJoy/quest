<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mutuku Water</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish:300,400,600,700,800,900">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body class="Register">
    
<section class="ts-block mt-5 py-5">
    <div class="container"><!-- start of container -->

        <div class="row"><!-- start of row -->

            <div class="col-md-6"> <!-- start of the left side -->
                <table>
                    <thead>
                        <tr>
                        <td><img src="images/v1.svg" ></td>
                        <td><p class="toptext " >Back Home</p></td>
                    </tr>
                    </thead>

               </table>

               <div class="container mt-4">
                <p class="title1">
                Checkout<p>
                </div>

                <div class="container mt-5">
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
                                            <input type="email" id="phone" class="inpt"
                                                        name="mail">
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

                                            <div class="col-md-6">
                                            <label for="phone" class="ft">Mpesa Number</label>
                                            <div >
                                                <input type="phone" id="phone" class="inpt"
                                                        name="phone">
                                            </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </form>
            </div> <!-- left side end -->

            <div class="col-md-6"> <!-- start of the right side -->

                <div class="container" style="margin-top:140px">
                <p class="psi">Your Order</p>
                </div>

            <div class="container">
                <table class="table table-sm table-borderless">
                    <thead>
                        <tr>
                            <td scope="col-md-4">A</td>
                            <td scope="col-md-4"></td>
                            <td scope="col-md-4">C</td>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        

                    </tr>
                </tbody>
                </table>
            </div>
               



            </div> <!-- right side end -->
        </div> <!-- end of row -->
    </div>  <!-- end of container -->

</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>






   <!-- form-->
   <form class="needs-validation"  action="{{ route('lipa',\Cart::getSubTotal())}}"
            onsubmit="return mymodal(this)"
             method="POST" id="recap">
                
            @csrf
                
                 
                <li class="list-group-item d-flex justify-content-between bg-light" >
                    <span>Your Total (Ksh)</span>
                    <span>
        {{\Cart::getSubTotal()}}</span>
                </li><br>
                
                @csrf
                @if(Session::has('user'))
                <div class="mb-3">
                 
                    <input type="phone" class="form-control" 
                     placeholder="e.g 0723123123" style="font-size:14px" name="phone" value="{{Session::get('user')['phone']}}">
                    <div class="invalid-feedback"> Please enter a valid Phone number </div>
                </div>
                 @else
                 <div class="mb-3">
                 
                    <input type="text" class="form-control" 
                     placeholder="e.g 0723123123" style="font-size:14px" name="amount" value="{{\Cart::getSubTotal()}}" hidden >
                    <div class="invalid-feedback"> Please enter a valid Phone number </div>
                </div>

                 <div class="mb-3">
                 
                 <input type="phone" class="form-control" 
                  placeholder="Phone Number e.g 0723123123" style="font-size:14px" name="phone">
                 <div class="invalid-feedback"> Please enter a valid Phone number </div>
             </div>
               
                @endif
                
                
                <button class="btn btn-primary btn-lg btn-block" 
                type="submit" >@lang('Pay Now')</button>
            </form>