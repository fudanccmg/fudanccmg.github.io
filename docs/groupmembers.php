							<?php include 'head.php'; ?>		
		<!-- JS -->
		<script src="js1/jquery-1.7.1.min.js"></script>
		<script src="js1/custom.js"></script>
		<script src="js1/jquery.columnizer.min.js"></script>
		
		<!-- Isotope -->
		<script src="js1/jquery.isotope.min.js"></script>
							<link rel="stylesheet" media="all" href="css/aa.css"/>
		<!-- Lof slider -->
		<script src="js1/jquery.easing.js"></script>
		<script src="js1/lof-slider.js"></script>
		<link rel="stylesheet" href="css1/lof-slider.css" media="all"  /> 
		<!-- ENDS slider -->
		
	

		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="css1/superfish.css" /> 
		<script  src="js1/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="js1/superfish-1.4.8/js/superfish.js"></script>
		<script  src="js1/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
	
		
		<!-- JCarousel -->
		<script type="text/javascript" src="js1/jquery.jcarousel.min.js"></script>
		<!-- ENDS JCarousel -->
		
	
		
		<!-- flexslider -->
		<script src="js1/jquery.flexslider.js"></script>
		<!-- MAIN -->
		<div id="main">	
			<div class="wrapper clearfix">
				<!-- page content -->
	        	<div id="page-content" class="clearfix">
	        	
	        	
	        				<!-- featured -->
			<div class="home-featured">
				<ul id="filter-buttons">
					<li><a href="#" data-filter="*" class="selected">show all</a></li>
					<li><a href="#" data-filter=".groupphoto">Group photo</a></li>
					<li><a href="#" data-filter=".Graduate">Graduate</a></li>
					<li><a href="#" data-filter=".Undergraduate">Undergraduate</a></li>
					<li><a href="#" data-filter=".Postdoctor">Postdoctor</a></li>
					<li><a href="#" data-filter=".Graduated">Graduated</a></li>
				</ul>
				<!-- Filter container -->
				<div id="filter-container" class="cf">
				<?php 
		$fp = fopen(dirname(__FILE__).'/groupmember.txt','r'); 
		while(!feof($fp)){ 
				$line = trim(fgets($fp,999)); 
				if(strlen($line)==0)continue;
				if(substr($line ,0,5)=="begin"){
					$class=substr($line ,6);
    $id=1;
    $row=0;
    continue;
    		}
    	if(substr($line,0,3)=="end") {				
								continue;
				}
				if($line==';'){
					$row=0;echo '	</figure>';continue;
					}
				$row++;
				if($row==1){echo '<figure class="'.$class.'">';echo '<div class="feature-image1">
						<a href="'.$line.'" data-rel="prettyPhoto"><img src="'.$line.'" alt="';$id++;continue;}
				if($row==2){echo $line.'"  width="300" /></a></div><figcaption>	<a><h3 class="heading">'.$line.'</h3></a>';continue;}
				echo $line.'<br>';
		} 
fclose($fp); 
?>

					
	
					
				</div><!-- ENDS Filter container -->
				
			</div>
			<!-- ENDS featured -->
				</div>	        	
	        	<!--  page content-->
	        	<script>$("a[href='ysq.jpg']").click(function(){location.href='ysq.php';});</script>

	        	
			</div>
		</div>
		<!-- ENDS MAIN -->
		
<?php include 'foot.php'; ?>




