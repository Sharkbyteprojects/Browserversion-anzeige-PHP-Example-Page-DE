<!DOCTYPE html>
<html>
<head>
<div style="display:none"><?php echo $_SERVER['HTTP_USER_AGENT']; ?></div>
<title>XAMPP MAIN PAGE</title><link href="jquery-ui.css" rel="stylesheet">
	<style>
	body{
		font-family: "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	select {
		width: 200px;
	}
	</style>
</head>

<body>
<h1><?php echo 'WELCOME ON XAMPP MAIN PAGE'; ?></h1><hr>
<?php echo '<ul><li><noscript><a href="browser" target="_blank" id="hidrt">Browserversion</a></noscript><button style="display:none" id="dialog-link" class="ui-button ui-corner-all ui-widget"><span class="ui-icon ui-icon-newwin"></span>Browserversion</button></li><li><a href="http://www.feuerwehr-stutensee.de/" target="_blank">Freiwillige Feuerwehr Stutensee</a></li><ul>'?>

<script>document.getElementById('dialog-link').style.display='block';
</script>

<!--<p>
	<button id="dialog-link" class="ui-button ui-corner-all ui-widget">
		<span class="ui-icon ui-icon-newwin"></span>Open Dialog
	</button>
</p>


<div id="dialog" title="Your Browser">
	<p>D!</p>
</div>



<p>
	<button id="feuerwehr-link" class="ui-button ui-corner-all ui-widget"><span class="ui-icon ui-icon-newwin"></span>Open Dialog</button>
</p>


<div id="feuerwehr" title="Feuerwehr Stutensee">
	<p>D!</p>
</div>
-->



<!--
<h2 class="demoHeaders">Highlight / Error</h2>
<div class="ui-widget">
	<div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">
		<p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
		<strong>Hey!</strong> Sample ui-state-highlight style.</p>
	</div>
</div>
<br>
<div class="ui-widget">
	<div class="ui-state-error ui-corner-all" style="padding: 0 .7em;">
		<p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
		<strong>Alert:</strong> Sample ui-state-error style.</p>
	</div>
</div>-->
<div id="dialog" height="100" width="900" style="display:none" title="Your Browser">
	<h1>Du benutzt <?php echo $_SERVER['HTTP_USER_AGENT']; ?></h1>
	
	
</div>

<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script>
<script>





$( "#button" ).button();
$( "#button-icon" ).button({
	icon: "ui-icon-gear",
	showLabel: false
});



$( "#radioset" ).buttonset();



$( "#controlgroup" ).controlgroup();





$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});




$( "#feuerwehr-link" ).click(function( event ) {
	$( "#feuerwehr" ).dialog( "open" );
	event.preventDefault();
});












// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
</body>
</html>