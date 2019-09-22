<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<div class="container">
 <h4 align="center" style="color: red">
                <?php  
                    $message=Session::get('message');
                       if($message){
                            echo $message;
                            Session::put('message',null);
                       }
                ?>
</h4>
 <form action="{{URL::to('/admin-register')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="admin_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="admin_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="admin_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>














<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>