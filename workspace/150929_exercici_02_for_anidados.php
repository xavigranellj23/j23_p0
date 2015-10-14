<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<table border="1">
		<?php
			for($num=1;$num<=4;$num++){
				echo "<tr>";
				for($num2=1;$num2<=4;$num2++){
					echo "<td>$num</td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>