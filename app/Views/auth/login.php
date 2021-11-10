<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ;?>/sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/sb-admin-2/css/style.css" rel="stylesheet">
    <title><?= $title ;?></title>

</head>
<body>

<div class="bgg"></div>
    <div class="logBox">

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="pt-0 pl-5 pr-5 pb-5">
                        <div class="text-center">
                            <h1 class="h4 text-white mb-4">Login</h1>
                        </div>

                        <form action="<?= base_url('auth/login') ?>" method="post">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-user" name="username" placeholder="Username" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" name="passwordd" class="form-control form-control-user" placeholder="Password" aria-describedby="basic-addon2">
                            </div>

                            <div class="mt-5 text-center">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
  
</body>
</html>