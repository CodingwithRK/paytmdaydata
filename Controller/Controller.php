<?php

    date_default_timezone_set('Asia/Kolkata');
    require 'Model/Model.php';

    session_start();

    class Controller extends Model 
    {
        function __construct()
        {
            parent::__construct();

            if(isset($_SERVER['PATH_INFO'])) {
                switch ($_SERVER['PATH_INFO']) {
                    case '/':
                        if(isset($_POST['submit'])) {
                            $insert = [
                                'empId' => $_POST['empId'],
                                'empName' => $_POST['empName'],
                                'custName' => $_POST['custName'],
                                'custPhn' => $_POST['custNo'],
                                'custAltphn' => $_POST['custNoalt'],
                                'dov' => $_POST['dov'],
                                'custAddress' => $_POST['Address'],
                                'custType' => implode(',',$_POST['custType']),
                                'remarks' => $_POST['remarks'],
                                'visitType' => implode(',',$_POST['visitType'])
                            ];

                            $tableName = [
                                'empName' => $_POST['empName']
                            ];

                            $insertEx = $this->InsertData($tableName, $insert);
                        }

                        $selectData = $this->SelectData('empdata');
                        $users = $selectData['Data'];
                        
                        include 'Views/home.php';
                        break;
                    
                        case '/home':
                            if(isset($_POST['submit'])) {
                                $insert = [
                                    'empId' => $_POST['empId'],
                                    'empName' => $_POST['empName'],
                                    'custName' => $_POST['custName'],
                                    'custPhn' => $_POST['custNo'],
                                    'custAltphn' => $_POST['custNoalt'],
                                    'dov' => $_POST['dov'],
                                    'custAddress' => $_POST['Address'],
                                    'custType' => implode(',',$_POST['custType']),
                                    'remarks' => $_POST['remarks'],
                                    'visitType' => implode(',',$_POST['visitType'])
                                ];
    
                                $tableName = [
                                    'empName' => $_POST['empName']
                                ];
    
                                $insertEx = $this->InsertData($tableName, $insert);
                            }
    
                            $selectData = $this->SelectData('empdata');
                            $users = $selectData['Data'];
                            
                            include 'Views/home.php';
                            break;
                        
                    case '/admin':
                        if (isset($_SESSION['user_data'])) {
                            ?>
                            <script>
                                window.location.href = 'admindashboard';
                            </script>
                            <?php
                        }
                        
                        if (isset($_POST['login'])) {
                            $userName = mysqli_real_escape_string($this->con, $_POST['userName']);
                            $psw = mysqli_real_escape_string($this->con, $_POST['psw']);

                            $loginEx = $this->Login($userName, $psw);
                            if ($loginEx['Code']) {
                                $_SESSION['user_data'] = $loginEx['Data'];
                                ?>
                                <script>
                                    window.location.href = 'admindashboard';
                                </script>
                                <?php
                            } else {
                                ?>
                                <script>
                                    window.location.href = 'admin';
                                </script>
                                <?php
                            }
                        }
                        include 'Views/admin.php';
                        break;

                    case '/new':
                        if(isset($_POST['regist'])) {
                            $new = [
                                'profileName' => $_POST['profileName'],
                                'userName' => $_POST['userName'],
                                'psw' => password_hash($_POST['psw'], PASSWORD_DEFAULT)
                            ];

                            $newEx = $this->NewUser('user',$new);
                        }
                        include 'Views/newuser.php';
                        break;

                    case '/admindashboard':
                        if (!isset($_SESSION['user_data'])) {
                            ?>
                            <script>
                                window.location.href = 'admin';
                            </script>
                            <?php
                        }
                        if(isset($_POST['addemp'])) {
                            $emp = [
                                'empId' => $_POST['empId'],
                                'empName' => $_POST['empName'],
                                'tableName' => $_POST['empName']
                            ];

                            $createEmpTable = [
                                'tableName' => $_POST['empName']
                            ];

                            $createEmpEx = $this->createEmpTable($createEmpTable);
                            $empEx = $this->NewEmp('empdata',$emp);
                        }
                        
                        $selectData = $this->SelectData('empdata');
                        $users = $selectData['Data'];
                        
                        include 'Views/admindashboard.php';
                        break;

                    case '/viewemp':
                        $tbl = $_GET['emp'];
                        $selectData = $this->SelectData($tbl);
                        $users = $selectData['Data'];
                        include 'Views/viewemp.php';
                        break;
                    
                    case '/signout':
                        unset($_SESSION['user_data']);
                        session_destroy();
                        ?>
                        <script>
                            window.location.href = 'admin';
                        </script>
                        <?php
                        break;
                    default:
                        # code...
                        break;
                }
            }
        }
    }

    $obj = new Controller;


?>