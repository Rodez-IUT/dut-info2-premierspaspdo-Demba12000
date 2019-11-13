<!DOCTYPE HTML>
<body>
<head>
	<title>All User</title>
	<meta charset="utf-8">
<head>
<body>
	<h1><b>All user</b></h1>
		
		<table border="1">
			<tr>
				<b>
				<td>id</td>
				<td>UserName</td>
				<td>Email</td>
				<td>Status</td>
				</b>
			</tr>
			<?php 
				$host='localhost';
				$db='my_activities';
				$user='root';
				$pass='root';
				$charset='utf8mb4';
				$dsn="mysql:host=$host;dbname=$db;charset=$charset";
				$options=[
					PDO::ATTR_ERRMODE				=>PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE	=>PDO::FETCH_ASSOC,
					PDO::ATTR_EMULATE_PREPARES		=>false,];
				try{
					$pdo=new PDO($dsn,$user,$pass,$options);
				}catch(PDOException$e){
					throw new PDOException($e->getMessage(),(int)$e->getCode());
				}
				$stmt = $pdo->query("SELECT * FROM users WHERE username LIKE 'e%' AND status_id LIKE '1' ");
				while($row = $stmt->fetch()){
					echo "<tr>";
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['username']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['status_id']."</td>";
					echo "</tr>";
				}
			?>
		</table>