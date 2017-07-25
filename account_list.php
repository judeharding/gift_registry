<?php

    require("includes/db.php");

    function getAccounts(){
        global $mysqli;
        $sql = "SELECT * FROM account";
        $result = mysqli_query($mysqli, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $account_id = $row["account_id"];
            $first_name = $row["first_name"];
            $last_name = $row["last_name"];
            $email = $row["email"];
            // echo $first_name . "<br>";
            // echo $last_name . "<br>";
            // echo $email . "<br>";
            echo "<tr>";
                echo "<td><a href='account.php?account_id=$account_id'>$first_name</a></td>";
                echo "<td>$last_name</td>";
                echo "<td>$email</td>";
            echo "</tr>";
        }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <?php
            require ("header.php");
        ?>
    </head>
    <body>
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                    </tr>
                    <?php
                        getAccounts();
                    ?>

                </table>
            </div>
        </div>
    </body>
</html>
