<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

   <link href="caca.css" rel="stylesheet" media="screen">
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>asdCongratulations! You have successfully created your Yii application.</p>

				<div id="banner">
				banner
				</div>
<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>
caca
<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
	<script type="text/javascript" src="./jquery/jquery-1.8.3.js"></script>
	<script type="text/javascript" src="./jquery/ui/jquery-ui.js"></script>
	<script type="text/javascript"><!--
	$(document).ready(function() {
	// sets the '#dg1' element as draggable and define some options
	$('.cancion').draggable({
		cursor: 'pointer',        // sets the cursor apperance
		opacity: 0.5,         // opacity fo the element while it's dragged
		revert: true,          // sets the element to return to its start location
		revertDuration: 900       // brings the '#dg1' item to front
	});

  // sets the '#dg2' element as draggable
	  $('#dg2').draggable({
		cursor: 'pointer',      // sets the cursor apperance
		opacity: 0.35,          // opacity fo the element while it's dragged
		stack: $('#dg2'),       // brings the '#dg2' item to front
		axis: 'x'               // allow dragging only on the horizontal axis
	  });
	});
	function allowDrop(ev)
	{
		ev.preventDefault();
	}

	function drag(ev)
	{
		ev.dataTransfer.setData("Text",ev.target.id);
	}

	function drop(ev)
	{
		ev.preventDefault();
		var data=ev.dataTransfer.getData("Text");
		ev.target.appendChild(document.getElementById(data));
	}
	</script>
	
  </head>
  
  <body>
    <div class="container">
		<div class="helper">
			<div id="lala">
			
				<div id="banner">
				banner
				</div>
				
				<div id="login">
				login
				</div>	
				
				<div id="cancion1">
				
				</div>
				
				<div id="cancion2">
				
				</div>
				
				<div id="cancion3" >
				
				</div>
				
					<div id="caja">
					
					<div class="cancion" >1</div>
				
					
					
					<div class="cancion">2</div>
				
					
				
					<div class="cancion">3</div>
				
					
				
					<div class="cancion" >4</div>
					
					
				</div>
			
		
			</div>
		</div>
	</div>

		
  
