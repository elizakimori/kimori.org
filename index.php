<html>
		<head>
				<title>kimori.org</title>
<style>
body,html{
		height: 100%;
		width: 100%;
		padding: 0;
		margin: 0;
		font-family:sans-serif;
		line-height: 1.2em;
		position:relative;
}
#aliases {
	position:absolute;top:20px;
		border: dotted 1px orange;
		width: 70%;
		right: 2%;
		position:absolute;
		padding:10px;
}
#footer {
	position: absolute;
	bottom:0;
	right: 10px;
	text-align: right;
}
.console { 
	background-color: black;
	font-family: consolas,fixed;
	color: white;
	line-height: 1.3em;
}

</style>
		</head>
		<body>
<div id=links>
	<a href="mcsweeney/">mcsweeney menu alias generator</a><br/>
	<a href="aliases/speedwalks-pumpkintown.txt">Pumpkin town walkthrough alias (paste in after skip, run 'ptwalk' to execute)</a><br/>
	<a href="maps/">decorated airk/kefka/quow maps (mush compatible)</a><br/>
	<a href="http://dwkimori.blogspot.com/2011/">http://dwkimori.blogspot.com/2011/</a><br/>
	<a href="djbtextbook.txt">djbtextbook.txt</a><br/>
	<a href="aliases/">aliases</a><br/>
	<a href="aliases/makewalker.html">alias looper - interruptable alias maker</a><br/>
</div>
<div id=aliases>
		<h3>Some <a href="/aliases/">aliases</a> that help me out:</h3><br/>
<textarea readonly cols=120 rows=40 class=console>
'these are all the aliases linked above in one big dump for your convenience, to view them seperately, open the aliases link and check them out there

'everything, including this comment, should be copy-pasteable to the mud without problems

'enjoy!



<?php 
$dir = "aliases/";
if ($dh = opendir($dir)) { 
	while (false !== ($file = readdir($dh))) { 
		if ( substr($file,-3) != "txt" ) continue;
	//	echo "<a href=\"aliases/$file\">$file</a>:<br>";
		echo "\n'contents of $file:\n\n";	
		echo htmlentities(file_get_contents($dir.$file));

	}
}
?>
</textarea>
<pre>
&gt; when kyoshi
Kyoshi last logged off 6 years, 160 days, 14 hours, 26 minutes and 59 seconds ago.
&gt; when myr
Myr last logged off 1 year, 25 days, 13 hours, 48 minutes and 24 seconds ago.
&gt; 60 kyoshi
60 times Kyoshi's age is 8 years, 290 days, 9 hours, 5 minutes and 52 seconds, which lasts until Sat Dec  9 22:06:39 2023.
&gt; panic
You run around in circles, flail your arms and panic.
&gt; shout Taiki!!! Come back!!
</pre>
</div>

<div id=footer>
<pre><small>
Information on Kimori Clan founded by Taiki in Ankh-Morpork in 2005:
In an attempt to strengthen the ties within his family, Taiki bribed some wizards (with food) to establish a magical way to stay in contact with each other no matter where they are.
The Kimori family is very proud of its clan. For more information on Kimori, see 'refer Kimori', 'refer Taiki', 'finger Myr' and also www.kimori.org
The members are: Carasel, Ceridwen, Eliza, Fegreac, Ikke, Kari, Keiichi, Killiyana, Krimsin, Kyoshi, Laule, Llia, Myr, Natara, Oli, Ooonah, Taiki, Uhr, Yossarianna and Yva.
</small></pre>
</div>
		</body>
</html>
