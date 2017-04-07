<html>

<head>
<title>GrabTutor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/register.css">
  <link rel="stylesheet" href="../../assets/css/fonts.css">
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
</head>

<body>
<div class = "container" id = "_tcont">

	<div id = "_regbox">
		<div id = "_logo">
			<img id = "_log" src =  "../../assets/imgs/grablog.png">
		</div>



		<div id = "_logline">
			<div class = "_line" id = "_left"></div>
			<center>
			<div id = "_cont"> Sign-up</div>
			</center>
			<div class = "_line" id = "_right"></div>

		</div>


		<div id = "_formdat">
			<form method = "post" action = "<?PHP echo base_url('index.php/c_register/register'); ?>">
				<div id = "_uname">
					<input type = "text" name = "UNAME" class = "_entry" placeholder="Username" value = "<?PHP if(isset($u_name)) echo $u_name; ?>" required>
				</div>

				<div id = "_fullname">
					<input type = "text" id = "_fNam" name = "FNAME" class = "_entN" placeholder ="First Name" value = "<?PHP if(isset($f_name)) echo $f_name; ?>" required>
					<input type = "text" id = "_lNam" name = "LNAME" class = "_entN" placeholder ="Last Name" value = "<?PHP if(isset($l_name)) echo $l_name; ?>" required>
				</div>

				<div id = "_pword">
					<input type = "password" name = "PNAME" class = "_entry" placeholder = "Password"  required>
				</div>

				<div id = "_rpword">
					<input type = "password" name = "RPNAME" class = "_entry" placeholder = "Re-enter Password" required>
				</div>

				<div id = "_emadd">
					<input type = "text" name = "EMADD" class = "_entry" placeholder = "E-mail Address" value = "<?PHP if(isset($e_add)) echo $e_add; ?>" required>
				</div>

				<div id = "_idno">
					<input type = "text" name = "IDNO" class = "_entry" placeholder = "ID Number" value = "<?PHP if(isset($id_no)) echo $id_no; ?>" required>
				</div>

				<div id = "_codeg">
					<input type = "text" name = "CODEG" class = "_entry" placeholder = "Course Degree" value = "<?PHP if(isset($cor_id)) echo $cor_id; ?>" required>
				</div>				

				<div id = "_phoneno">
					<input type = "text" name = "PHONENO" class = "_entry" placeholder = "Phone Number (09xxxxxxxxx) " value = "<?PHP if(isset($phone_num)) echo $phone_num; ?>" >
				</div>

				<div id = "_bday">
					<input type = "date" name = "BDAY" class = "_entry" placeholder = "Birthday" value = "<?PHP if(isset($b_day)) echo $b_day; ?>" required>
				</div>


				<div id = "_sub">
					<button type = "submit" id = "_submit"> REGISTER </button>
				</div>

				<?PHP
					if(isset($GLOBALS['error']))
					echo $GLOBALS['error'];
				 ?>






			</form>
		</div>
	</div>

</div>
<div class = "container"  id = "_bcont">
	<div class = "_abcont">
		<a href = "#"> Terms of Service </a> |
		<a href = "#"> Privacy Policy </a> 
	</div>
	
	<div class = "_copyright">
		© GrabTutor 2017
	</div>

</div>
</body>

</html>