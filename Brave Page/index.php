<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="style.css" >
<script>
 //script to load Content
 function loadContent(page, element) {
	const xhr=new XMLHttpRequest();
	xhr.open("GET", "pages/"+page+".php",true);
	xhr.onload = function() {
		if (xhr.status==200) {
		document.getElementById("main").innerHTML=xhr.responseText;
		} else {
		document.getElementById("main").innerHTML="<p>Page Error</p>";
		}
	     };
	xhr.send();
 }
</script>
</head>
<body>
<div class="grid-container">
	<div class="item1"><?php include("pages/header.php");?></div>
	<div class="item2"><?php include("pages/menu.php") ;?> </div>
	<div class="item3" id="main"><?php include("pages/main.php"); ?></div>
	<div class="item4"><?php include("pages/right.php"); ?></div>
	<div class="item5"><?php include("pages/footer.php"); ?></div>
</div>
</body>
</html>
