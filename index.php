<?php
if(isset($_POST["submit"])) {
	$element_1 = $_POST["element_1"];
	$element_2 = $_POST["element_2"];
	$element_3 = $_POST["element_3"];
	
	
	$to = "camilabonassio@gmail.com";
	$subject = "balaio_de_organicos";
	$body = '<html>
			<body>
	
			<p>nome:."$element_2"</p>
			<p>celular."$element_2"</p>
			<p>telefone:."$element_3"</p>
			</body>
			</html>';
	$send = mail ($to,$subject, $body);
	if ($send) {
		echo '<br>';
		echo "thanks";
	}else {
		echo "error";
	}
	}
	
?>