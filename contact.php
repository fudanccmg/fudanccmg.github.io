<?php include 'head.php'; ?>
		
		
		<!-- MAIN -->
		<div id="main">	
			<div class="wrapper clearfix">
			
				
				<h2 class="page-heading"><span>CONTACT</span></h2>	
	        	
				<!-- page content -->
	        	<div id="page-content" class="clearfix">
					
				<!-- Map -->
				<!--<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true" /></script> -->
				<script type="text/javascript">
NameOverlay.prototype = new google.maps.OverlayView(); // 扩展OverlayView
function initialize() {
var mapCenter = new google.maps.LatLng(31.298884,121.50281);
var mapOptions = {
zoom: 14,
center: mapCenter,
mapTypeId: google.maps.MapTypeId.ROADMAP
}
var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
// 显示地图

var marker1LatLng = new google.maps.LatLng(31.298884,121.50281);
var marker1 = new google.maps.Marker({
position: marker1LatLng, map: map, title:"Department of Physics,FuDan University"
});

// 定义一个NameOverlay，显示在指定位置
var name1View = new NameOverlay(marker1LatLng, "Welcome!", map); 

}

// NameOverlay定义
function NameOverlay(point, name, map) {

    // 初始化参数：坐标、文字、地图
    this.point_ = point;
    this.name_ = name;
    this.map_ = map;
 
    // 到onAdd时才需要创建div
    this.div_ = null;
 
    // 加入map
    this.setMap(map);
  }
 
  NameOverlay.prototype.onAdd = function() {
 
    // 创建一个div，其中包含了当前文字
    var div = document.createElement('DIV');
    div.style.borderStyle = "none";
    div.style.borderWidth = "0px";
    div.style.position = "absolute";
 
    var span = document.createElement("span");
    var text = document.createTextNode(this.name_);
    span.appendChild(text);
    div.appendChild(span);
 
    // Set the overlay's div_ property to this DIV
    this.div_ = div;
 
    // We add an overlay to a map via one of the map's panes.
    // We'll add this overlay to the overlayImage pane.
    var panes = this.getPanes();
    panes.overlayImage.appendChild(div);
  }
 
  NameOverlay.prototype.draw = function() {
 
    // 利用projection获得当前视图的坐标
    var overlayProjection = this.getProjection();
 
    var center = overlayProjection.fromLatLngToDivPixel(this.point_);
 
    // 为简单，长宽是固定的，实际应该根据文字改变
    var div = this.div_;
    div.style.left = center.x + 'px';
    div.style.top = center.y + 'px';
    div.style.width = '100px';
    div.style.height = '10px';
  }
 
  NameOverlay.prototype.onRemove = function() {
    this.div_.parentNode.removeChild(this.div_);
    this.div_ = null;
  }
				</script>
				
				<div id="map_canvas"></div>
				<!-- ENDS Map -->
				
				
	        	
	        	
					<div class="map-content" style="text-indent: 2em;">
 The Physics Department of Fudan University was founded in 1952, 
						seeded from the physics group in the former Department of Mathematics and Physics at Fudan. 
						Under the nation-wide reorganizational effort within universities located close by, 
						the physics departments of 8 universities in East China, including Fudan University, Jiaotong University, 
						Tongji University, Zhejiang University, Hujiang University and Datong University, were partly merged into one department, 
						the Physics Department of Fudan University.
</div>
					
					<!-- form -->
					<script type="text/javascript" src="js/form-validation.js"></script>
					<form id="contactForm" action="#" method="post">
						<h2 class="heading">Contact us using this form</h2>
						<p> We are please to receive your letter!</p>
						<fieldset>
							<div>
								<input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name" />
								<label>Name</label>
							</div>
							<div>
								<input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address" />
								<label>Email</label>
							</div>
							<div>
								<textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
							</div>
							
							<!-- send mail configuration -->
							<input type="hidden" value="404422239@qq.com" name="to" id="to" />
							<input type="hidden" value="Enter the subject here" name="subject" id="subject" />
							<input type="hidden" value="send-mail.php" name="sendMailUrl" id="sendMailUrl" />
							<!-- ENDS send mail configuration -->
							
							<p><input type="button" value="Send" name="submit" id="submit" /> <span id="error" class="warning">Message</span></p>
						</fieldset>
						
					</form>
					<p id="sent-form-msg" class="success">Form data sent. Thanks for your comments.</p>
					<!-- ENDS form -->
					
					
					<!-- contact sidebar -->
		        	<aside id="contact-sidebar">
		        		<div class="block">
			        		<h4>Address</h4>
			        		<p>Don't aim for success if you want it; just do what you love and believe in, and it will come naturally.</p>
			        		<p>You cannot improve your past, but you can improve your future. Once time is wasted, life is wasted.</p>
			        		<ul class="address-block">
			        			<li class="address">2013. No.220 Handan Road, Shanghai, China</li>
			        			<li class="phone">Contactor：Mr. Panshuo Wang </li>
			        			<!--<li class="mobile">+123 456 789</li>-->
			        			<li class="email"><a>wps880112 at sina.com</a></li>
			        		</ul>
			        		
		        		</div>	        	
		        	</aside>
		        	<div class="clearfix"></div>
					<!-- ENDS contact-sidebar -->
					
				</div>	        	
	        	<!--  page content-->
	        	
	        	

	        	
			</div>
		</div>
		<!-- ENDS MAIN -->
		<!-- Start google map -->
		<script>initialize();</script>	
<?php include 'foot.php'; ?>

