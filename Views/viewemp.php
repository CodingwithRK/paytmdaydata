<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
  
    
    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
        <h2>Employees Data</h2>
        <div class="table-responsive mt-5">
            <table class="table table-striped table-sm table-bordered border-dark" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Sno</th>
                    <th scope="col">Emp Id</th>
                    <th scope="col">Emp Name</th>
                    <th scope="col">Cust Name</th>
                    <th scope="col">Cust Phn</th>
                    <th scope="col">Cust Alt Phn</th>
                    <th scope="col">Date of Visit<br>(MM/DD/YYYY)</th>
                    <th scope="col">Cust Address</th>
                    <th scope="col">Cust Type</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Visit Type</th>
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
                        <td scope="col"><?php echo $user->custName; ?></td>
                        <td scope="col"><?php echo $user->custPhn; ?></td>
                        <td scope="col"><?php echo $user->custAltPhn; ?></td>
                        <td scope="col"><?php echo $user->dov; ?></td>
                        <td scope="col"><?php echo $user->custAddress; ?></td>
                        <td scope="col"><?php echo $user->custType; ?></td>
                        <td scope="col"><?php echo $user->remarks; ?></td>
                        <td scope="col"><?php echo $user->visitType; ?></td>
                    </tr>
                <?php
                    $i++;
                    }
                ?>
            </tbody>
            </table>
            <hr>
            <div class="text-center">
                <a class="btn btn-secondary" href="admindashboard">Back</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script> 
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>


    <script>
        $(function () {
            $('.tool').tooltip();
        } );

        
        $('#myTable').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel'
            ]
        } );
        
    </script>
  </body>
</html>
