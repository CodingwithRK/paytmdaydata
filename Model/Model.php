<?php

    class Model
    {
        protected $servername = 'localhost';
        protected $username ='root';
        protected $password = '';
        protected $db = 'paytm';


        function __construct()
        {
           
            mysqli_report(MYSQLI_REPORT_STRICT);

            try {
                $this->con = new mysqli($this->servername, $this->username, $this->password, $this->db);
            } catch (Exception $ex) {
                echo "Connection Failed".$ex->getMessage();
                exit();
            }
        }

        function InsertData($tbl, $data) {
            $clms = implode(',', array_keys($data));
            $vals = implode("','", $data);

            $tbl = implode($tbl);

            $sql = "insert into $tbl ($clms) values ('$vals')";
            $insertEx = $this->con->query($sql);

            if($insertEx) {
                $responce['Data'] = null;
                $responce['Code'] = true;
                $responce['Msg'] = 'Data Inserted Successfully';
            } else {
                $responce['Data'] = null;
                $responce['Code'] = false;
                $responce['Msg'] = 'Data Not-inserted';
            }
            return $responce;
        }

        function NewUser($tbl, $data) {
            $clms = implode(',', array_keys($data));
            $vals = implode("','", $data);

            $sql = "insert into $tbl ($clms) values ('$vals')";
            $newEx = $this->con->query($sql);

            if($newEx) {
                $responce['Data'] = null;
                $responce['Code'] = true;
                $responce['Msg'] = 'New user Successfully';
            } else {
                $responce['Data'] = null;
                $responce['Code'] = false;
                $responce['Msg'] = 'Data Not-inserted';
            }
            return $responce;
        }

        function NewEmp($tbl, $data) {
            $clms = implode(',', array_keys($data));
            $vals = implode("','", $data);

            $sql = "insert into $tbl ($clms) values ('$vals')";
            $empEx = $this->con->query($sql);

            if($empEx) {
                $responce['Data'] = null;
                $responce['Code'] = true;
                $responce['Msg'] = 'New Emp Successfully';
            } else {
                $responce['Data'] = null;
                $responce['Code'] = false;
                $responce['Msg'] = 'Data Not-inserted';
            }
            return $responce;
        }

        function createEmpTable($empTable)
        {
            $empTable = implode($empTable);
            $sql = "CREATE TABLE $empTable (s_no int, empId int, empName varchar(255), custName varchar(255), custPhn varchar(255), custAltPhn varchar(255), dov varchar(255), custAddress varchar(255), custType varchar(255), remarks varchar(255), visitType varchar(255))";
            $createEmpEx = $this->con->query($sql);

            if($createEmpEx) {
                $responce['Data'] = null;
                $responce['Code'] = true;
                $responce['Msg'] = 'New Emp Successfully';
            } else {
                $responce['Data'] = null;
                $responce['Code'] = false;
                $responce['Msg'] = 'Data Not-inserted';
            }
            return $responce;
        }

        function SelectData(string $tblName, array $where = []) {
            $selSql = "SELECT * FROM $tblName";
            $sqlEx = $this->con->query($selSql);
            if($sqlEx->num_rows > 0) {
                while ($FetchData = $sqlEx->fetch_object()) {
                    $allData[] = $FetchData;
                }
                $responce['Data'] = $allData;
                $responce['Code'] = true;
                $responce['Msg'] = 'New Emp Successfully';
            } else {
                $responce['Data'] = null;
                $responce['Code'] = false;
                $responce['Msg'] = 'Data Not-inserted';
            }
            return $responce;

        }

        function Login($userName, $psw)
        {
            $loginSql = "SELECT * FROM user WHERE userName = '$userName'";
            $loginEx = $this->con->query($loginSql);
            $loginData = $loginEx->fetch_object();
            if ($loginEx->num_rows > 0 && password_verify($psw, $loginData->psw)) {
                $responce['Data'] = $loginData;
                $responce['Code'] = true;
                $responce['Msg'] = 'New Emp Successfully';
            } else {
                $responce['Data'] = null;
                $responce['Code'] = false;
                $responce['Msg'] = 'Data Not-inserted';
            }
            return $responce;
        }
    }
?>