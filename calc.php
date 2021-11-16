<!DOCTYPE html>
<html>
<head>
	<title>calc | page</title>
	<style>
		div{
			padding: 5px;
		}
	</style>
</head>
<body>

	<h1>Calculator</h1>
	<form method="GET" action="controller/form.php">
		<fieldset>
			<div>
				<label for="namKwanza">Namba ya kwanza</label>
				<input 
				type="number" 
				name="namKwanza"
				required="required"
				value="<?php echo $_GET['namKwanza']; ?>" 
				>
			</div>
			<div>
				<label for="namPili">Namba ya pili</label>
				<input 
				type="number" 
				name="namPili"
				required="required"
				value="<?php echo $_GET['namPili']; ?>" 
				 >
			</div>
			<div>
				<label>
					Chagua Tendo
				<select name="tendo">
					<option value="jumlisha">jumlisha</option>
					<option value="toa">toa</option>
					<option value="zidisha">zidisha</option>
					<option  value="gawanya">gawanya</option>
				</select>
				</label>
			</div>
			<div>
				<button name="btn" type="submit" value="btn">sawasawa</button>
			</div>

			<div>
						<?php
			if ( isset($_GET['ans'])) {
				echo $_GET['ans'];
			}
						?>
			</div>
		</fieldset>



	</form>

</body>
</html>