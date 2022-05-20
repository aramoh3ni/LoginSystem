<?php
    $errortitle = $errormsg = "";
    if(isset($_GET['error'])) {
        if($_GET['error'] == 'wrongepassword') {
            $errortitle = "warning";
            $errormsg = "Wronge password, please check your password and try agin!";
        }
        if($_GET['error'] == '') {
            
        }
    }
?>