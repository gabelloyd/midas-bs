<?php $docRoot = getenv("DOCUMENT_ROOT"); ?>

<?php // for mock up purposes only, I'm containing each section as a module.
// for production, you would probably clean this up a bit, but this works for 
// getting the idea out. - Gabe Lloyd, Oct 6 2014 ?>

<div class="row-fluid padding-left-none padding-right-none">
<div class="splash-wrap">
			<div class="col-md-3 col-md-offset-2">
			<div class="hero-wrapper">
		      <div class="hero-widget well" id="allstar">
		            <a href="#">
		            <div class="icon"><i class="fa fa-clock-o"></i></div> <!-- icon -->
		            <div class="text"><var>Save Time</var></div></a><!-- text -->
		        </div> <!-- hero-widget well -->
			    </div> <!-- hero-wrapper -->
			</div> <!-- col-md-4 -->
	    <div class="col-md-3">
	    	<div class="hero-wrapper">
	      <div class="hero-widget well" id="facebook">
	            <a href="#" target="_blank">
	            <div class="icon"><i class="fa fa-comments"></i></i></div>
	            <div class="text"><var>Make Connections</var></div></a>
	            </div> <!-- hero-wrapper -->
	       </div>
	    </div>
	    <div class="col-md-3">
	    	<div class="hero-wrapper">
	        <div class="hero-widget well" id="twitter">
	            <a href="#" target="_blank">
	            <div class="icon"><i class="fa fa-line-chart"></i></div>
	            <div class="text"><var>Make a Difference</var></div></a>
	        </div>
	        </div> <!-- hero-wrapper -->
	    </div>
	
</div><!-- /.splash-wrap -->
</div><!-- /.row-fluid-->
