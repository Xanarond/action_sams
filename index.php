<!doctype html>
<html lang="en">
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
    <!-- <div id="fileDropReceiver">
         <span>Перетащите сюда xlsx файл...</span>
     </div>-->
</nav>
<div class="row">
    <div class="col-md-6 p-3">
        <table class="ce" id="CE_table">
            <?php
            $row1 = mysqli_fetch_row($result1);
            $row2 = mysqli_fetch_row($result1_2);
            $row3 = mysqli_fetch_row($result1_3);
            $row4 = mysqli_fetch_row($result1_4);
            echo "<th rowspan=\"6\">CE</th>";
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
    <div class="col-md-6 p-3">
        <div class="hhp">
            <table class="hhp">
                <?php
                $row1 = mysqli_fetch_row($result2);
                $row2 = mysqli_fetch_row($result2_2);
                $row3 = mysqli_fetch_row($result2_3);
                $row4 = mysqli_fetch_row($result2_4);
                echo "<th rowspan=\"6\">HHP</th>";
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
                echo "<td><span>$row2[3]</span></td>";
                echo "<td><span>$row2[4]</span></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Remain</th>";
                echo "<td><span>$row3[3]</span></td>";
                echo "<td><span>$row3[4]</span></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>%</th>";
                echo "<td><span>$row4[3]</span></td>";
                echo "<td><span>$row4[4]</span></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Finish time</th>";
                echo "<td colspan=\"2\"><span>$row1[2]</span></td>";
                echo "</tr>";
                ?>
            </table>
        </div>
    </div>
</div>
<!--<div class="row ">
    <div class="col-md-6">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="b1"
                onclick="inp_ce()">
            Launch demo modal
        </button>
    </div>
    <div class="col-md-6">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>
    </div>
</div>-->
<hr style="width: 75%; color: rgb(226,226,226);">
<div class="row">
    <div class="col-md-6 p-3">
        <h2 class="text-md-center">[CE cbm]</h2>
        <table class="tt" id="ce_t">
        </table>
    </div>

    <div class="col-md-6 p-3">
        <h2 class="text-md-center">[HHP q-ty]</h2>
        <table class="tt" id="hhp_t">
        </table>
        <!--<script>draw_CE();</script>-->
    </div>
</div>
</body>
</html>
