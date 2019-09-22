<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bootstrap 4 - responsive Contact form</title>
	<link rel="stylesheet" href="{{asset('public/contact/css/bootstrap.min.css')}}">



   <style>
	    body{
	    	background-image: url({{asset('public/contact/image/back.jpg')}});
	    	background-size:cover;
	    }
	    hr{
	    	background: white;	
	    }

		.contact-form{
			background:rgba(0,0,0, .6);
			color:white;
			margin-top: 100px;
			padding: 20px;
			box-shadow: 0px 0px 10px 3px grey;
		}
   </style>


  </head>
<body>
	


<div class="container contact-form">
	<h1>Contact form</h1> 
	<hr>

	<div class="row">
   
       

       <div class="col-md-8">
       	<form action="{{URL::to('/insert-contact')}}" method="post">
          @csrf
         <div class="form-group">
         	<label>Name</label>
         	<input type="text" name="contact_name" class="form-control">
         </div>

         <div class="form-group">
         	<label>Email</label>
         	<input type="text" name="contact_email" class="form-control">
         </div>

         <div class="form-group">
         	<label>Phone</label>
         	<input type="text" name="contact_phone" class="form-control">
         </div>

         <div class="form-group">
         	<label>Massage</label>
         	<textarea  class="form-control" name="msg" rows="7"></textarea>
         </div>

         <div class="form-group">
         	<button class="btn btn-primary btn-block">Send</button>
         </div>
       </form>
       </div>

    </div>

</div>




</body>
</html>
