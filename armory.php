<?php 
  //session_start(); 

  /* IF YOU WANT TO CHECK IF A USR IS LOGGED IN
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  WHEN A USER LOGS OUT
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  */
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style.css">
<script  src="./script.js"></script>

<script type="text/javascript" src="http://cdn.cavernoftime.com/api/tooltip.js"></script>
<script>
		var CoTTooltips = {
        /* Enable or disable the rename of URLs into item, spell and other names automatically */
        rename: true,
        /* Enable or disable icons appearing on the left of the tooltip links. */
        icons: true,
        /* Overrides the default icon size of 15x15, 13x13 as an example, icons must be true */
        iconsize: 15,
        /* Enable or disable link rename quality colors, an epic item will be purple for example. */
        qualitycolor: true,
        /* TBA */
        forcexpac: { },
        /* Override link colors, qualitycolor must be true. Example: spells: '#000' will color all renamed spell links black. */
        overridecolor: {
            spells: '',
            items: '',
            npcs: '',
            objects: '',
            quests: '',
            achievements: ''
        } 
		};
	</script>

<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	<meta name="viewport" content="width=device-width" />
	<meta charset="utf-8">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="source/sorttable.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<title>The Sanctuary Frostwolf</title>
	<link rel="stylesheet" href="source/popup.css" type="text/css" />
	<link rel="stylesheet" href="source/style.css" type="text/css" />
	<script src="//code.jquery.com/jquery-1.8.3.js"></script>
	<script src="source/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	<script src="source/jquery.custom.js"></script>
	
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/jquery-11.0.min.js'></script>	
	
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-common-libraries.js'></script>	
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-functions.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-thumbsgeneral.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-thumbsstrip.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-touchthumbs.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-panelsbase.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-strippanel.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-gridpanel.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-thumbsgrid.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-tiles.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-tiledesign.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-avia.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-slider.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-sliderassets.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-touchslider.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-zoomslider.js'></script>	
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-video.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-gallery.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-lightbox.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-carousel.js'></script>
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/js/ug-api.js'></script>
	<link rel='stylesheet' href='unitegallery-master/source/unitegallery/css/unite-gallery.css' type='text/css' />
	<script type='text/javascript' src='unitegallery-master/source/unitegallery/themes/default/ug-theme-default.js'></script>
	<link rel='stylesheet' 		  href='unitegallery-master/source/unitegallery/themes/default/ug-theme-default.css' type='text/css' />
	
	
	
</head>
<body>

<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'> -->

<script  src="./scripts.js"></script>

<div id="guild-events" class="guild-events boxed">
<!-- <div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" style="margin-left:1%;">

  <font color="black">Ingame name: </font> 


  <div id="topnav" >
	<select name="realm">
    <option class="btn" value="Frostwolf">Frostwolf</option>
    <option class="btn" value="Outland">Outland</option>
    <option class="btn" value="Lordaeron">Lordaeron</option>
	<option class="btn" value="Icecrown">Icecrown</option>
	<option class="btn" value="Blackrock">Blackrock</option>
	</select>
  <input type="text" name="fname" placeholder="Search..">
</div>

  <input type="submit">
</form> -->
<a href = "./index.php"><figure class = "return-to-index">WoW</figure></a>
<form action='' class='form' method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" style="margin-left:1%;">
  <p class='field required'>
    <label class='label required' for='name'>Full name</label>
    <input class='text-input' id='name' name='fname' required type='text' placeholder='Enter Username'>
  </p>
  <div class='field'>
  <select name="realm" id="id_work_days" multiple>
  <option value="Frostwolf">Frostwolf</option>
  <option value="Outland">Outland</option>
  <option value="Lordaeron">Lordaeron</option>
  <option value="Icecrown">Icecrown</option>
  <option value="Blackrock">Blackrock</option>
</select>
  </div>
  <p class='field half'>
    <input class='button' type='submit' value='Send'>
  </p>
</form>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.customSelect/0.5.1/jquery.customSelect.min.js'></script>
<script src='https://codepen.io/mican/pen/XgRmNr.js'></script>

</div>

