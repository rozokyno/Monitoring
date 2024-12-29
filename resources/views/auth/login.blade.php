<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
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
        <form class="user">
            <div class="form-group">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                    aria-describedby="emailHelp" placeholder="Enter Email Address...">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                    placeholder="Password">
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                </div>
            </div>
            <a href="{{ route('admin.dashboard.index') }}" class="btn btn-primary btn-user btn-block">
                Login
            </a>
        </form>
        <hr>
        <div class="text-center">
            <a class="small" href="forgot-password.html">Forgot Password?</a>
        </div>
        <div class="text-center">
            <a class="small" href="register.html">Create an Account!</a>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
