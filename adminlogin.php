
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
    include 'connection.php';
    global $conn;
    if (isset($_POST['login'])) {
        $name = $_POST['adminname'];
        $passward = $_POST['adminpassward'];
        $select_query = "select * from user where U_username = '$name' and U_passward = '$passward'";
        $data = mysqli_query($conn, $select_query);
        if (mysqli_num_rows($data) == 1) {
            while ($row = mysqli_fetch_assoc($data)) {
                if (mysqli_num_rows($data) == 1 &&  ''.$row['status'].'' == 'Active' && ''.$row['U_role'].'' == 'Super Admin' ) {
                    header("Location:./admin_pannel/Superadmin_Dashboard.php");
                }
                else if (mysqli_num_rows($data) == 1 &&  ''.$row['status'].'' == 'Active' && ''.$row['U_role'].'' == 'Ground Owner' ) {

                    header("Location:./admin_pannel/GroundOwner_Dashboard.php");
                }
                else if (mysqli_num_rows($data) == 1 &&  ''.$row['status'].'' == 'Active' && ''.$row['U_role'].'' == 'Academy Owner' ) {
                    header("Location:./admin_pannel/AcademyOwner_Dashboard.php");
                }
                else if(mysqli_num_rows($data) == 1 &&  ''.$row['status'].'' == 'In-active'){
                    function alert(){
                        echo '
                        <script type="text/javascript">
                            $(document).ready(function (e) {
                                swal("Your Registration Is Not Confirmed", "Please contact admin to confirm your registration!", "warning");
                            });
                        </script>';
                    }
                    alert();
                }
                
            }
        }
        else{
            function alert1(){
                echo '
                <script type="text/javascript">
                    $(document).ready(function (e) {
                        swal("Wrong User name or Passward", "Please chech user name and passward!", "error");
                    });
                </script>';
            }
            alert1();
        }
        
        session_start();
        $select_id_query = "select U_id from user where U_username = '$name' and U_passward = '$passward'"; 
        $data_user_id = mysqli_query($conn, $select_id_query);
        if (mysqli_num_rows($data_user_id) > 0) {
           while ($row = mysqli_fetch_assoc($data_user_id)) {
              $user_id = $row['U_id'];
              $_SESSION['user_id'] = $user_id;
           }
        }
    }

    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $passward = $_POST['passward'];
        $confirm_passward = $_POST['confirm_passward'];
        $contact = $_POST['contact'];
        $role =$_POST['role'];
        if ($passward == $confirm_passward) {
            $insert_query  = "insert into user(U_name,U_username,U_passward,U_email,U_contact,U_role,status) Values ('$name','$user_name','$passward','$email','$contact','$role','In-active')";
            $data = mysqli_query($conn,$insert_query);
            if ($data) {
                function alert(){
                    echo '
                    <script type="text/javascript">
                        $(document).ready(function (e) {
                            swal("User Registered Successfully", "Please wait until you active", "success");
                        });
                    </script>';
                }
                alert();
            }
        }
        else{
            function alert(){
                echo '
                <script type="text/javascript">
                    $(document).ready(function (e) {
                        swal("Passward Not Match", "Please check passward and confirm passward!", "error");
                    });
                </script>';
            }
            alert();
        }

    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>		   
        @import url('https://fonts.googleapis.com/css?family=Mukta');
        .login-body{ font-family: 'Mukta', sans-serif; height:100vh;
         min-height:550px; background-image: url
         (http://www.planwallpaper.com/static/images/Free-Wallpaper-Nature-Scenes.jpg);
         background-repeat: no-repeat; background-size:cover;
         background-position:center; position:relative; overflow-y:
         hidden; }
        .login-reg-panel{
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        	text-align:center;
            width:70%;
        	right:0;left:0;
            margin:auto;
            height:400px;
            background-color: #4e73df;
        }
        .white-panel{
            background-color: rgba(255,255, 255, 1);
            height:500px;
            position:absolute;
            top:-50px;
            width:50%;
            right:calc(50% - 50px);
            transition:.3s ease-in-out;
            z-index:0;
            box-shadow: 0 0 15px 9px #00000096;
        }
        .login-reg-panel input[type="radio"]{
            position:relative;
            display:none;
        }
        .login-reg-panel{
            color:white;
        }
        .login-reg-panel #label-login, 
        .login-reg-panel #label-register{
            border:3px solid #9E9E9E;
            padding:5px 5px;
            width:150px;
            display:block;
            text-align:center;
            border-radius:10px;
            cursor:pointer;
            font-weight: 600;
            font-size: 18px;
            border-style: dotted;
        }
        .login-info-box{
            width:30%;
            padding:0 50px;
            top:20%;
            left:0;
            position:absolute;
            text-align:left;
        }
        .register-info-box{
            width:30%;
            padding:0 50px;
            top:20%;
            right:0;
            position:absolute;
            text-align:left;
            
        }
        .right-log{right:50px !important;}

        .login-show, 
        .register-show{
            z-index: 1;
            display:none;
            opacity:0;
            transition:0.3s ease-in-out;
            color:#242424;
            text-align:left;
            padding:50px;
        }
        .show-log-panel{
            display:block;
            opacity:0.9;
        }
        .login-show input[type="text"], .login-show input[type="password"]{
            width: 100%;
            display: block;
            margin:20px 0;
            padding: 15px;
            border: 1px solid #b5b5b5;
            outline: none;
        }
        .login-show input[type="button"] {
            max-width: 150px;
            width: 100%;
            background: #4e73df;
            color: #f9f9f9;
            border: none;
            padding: 10px;
            text-transform: uppercase;
            border-radius: 2px;
            float:right;
            cursor:pointer;
            outline: none;
        }
        .login-show a{
            display:inline-block;
            padding:10px 0;
        }

        .register-show input[type="text"], .register-show input[type="password"]{
            width: 100%;
            display: block;
            margin:10px 0;
            padding: 5px;
            border: 1px solid #b5b5b5;
            outline: none;
        }
        .register-show input[type="button"] {
            max-width: 150px;
            width: 100%;
            background: #4e73df;
            color: #f9f9f9;
            border: none;
            padding: 10px;
            text-transform: uppercase;
            border-radius: 2px;
            float:right;
            cursor:pointer;
        }
        .credit {
            position:absolute;
            bottom:10px;
            left:10px;
            color: #3B3B25;
            margin: 0;
            padding: 0;
            font-family: Arial,sans-serif;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1px;
            z-index: 99;
        }
        .forgot-a{
          text-decoration:none;
          color:#2c7715;
          transition: 0.3s;
        }
        .forgot-a:hover{
          text-decoration:none;
          color:red;
        }
        .login_button{
        	max-width: 150px;
            width: 100%;
            background: #4e73df;
            color: #f9f9f9;
            border: none;
            padding: 10px;
            text-transform: uppercase;
            border-radius: 2px;
            float:right;
            cursor:pointer;
            transition: 0.5s;
        }
        .login_button:hover{
           transform: scale(1.1);
        }

        .oaerror{
          width:100%;
          background-color: #ffffff;
          padding:20px;
          border:1px solid #eee;
          border-left-width:5px;
          border-radius: 3px;
          margin:10px auto;
          font-family: 'Open Sans', sans-serif;
          font-size: 16px;
        }

        .danger{
          border-left-color: #d9534f; /* Left side border color */
          background-color: rgba(217, 83, 79, 0.1); /*Same color as the left border with reduced alpha to 0.1*/
        }

        .danger strong{
          color:#d9534f;
        }

        .warning{
          border-left-color: #f0ad4e;
          background-color: rgba(240, 173, 78, 0.1);
        }

        .warning strong{
          color:#f0ad4e;
        }

        .info {
          border-left-color: #5bc0de;
          background-color: rgba(91, 192, 222, 0.1);
        }

        .info strong {
          color: #5bc0de;
        }

        .success {
          border-left-color: #2b542c;
          background-color: rgba(43, 84, 44, 0.1);
        }

        .success strong {
          color: #2b542c;
        }
    </style>
