<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions | Basic Banking System</title>
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="css/customer.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

	<title>Table with database</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			color: #d96459;
			text-align: left;
			background-color: black;
		}
		

	</style>
</head>
<body>
	<!-- navbar starts here  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./index.html">Money Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.html">Home </a>
                </li>
            </ul>
        </div>
    </nav>
	

	<table>
		<tr>
			<th>sl.no.</th>
			<th>Name</th>
			<th>Email</th>
			<th>Bank Balance</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost","root","","customers");
		if($conn-> connect_error) {
			die("Connection failed:". $conn-> connect_error);

		}

		$sql = "SELECT * from customers";
		$result = $conn-> query($sql);

		if($result-> num_rows > 0){
			while ($row = $result-> fetch_assoc()){
				echo "<td> ".$row["sl.no."] ."<td> ".$row["Name"] ."<td> ".$row["Email"] ." <td>".$row["Bank Balance"] ."<tr>" ;
			}
			echo "</table>";
		}
		else {
			echo "0 result";
		}
		$conn-> close();
		?>

	</table>
</body>
</html>


