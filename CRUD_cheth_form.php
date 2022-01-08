<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    background-image:url(cheth.jpg); 
    background-size:cover; 
    background-repeat:no-repeat;
}
.container{
    margin-top:135px;
    margin-left:475px;
    margin-right:475px;
    background-color:rgb(211, 211, 211);

}
.header{
    padding:8px;
    background-color:rgb(6, 6, 211);
}
h3{
    margin-left:163px;
    color:white;
}
form{
    margin-left:110px;
    padding:10px 10px;
}
label{
    font-family:monospace;
}
input{
    padding:4px;
    border-radius:8px;
}
input[type="button"]{
    background-color:blue;
    color:white;
    cursor:pointer;
    border:none;
    padding:5px;
}
input[type="button"]:hover{
    background-color:rgba(6, 6, 211, 0.5);
    
}
input[type="Reset"]{
    background-color:green;
    color:white;
    cursor:pointer;
    border:none;
    padding:5px;
}
input[type="Reset"]:hover{
    background-color:rgba(6, 211, 6, 0.5);
}
input[type="submit"]{
    background-color:red;
    color:white;
    cursor:pointer;
    border:none;
    padding:5px;
}
input[type="submit"]:hover{
    background-color:rgba(211, 6, 6, 0.5);
}
</style>
<body>
<div class="container">
    <div class="header">
        <h3>EMPLOYEE DETAILS</h3>
    </div>
    <form method="post" action="CRUD_Create_page.php" target="_self">
        <label for="fname">First name:</label><br>        
        <input type="text" id="fname" name="fname" required size="40"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" required size="40"><br>
        <label for="contact">Phone Contact:</label><br>
        <input type="tel" id="contact" name="contact" required maxlength="20" size="40" placeholder="09025367782"><br>
        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required size="40"><br>
        <label for="Homeaddress">Home Address:</label><br>
        <input type="text" id="homeaddress" name="homeaddress" required size="40"><br>
        <label for="Gender">Sex: </label><br>
        <input type="radio" id="gender" name="gender" value="Male" required> 
        <label for="Male">Male </label> <br>
        <input type="radio" id="gender" name="gender" value="Female" required> 
        <label for="female">Female </label><br>
        <label for="deptname">Department Name:</label><br>
        <select name="Department" id="Department" required>
            <option value="Select">Select</option>
            <option value="Technical Team">Technical Team</option>
            <option value="Graphics Team">Graphics Team</option>
            <option value="Media Team">Media Team</option>
            <option value="Marketing Team">Marketing Team</option>
        </select><br><br>
        <div class="back">
            <input type="submit" name="submit" value="Submit" > 
            <input type="Reset" name="Reset" value="Reset" >
            <a href="CRUD_Home_page.php">
            <input type="button" name="back" value="Back" >
            </a>
        </div>
    </form> 
</div>
    
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>