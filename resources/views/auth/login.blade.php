<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #4e73df;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card-custom {
            background: white;
            max-width: 500px;
            width: 100%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
<div class="card-custom">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Monitoring Jaringan SD Negeri Banguntapan</h1>
    </div>
    <form class="user" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-user"
                   placeholder="Enter Email Address..." required>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-user"
                   placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            Login
        </button>
    </form>
    <hr>
    <div class="text-center">
        <a class="small" href="#">Forgot Password?</a>
    </div>
    <div class="text-center">
        <a class="small" href="#">Create an Account!</a>
    </div>
</div>
</body>

</html>
