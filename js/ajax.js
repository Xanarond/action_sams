function show2() {
    $.ajax({
        url: "php/fg_qt.php",
        cache: false,
        success: function (html) {
            $("#fg_q-ty").html(html);
        }
    });
return false;
}

$(document).ready(function () {
    show2();
    setInterval('show2()', 5000);
});