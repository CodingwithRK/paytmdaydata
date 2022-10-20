<?php 
    if($_POST['submit']) {
        $insert = [
            'empId' => $_POST['empId'],
            'empName' => $_POST['empName'],
            'custName' => $_POST['custName'],
            'custPhn' => $_POST['custNo'],
            'custAltphn' => $_POST['custNoalt'],
            'dov' => $_POST['dov'],
            'Address' => $_POST['Address'],
            'custType' => $_POST['custType'],
            'remarks' => $_POST['remarks'],
            'visitType' => $_POST['visitType']
        ];

        $clms = implode(',', array_keys($insert));
        $vals = implode("','", array_values($insert));

        $sql = "insert into daydata ($clms) values ($vals)";
        echo $sql;
    } else {
        echo "Data Not Inserted";
    }

?>
