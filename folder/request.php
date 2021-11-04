
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Request Page</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Comfortaa');

*{
	margin: 0;
	padding: 0;
	outline: none;
	box-sizing: border-box;
	font-family: 'Comfortaa', cursive;
}

body{
	background: url('bg.jpg') no-repeat center;
	background-size: cover;
	width: 100%;
	height: 100vh;
}

.wrapper{
	position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0,0.6);
    max-width: 550px;
    width: 100%;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    border-radius: 5px;
}

.wrapper .input {
    width: 85%;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
    font-weight: bold;
}
.searchbtn {
    background: #ffec00;
    width: 20%;
    border-radius: 5px;
    position: relative;
    cursor: pointer;
}

.searchbtn .fas{
	position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 18px;
} 

	</style>
</head>
<body>
<?php include "navbar1.php";?>
	<form action="requestconn.php" method="POST">
	<div class="wrapper">
	
	<input type="text" class="input" name="district" 
	placeholder="What district are u from?">
	<input type="text" class="input" name="blood" 
	placeholder="What is ur blood group?">
	<div class="searchbtn"><button><i class="fas fa-search"></button></i></div>
	
</div>
</form>
</body>
</html>
