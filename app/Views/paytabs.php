<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Tooplate">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	<title>PayTabs - Code Challenge</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="assets/css/fontawesome.css">
	<link rel="stylesheet" href="assets/css/tooplate-main.css">
	<link rel="stylesheet" href="assets/css/owl.css">
</head>

<body style="background-image: url('assets/images/about-bg.jpg')">
<div class="logo">
	<img src="https://scontent.fcai20-6.fna.fbcdn.net/v/t1.18169-9/26230089_793413847533943_4513596789603548254_n.png?_nc_cat=104&ccb=1-4&_nc_sid=09cbfe&_nc_ohc=8q_8Rr7ZZe4AX-nB2pa&_nc_ht=scontent.fcai20-6.fna&oh=42348fd14ac03d5d7b42fa57aa73ded5&oe=6139C1A0" style="width: 100%; height: 150%" >
</div>
<?= $this->renderSection("content"); ?>

<?=$this->include("scripts")?>
</body>
</html>