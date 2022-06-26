<?php include 'header.php'  ?>

<div class="content">
<p>
  <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a> -->
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   Post Job
  </button>

</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name </label>
    <input type="text" class="form-control"  name="cname" >
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="Position" class="form-control" id="exampleInputPosition" name="pos">
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="Jdesc"></textarea>
  <label for="floatingTextarea">Job Description</label>
</div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Skill Required </label>
    <input type="text" class="form-control" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" name="CTC">
  </div>
  
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>

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

   $sql="Select cname,position,CTC from jobs";
   $result=mysqli_query($conn,$sql);
   if($result->num_rows>0){

while($row=$result->fetch_assoc()){
   $i=0;
   echo"<td>".++$i."</td>
   <td>" .$rows['cname']."</td>
   <td>" .$rows['position']."</td>
   <td>" .$rows['CTC']."</td>";   
 } }


   ?>
           
  </tbody>
</table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html> 
