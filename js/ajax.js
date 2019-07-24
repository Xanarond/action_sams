function show() {
    $.ajax({
        url: "php/ce_cbm.php",
        cache: false,
        success: function (html) {
            $("#ce_t").html(html);
        }
    });
    // return false;
}

$(document).ready(function () {
    show();
    setInterval('show()', 5000);
});

function show2() {
    $.ajax({
        url: "php/hhp_qt.php",
        cache: false,
        success: function (html) {
            $("#hhp_t").html(html);
        }
    });
    // return false;
}

$(document).ready(function () {
    show2();
    setInterval('show2()', 5000);
});

