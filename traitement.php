<?php if (isset($_POST['submit'])) {
	$name = filter_input(INPUT_POST, htmlspecialchars("name"));
	$price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	$qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);
}

header("location:index.php");
