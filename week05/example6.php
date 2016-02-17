
<html>
	<body>
		<?php

			$today = mktime();

			$year = date("Y");

			echo "<p>$today</p>";
			echo "<p>$year</p>";

		?>
		<select name="lst_year">
			<?php

				$sYear = 1950;


				for($sYear; $sYear < 2016; $sYear++)
				{
					echo "<option value='$sYear'>$sYear</option>\n";
				}


			?>
		</select>
	</body>
</html>