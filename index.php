<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Show DB data in Card</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="showDataInCard.css"/>
</head>

<body>

<?php
include 'connect.php';

		$sql = "SELECT * FROM content";
		$result = $conn -> query($sql);
		if($result -> num_rows > 0){
			$GLOBALS['nopass'] = "";
			while($row = $result -> fetch_assoc()){
				echo "
					  <div class='crdalign'>
					  <div class='card'>
					  <div class='container'>
					  <p><b>Company Name :</b> {$row['content_Name']} </p>
					  <p id='loginid'><b>Company Description :</b> {$row['content_description']} </p>
					  </div>
					  </div>
					  </div>
					  ";
			}
		}
		else{
			$GLOBALS['nopass'] = "You have not saved any passwords";
		}

    ?>

</body>
</html>