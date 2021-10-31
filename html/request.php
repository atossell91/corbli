<!DOCTYPE html>
<html>
	<head>
		<link href="../css/styles.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<p1>Some SQL Below</p1>
		<?php
			$servername="localhost";
			$username="ant";
			$password="2yqtqnn4avyyvbnax7cke7onrj3q7kpf";
			$dbname="ANT_TEST";

			$conn= new mysqli($servername, $username, $password, $dbname);
			
			if ($conn->connect_error) {
				die("Database Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM GIRLS";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "Name: " . $row["NAME"] . " - Body type: " . $row["BODYTYPE"] . "<br>";
				}
			} else {
				echo "No results.";
			}
			$conn->close();*/
		?>
	</body>
</html>
