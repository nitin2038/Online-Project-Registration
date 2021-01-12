<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>STUDENT-Log in</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<style>
		body,
		html {
			height: 100%;
	    text-align: center;
			font-family: "Inconsolata", sans-serif;
	    h1 {text-align: center;}
	    
		}
		
		.bgimg {
			background-position: center;
			background-size: cover;
			min-height: 75%;
		}
		
	  body {
	  background-color: lightpink;
	}
		.menu {
			display: none;
		}
	</style>
</head>
 
</head>
<body class="hold-transition login-page">
	<h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">DEPARTMENT OF<b> COMPUTER SCIENCE</b></h5>
<br></br>
<div class="login-box">
 
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form id="loginform" action="scripts/login-student.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="sid" id="studentid" class="form-control" placeholder="ID number">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <p id="uval"></p>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <p id="pval"></p>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="../login.php" class="text-center">Not a student?</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="js/jquery-1.12.4.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="js/login-validation.js"></script>
<script type="text/javascript">
function do_login()
{
 var id=$("#studentid").val();
 var pass=$("#password").val();
 if(id!="" && pass!="")
 {
  
  $.ajax({
  type:'post',
  url:'scripts/login-student.php',
  data: $(this).serialize(),
  success:function(data) {
  if(data === 'success')
  {
    window.location.href="home.php";
  }
  else
  {
    //$("#loading_spinner").css({"display":"none"});
    alert("Wrong Details");
  }
  }
//})
  });
 }

 else
 {
  alert("Please Fill All The Details");
 }

 return false;
}
</script>
</head>
<body>
</body>
</html>
