<!DOCTYPE html>
<html>
<head>
  <title>All User</title>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
      <div class="container">
        <h1>All_User</h1>
        <a href="create_user" type="button" class="btn btn-success btn-sm float-right"><i class="fa fa-plus">
        </i>New</a>
      <table class="table table-bordered">
       <thead>
        <tr class="info">
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead><br>
      <tbody>
        <?php
         
        foreach ($result as $row) {
          echo
          '<tr>
              <td>' .$row['name']. '</td>
              <td>' .$row['phone'].'</td>
              <td>' .$row['email'].'</td>
              <td>
                <a href="update_user?uid='.$row['id'].'" class="btn btn-primary  btn-xs"><span class="fa fa-tag"></span></a>
                 <a href="delete_user?did='.$row['id'].'" class="btn btn-danger btn-xs" role="button">
                 <span class="fa fa-trash-o"></span></a>'
                 ?>
               </td>
              </tr>
            <?php
            }
         ?>
      </tbody>
     </table>
    </div>
</body>
</html>
