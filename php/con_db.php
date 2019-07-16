<?php

$host = 'localhost'; // адрес сервера
$database = 'action_plan'; // имя базы данных
$user = 'vlad'; // имя пользователя
$password = '1'; // пароль

$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));


$data1_req = 'SELECT `Till_now1`, `After_cut_off1`, `Finish_time1` FROM `action_plan`.`samsung_data`';
$row_2 = 'SELECT * FROM `samsung_data` WHERE `samsung_data_id` = 2';
$row_3 = 'SELECT * FROM `samsung_data` WHERE `samsung_data_id` = 3';
$row_4 = 'SELECT * FROM `samsung_data` WHERE `samsung_data_id` = 4';

$result1 = mysqli_query($link, $data1_req) or die("Ошибка " . mysqli_error($link));
$result1_2 = mysqli_query($link, $row_2) or die("Ошибка " . mysqli_error($link));
$result1_3 = mysqli_query($link, $row_3) or die("Ошибка " . mysqli_error($link));
$result1_4 = mysqli_query($link, $row_4) or die("Ошибка " . mysqli_error($link));




$total_rq = 'SELECT `Time`, `Remaind_Qty`, `Acc.Picking`, `Ratio1`, `Target`, `Picked`, `Ratio2` FROM `action_plan`.`ce_data`';

$result2 = mysqli_query($link, $total_rq) or die("Ошибка " . mysqli_error($link));