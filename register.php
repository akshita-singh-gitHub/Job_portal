<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body{
            background-image: url('bg2.jpg') ;
            background-size: cover;
        }
        form{
            justify-content: center;
           background-color: #ffffff85;
            margin-top: 6em;
            margin-left: 14em;
            margin-right: 26em;
            padding: 30px;
            /* box-shadow: 10px 10px 8px 10px #888888; */
        }
    </style>
  </head>
  <body>
    <div class="class">
    <form method="POST">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name </label>
    <input type="text" class="form-control" id="exampleInputName"  name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Phone No. </label>
    <input type="number" class="form-control" id="exampleInputNumber"  name="phone_no">
  </div>
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2">
  </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
 
  <br>
  Already registered? <a href="Login.php">Login</a>
</form>
    </div>
    

   
  </body>
</html>