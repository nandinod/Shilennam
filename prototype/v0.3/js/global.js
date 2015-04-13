$(document).ready(function() {
	$.ajax({
		url: "../backend/Test.php",
		success: function(data) {
			$("#party_view").html(data);
		}
	})
});