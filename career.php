<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        .navbar{
  overflow: hidden;
  position: fixed;
  top: 0;
  width: 100%;
}

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Career</title>
</head>
<body>
    <div class="container-fluid">
    <div>
<nav class="navbar navbar-expand-lg bg-light navbar-fixed">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div >
    <img src="career.jpg" alt="" class="img-fluid">
</div>
    </div>

    <table class="table table-striped">

<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Company Name</th>
    <th scope="col">Position</th>
    <th scope="col">CTC</th>
  </tr>
</thead>
<tbody> 

  <?php 
   global $conn;
  $sql="Select * from  jobs";
  $result=mysqli_query($conn,$sql);
  $i = 0;
  if($result->num_rows>0){

    while($rows=$result->fetch_assoc()){
      echo"<tbody>
      <tr>
      <td>".++$i."</td>
      <td>" .$row['position']."</td>
      <td>" .$row['cname']."</td>
      <td>" .$row['Jdecs']."</td>
      <td>" .$row['skills']."</td>
      <td>" .$row['CTC']."</td>
      </tr>";  
  
      // <div class="col-md-4">
      // <div class="jobs">
      // <h3 style="text-align: center;">'.$rows['position'].'</h3>
      // <h4 style="text-align: center;">'.$rows['cname'].'</h4>
      // <p style ="color: black; text-align:justify;">'.$rows['Jdecs'].'</p>
      // <p style ="color: black;"> <b>Skills Required:</b>'.$rows['skills'].'</p>
      // <p style ="color: black;"> <b> CTC::</b>'.$rows['CTC'].'</p>
      // </div>
      // </div>;
    }
  }
   
  
  ?>

</tbody>
  </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>