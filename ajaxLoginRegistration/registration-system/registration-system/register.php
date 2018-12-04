<?php
//Here is the registration code which takes the username, email, password and date. The code will check in the users table if the user email exists, if it does exist it will display in error using jQuery.	
	require_once 'dbconfig.php';

	if($_POST)
	{
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$user_password = $_POST['password'];
		$joining_date =date('Y-m-d H:i:s');
		
		$password = md5($user_password);
		
		try
		{	
		
			$stmt = $db->prepare("SELECT * FROM reg_users WHERE user_email=:email");
			$stmt->execute(array(":email"=>$user_email));
			$count = $stmt->rowCount();
			
			if($count==0){
				
			$stmt = $db->prepare("INSERT INTO reg_users(user_name,user_email,user_password,joining_date) VALUES(:uname, :email, :pass, :jdate)");
			$stmt->bindParam(":uname",$user_name);
			$stmt->bindParam(":email",$user_email);
			$stmt->bindParam(":pass",$password);
			$stmt->bindParam(":jdate",$joining_date);
					
				if($stmt->execute())
				{
					echo "registered";
				}
				else
				{
					echo "Query could not execute !";
				}
			
			}
			else{
				
				echo "1"; //  not available
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>