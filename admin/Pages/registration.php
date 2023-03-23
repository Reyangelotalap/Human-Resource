<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="../Css/ESS Portal.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string line 23 md5
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `ess_acounts` (username, password, email, create_datetime)
                     VALUES ('$username', '" .md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div   style='background: #fff;
            margin-top: 100px;
            margin-left:25%;
            padding: 20px;
            width: 50%;
            border-radius: 10px;'>
            <h1>RGBC</hr1>
            <hr>
                  <h3>You are registered successfully.</h3><br/>
                   <a href='ESS portal.php'style='margin-left: 5px;  width: 15%;padding: 10px;font-size: 14px;color: #2196f3;background-color:#fff ;
                   border: 2.5px solid #2196f3 ;
                   border-radius: 5px';
                   cursor: pointer;>Go back</a>
                  </div>";
        } else {
            echo "<div style='background: #fff;
            margin-top: 100px;
            margin-left:25%;
            padding: 20px;
            width: 50%;
            border-radius: 10px;'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='ESS portal.php'style='margin-left: 5px;  width: 15%;padding: 10px;font-size: 14px;color: #2196f3;background-color:#fff ;
                  border: 2.5px solid #2196f3 ;
                  border-radius: 5px';
                  cursor: pointer;>Go Back</a> again.</p>
                  </div>";
        }
    } else {
?>

<?php
    }
?>
</body>
</html>
