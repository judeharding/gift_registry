<?php
    require("includes/db.php");
    require("includes/id_generator.php");
    $action = $_GET["action"];

    if ($action == "insert") {
        echo "INSERTING";
        $account_id = id_generator();
    }

    if ($action == "update" || $action == "delete" || $action == "view") {
        $account_id = $_GET["account_id"];
    }

    if ($action == "update") {
        echo "UPDATING";
        $sql = "SELECT * FROM account WHERE account_id='$account_id' ";
        $result = mysqli_query($mysqli, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $first_name = $row["first_name"];
            $last_name = $row["last_name"];
            $email = $row["email"];
            // echo "$first_name | $last_name | $email";

        }
    }

    if ($action == "delete") {
        echo "DELETING";
    }

    if ($action == "view") {
        echo "VIEWING";
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
            <form class="form-horizontal" action="account_process.php" method="post">
                <div class="form-group">
                    <label for="first_name" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $first_name; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $last_name; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="hidden" name="action" value="<?php echo $action; ?>">
                        <input type="hidden" name="account_id" value="<?php echo $account_id; ?>">
                        <button type="submit" class="btn btn-default" name="submit" value="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </body>
</html>
