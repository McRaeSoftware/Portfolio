<?php
class User extends Dbh
{
  private $sql;
  private $stmt;

  public function GetAllUsers()
  {
    $this->sql = "SELECT * FROM user";

    $this->stmt = $this->Connect()->query($sql);

    $rows = array();
    while($row = $stmt->fetch())
    {
      $rows[] = $row;
      return $userId;
    }
  }

  public function Login($username, $password)
  {
    $this->sql = "SELECT * FROM user WHERE username = :username";
    $this->stmt = $this->Connect()->prepare($sql);

    $success = $stmt->execute
    ([
      'username'=> $username
    ]);

    if($success && $stmt->rowCount() > 0)
    {
      $result = $stmt->fetch();

      if ($result && password_verify($password, $result['Password']))
      {
        $_SESSION['userid'] = $result['User_ID'];
        $_SESSION['username'] = $result['Username'];

        header("Location:../View/portfolio.php");
      }
      else
      {
        // Password is incorrect
        $invalidError = "Invalid Credentials";
        header('location: ../View/Login.php?error='.$invalidError);
      }
    }
  }

  //Logout User
  public function Logout()
  {
    session_start(); // Start Session / Resume Current Session
    session_destroy(); // Destroy Session
    header("Location: ../index.php"); // Redirect to index page
  }

}
