<?php include 'head.php'; ?>
		
		<!-- MAIN -->
		<div id="main">	
			<div class="wrapper clearfix">
	        	
				<!-- page content -->
	        	<div id="page-content" class="clearfix">
					
					
					
					<!-- floated content -->
					<div class="floated-content">
					
						<h2 class="page-heading"><span>PUBLICATIONS</span></h2>
						<?php include 'pubtable.php'; ?>
		
					</div>
					<!-- ends floated content -->
					
					<!-- sidebar -->
		        	<aside id="sidebar">
		        		
		        		<ul>
			        		<li class="block">
				        		<h4>TIME</h4>
								<ul>
									<li class="cat-item">[<a href="#To Be Posted" title="View To Be Posted">To Be Posted</a>]</li>
									<?php 
									/* example 1 */ 

									for ($i = 2016; $i >= 1991; $i--) { 
									echo '[<a href="#pub',$i,'" title="View ',$i,'">',$i,'</a>]'; 
									} 
									?>
									[<a href="#pubBefore 1990" title="View before 1990">Before 1990</a>]
								</ul>
			        		</li>
			        		
			        		<li class="block">
				        		<h4>CATEGORIES</h4>
								<ul>
									<li class="cat-item"><a href="#" title="View all posts">[1] Methodology: Quantum and classic</a></li>
									<li class="cat-item"><a href="#" title="View all posts">[2] Design of new meterials: High K semiconductor, etc.</a></li>
									<li class="cat-item"><a href="#" title="View all posts">[3] NANO-: Structures and applications</a></li>
									<li class="cat-item"><a href="#" title="View all posts">[4] Surfaces and interfaces</a></li>
								</ul>
			        		</li>
		        		
		        		</ul>
		        		
		        		<em id="corner"></em>
		        	</aside>
					<!-- ENDS sidebar -->
					
				</div>	        	
	        	<!--  page content-->
	        	
	        	

	        	
			</div>
		</div>
		<!-- ENDS MAIN -->
		
<?php include 'foot.php'; ?>




