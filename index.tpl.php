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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>

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
    <div id="fileDropReceiver">
        <span>Перетащите сюда xlsx файл...</span>
    </div>
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
                <tr>
                    <th rowspan="3">HHP</th>
                    <td> </td>
                    <th>Till now</th>
                    <th>After Cut off</th>
                </tr>
                <tr>
                    <td id="values_2"></td>
                    <td class="tn" id="tn-1-2"></td>
                    <td class="aco" id="aco_hhp"></td>
                </tr>
                <tr>
                    <th>Finish time</th>
                    <td colspan="2" id="ft-2"></td>
                </tr>
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
<hr style="width: 75%; color: rgb(0,0,0);">
<div class="row">
    <div class="col-md-6 p-3">
        <h2 class="text-md-center">[CE cbm]</h2>
        <table class="tt" id="ce_t">
            <tr>
                <th>Time</th>
                <th>Remaind Quality</th>
                <th>Acc. picking</th>
                <th>Ratio</th>
                <th>Target</th>
                <th>Picked</th>
                <th>Ratio</th>
            </tr>
            <?php
            $rows2 = mysqli_num_rows($result2);
            for ($i = 0; $i < $rows2; ++$i) {
                $row2 = mysqli_fetch_row($result2);
                echo "<tr>";
                echo "<th><span>$row2[0]</span></th>";
                for ($j = 1; $j < 7; ++$j) echo "<td><span>$row2[$j]</span></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <div class="col-md-6 p-3">
        <h2 class="text-md-center">[HHP q-ty]</h2>
        <table class="tt" id="hhp_t">
            <tr>
                <th>Time</th>
                <th>Remaind Quality</th>
                <th>Acc. picking</th>
                <th>Ratio</th>
                <th>Target</th>
                <th>Picked</th>
                <th>Ratio</th>
            </tr>
            <tr>
            </tr>
        </table>
        <!--<script>draw_CE();</script>-->
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="ce_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Введите данные таблицы CE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <h5>Till now</h5>
                    </div>
                    <div class="col-md-5">
                        <h5>After Cut off</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h5>Q-ty</h5>
                    </div>
                    <div class="col-md-5">
                        <label>
                            <input type="text" id="tn-inp-1">
                        </label>
                    </div>
                    <div class="col-md-5">
                        <label>
                            <input type="text">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h5>Pickhing finish</h5>
                    </div>
                    <div class="col-md-5">
                        <label>
                            <input type="text">
                        </label>
                    </div>
                    <div class="col-md-5">
                        <label>
                            <input type="text">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h5>Remaind</h5></div>
                    <div class="col-md-5">
                        <label>
                            <input type="text">
                        </label>
                    </div>
                    <div class="col-md-5">
                        <label>
                            <input type="text">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h5>%</h5>
                    </div>
                    <div class="col-md-5">
                        <label>
                            <input type="text" placeholder="100%">
                        </label>
                    </div>
                    <div class="col-md-5">
                        <label>
                            <input type="text" placeholder="100%">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h5>Finish time</h5>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="01.01.2019 00:00"
                               aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save" data-dismiss="modal">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>
    const X = XLSX;
    let XW = {
        /* worker message */
        msg: 'xlsx',
        /* worker scripts */
        worker: './vendor/xlsworker.js'
    };

    let global_wb;

    const process_wb = (function () {
        // var OUT = document.getElementById('out');
        let OUT;
        var HTMLOUT = document.getElementById('htmlout');

        var get_format = (function () {
            var radios = document.getElementsByName("format");
            return function () {
                for (var i = 0; i < radios.length; ++i) if (radios[i].checked || radios.length === 1) return radios[i].value;
            };
        })();

        const to_json = function to_json(workbook) {
            var result = {};
            workbook.SheetNames.forEach(function (sheetName) {
                var roa = X.utils.sheet_to_json(workbook.Sheets[sheetName], {header: 1});
                if (roa.length) result[sheetName] = roa;
            });
            return JSON.stringify(result, 2, 2);
        };

        var to_html = function to_html(workbook) {
            HTMLOUT.innerHTML = "";
            workbook.SheetNames.forEach(function (sheetName) {
                var htmlstr = X.write(workbook, {sheet: sheetName, type: 'string', bookType: 'html'});
                HTMLOUT.innerHTML += htmlstr;
            });
            return "";
        };

        return function process_wb(wb) {
            global_wb = wb;
            var output = "";
            // switch(get_format()) {
            if ("json" === "html") {
                output = to_html(wb);
            } else {
                output = to_json(wb);
            }
            // if(OUT.innerText === undefined) OUT.textContent = output;
            // else OUT.innerText = output;
            OUT = JSON.parse(output);
            document.getElementById("fileDropReceiver").hidden = true;
            // ОБРАБОТЧИК ОБЪЕКТА JSON - под создание объектов truck
            // console.log(OUT["данные"]);
            OUT["данные"].forEach(
                function (item) {
                    if ((item[0] != null) && (item.length > 1)) {
                        // console.log(item);
                        // console.log(item[0], item[2], item[3], item[4], item[5], item[6], item[7],
                        //     item[8], item[9], item[10], item[11], item[12], item[13], item[14]);
                        // ВЫВОД объекта div truck поля в таблице образца
                        Action_table(item[0],item[1], item[2], item[3], item[4], item[5], item[6], item[7], item[8],
                            item[9], item[10], item[11], item[12], item[13], item[14],
                            item[16],item[17], item[18], item[19],item[20], item[21], item[22]);
                    }
                });
            if (typeof console !== 'undefined') console.log("Попытка обработки файла ", new Date());
        };
    })();

    const do_file = (function () {
        var rABS = typeof FileReader !== "undefined" && (FileReader.prototype || {}).readAsBinaryString;
        var domrabs = document.getElementsByName("userabs")[0];
        if (!rABS) domrabs.disabled = !(domrabs.checked = false);

        let use_worker = typeof Worker !== 'undefined';
        const domwork = document.getElementsByName("useworker")[0];
        if (!use_worker) domwork.disabled = !(domwork.checked = false);

        const xw = function xw(data, cb) {
            var worker = new Worker(XW.worker);
            worker.onmessage = function (e) {
                switch (e.data.t) {
                    case 'ready':
                        break;
                    case 'e':
                        console.error(e.data.d);
                        break;
                    case XW.msg:
                        cb(JSON.parse(e.data.d));
                        break;
                }
            };
            worker.postMessage({d: data, b: rABS ? 'binary' : 'array'});
        };

        return function do_file(files) {
            // console.log(files);
            // rABS = domrabs.checked;
            rABS = false;
            // use_worker = domwork.checked;
            use_worker = false;
            var f = files[0];
            var reader = new FileReader();
            reader.onload = function (e) {
                if (typeof console !== 'undefined') console.log("Попытка загрузки файла", new Date(), rABS, use_worker);
                var data = e.target.result;
                if (!rABS) data = new Uint8Array(data);
                if (use_worker) xw(data, process_wb);
                else process_wb(X.read(data, {type: rABS ? 'binary' : 'array'}));
            };
            if (rABS) reader.readAsBinaryString(f);
            else reader.readAsArrayBuffer(f);
        };
    })();

    (function () {
        const drop = document.getElementById('fileDropReceiver');
        if (!drop.addEventListener) return;

        function handleDrop(e) {
            e.stopPropagation();
            e.preventDefault();
            do_file(e.dataTransfer.files);
        }

        function handleDragover(e) {
            e.stopPropagation();
            e.preventDefault();
            e.dataTransfer.dropEffect = 'copy';
        }

        drop.addEventListener('dragenter', handleDragover, false);
        drop.addEventListener('dragover', handleDragover, false);
        drop.addEventListener('drop', handleDrop, false);

    })();

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36810333-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        const ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        const s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
</body>
</html>