</head>

<body class="login-body">
	<div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<p>Will you want to sign in?</p>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<p>Will you want to sign up?</p>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
		<div class="white-panel">
			<div class="login-show">
				<h2>LOGIN</h2>
				<form method="post" action="adminlogin.php" id="myform">
					<input type="text" name="adminname" placeholder="User Name">
					<input type="password" name="adminpassward" placeholder="Password">
					<button class="login_button" id="login" name="login" type="submit">Login</button>
				</form>	
				<a href="" class="forgot-a">Forgot password?</a>
			</div>
			<div class="register-show">
				<h2>REGISTER</h2>
                <form method="post" action="adminlogin.php">
                    <input type="text" name="name" placeholder="Enter Full Name">
                    <input type="text" id="user_name" name="user_name" placeholder="Enter User Name">
                    <input type="text" name="email" placeholder="Enter Email">
                    <input type="text" name="contact" placeholder="Enter Contact Number">
                    <input type="password" id="passward" name="passward" placeholder="Password">
                    <input type="password" name="confirm_passward" placeholder="Confirm Password">
                    <select class="form-control mb-2" name="role">
                        <option value="">-- Select Role</option>
                        <option value="Ground Owner">Ground Owner<option>
                        <optio value="Academy Owner">Academy Owner</option>
                    </select>   
                    <button class="login_button"  name="register" type="submit">Register</button>
                </form>
			</div>
		</div>				
	</div>
     
	
    <script type="text/javascript">
    $(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
    });


    $('.login-reg-panel input[type="radio"]').on('change', function() {
        if($('#log-login-show').is(':checked')) {
            $('.register-info-box').fadeOut(); 
            $('.login-info-box').fadeIn();
            
            $('.white-panel').addClass('right-log');
            $('.register-show').addClass('show-log-panel');
            $('.login-show').removeClass('show-log-panel');
            
        }
        else if($('#log-reg-show').is(':checked')) {
            $('.register-info-box').fadeIn();
            $('.login-info-box').fadeOut();
            
            $('.white-panel').removeClass('right-log');
            
            $('.login-show').addClass('show-log-panel');
            $('.register-show').removeClass('show-log-panel');
        }
    });  
    </script>
</body>
</html>