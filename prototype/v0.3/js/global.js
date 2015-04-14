$(document).ready(function() {
	
	$("button").click(function() {
		if ($(this).attr("data-toggle") === "modal") {
			var id = $(this).attr("id").split("_");
			$.post("../backend/management_operator/data_get_by_id.php", {"p_id": id[1]}, function(data) {
				$("#editor_test").html(data);
			});
		}
	});

});