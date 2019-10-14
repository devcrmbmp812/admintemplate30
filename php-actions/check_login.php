<?php
	session_start();
	$LoginCheck = "yes";
	include $_SERVER["DOCUMENT_ROOT"]."/php-configs/config.php";

	$User_Username = (isset($_POST['User_Username'])  ? trim($_POST['User_Username']) : "");
	$User_Password = (isset($_POST['User_Password'])  ? trim($_POST['User_Password']) : "");
	$Password = TobiKrypt($User_Password);
	if (!filter_var($User_Username, FILTER_VALIDATE_EMAIL)) {
	$sql_result = $db->select("members", array(), array("MemberUsername"=>$User_Username, "MemberPassword"=>$Password))->results();
	}
	else {
	$sql_result = $db->select("members", array(), array("MemberEmail"=>$User_Username, "MemberPassword"=>$Password))->results();	
	}
	if(!empty($sql_result))
	{
		if($sql_result['MemberRank']<1)
		{
		$_SESSION["LoginErrors"][] = "Din bruger er ikke blevet aktiveret.";
		} else {
			//start af login sessions med database værdier
			$PersonID = $sql_result['MemberID'];
			$SetOnline = "UPDATE members SET  OnlineStatus = :online, MemberLastseen = :now, LastSeen = :Rnow WHERE MemberID = :id";
			$query = $db->prepare($SetOnline);
			$query->bindValue(":online", "online");
			$query->bindValue(":id", $PersonID);
			$query->bindValue(":now",date("Y-m-d H:i:s"));
			$query->bindValue(":Rnow",date("Y-m-d H:i:s"));
			try {
			$result = $query->execute();
			} 
			catch(PDOException $e) {
			}
			if($result) {
			$_SESSION["UserID"] = $sql_result['MemberID'];
			$_SESSION["MemberRank"] = $sql_result['MemberRank'];
			unset($_SESSION["LoginErrors"]);
			header('Location: /');
			exit;
			}
			else {
				$_SESSION["LoginErrors"][] = "Der skete en fejl ved login.";
				header('Location: /login.php');
				exit;
			}	
		}
	} else {
		$_SESSION["LoginErrors"][] = "Forkert Login prøv igen.";
			header('Location: /login.php');
		exit;
	}

?>
