<h1>Aliases</h1><h3>copy pastable dw tools and utils and tidbits:</h3>
<hr>
<p>All these files should be fully copy pasteable into the mud, comments and all</p>
<p>
enjoy :)
</p>
<small><i>alias dependencies found in <a href=dependencies.txt>dependencies.txt</a></i></small><br>
<hr>
<?php

$files = scandir("./");
rsort($files);
		foreach($files as $entry) {
			if (preg_match('/.txt$/',$entry)) {
					echo "<a href=\"$entry\">$entry</a><br>";
			}

    }
?>

