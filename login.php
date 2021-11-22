<?php
require_once 'secureCookie.php';?>

<?php
if(isset($_POST)){
    $email=$_POST['email']?? null;
    $password=$_POST['password']?? null;

    if($password==="AwniRifai@98" && $email==="awni.rifai1998@gmail.com"){
        /*sessionStart(0,'/','localhost',false,true);*/
        sessionStart(0,'/','localhost',false,true);
        $_SESSION['loggedIn']=true;

        header("location:profile.php");
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<form method="POST" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>
