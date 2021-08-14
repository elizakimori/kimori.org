<pre>
<?php
$shortcuts = [
"Boiled McRice"=>"br",
"Fried McRice"=>"fr",
"Boiled McNoodles"=>"bn",
"Fried McNoodles"=>"fn",
"McCrunchy bits in orange sauce"=>"cb",
"McCrunchy bits in orange sauce and McNoodles"=>"cbm",
"McKlatchian Kebab"=> "kk",
"McRib"=>"r",
"McRib and McNoodles"=> "rm",
"McChopsuey"=>"cs",
"McChopsuey and McNoodles"=> "csm",
"McChowmein"=>"cm",
"McChowmein and McNoodles"=>"cmm",
"McPrawn balls"=>"pb",
"McPrawn balls and McNoodles"=>"pbm",
"McSlice Porker"=>"sp",
"McCrispy Duck"=>"cd",
"McCrispy Duck and McNoodles"=>"cdm",
"McDwarven Ratburger"=>"rb",
"McMorpork BigDibbler"=>"bd",
"McCola"=>"c",
"Strawberry McWobbler"=>"sw",
"McJasmin Tea"=>"jt",
"McWater"=>"w"
];

$includehints = isset($_POST['hints']) && $_POST['hints'] == '1';
$includecommands = isset($_POST['commands']) && $_POST['commands'] == '1';
$includecleanupcommands = isset($_POST['cleanupcommands']) && $_POST['cleanupcommands'] == '1';
$includefast =  isset($_POST['fastsetup']) && $_POST['fastsetup'] == '1';
$hinta = '';
$hintd = '';
$commands = '';
if ($includecommands) { 
$commands = ';mccountercommands';
}
$fastmenu = "alias mccounteraliases ";
$cleanupmenu = 'alias mcdeletealiases ';
if (isset($_POST['menu'])) { 
		foreach(preg_split("/\n/",$_POST['menu']) as $line) { 
				if (preg_match("/^\s/",$line)) {
						$chunks = preg_split("/\.+/",trim($line));
						$bits = preg_split("/\s+/",trim($line));
						$dish = trim($chunks[0]);
						$price = trim($bits[array_key_last($bits)]);
						$price = str_replace("A$","",$price);
//						print "[".$dish."] = [".$price."]<br>";
#						print_r(array($line,$chunks,$bits,$dish,$price));
						if ($includehints) { 
							$hinta = ";frimble Added 1x ".$dish;	
							$hintd = ";frimble Subtracted 1x ".$dish;	
						}
						if (isset($shortcuts[$dish])) { 
							
							if (!$includefast){
								print "alias ".htmlentities($_POST['addprefix']).$shortcuts[$dish]." add ".htmlentities($price).$hinta.$commands.";\n";
								print "alias ".htmlentities($_POST['subprefix']).$shortcuts[$dish]." subtract ".htmlentities($price).$hintd.$commands.";\n";
							}
							$add = "alias ".htmlentities($_POST['addprefix']).$shortcuts[$dish]." add ".htmlentities($price).";";
							$del = "alias ".htmlentities($_POST['subprefix']).$shortcuts[$dish]." subtract ".htmlentities($price).";";
							$fastmenu .= $add . $del;


							$cleanupmenu .= "unalias ".htmlentities($_POST['addprefix']).$shortcuts[$dish].";";
							$cleanupmenu .= "unalias ".htmlentities($_POST['subprefix']).$shortcuts[$dish].";";
						}
//						print_r($chunks);
//						print_r($bits);

				}
		}
		if ($includecleanupcommands){
				print "<hr>";
				print $cleanupmenu;
				print "<hr>";
		} 
		print "<hr>";
		print $fastmenu;
		print "\nmccounteraliases<br><hr>";
}


$mockmenu = "Appetisers
    Boiled McRice ................................  A$1.40
    Fried McRice .................................  A$1.41
    Boiled McNoodles .............................  A$2.03
    Fried McNoodles ..............................  A$2.03

Main Courses
    McCrunchy bits in orange sauce ...............  A$1.83
    McCrunchy bits in orange sauce and McNoodles .  A$3.26
    McKlatchian Kebab ............................  A$2.42
    McRib ........................................  A$1.72
    McRib and McNoodles ..........................  A$3.15
    McChopsuey ...................................  A$1.79
    McChopsuey and McNoodles .....................  A$3.22
    McChowmein ...................................  A$2.15
    McChowmein and McNoodles .....................  A$3.58
    McPrawn balls ................................  A$1.77
    McPrawn balls and McNoodles ..................  A$3.20
    McSlice Porker ...............................  A$2.91
    McCrispy Duck ................................  A$2.19
    McCrispy Duck and McNoodles ..................  A$3.62
    McDwarven Ratburger ..........................  A$3.32
    McMorpork BigDibbler .........................  A$4.46

Soft Drinks
    McCola .......................................  A$2.63
    Strawberry McWobbler .........................  A$2.97
    McJasmin Tea .................................  A$3.04
	McWater ......................................  A$9.91";
if (isset($_POST['menu'])) { 
		$mockmenu = $_POST['menu'];
}

?>

<form method=post>
paste in mcsweeney menu here:
<br/>
<textarea name=menu rows=25 cols=80><?php echo htmlentities($mockmenu); ?></textarea>
<br/>
addprefix:
<input type=text name=addprefix value=mca><br>
subprefix:
<input type=text name=subprefix value=mcd><br>
include confirmation msg <input type=checkbox name=hints value=1 checked=checked><br>
include commands <input type=checkbox name=commands value=1 ><br>
include cleanup commands <input type=checkbox name=cleanupcommands value=1 ><br>
fast setup<input type=checkbox name=fastsetup value=1 checked=checked ><br>
<input type=submit value="generate aliases">
</form>
<hr>
So you want to beat McSweeney do ya?<br> Some tools and aliases that should get me triple gold star can be found on this page, Maybe one day this page will even have a tutorial on how to make it all work, for now though, youll havw wto content with my aliases, and figuring the rest out for yourself.. <br>Good luck!<br>

<small>copy paste everything below this line to the mud</small>
<hr>
<plaintext>
'the kitchen stuff, mcfetch and mcprep 90% of the time, occasionally place a well timed mcfry for McFried Rice or Noodles
alias mckitchencommands frimble %^BOLD%^Commands:%^RESET%^ mcfetch mcfry mcprep
alias mcingredients frimble %^BOLD%^Ingredients:%^RESET%^ pork chowmein rib dibbler chowmein chopsuey rat pork noodles rice bits kebab prawn
alias mcfetch fetch $*$ from pantry;mccook;mckitchencommands;mcingredients
alias mcprep get all from grill&fryer&griddle&vats;prepare all;put things in chutes;get things from surface;put things in chutes $*$;check appliances;check orders;mckitchencommands;mcingredients
alias put things except held things&worn things in vats;put things except held things&worn things on grill;put things except held things&worn things in fryer;put things except held things&worn things on griddle;
alias mcfry get $arg:1$ noodles&$arg:1$ rice from vats;put boxes on griddle;
alias mccook put things except held things&worn things in vats;put things except held things&worn things on grill;put things except held things&worn things in fryer;put things except held things&worn things on griddle

