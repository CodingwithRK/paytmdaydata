<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paytm</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $( function() {
          $( "#datepicker" ).datepicker();
        } );
    </script>
</head>
<body class="bg-info text-dark">
    <div class="container align-items-center p-5">
        <fieldset>
            <legend class="text-decoration-underline text-center mb-3"><b>Day Data</b></legend>
            <form action="" method="post" >
                <div class="mb-3 row">
                    <label for="empId" class="col-sm-2 col-form-label text-decoration-underline"><b>Emp ID</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="empId" name="empId" autocomplete="off" list="empIds">
                        <datalist id="empIds">
                            <?php 
                                foreach ($users as $user) {
                            ?>
                                <option value="<?php echo $user->empId; ?>">
                            <?php
                                }
                            ?>
                        </datalist>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="empName" class="col-sm-2 col-form-label text-decoration-underline"><b>Emp Name</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="empName" name="empName" list="empNames" autocomplete="off">
                        <datalist id="empNames">
                            <?php 
                                foreach ($users as $user) {
                            ?>
                                <option value="<?php echo $user->tableName; ?>">
                            <?php
                                }
                            ?>
                        </datalist>
                        
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="custName" class="col-sm-2 col-form-label text-decoration-underline"><b>Customer Name</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="custName" name="custName" autocomplete="off">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="custNo" class="col-sm-2 col-form-label text-decoration-underline"><b>Customer Mobile Number</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="custNo" name="custNo" autocomplete="off">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="custNoalt" class="col-sm-2 col-form-label text-decoration-underline"><b>Customer Alt Number</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="custNoalt" name="custNoalt" autocomplete="off">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="datepicker" class="col-sm-2 col-form-label text-decoration-underline"><b>Date Of visit</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="datepicker" name="dov" autocomplete="off">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="Address" class="col-sm-2 col-form-label text-decoration-underline"><b>Customer Address</b></label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="Address" rows="3" name="Address" autocomplete="off"></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="custType" class="col-sm-2 col-form-label text-decoration-underline"><b>Customer Type</b></label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="OB" id="ob" name="custType[]">
                            <label class="form-check-label" for="ob">
                                OB
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="SB" id="sb" name="custType[]">
                            <label class="form-check-label" for="sb">
                                SB
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="New" id="new" name="custType[]">
                            <label class="form-check-label" for="new">
                                New
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="remarks" class="col-sm-2 col-form-label text-decoration-underline"><b>Remarks</b></label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="Address" rows="3" name="remarks" autocomplete="off"></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="visitType" class="col-sm-2 col-form-label text-decoration-underline"><b>Visit Type</b></label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="RV" id="rv" name="visitType[]">
                            <label class="form-check-label" for="rv">
                                RV
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="TRV" id="trv" name="visitType[]">
                            <label class="form-check-label" for="trv">
                                TRV
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="SB Replace" id="sbreplace" name="visitType[]">
                            <label class="form-check-label" for="sbreplace">
                                SB Replace
                            </label>
                            </div>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-success me-md-2" type="submit" name="submit">Submit</button>
                    <button class="btn btn-danger" type="reset">Reset</button>
                  </div>
            </form>
        </fieldset>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>