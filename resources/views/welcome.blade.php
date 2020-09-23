<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact us</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/9daceba5de.js"></script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<body>
    <form method="post" action="{{route('welcome.store')}}">
{{csrf_field()  }}

<div class="container">
<h1 class="badge-primary">You Can Contact here </h1>


<div  class="form-group text-dark">

<label class="badge badge-dark"><i class="fa fa-user fa-2x"></i> Name:</label>

    <input type="text" name="" class="form-control" >
</div>
<div  class="form-group text-dark">

<label class="badge badge-dark"><i class="fa fa-lock fa-2x"></i> Adress:</label>

    <input type="text" name="" class="form-control" >
</div>
<div  class="form-group text-dark">

<label class="badge badge-dark ml-2"><i class="fa fa-lock fa-2x"></i> Subject:</label>

    <input type="password" name="" class="form-control" >
</div>
<div  class="form-group text-dark">

<label class="badge badge-dark"><i class="fa fa-envelope fa-2x"></i> Email Id:</label>

    <input type="text" name="" class="form-control" >
</div>
<div  class="form-group text-dark">

<label class="badge badge-dark"><i class="fa fa-phone fa-2x"></i> Mobile No:</label>

    <input type="text" name="" class="form-control" >
</div>
<div class="form-group ">
 <label class="badge badge-dark">Your Message </label>   
<textarea class="container">
    



</textarea>

</div>



    
</div>
<div class="container">
    <label class="text-info">Check here</label>
        <input class="btn btn-dark" type="checkbox">
<br>

<label>Male</label>
        <input type="radio" name="gender" id="male" value="male">
        <label>Female</label>
        <input type="radio" name="gender" id="Female" value="Female">

        </div>
        <div class="container">
        <button class="btn btn-danger">Send<span class="badge-pill"><i class="fa fa-user-plus" aria-hidden="true"></i></span></button>   
        </div>  
        </div>
      
        </div>
    
</div></form>
    </body>
</html>
