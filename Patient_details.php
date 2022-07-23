<!DOCTYPE html>
<?php include("func.php");?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
   
<div class="jumbotron" style="background:url('images/3.jpg') no-repeat;background-size:cover;height:300px;"></div>
<div class="container">
    <div class ="card">
        <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
        <div class="row">
          <div class="col-md-1">
            <a href="admin-panel.php" class ="btn btn-light">Go Back</a>
          </div>
          <div class="col-md-3"><h3> Patient Details<h3></div>
          <div class="col-md-8"> 
             
</div>
</div></div>
<div class="card-body">

<table class="table table-hover">
  <thead>
    <tr>
      <th >First Name</th>
      <th >Last Name</th>
      <th >Email id</th>
      <th >Contact number</th>
      <th >Doctor</th>
      <th >Payment</th>
    </tr>
  </thead>
  <tbody>
    <?php  get_patient_details();?>
  </tbody>
</table>
</div>

</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>