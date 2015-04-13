$(document).ready(function() {
	
	var menus = [
		{
			"text" : "ЭХЛЭЛ", 
			"link" : "#"
		},{
			"text" : "НАМУУДЫН САНХҮҮЖИЛТ", 
			"link" : "#",
			"dropdown" : [
				{
					"text" : "УЛСЫН ТӨСӨВ", 
					"link" : "#"
				},{
					"text" : "ХАНДИВААР", 
					"link" : "#"
				},{
					"text" : "ГИШҮҮДИЙН ТАТВАР", 
					"link" : "#"
				},{
					"text" : "ХУУЛИАР ЗӨВШӨӨРСӨН", 
					"link" : "#"
				},{
					"text" : "БУСАД", 
					"link" : "#"
				}
			]
		},{
			"text" : "МЭДЭЭ МЭДЭЭЛЭЛ", 
			"link" : "#"
		},{
			"text" : "ХУУЛИАС", 
			"link" : "#"
		},{
			"text" : "УЛС ТӨРӨГЧДИЙН ХАМААРАЛ", 
			"link" : "#"
		},{
			"text" : "ХОЛБООСУУД", 
			"link" : "#"
		},
	];

	var compile = "<ul class='nav navbar-nav'>";
	$.each(menus, function(key, val) {
		if (val.dropdown != null) {
			compile += "<li class='dropdown'><a href='"+val.link+"' class='dropdown-toggle' data-toggle='dropdown'>"+val.text+"</a>";
			compile += "<ul class='dropdown-menu'>";
			$.each(val.dropdown, function(key, val) {
				compile += "<li><a href='"+val.link+"'>"+val.text+"</a></li>";
			});
			compile += "</ul>";
			compile += "</li>";
		} else {
			compile += "<li><a href='"+val.link+"'>"+val.text+"</a></li>";
		}
	});
	compile += "</ul>";
	// $("#generated-menus").html(compile);

	
});