<?php
//ignore warnings being set by warmane
error_reporting(0); 
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']); 
	$realm_s = htmlspecialchars($_REQUEST['realm']); 
    if (empty($name)) {
        echo "Name is empty";
    }
	if ($name != htmlspecialchars($_REQUEST['fname'])){
		echo "Not found!";
	}
	else 
	{
	
		
        $json_string = file_get_contents("http://armory.warmane.com/api/character/" . $name . "/" . $realm_s . "/summary");
		$minfo		 =	json_decode($json_string);
		
		echo "<h1 class='guild-box-title'>";
		
		
		echo "<div color='black'>Player ";
		echo "<font color='orange'>" .$name. "</font>"; 
		echo "<font color='black'> is currently: </font>"; 
		echo $minfo->online  > 0 ? "<font color='green'>Online</font>" : "<font color='red'>Offline</font>";
		echo "</h1>";
		
		$gmembers = json_decode($json_string, true);
		$gmembers = $gmembers['equipment'];	
		echo '<div>';			
		echo '<table style="float: left;width:450px;margin-left:1%;">';
		echo	'<thead>';
		echo '<th>EQUIPMENT</th>';
		echo	'</thead>';
		echo '<tbody>';
			foreach($gmembers as $key => $value) {	
				echo '<tr>';
				echo '<td><a href="http://mop.cavernoftime.com/item=' . $value['item'] . '">' . $value['name'] . '</a></td>'; 
				echo '</tr>';
			}
		echo '</tbody>';			
		echo '</table >';
		sleep(4);
		$guild_name = $minfo->guild;
		$guild_name1 = $minfo->guild;
		$guild_name = str_replace(' ', '+', $guild_name);
		$realm      = $minfo->realm;
		$string1 = file_get_contents("http://armory.warmane.com/api/guild/" . $guild_name . "/" . $realm . "/summary");
		$ginfo		 =	json_decode($string1);
		
		$members = json_decode($string1, true);
		$members = $members['roster'];
		
		echo '<table style="float: right;width:600px;margin-right:1%;">';

		echo	'<thead>
					
					<th colspan="3">' . $guild_name1 . ' members online</th>
					<tr>
						<th>Name</th>
						<th>Race</th>
						<th>Class</th>
						<th>Level</th>
						<th>Achievement Points</th>					
					</tr>
					
				</thead>';
		echo '<tbody>';
			foreach($members as $key => $value)
			{
				if($value['online'] > 0) {
				echo '<tr>';
				echo '<td>' . $value['name'] . '</td>'; 
				echo '<td>' . $value['race'] . '</td>';
				echo '<td>' . $value['class'] . '</td>';
				echo '<td>' . $value['level'] . '</td>';
				echo '<td>' . $value['achievementpoints'] . '</td>';
					echo '</tr>';
				}
			}
		echo '</tbody>';
		echo '</table>';
		
		
		
		
		
		echo '<div style="position:relative;width:410px;height:1000px; float:left;margin-top:1%;margin-left:12%;" align="right">';
		echo '<div align="right" style="overflow: hidden; margin-top: -0px; margin-left: 35px;margin-right:50px;z-index:1">';
		echo '<iframe scrolling="no" align="right"';
		echo 'src="http://armory.warmane.com/character/'. $name . '/' . $realm_s . '/summary"';
		echo 'style="border: 0px none; margin-left: -0px; height: 983px; margin-top: -557px; width: 411px;z-index:2>" html=""></iframe>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		
		echo '</br>';
		echo '</br>';
		echo '</br>';
		echo '<div>';
		
		$doc = new DOMDocument;
		$doc->preserveWhiteSpace = true;
		$doc->strictErrorChecking = false;
		$doc->recover = true;
		$doc->loadHTMLFile('http://armory.warmane.com/character/'. $name . '/' . $realm_s . '/summary');
		$xpath = new DOMXPath($doc);
		$query = "//div[@class='recent-activity']";
		$entries = $xpath->query($query);
		$entries->item(0)->textContent = str_replace('ago', 'ago </br>', $entries->item(0)->textContent);
		$array_achi = $entries->item(0)->textContent;

		$array_achi = explode("</br>", $array_achi);
		

		echo '<table id="achi" style="width:400px;position:absolute;margin-left:38.5%;margin-top:21%">';
		
		echo '<thead>
					<th>Recent Achievements</th>
				</thead>';
		echo '<tbody>';
	
		foreach($array_achi as $key => $achievement ){
		echo '<tr>';	
		echo '<td> <a href="http://mop.cavernoftime.com/achievement=' . $achievement . '">'. $achievement .'</a> </td>';
		echo '</tr>';
		}
		
		echo '</tbody>';
		echo '</table>';
		
		echo '</div>';

		echo '<div style="position:absolute;margin-top:35%;margin-left:38.5%;color:black;width:600px;">';
		
		$doc = new DOMDocument;
		$doc->preserveWhiteSpace = true;
		$doc->strictErrorChecking = false;
		$doc->recover = true;
		$doc->loadHTMLFile('http://armory.warmane.com/character/'. $name . '/' . $realm_s . '/summary');
		$xpath = new DOMXPath($doc);
		$query = "//div[@class='character-stats']";
		$entries = $xpath->query($query);
		echo $entries->item(0)->textContent;
		echo '</div>';

		
    } 
}
?>

</div>

</body>
</html>