<?php
class Signup extends DB
{

    protected function setUser($usrname, $pwd, $email, $firstname, $lastname)
    {
        $query = "INSERT 
        INTO `users`(`usrname`, `pwd`, `firstname`, `lastname`, `email`) 
        VALUES (?,?,?,?,?)";

        $stmt = $this->conn()->prepare($query);
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($usrname, $hashedPwd, $firstname, $lastname, $email))) {
            $stmt = null;
            header("Location: ../sign-up.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected  function checkUserIfExists($usrname, $email)
    {
        $query = "SELECT usrname FROM users WHERE usrname = ? OR email = ?";
        $stmt = $this->conn()->prepare($query);
        if (!$stmt->execute(array($usrname, $email))) {
            $stmt = null;
            header("Location: ..index.php?error=stmtfailed");
            exit();
        }

        $checkResult = null;
        if ($stmt->rowCount() > 0) {
            $checkResult =  false;
        } else {
            $checkResult = true;
        }

        return $checkResult;
    }
}
