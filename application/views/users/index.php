<div class="container-fluid bg-success p-3 text-center" id="createdBanner">
	<div class="container">
		<h5>The user was successfully created!</h5>
	</div>
</div>
<div class="container-fluid bg-success p-3 text-center" id="editBanner">
	<div class="container">
		<h5>The user was successfully edited!</h5>
	</div>
</div>
<div class="container-fluid bg-warning p-3 text-center" id="deletedBanner">
	<div class="container">
		<h5>The user was successfully deleted!</h5>
	</div>
</div>
<h2 class="mt-4 ml-auto mr-auto text-center"><?= $title ?></h2>

<div class="container">
	<div class="row mt-5">
		<?php
			//Initialize index before loop so we can create clean card rows in bootstrap.
			$ind = 0;
			foreach($users as $user) :

			if($ind > 0 && $ind % 3 == 0) //Every 3 columns, end previous row, start a new row, do not close initial row.
				echo "</div><div class=\"row\">";

			//Define the fields into clean variable names for readability in the markup.
			$id = $user['id'];
			$name = $user['name'];
			$email = $user['email'];
			$color = ucfirst($user['color']);

			//Date needs to be formatted to read as m/d/Y.
			//I prefer to store it as Y/m/d per conventions.
			$dob = $user['dob'];
			$dob = date("m/d/Y", strtotime($dob));


			echo "
			<div class=\"col-sm text-center\">
				<div class='card text-center p-3 text-dark' id='".$id."'>
					<h3>".$name."</h3>
					<p>Email: ".$email."</p>
					<p>Date of Birth: ".$dob."</p>
					<p>Favorite Color: ".$color."</p>
					<div>
						<button id='edit-user'  onClick='editUser(".$id.")' class='btn btn-primary btn-warning w-25 mt-1'>Edit</button>
						<button id='destroy-user'  onclick='deleteUser(".$id.")' class='btn btn-primary btn-danger w-25 mt-1'>Delete</button>
					</div>			
				</div>
			</div>";

			$ind++;
			endforeach;
		?>
	</div>

	<script>

		//Show banner if URL parameters are found
		$(document).ready(function()
		{
			//Initialize banners to hidden until conditions are met.
			$('#createdBanner').hide();
			$('#deletedBanner').hide();
			$('#editBanner').hide();


			let searchParams = new URLSearchParams(window.location.search);

			if(searchParams.has('create'))
			{
				$('#createdBanner').show();
			}
			if(searchParams.has('edit'))
			{
				$('#editBanner').show();
			}
			if(searchParams.has('delete'))
			{
				$('#deletedBanner').show();
			}
		});


		function deleteUser(id)
		{
			$.ajax(
				{
					url: "<?php echo base_url();?>users/destroy",
					method: "POST",
					data: {
						"id": id
					},
					success:function(data)
					{
						if(data.error)
						{
							console.log(data.error);
						}
						else
						{
							console.log(data);
							window.location.href = '<?php echo base_url();?>users?delete=true';

						}
					}
				});
		}

		function editUser(id)
		{
			window.location.href = '<?php echo base_url();?>users/edit/'+id;
		}
	</script>
