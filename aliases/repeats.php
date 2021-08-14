<?php

for ($i = 1; $i<100; $i++) { 
$output = "alias ${i}x ";
for ($y = 1; $y<=$i; $y++) {
		$output .= "\$*\$;";
}
echo $output."\n";
}

?>

