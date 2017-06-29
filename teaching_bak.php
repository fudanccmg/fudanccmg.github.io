<?php include 'head.php'; ?>
		
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
            <div id="documentViewer" class="flexpaper_viewer" style="width:700px;height:500px"></div>
<script type="text/javascript">
    function getDocumentUrl(document){
        return "php/services/view.php?doc={doc}&format={format}&page={page}".replace("{doc}",document);
    }

    var startDocument = "Paper";

    $('#documentViewer').FlexPaperViewer(
            { config : {

                SWFFile : 'lec10.swf',

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
			        		<h4>CHAPTER</h4>
							<ul>
								<li class="cat-item"><a href="#" title="View all posts">Lecture 10 ab-initio</a></li>
							</ul>
		        		</li>
	        		<em id="corner"></em>
	        	</aside>
				<!-- ENDS sidebar -->

			</div>
		</div>
		<!-- ENDS MAIN -->
		
<?php include 'foot.php'; ?>


