<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<input type="text" name="number1" >
	<input type="text" name="number2" >
	<input type="submit" name="submit" value="OK" >
</form>

<?php

$num1 = isset($_POST['number1']) ? $_POST['number1']: 0;
$num2 = isset($_POST['number2']) ? $_POST['number2']: 0;

if($num1 != 0 && $num2 != 0){

	?>
	<table border="1">
	<?php
	$counter = 1;
	for($i = 1 ;$i <= $num1; $i++){
		?>
		<tr>
			
		<?php
		for($j = 1 ;$j <= $num2; $j++){
			?>
			<td>
				
			<?php
			echo $counter;
			$counter++;
			?>

			</td>
			<?php
		}
		?>

		</tr>
		<?php
	}

	?>
	</table>
	<?php
}

?>