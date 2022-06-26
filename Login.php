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
    <form>
 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
 
  <br>
  <p style=" text-align: center;"> New User ? 
  <br>
  Create Account<a href="register.php">Sign Up</a></p>
</form>
    </div>
    
  </body>
</html>