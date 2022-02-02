<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login Form!</title>
    <style type="text/css">
      #login-div{
        border: 1px solid #fafbfe;
        margin-top: 40px;
        padding: 50px;
        border-radius: 60px 60px;
        background-color: #fafbfe;
      /*  width:27%;*/
      }
      #forgetpassword{
        text-decoration: none;
       
        
      }
     
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
          <?php require("require/navbar.php") ?>
          
        </div>
      </div>
      <div class="row p-5">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" id="login-div">
          <form action="home.php">
             <h1 class="text-info"><b>Log In</b></h1>
            <br>
            <div class="row">
              <div class="col-sm-12">
                 <label for="exampleFormControlInput1" class="form-label "><b>Username</b></label>
                <input type="text" class="form-control" placeholder="Username">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 my-3">
                <label for="exampleFormControlInput1" class="form-label"><b>Password</b></label>
                <input type="text" class="form-control" placeholder="Password">
              </div>
            </div>
             <div class="row">
              <div class="col"></div>
              <div class="col"></div>
              <div class="col">
                <a style="text-decoration: none" href="">ForgetPassword</a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 my-1">
                 <span style=" word-spacing: 0px;" class="px-1">Already Have an Account?</span>
                <a  style="text-decoration: none" class="text-dark px-0" href="">&nbsp;<b>Login</b></a>
                <br>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <input class="form-control btn btn-info text-white rounded-pill px-4 mt-2" type="submit" value="Login">
              </div> 
            </div>
            
          </form>
        </div>
        <div class="col-sm-4"></div>
      </div>   
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  
  </body>
</html>
