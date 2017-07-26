<?php

    require("includes/db.php");

    $action = $_POST["action"];
    $account_id = $_POST["account_id"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $submit = $_POST["submit"];
    echo "$account_id | $first_name | $last_name | $email | $action | $submit";
    echo "<br>";

    if ($action == "insert") {
        $sql = "INSERT INTO account SET account_id='$account_id', first_name='$first_name', last_name='$last_name', email='$email'";
        // $mysqli->query($sql);
        $result = mysqli_query($mysqli, $sql);
        var_dump($result);
    }

    if ($action == "update") {
        $sql = "UPDATE account SET  first_name='$first_name', last_name='$last_name', email='$email' WHERE account_id='$account_id' ";
        $mysqli->query($sql);
    }


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    </body>
</html>
