<!DOCTYPE html>
<html>

<body>
    <!-- ----------------------------------------------Task 1------------------------------------------------- -->

    <form method="get" action="action.php" target="_blank">
        Email: <input type="text" name="email">
        Password: <input type="password" name="password">
        <input type="submit">
    </form>


    <!-- ----------------------------------------------Task 2------------------------------------------------- -->
    <br>
    <form>
        <label for="url">Enter an https:// URL:</label>

        <input type="url" name="url" placeholder="https://example.com" pattern="https://.*">
        <br>
        <input type='submit' value="GO">
    </form>

    <?php
    if (isset($_POST['url'])) {
        $url = $_POST['url'];
        header("location:$url");
    }

    ?>

    <!-- ----------------------------------------------Task 3------------------------------------------------- -->
    <?php
    $result = '';

    if (isset($_POST['result'])) {
        $first_num = $_POST['first_num'];
        $second_num = $_POST['second_num'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case "+":
                $result = $first_num + $second_num;
                break;
            case "-":
                $result = $first_num - $second_num;
                break;
            case "*":
                $result = $first_num * $second_num;
                break;
            case "/":
                $result = $first_num / $second_num;
        }
    }

    ?>
    <form action="" method="post" id="quiz-form">
        <br>
        <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" />
        <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" />
        <br>
        <b>Result</b> <input readonly="readonly" name="result" value="<?php echo $result; ?>">
        <br>
        <input type="submit" name="operator" value="+" required />
        <input type="submit" name="operator" value="-" required />
        <input type="submit" name="operator" value="*" />
        <input type="submit" name="operator" value="/" />
    </form>

    <!-- ----------------------------------------------Task 4------------------------------------------------- -->
    <form method="post" action="index.php">
        <input type="text" name="task" required>
        <input type="submit" name="addTask" value="Add Task" />
        <?php
        session_start();
        if (isset($_POST["addTask"])) {
            if (isset($_SESSION["tasks"])) {
                array_push($_SESSION["tasks"], $_POST["task"]);
            } else {
                $_SESSION["tasks"] = array($_POST["task"]);
            }
        }
        if (isset($_SESSION["tasks"])) {
            foreach ($_SESSION["tasks"] as $task) {
                echo "<p>$task</p>";
            }
        }
        ?>
    </form>

    <!-- ----------------------------------------------Task 5------------------------------------------------- -->
    <?php

    echo "<br>";
    echo $_SERVER['PHP_SELF']; //SCRIPT NAME
    // echo $_SERVER['']; //PROJECT NAME
    echo "<br>";
    echo $_SERVER['REQUEST_TIME']; //time requste



    // <!-- ----------------------------------------------Task 6------------------------------------------------- -->
    echo $_SERVER['REQUEST_TIME'] . '<br>';

    // <!-- ----------------------------------------------Task 7 & 8------------------------------------------------- -->
    if (isset($_SESSION['refresh']))
        $_SESSION['refresh']++;
    else
        $_SESSION['refresh'] = 1;

    echo 'this page has been refreshed for ' . $_SESSION['refresh'] . ' times';

    // <!-- ----------------------------------------------Task 9------------------------------------------------- -->

    if (count($_COOKIE) > 0) {
        echo " cookie is set";
    } else {
        echo "cookie is not set";
    }


    setcookie("firstTask", "TASK", time() + 86400, "/", TRUE, TRUE);

    echo "<pre>";
    print_r($_COOKIE);
    echo time();
    ?>


    <form method="post" action="index.php">
        <input type="text" name="task" required>
        <input type="submit" name="addTask" value="Add Task" />
        <?php
        // session_start();
        if (isset($_POST["addTask"])) {
            if (isset($_SESSION["tasks"])) {
                array_push($_SESSION["tasks"], $_POST["task"]);
            } else {
                $_SESSION["tasks"] = array($_POST["task"]);
            }
        }
        if (isset($_SESSION["tasks"])) {
            foreach ($_SESSION["tasks"] as $task) {
                echo "<p>$task</p>";
            }
        }
        ?>
    </form>




    ?>
    <br>
</body>

</html>