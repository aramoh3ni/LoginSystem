<?php
class Login extends DB
{

    protected function getUser($usrname, $pwd)
    {
        $query = "SELECT pwd FROM users WHERE usrname = ? OR email = ?";

        $stmt = $this->conn()->prepare($query);

        if (!$stmt->execute(array($usrname, $usrname))) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPWD = password_verify($pwd, $pwdHashed[0]['pwd']);

        if ($checkPWD == false) {
            $stmt = null;
            header("location: ../index.php?error=wrongpassword");
            exit();
        } elseif ($checkPWD == true) {
            $query = "SELECT `uid`, `usrname`, `pwd` FROM users WHERE usrname = ? OR email = ? AND pwd = ?";
            $stmt = $this->conn()->prepare($query);

            if (!$stmt->execute(array($usrname, $usrname, $checkPWD))) {
                $stmt = null;
                header("Location: ../index.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['uid'] = $user[0]['uid'];
            $_SESSION['username'] = $user[0]['usrname'];

            header('location: ../dashboard.php');
            exit();
        }


        $stmt = null;
    }
}
