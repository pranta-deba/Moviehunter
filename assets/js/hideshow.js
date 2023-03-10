$("#Screenshots").show();
$("#downloadlinks").show();

$("#Info").click(function () {
    $("#Screenshots").show();
    $("#downloadlinks").show();
});
$("#Links").click(function () {
    $("#Screenshots").hide();
    $("#downloadlinks").show();
});
$("#Trailer").click(function () {
    $("#Screenshots").hide();
    $("#downloadlinks").hide();
});