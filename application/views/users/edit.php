<?php
	$nameArr = explode(' ', $user[0]['name']);
	$fName = $nameArr[0];
	$lName = $nameArr[1];
	$email = $user[0]['email'];
	$dob = $user[0]['dob'];
	$color = $user[0]['color'];
	$id = $user[0]['id'];
?>


<h2 class="mt-4 ml-auto mr-auto text-center"><?= $title ?></h2>

<div class="container mt-5">
	<form class="rounded p-3 mt-5 text-center w-75 ml-auto mr-auto text-dark bg-light" id="intakeForm">
		<div class="form-group mt-2">
			<label for="fName">First Name</label>
			<input type="text" class="form-control w-50 ml-auto mr-auto" id='fName' value="<?php echo $fName;?>" name="fName" placeholder="First name">
			<small id='firstSub' class="text-danger">Please enter a Valid First Name</small>
		</div>
		<div class="form-group mt-2">
			<label for="lName">Last Name</label>
			<input type="text" class="form-control w-50 ml-auto mr-auto" id='lName' name="lName" value="<?php echo $lName;?>" placeholder="Last name">
			<small id='lastSub' class="text-danger">Please enter a Valid Last Name</small>
		</div>
		<div class="form-group mt-2">

			<label for="email">Email address</label>
			<input type="text" class="form-control w-50 ml-auto mr-auto" id="email" value="<?php echo $email;?>" aria-describedby="emailHelp" placeholder="Enter email">
			<small id='emailSub' class="text-danger ">Please enter a Valid Email Address</small>
		</div>
		<div class="form-group mt-2">
			<label for="dob">Date of Birth</label>
			<input type="date" class="form-control w-50 ml-auto mr-auto" value="<?php echo $dob;?>" id="dob">
			<small id='dobSub' class="text-danger">Please enter your Date of Birth</small>
		</div>
		<input type="hidden" id='id' value="<?php echo $id;?>">
		<div class="form-group mt-2">
			<label for="color">Favorite Color</label> <br>
			<select class="custom-select w-50 ml-auto mr-auto" id="color">
				<option selected value="0">Pick a Color</option>
				<option value="Red">Red</option>
				<option value="Orange">Orange</option>
				<option value="Yellow">Yellow</option>
				<option value="Green">Green</option>
				<option value="Blue">Blue</option>
				<option value="Purple">Purple</option>
				<option value="Pink">Pink</option>
				<option value="White">White</option>
				<option value="Black">Black</option>
			</select> <br>
			<small id='colorSub' class="text-danger">Please Select a Color</small>
		</div>
		<button id='submitForm' class="btn btn-primary">Submit</button>
	</form>
</div>


<script>

	//Hide Validation Messages by Default
	//Pre-select Option for Select element.
	$(document).ready(function()
	{
		$('#firstSub').hide();
		$('#lastSub').hide();
		$('#emailSub').hide();
		$('#dobSub').hide();
		$('#colorSub').hide();

		$('select option:contains("<?php echo $color;?>")').prop('selected',true);
	});

	$("#intakeForm").submit(function(event)
	{
		event.preventDefault();
		let fName, lName, email, dob, color;

		fName = $('#fName').val();
		lName = $('#lName').val();
		email = $('#email').val();
		dob = $('#dob').val();
		color = $('#color').val();
		id = $('#id').val();


		let validate = validateForm();

		if(validate)
		{
			$.ajax(
				{
					url: "<?php echo base_url();?>users/update",
					method: "POST",
					data: {
						"name": fName + ' ' + lName,
						"email": email,
						"dob": dob,
						"color": color,
						"is_deleted": 0,
						"id": id,
					},
					success: function (data) {
						if (data.error) {
							console.log(data.error);
						} else {
							console.log(data);
							window.location.replace('<?php echo base_url();?>users?edit=true');
						}
					}
				});
		}
	});

	function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}

	function textOnly(text)
	{
		var regex = /^[a-zA-Z'-]+$/;
		return regex.test(text);
	}

	function validateForm()
	{
		let fName, lName, email, dob, color;

		fName = $('#fName').val();
		lName = $('#lName').val();
		email = $('#email').val();
		dob = $('#dob').val();
		color = $('#color').val();
		id = $('#id').val();

		//Basic Form Validation
		if(fName.length < 3 || !textOnly(fName))
		{
			$('#firstSub').show();
			return false;
		}
		else
		{
			$('#firstSub').hide();
		}
		if(lName.length < 3 || !textOnly(lName))
		{
			$('#lastSub').show();
			return false;
		}
		else
		{
			$('#lastSub').hide();
		}
		if(!isEmail(email))
		{
			$('#emailSub').show();
			return false;
		}
		else
		{
			$('#emailSub').hide();
		}
		if(dob.length < 8)
		{
			$('#dobSub').show();
			return false;
		}
		else
		{
			$('#dobSub').hide();
		}
		if(color == "0")
		{
			$('#colorSub').show();
			return false;
		}
		else
		{
			$('#colorSub').hide();
		}

		return true;
	}


</script>
