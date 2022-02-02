<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SignUp Form!</title>
    <style type="text/css">
      #signup-div{
        border: 1px solid #fafbfe;
        margin-top: 40px;
        padding: 50px;
        border-radius: 60px 60px;
        background-color: #fafbfe;
        width: 50%;
      }
    </style>
   
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
          <?php require("require/navbar.php") ?>
          
      </div>
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3" id="signup-div">
          <form>
            <h1 class="text-info"><b>Sign Up</b></h1>
            <br>
            <div class="row">
              <div class="col">
                 <label for="exampleFormControlInput1" class="form-label "><b>FullName</b></label>
                <input type="text" class="form-control" placeholder="Full Name">
              </div>
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label"><b>Phone #</b></label>
                <input type="text" class="form-control" placeholder="Phone">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col">
                 <label for="exampleFormControlInput1" class="form-label mt-2"><b>Email</b></label>
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label mt-2"><b>Username</b></label>
                <input type="text" class="form-control" placeholder="Username">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-6">
                 <label for="exampleFormControlInput1" class="form-label mt-2"><b>Create New password</b></label>
                <input type="text" class="form-control" placeholder="create new password">
              </div>
            </div>
             <div class="row">
              <div class="col-sm-6 my-4">
                 <span style=" word-spacing: 0px;" class="px-1">Already Have an Account?</span>
                <a  style="text-decoration: none" class="text-dark px-0" href="">&nbsp;<b>Login</b></a>
                <br>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <input class="form-control btn btn-info text-white rounded-pill px-4" type="submit" value="Login">
              </div> 
            </div>
          </form>
        </div>
        <div class="col-sm-5"></div> 
      </div>   
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
