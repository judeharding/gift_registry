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
                <div class="form-group">
                    <label for="first_name" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="first_name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="last_name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email">
                    </div>
                </div>

                <div class="form-group">

                </div>

            </form>
        </div>
    </body>
</html>
