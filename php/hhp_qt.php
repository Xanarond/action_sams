<?php
require_once "con_db.php";

$rows2 = mysqli_num_rows($result4);
echo "<tr>
         <th rowspan=\"25\">Date1</th>
         <th>Time</th>
         <th>Remaind Quality</th>
         <th>Acc. picking</th>
         <th>Ratio</th>
         <th>Target</th>
         <th>Picked</th>
         <th>Ratio</th>
         <th>DO date</th>
            </tr>";
for ($i = 0; $i < $rows2; ++$i) {
    $row2 = mysqli_fetch_row($result4);
    echo "<tr>";
    echo "<th><span>$row2[1]</span></th>";
    for ($j = 2; $j < 9; ++$j) echo "<td><span>$row2[$j]</span></td>";
    echo "</tr>";
}

$rows2 = mysqli_num_rows($result4);
echo "<tr>
         <th rowspan=\"25\">Date2</th>
            </tr>";
for ($i = 0; $i < $rows2; ++$i) {
    $row2 = mysqli_fetch_row($result4);
    echo "<tr>";
    echo "<th><span>$row2[1]</span></th>";
    for ($j = 2; $j < 9; ++$j) echo "<td><span>$row2[$j]</span></td>";
    echo "</tr>";
}
