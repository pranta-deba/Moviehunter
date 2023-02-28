$("#category_id").change(function() {
    $("#subcategory_id").html("");
    //alert($(this).val()) 
    $.getJSON("include/ajax-show-subcat.php", {
        davil: $(this).val()
    }, function(d) {
        console.log(d);
        if (d.length) {
            showsubcat(d);
        }
    })
});
function showsubcat(d){
    let html = '<option selected disabled value="">Choose...</option>';
    d.forEach(e => {
        html += '<option value="' + e.id + '">' + e.name + '</option>';
    });
    $("#subcategory_id").html(html);
};