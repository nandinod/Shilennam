$(document).ready(function () {

    $("button").click(function() {
        if ($(this).attr("data-toggle") === "modal") {
            var id = $(this).attr("id").split("_");
            if (id[0] === "party") {
                if (id[1] === "edit") {
                    $.post("../backend/Editor.php", {action : "party_edit_get", party_record_id : id[2]}, function(data) {
                        var out = data.split("::");
                        var code, title, acronym;
                        code = out[0];
                        title = out[1];
                        acronym = out[2];
                        $("#edit_party_code").attr("value", code);
                        $("#edit_party_title").attr("value", title);
                        $("#edit_party_acronym").attr("value", acronym);
                    });
                }
            }
        }
    });
    
    $(".party_edit_valid").click(function() {
        var next = $(this).next();
        next.prop('readonly', !next.prop('readonly'));
    });

});