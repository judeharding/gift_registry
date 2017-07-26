<?php
    require("includes/db.php");
    $action = $_GET["action"];

    if ($action == "insert") {
        echo "INSERTING";
        echo "continue inserting";
        if (!empty($_POST["submit"])){
            echo "if stmt running";
            // $account_id = "123";
            // $first_name = $_GET["first_name"];
            // $last_name = $_GET["last_name"];
            // $email = $_GET["email"];

            // $sql = "INSERT INTO account (account_id, first_name, last_name, email) VALUES ('$account_id', '$first_name', '$last_name', '$email')";
            // exit();
        }
        $mysqli->close();
    }

    if ($action == "update") {
        echo "UPDATING";
    }

    if ($action == "delete") {
        echo "DELETING";
    }

    if ($action == "view") {
        echo "VIEWING";
    }


    // if ($action == 'update' || $action == 'delete' || $action == 'view' ) {
    //     // echo $action;
    //     $account_id = $_GET["account_id"];
    //     // echo $account_id;
    //     $sql = "SELECT * FROM account WHERE account_id = '$account_id'";
    //     $result = mysqli_query($mysqli, $sql);
    //     // print_r($result);
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         $account_id = $row["account_id"];
    //         $first_name = $row["first_name"];
    //         $last_name = $row["last_name"];
    //         $email = $row["email"];
    //         // echo "$account_id | $first_name | $last_name | $email <br> ";
    //     }
    // }
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
            <form class="form-horizontal" action="account_process.php" method="post">
                <div class="form-group">
                    <label for="first_name" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default" name="submit" value="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </body>
</html>
