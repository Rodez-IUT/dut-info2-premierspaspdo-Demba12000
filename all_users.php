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
				$stmt = $pdo->query('select users.id as user_id, username, email, s.name as status from users join status s on users.status_id = s.id');
				while($row = $stmt->fetch()){
					echo "<tr>";
					echo "<td>".$row['user_id']."</td>";
					echo "<td>".$row['username']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['status']."</td>";
					echo "</tr>";
				}
			?>
		</table>