<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
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
        <link rel='stylesheet' href='unitegallery-master/source/unitegallery/themes/default/ug-theme-default.css' type='text/css' />
        <title>User Info Dashboard</title>
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
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Name :- <?php echo $_SESSION['name']?></h5>
                            <p class="card-text">Realm :- <?php echo $_SESSION['realm']?></p>
                            <?php
                            $json_string = file_get_contents("http://armory.warmane.com/api/character/" . $_SESSION['name'] . "/" .$_SESSION['realm'] . "/summary");
		                    $minfo		 =	json_decode($json_string);
		
                            echo "<h1 class='guild-box-title'>";
                            
                            
                            echo "<div color='black'>Player ";
                            echo "<font color='black'>" .$_SESSION['name'] . "</font>"; 
                            echo "<font color='black'> is currently: </font>"; 
                            echo $minfo->online  > 0 ? "<font color='green'>Online</font>" : "<font color='red'>Offline</font>";
                            $guild_name = $minfo->guild;
                            $guild_name1 = $minfo->guild;
                            $guild_name = str_replace(' ', '+', $guild_name);
                            $realm      = $minfo->realm;
                            $string1 = file_get_contents("http://armory.warmane.com/api/guild/" . $guild_name . "/" . $realm . "/summary");
                            $ginfo		 =	json_decode($string1);
                            
                            $members = json_decode($string1, true);
                            $members = $members['roster'];
                            echo "<strong><p>Guild: $guild_name1 </p>";
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
                            echo '<div style="position:relative;width:410px;height:1000px; float:left;margin-top:1%;margin-left:12%;" align="right">';
                            echo '<div align="right" style="overflow: hidden; margin-top: -0px; margin-left: 35px;margin-right:50px;z-index:1">';
                            echo '<iframe scrolling="no" align="right"';
                            echo 'src="http://armory.warmane.com/character/'. $_SESSION['name'] . '/' . $_SESSION['realm'] . '/summary"';
                            echo 'style="border: 0px none; margin-left: -0px; height: 983px; margin-top: -557px; width: 411px;z-index:2>" html=""></iframe>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            ?>
                            <a href="index.php" class="btn btn-primary">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>