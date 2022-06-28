<!DOCTYPE html>
<html>
<head>
  <title>Create User</title>

  <link rel="stylesheet" href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
</head>
<body>
       <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1>Create_User</h1>
            <form method="POST" action="">
             <div class="form-group">
              <label>Name:</label>
               <input type="text" name="name" class="form-control" placeholder="Enter Your Name"> 
                </div>
                 <div class="form-group">
                  <label>Phone:</label>
                   <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone No.">  
                    </div> 
                     <div class="form-group">
                     <label>Email:</label>
                     <input type="email" name="email" class="form-control" placeholder="Enter Your Email"> 
                     </div>
                     <div class="form-group">
                    <label>Password:</label>
                   <input type="password" name="password" class="form-control" placeholder="Enter Password"> 
                  </div>
             <input type="submit" name="submit" class="btn btn-primary">
           </form>
          </div>
        </div>
      </div>
</body>
</html>