<?php
    require("includes/db.php");
    $account_id = $_GET["account_id"];
    // echo $account_id;
    $sql = "SELECT * FROM account WHERE account_id = '$account_id'";
    $result = mysqli_query($mysqli, $sql);
    // print_r($result);
    while ($row = mysqli_fetch_assoc($result)) {
        $account_id = $row["account_id"];
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $email = $row["email"];
        // echo "$account_id | $first_name | $last_name | $email <br> ";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Account</title>
        <?php
            require ("header.php");
        ?>
    </head>
    <body>
        <div class="container-fluid">
            <form class="form-horizontal" action="" method="post">

            </form>
        </div>
    </body>
</html>
