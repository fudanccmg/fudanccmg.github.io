<?php include 'head.php';if($_GET["lec"]=="")$lec='lec/Lecture02.swf';else $lec='lec/Lecture'.$_GET["lec"].".swf"; ?>
		
    <link rel="stylesheet" type="text/css" href="css/flexpaper.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/flexpaper.js"></script>
    <script type="text/javascript" src="js/flexpaper_handlers.js"></script>
<!-- MAIN -->
		<div id="main">	
			<div class="wrapper clearfix">
				<!-- posts list -->
	        	<div id="posts-list" class="single-post">
	        		
	        		<h2 class="page-heading"><span>TEACHING</span></h2>
</script>
			        	
<!--lec02-->

<!--lec10-->
            <div id="documentViewer" class="flexpaper_viewer" style="width:700px;height:500px"></div>
<script type="text/javascript">
    function getDocumentUrl(document){
        return "php/services/view.php?doc={doc}&format={format}&page={page}".replace("{doc}",document);
    }

    var startDocument = "Paper";

    $('#documentViewer').FlexPaperViewer(
            { config : {

                SWFFile : '<?php echo $lec?>',

                Scale : 0.6,
                ZoomTransition : 'easeOut',
                ZoomTime : 0.5,
                ZoomInterval : 0.2,
                FitPageOnLoad : true,
                FitWidthOnLoad : false,
                FullScreenAsMaxWindow : false,
                ProgressiveLoading : false,
                MinZoomSize : 0.2,
                MaxZoomSize : 5,
                SearchMatchAll : false,
                InitViewMode : 'Portrait',
                RenderingOrder : 'flash',
                StartAtPage : '',

                ViewModeToolsVisible : true,
                ZoomToolsVisible : true,
                NavToolsVisible : true,
                CursorToolsVisible : true,
                SearchToolsVisible : true,
                WMode : 'window',
                localeChain: 'en_US'
            }}
    );
</script>
			        	</div>
		        	<!-- ENDS posts list -->
				<!-- sidebar -->
	        	<aside id="sidebar">
	        		
	        		<ul>
		        		<li class="block">
			        		<h4>CHAPTERS</h4>
							<ul>
						<li class="cat-item"><a href="teaching.php?lec=02" title="View all posts">Lecture 02 Numerical Methods</a></li>
						<li class="cat-item"><a href="teaching.php?lec=03" title="View all posts">Lecture 03 Monte Carlo</a></li>
						<li class="cat-item"><a href="teaching.php?lec=05" title="View all posts">Lecture 05 Molecular Dynamics I</a></li>
						<li class="cat-item"><a href="teaching.php?lec=06" title="View all posts">Lecture 06 Molecular Dynamics II</a></li>
												<li class="cat-item"><a href="teaching.php?lec=07" title="View all posts">Lecture 07 Molecular Dynamics III</a></li>
								<li class="cat-item"><a href="teaching.php?lec=10" title="View all posts">Lecture 10 Ab-initio Calculation I</a></li>
												<li class="cat-item"><a href="teaching.php?lec=12" title="View all posts">Lecture 12 Ab-initio Calculation III</a></li>
							</ul>
		        		</li>
	        		<em id="corner"></em>
	        	</aside>
				<!-- ENDS sidebar -->

			</div>
		</div>
		<!-- ENDS MAIN -->
		
<?php include 'foot.php'; ?>


