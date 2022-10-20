<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        body {
            font-size: .875rem;
        }

        /*
        * Sidebar
        */

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100; /* Behind the navbar */
            padding: 48px 0 0; /* Height of navbar */
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }

        @media (max-width: 767.98px) {
            .sidebar {
                top: 5rem;
            }
        }

        .sidebar-sticky {
            height: calc(100vh - 48px);
            overflow-x: hidden;
            overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
        }

        /*
        * Navbar
        */

        .navbar-brand {
            padding-top: .75rem;
            padding-bottom: .75rem;
            background-color: rgba(0, 0, 0, .25);
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
        }

        .navbar .navbar-toggler {
            top: .25rem;
            right: 1rem;
        }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <div class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6">Paytm</div>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>

    <div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item mb-5 ms-5 me-5"><a href="signout" class="nav-link btn btn-dark btn-sm text-light">Signout</a></li>
                <li class="nav-item ms-3 me-3">
                    <h5 class="text-decoration-underline mb-3">Add New Employee</h5>
                    <form method="post">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"><b>Emp Id</b></label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Emp Id" name="empId">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label"><b>Emp Name</b></label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Employee_Name" name="empName">
                            <p class="text-danger mt-2"><i class="bi bi-exclamation-circle-fill" style="color: red;"></i> Please Fill The Employee Name Without spaces instead of Spaces use Underscore.</p>
                        </div>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="submit" name="addemp">Submit</button>
                            <button class="btn btn-danger" type="reset">Reset</button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h2>Employees Data</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">Sno</th>
                        <th scope="col">Emp Id</th>
                        <th scope="col">Employee Name</th>
                        <th scope="col">Table Name</th>
                        <th scope="col">View Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                        foreach ($users as $user) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td scope="col"><?php echo $user->empId; ?></td>
                            <td scope="col"><?php echo $user->empName; ?></td>
                            <td scope="col"><?php echo $user->tableName; ?></td>
                            <td scope="col">
                                <a href="viewemp?emp=<?php echo $user->empName; ?>" class="btn btn-dark btn-sm tool" title="To See <?php echo $user->empName; ?> data"><?php echo $user->empName; ?></a>
                            </td>
                        </tr>
                    <?php
                        $i++;
                        }
                    ?>
                </tbody>
                </table>
            </div>
        </main>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(function () {
            $('.tool').tooltip();
        });
    </script>
  </body>
</html>
