<?php 
    if ($_POST) {     
        include 'koneksi.php';  
        $sql = "SELECT * FROM pengguna ";
        $sql.= "WHERE username='".$_POST['username']."' "; $sql.= "AND password='".md5($_POST['password'])."' ";
        $hasil = mysqli_query($con, $sql) or exit("Error query : <b>".$sql."</b>.");
        if(mysqli_num_rows($hasil)>0){
            $data = mysqli_fetch_assoc($hasil);
            session_start();
            $_SESSION['username'] = $data['username'];
            header('location:manage/index.php');
        } else { 
            echo "<script type='text/javascript'>alert('Gagal login !!!');</script>";
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.jpeg">

    <title>Masuk</title>

    <!-- Bootstrap core CSS -->
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style type="text/css">
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }
    .form-signin .checkbox {
        font-weight: 400;
    }
    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }
    .form-signin .form-control:focus {
        z-index: 2;
    }
    .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

</style>
</head>

<body class="text-center">
    <form class="form-signin" method="POST">
        <img src="favicon.jpeg" class="img-fluid" style="margin-bottom: 20px;">
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
    </form>
</body>
</html>
