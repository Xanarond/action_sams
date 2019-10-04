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
    show();show2();
    setInterval('show2()', 5000);
});

