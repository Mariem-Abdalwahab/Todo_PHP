<?php

include 'functions.php';

$jsonContentArray = getTasxs();




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="new_todo.php" method="POST">
        <input type="text" placeholder="Type Your Todo" name="todo_name" focuse>
        <button>Add New Todo</button>
    </form>
    <?php
    if ($jsonContentArray != []) {

        foreach ($jsonContentArray as $tasx => $r) {

            ?>
            <div class="tasx" style="margin-top:15px">
                <form action="check.php" style="display: inline" method="POST">
                    <input type="hidden" name="check" value="<?php echo $tasx ?>">
                    <input type="checkbox" onclick="this.form.submit()" <?php echo $r["completed"] ? "checked" : "" ?>>
                </form>

                <span><?php echo "$tasx " ?></span>

                <form action="delete.php" style="display: inline" method="POST">
                    <input type="hidden" name="todo_name" value="<?php echo $tasx ?>">
                    <button>DELETE</button>
                </form>
            </div>
            <?php
        }
    }
    ?>
</body>

</html>