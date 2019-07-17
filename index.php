<!doctype html>
<html lang="ru">
<head>
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- https://github.com/SheetJS/js-xlsx-->
    <script src="vendor/js-xlsx-master/jszip.js"></script>
    <script src="vendor/js-xlsx-master/xlsx.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/ajax.js"></script>

    <title>Samsung ActionBoard</title>
</head>
<?php
require_once "php/con_db.php";
?>
<body>
<nav class="navbar navbar-dark logo">
    <a class="navbar-brand">
        <img src="img/logo-ss-sds.png" width="300" height="200" alt="">
    </a>
    <h1 class="title">ACTIONBOARD</h1>
</nav>
<div class="row justify-content-center">
    <div class="col-md-6 p-3">
        <table class="fg" id="FG_table">
            <?php
            $row1 = mysqli_fetch_row($result1);
            $row2 = mysqli_fetch_row($result1_2);
            $row3 = mysqli_fetch_row($result1_3);
            $row4 = mysqli_fetch_row($result1_4);
            echo "<th rowspan=\"6\">Navien</th>";
            echo "<th></th>";
            echo "<th>Till now</th>";
            echo "<th>After Cut off</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Q-ty</th>";
            echo "<td><span>$row1[0]</span></td>";
            echo "<td><span>$row1[1]</span></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Picking finish</th>";
            echo "<td><span>$row2[1]</span></td>";
            echo "<td><span>$row2[2]</span></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Remain</th>";
            echo "<td><span>$row3[1]</span></td>";
            echo "<td><span>$row3[2]</span></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>%</th>";
            echo "<td><span>$row4[1]</span></td>";
            echo "<td><span>$row4[2]</span></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Finish time</th>";
            echo "<td colspan=\"2\"><span>$row1[2]</span></td>";
            echo "</tr>";
            ?>
        </table>
    </div>
</div>
<hr style="width: 75%; color: rgb(0,0,0);">
<div class="row justify-content-center">
    <div class="col-md-6 p-3">
        <h2 class="text-md-center">[FG q-ty]</h2>
        <table class="tt" id="fg_q-ty">
        </table>
    </div>
</div>
</body>
</html>