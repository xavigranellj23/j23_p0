<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
 </head>
 <body>

 <!---Ejemplo 1 -->

 <table width="300" border="1">
	<tr>

		<?php
			for($num=1;$num<=8;$num++){
			echo "<td>";
			echo $num;
			echo "</td>";
			}
		?>

	</tr>
</table>

 <!---Ejemplo 2 -->

 <table border="1" align="center">
	<tr>

		<?php
			for($num=1;$num<=8;$num++){
			echo "<tr><td>$num</td></tr>";
			}
		?>

	</tr>
</table>

 <!---Ejercicio 1 -->

 <table width="150" border="1">
	<tr>

		<?php
			for($num=1;$num<=4;$num++){
				echo "<tr></tr>";
			for($num2=1;$num2<=4;$num2++){
				echo "<td>$num2</td>";
			}}

		?>
	</tr>
  </table>

  <br><br>

<!---Ejercicio 1 (Otra manera) -->

 <table width="150" border="1">
		<?php
			for($num=1;$num<=4;$num++){
				?>
				<tr>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
				</tr>
				
				<?php
			}
		?>
  </table>

  <br><br>

 <!---Ejercicio 2 -->

 <table width="150" border="1">
	<tr>

		<?php
			for($num=1;$num<=16;$num++){
				echo "<td>$num</td>";
					if (($num%4==0)&&($num!=16)){
						echo "<tr></tr>";
					}
			}
		?>
	</tr>
</table>

<br><br>

<!---Ejercicio 2 (Otra manera) -->

 <table width="150" border="1">
	<?php
		$cont=1;
			for($fila=1;$fila<=4;$fila++){
				echo "<tr>";
				for($columna=1;$columna<=4;$columna++){
					echo "<td>$cont</td>";
					$cont++;
					}
				echo "</tr>";
			}
	?>
	
</table>

<br><br>

<!---Ejercicio 3 -->

 <table width="150" border="1">
	<tr>

		<?php
			for($num=1;$num<=4;$num++){
				echo "<tr></tr>";
			for($num2=1;$num2<=4;$num2++){
				echo "<td>$num2</td>";
			}}

		?>
	</tr>
  </table>

 <br><br>

 </body>
</html>
