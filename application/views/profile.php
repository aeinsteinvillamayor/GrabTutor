<html>

<head>


<title>GrabTutor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/base.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/profile.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/fonts.css">
  <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery-3.1.1.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery-3.1.1.min.js"></script>

<script type="text/javascript">
	function update_credentials(){
		var email = $("[name = 'email']").val();
		var course = $("[name = 'course']").val();
		var mobile_no = $("[name = 'mobile_no']").val();
		var birthday = $("[name = 'birthday']").val();

		console.log(email);
		console.log(course);
		console.log(mobile_no);
		console.log(birthday);

		$.ajax({
			url: "<?= base_url('profile/update_credential')?>",
			type: 'GET',
			dataType: 'json',
			data: {
				email: email,
				course: course,
				mobile_no: mobile_no,
				birthday: birthday,
			}
		}).done(function(result){
				console.log('done');
		});
	}
</script>


</head>


<body>
<div class = "container" id = "_top">
	<div class = "row">
		<div id = "_mnav">
			<div id = "_logo">
				<img  id = "_logs" src = "../../assets/imgs/grablog_b.png">
			</div>
			
			<div id = "_access">
				<div id = "_cont"> <a id="navItem" class="navItem"href="<?PHP echo base_url('index.php/c_login/logout'); ?>"> Log Out</a></div>
			</div>
		</div>
	</div>
	<div class = "row">
		<div id = "_mwindow">
			<div id = "_glwind">
				<div id = "_lwind">
					<div id = "_propic">
						<img id = "_imgpic" src = "../../assets/imgs/profile_pic.png">
					</div>

					<div id = "_proname"><?= $user->f_name . " " . $user->l_name?>
					</div>

					<div class = "_line"></div>

					<div id = "_personal">
						<div class = "_headr"> Personal </div>


						<!--
						<div class = "_subhdr" > <a href = "<?PHP echo base_url('index.php/history'); ?>">  History </a></div>-->
						<div class = "_subhdr" style = "font-family:Futura Heavy" > Profile </div>

					</div>

					<div class = "_line"></div>
						

				</div>
			</div>


			<div id = "_rwind">

				<div>
				<div id = "_pfile">Profile </div></p>
			</div>

			<div id="profile-line"></div>

			<div class="profile">
				<div class="row">
					<div class="col-md-6 profile-inline">
						<div><p class="title">Personal Information</p></div>
						<div class="row profile-name">
							<div class="col-md-3">Name</div>
							<div class="col-md-9"><?= $user->f_name . " " . $user->l_name?></div>
						</div>
						<div class="row profile-name">
							<div class="col-md-3">ID No.</div>
							<div class="col-md-9"><?= $user->id_no?></div>
						</div>
						<div class="row input-margin">
							<div class="col-md-3 center">Email</div>
							<div class="col-md-6">
								<div class="form-group">
									<input class="form-control input-lg" id="inputlg" type="text" name="email" value = "<?=$user->e_add?>">
								</div>
							</div>
						</div>
						<div class="row profile-name">
							<div class="col-md-3">Username</div>
							<div class="col-md-9"><?=$user->u_name?></div>
						</div>
						<div class="row input-margin">
							<div class="col-md-3 center">Course</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control input-lg" id="inputlg" type="text" name="course" value = "<?=$user->cor_id?>">
								</div>
							</div>
						</div>
						<div class="row input-margin">
							<div class="col-md-3 center">Mobile No.</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control input-lg" id="inputlg" type="text" name="mobile_no" value = "<?=$user->phone_num?>">
								</div>
							</div>
						</div>
						<div class="row input-margin">
							<div class="col-md-3 center">Birthday</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control input-lg" id="inputlg" type="text" name="birthday" value = "<?=$user->b_day?>">
								</div>
							</div>
						</div>
					</div>

					<!--
					<div class="col-md-6 tutor-rating-margin profile-inline">
						<div><p class = "title">Tutor Information</p></div>
						<div class="profile-table-rating">
							<div class="row">
								<div class="col-md-3">Subject</div>
								<div class="col-md-3">Rating</div>
								<div class="col-md-3">Status</div>
							</div>
							<div class="profile-rating">
								<div></div>
							</div>
						</div>
					-->

						<div class="row">
							<div class="col-md-12" id = "remove-padding-right">
								<button type="button" class="btn btn-success button-part" onclick = "update_credentials()">Save</button>
							</div>
						</div>

					</div>

				</div>
			</div>
			</div>


		</div>

		<div id = "_hlight"> </div>
	</div>
</div>

</body>

</html>
