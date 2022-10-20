<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paytm</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        .btn-color{
          background-color: #0e1c36;
          color: #fff;  
        }

        .profile-image-pic{
          height: 200px;
          width: 200px;
          object-fit: cover;
        }

        .cardbody-color{
          background-color: #ebf2fa;
        }

        a{
          text-decoration: none;
        }
    </style>
</head>
<body class="bg-info text-dark">
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login Form</h2>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" method="post">

            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" placeholder="User Name" name="userName">
            </div>

            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="password" name="psw">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-color px-5 mb-5 w-100" name="login">Login</button>
            </div>

          </form>
        </div>

      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>