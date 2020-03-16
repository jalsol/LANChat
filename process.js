function show() {
	var data = document.getElementById("data").value;
	console.log(data);
	if(data != "") {
		var usr = document.getElementById("usr").value;
		console.log(usr);
		if(usr == "") usr = "Bình Minh";

		var d = new Date();
		var n = d.toLocaleTimeString();

		var txtarea = document.getElementById("box");
		var content = "(" + n + ") > " + usr + ": " + data  + "\n\n";

		$.post('savelog.php', {content: content},
			function(data) {
				txtarea.innerHTML = txtarea.innerHTML + data;
			}
		).fail(function(){console.log("error");});
		window.location.href=window.location.href;
	}
}

window.onload = function() {
	var txtarea = document.getElementById("box");
	txtarea.scrollTop = txtarea.scrollHeight;
	$.post('savelog.php',
		function(data) {
			txtarea.innerHTML = data;
		}
	).fail(function(){console.log("error");});
}

$(document).keypress(function(e) {
    if (e.which == 13){
        $("#send").click();
    }
});
