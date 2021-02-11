<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <title>User Login</title>
</head>
<body>
  <div class="container" style="background:gray; width: 60%; padding-bottom: 30px">
    <div class="row">
      <div class="col-lg-4 mx-auto">
        <h2 class="mt-3">User Login</h2>
        <form method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <input type="button" id="btns" class="btn btn-success" value="Login">
        </form>
      </div>
    </div>
    <div class="row" id="result">
      
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#btns").click(function(){
        var email = $("#email").val();
        var password = $("#password").val();
        $.post('login_check.php',{email:email, password:password}, function(data){
          $("#result").html(data);
        });
      });
    });
  </script>
</body>
</html>