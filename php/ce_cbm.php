<?php
require_once "con_db.php";

$rows2 = mysqli_num_rows($result3);
echo "<tr>
         <th>Time</th>
         <th>Remaind Quality</th>
         <th>Acc. picking</th>
         <th>Ratio</th>
         <th>Target</th>
         <th>Picked</th>
         <th>Ratio</th>
            </tr>";
for ($i = 0; $i < $rows2; ++$i) {
    $row2 = mysqli_fetch_row($result3);
    echo "<tr>";
    echo "<th><span>$row2[0]</span></th>";
    for ($j = 1; $j < 7; ++$j) echo "<td><span>$row2[$j]</span></td>";
    echo "</tr>";
}
