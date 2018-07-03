<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username']!='' )) {
    
    header('location:redirect.php');
}

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]--> 
<head>
    <title>Generator Demo</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/prism/prism.css">
    <link rel="stylesheet" href="assets/plugins/spectrum/spectrum.css">
	
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/easywheel.min.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 
<body class="demo-page"> 
<div class="page-wrapper">
        <header class="header">
            <div class="container">
                <div class="text-center">
						<div class="demo_spinner"></div>
						<br>
						<select class="form-control select-winner" style="width:auto; margin: 10px auto 0;">
							<option value="0">20% OFF</option>
							<option value="1">No luck</option>
							<option value="2">30% OFF</option>
							<option value="3">Almost</option>
							<option value="4">40% OFF</option>
							<option value="5">Nothing</option>
							<option value="6">50% OFF</option>
							<option value="7">Next time</option>
							<option value="8">60% OFF</option>
							<option value="9">Awesome</option>
							<option value="10">Try againe</option>
							<option value="11">Bad Luck :(</option>
						</select>
						<br>
						<button type="button" class="btn btn-primary btn-spin start"> Start </button>
						<button type="button" class="btn btn-primary btn-spin finish"> Finish </button>
						<!--<div class="progress">
							<div class="testarcprogress progress-bar progress-bar-striped progress-bar-success active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="transition: none;width:0%">
								0%
							</div>
						</div>
						<div class="progress">
							<div class="testprogress progress-bar progress-bar-striped progress-bar-success active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="transition: none;width:0%">
								0%
							</div>
						</div>-->
                    
                </div><!--//branding-->
            </div><!--//container-->
        </header><!--//header-->
		<br>
  <section class="generator-section">
			<div class="container">
				<form action="" id="WheelGenForm" method="post" role="form">
					<div class="panel-examples">
						<div class="panel panel-default has-nav">
							<div class="panel-heading clearfix">
								<button type="submit" class="btn btn-success pull-right copyCode">Copy to clipboard</button>
                                <button type="submit" class="btn btn-primary pull-right wheelGenBtn">Update Code</button>
                                <a href="logout.php" class="btn btn-danger pull-right ">Logout</a>
								<ul class="nav nav-pills pull-left">
									<li class="active"><a data-toggle="tab" href="#tb-slices">Slices</a></li>
									<li><a data-toggle="tab" href="#tb-settings">Settings</a></li>
									<li><a data-toggle="tab" href="#tb-styles">Styles</a></li>
									<li><a data-toggle="tab" href="#tb-colors">Colors</a></li>
								</ul>
							</div>
							<div class="panel-body">
								<div class="tab-content">
									<div id="tb-slices" class="tab-pane fade in active">
										<h3>Slices</h3>
										<div class="row">
											<div class="slices-list">
												<div class="_item col-sm-6">
													<div class="form-group">
														<div class="input-group">
															<input type="text" value="20% OFF" name="items" id="ew-centerImage" class="form-control items" placeholder="Slice Text here">
															<div class="input-group-btn">
																<input class="_color" id="ew-colors" name="colors" value="#3498db">
															</div>
														</div>
														<input type="text" value="20% OFF Message here" name="messages" id="ew-message" class="form-control messages" placeholder="Slice Message here">
													</div>
												</div>
												
												<div class="_item col-sm-6">
													<div class="form-group">
														<div class="input-group">
															<input type="text" value="No luck" name="items" id="ew-centerImage" class="form-control items" placeholder="Slice Text here">
															<div class="input-group-btn">
																<input class="_color" id="ew-colors" name="colors" value="#ffc107">
															</div>
														</div>
														
														<input type="text" value="No luck Message here" name="messages" id="ew-message" class="form-control messages" placeholder="Slice Message here">
													</div>
												</div>
												<div class="_item col-sm-6">
													<div class="form-group">
														<div class="input-group">
															<input type="text" value="30% OFF" name="items" id="ew-centerImage" class="form-control items" placeholder="Slice Text here">
															<div class="input-group-btn">
																<input class="_color" id="ew-colors" name="colors" value="#f44336">
																<div class="btn-group">
																	<a href="#0" class="btn btn-danger remove"><i class="glyphicon glyphicon-trash"></i></a>
																</div>
															</div>
														</div>
														
														<input type="text" value="30% OFF Message here" name="messages" id="ew-message" class="form-control messages" placeholder="Slice Message here">
													</div>
												</div>
												<div class="_item col-sm-6">
													<div class="form-group">
														<div class="input-group">
															<input type="text" value="Almost" name="items" id="ew-centerImage" class="form-control items" placeholder="Slice Text here">
															<div class="input-group-btn">
																<input class="_color" id="ew-colors" name="colors" value="#3498db">
																<div class="btn-group">
																	<a href="#0" class="btn btn-danger remove"><i class="glyphicon glyphicon-trash"></i></a>
																</div>
															</div>
														</div>
														
														<input type="text" value="Almost Message here" name="messages" id="ew-message" class="form-control messages" placeholder="Slice Message here">
													</div>
												</div>
												<div class="_item col-sm-6">
													<div class="form-group">
														<div class="input-group">
															<input type="text" value="40% OFF" name="items" id="ew-centerImage" class="form-control items" placeholder="Slice Text here">
															<div class="input-group-btn">
																<input class="_color" id="ew-colors" name="colors" value="#ffc107">
																<div class="btn-group">
																	<a href="#0" class="btn btn-danger remove"><i class="glyphicon glyphicon-trash"></i></a>
																</div>
															</div>
														</div>
														
														<input type="text" value="40% OFF Message here" name="messages" id="ew-message" class="form-control messages" placeholder="Slice Message here">
													</div>
												</div>
												<div class="_item col-sm-6">
													<div class="form-group">
														<div class="input-group">
															<input type="text" value="Nothing" name="items" id="ew-centerImage" class="form-control items" placeholder="Slice Text here">
															<div class="input-group-btn">
																<input class="_color" id="ew-colors" name="colors" value="#f44336">
																<div class="btn-group">
																	<a href="#0" class="btn btn-danger remove"><i class="glyphicon glyphicon-trash"></i></a>
																</div>
															</div>
														</div>
														
														<input type="text" value="Nothing Message here" name="messages" id="ew-message" class="form-control messages" placeholder="Slice Message here">
													</div>
												</div>
												<div class="col-sm-12">
													<div class="form-group">
														<a href="#0" class="btn btn-primary btn-block btn-sm addSlice">Add Slice</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div id="tb-settings" class="tab-pane fade">
										<h3>Settings</h3>
										<div class="row">
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-duration">Duration:</label>
													<input type="number" min="1000" max="30000" step="100" value="8000" name="duration" id="ew-duration" class="form-control" placeholder="duration (ms)" title="Duration determining how long the Spinner will run.">
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-rotates">Rotations:</label>
													<input type="number" min="1" max="15" step="1" value="8" name="rotates" id="ew-rotates" class="form-control" placeholder="rotates Limited to Min 1 & Max 15" title="Total of rotations before calculating to stop in the winner">
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-frame">Frame :</label>
													<input type="number" min="1" max="1000" step="1" value="1" name="frame" id="ew-frame" class="form-control" placeholder="The rate (in milliseconds)." title="The rate (in milliseconds) at which animations fire.">
												</div>
											</div>
											
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-easing">Easing:</label>
													<select name="easing" id="ew-easing" class="form-control">
														<option value="">Default</option>
														<option selected="selected">easyWheel</option>
														<option>linear</option>
														<option>swing</option>
														<option>easeInQuad</option>
														<option>easeInCubic</option>
														<option>easeInQuart</option>
														<option>easeInQuint</option>
														<option>easeInSine</option>
														<option>easeInExpo</option>
														<option>easeInCirc</option>
														<option>easeInElastic</option>
														<option>easeInBack</option>
														<option>easeInBounce</option>
														<option>easeOutQuad</option>
														<option>easeOutCubic</option>
														<option>easeOutQuart</option>
														<option>easeOutQuint</option>
														<option>easeOutSine</option>
														<option>easeOutExpo</option>
														<option>easeOutCirc</option>
														<option>easeOutElastic</option>
														<option>easeOutBack</option>
														<option>easeOutBounce</option>
														<option>easeInOutQuad</option>
														<option>easeInOutCubic</option>
														<option>easeInOutQuart</option>
														<option>easeInOutQuint</option>
														<option>easeInOutSine</option>
														<option>easeInOutExpo</option>
														<option>easeInOutCirc</option>
														<option>easeInOutElastic</option>
														<option>easeInOutBack</option>
														<option>easeInOutBounce</option>
													</select>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-rotateCenter">Rotate Center:</label>
													<select name="rotateCenter" id="ew-rotateCenter" class="form-control">
														<option value="">Default</option>
														<option value="true" selected="selected">Enable</option>
														<option value="false">Disable</option>
													</select>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-type">Type:</label>
													<select name="type" id="ew-type" class="form-control">
														<option value="">Default</option>
														<option selected="selected">spin</option>
														<option>color</option>
													</select>
												</div>
											</div>
											
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-markerAnimation">Marker animation:</label>
													<select name="markerAnimation" id="ew-markerAnimation" class="form-control">
														<option value="">Default</option>
														<option value="true" selected="selected">Enable</option>
														<option value="false">Disable</option>
													</select>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-centerClass">Spin Button:</label>
													<input type="text" value="" name="centerClass" id="ew-centerClass" class="form-control" placeholder="Spin Button Class/ID (Example: #spin_btn)" >
												</div>
											</div>
										</div>
									</div>
									
										
									<div id="tb-styles" class="tab-pane fade">
										<h3>Styles</h3>
										<div class="row">
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-width">Width:</label>
													<input type="number" min="150" max="600" step="1" value="400" name="width" id="ew-width" class="form-control" placeholder="Width (px)" >
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-fontSize">Font Size:</label>
													<input type="number" min="6" max="20" step="1" value="13" name="fontSize" id="ew-fontSize" class="form-control" placeholder="font-size (px)">
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-textOffset">Text Offset:</label>
													<input type="number" min="-100" max="100" step="1" value="6" name="textOffset" id="ew-textOffset" class="form-control" placeholder="textOffset">
												</div>
											</div>
											
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-letterSpacing">Letter Spacing:</label>
													<input type="number" min="1" max="20" step="0.5" value="0" name="letterSpacing" id="ew-letterSpacing" class="form-control" placeholder="letterSpacing (% Max: 20)">
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-textLine">Text Line Direction:</label>
													<select name="textLine" id="ew-textLine" class="form-control">
														<option value="">Default</option>
														<option value="h" >Horizontal</option>
														<option value="v" selected="selected">Vertical</option>
													</select>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-textArc">Align text to arc:</label>
													<select name="textArc" id="ew-textArc" class="form-control">
														<option value="">Default</option>
														<option value="true" >Yes</option>
														<option value="false" selected="selected">No</option>
													</select>
												</div>
											</div>
											
											
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-shadowOpacity">Shadow Opacity:</label>
													<input type="number" min="0" max="9" step="1" value="3" name="shadowOpacity" id="ew-shadowOpacity" class="form-control" placeholder="shadowOpacity (Max:9)">
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-sliceLineWidth">Slice Line Width:</label>
													<input type="number" min="0" max="10" step="1" value="5" name="sliceLineWidth" id="ew-sliceLineWidth" class="form-control" placeholder="sliceLineWidth (px)">
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-outerLineWidth">Outer Line Width:</label>
													<input type="number" min="0" max="10" step="1" value="5" name="outerLineWidth" id="ew-outerLineWidth" class="form-control" placeholder="outerLineWidth (px)">
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-centerWidth">Center Width:</label>
													<input type="number" min="0" max="100" step="1" value="50" name="centerWidth" id="ew-centerWidth" class="form-control" placeholder="centerWidth (% Max: 100)">
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-centerLineWidth">Center Line Width:</label>
													<input type="number" min="0" max="20" step="1" value="5" name="centerLineWidth" id="ew-centerLineWidth" class="form-control" placeholder="centerLineWidth (px)">
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-image">Center Image url/path:</label>
													<input type="text" value="./assets/images/easyWheelText.png" name="centerImage" id="ew-centerImage" class="form-control" placeholder="URL of your Image">
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-centerImageWidth">Center Image Width:</label>
													<input type="number" min="0" max="100" step="1" value="42" name="centerImageWidth" id="ew-centerImageWidth" class="form-control" placeholder="centerImageWidth (% Max 100)">
												</div>
											</div>
										</div>
									</div>
									
									
									
									<div id="tb-colors" class="tab-pane fade">
										<h3>Colors</h3>
										<div class="row">
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-textColor">Text Color:</label>
													<div class="text-center colorpickerField colorpicker-element">
														<input type="text" class="hoverBox colorPicker form-control" id="ew-textColor" name="textColor" value="#fff" >
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-markerColor">Marker Color:</label>
													<div class="text-center colorpickerField colorpicker-element">
														<input type="text" class="hoverBox colorPicker form-control" id="ew-markerColor" name="markerColor" value="#CC3333" >
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-centerLineColor">Center Line Color:</label>
													<div class="text-center colorpickerField colorpicker-element">
														<input type="text" class="hoverBox colorPicker form-control" id="ew-centerLineColor" name="centerLineColor" value="#424242" >
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-centerBackground">Center Background Color:</label>
													<div class="colorpickerField text-center colorpicker-element">
														<input type="text" class="hoverBox colorPicker form-control" id="ew-centerBackground" name="centerBackground" value="#333333" >
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-sliceLineColor">Slice Line Color:</label>
													<div class="colorpickerField text-center colorpicker-element">
														<input type="text" class="hoverBox colorPicker form-control" id="ew-sliceLineColor" name="sliceLineColor" value="#424242" >
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-outerLineColor">Outer Line Color:</label>
													<div class="colorpickerField text-center colorpicker-element">
														<input type="text" class="hoverBox colorPicker form-control" id="ew-outerLineColor" name="outerLineColor" value="#424242" >
														
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-shadow">Shadow color:</label>
													<div class="text-center colorpickerField colorpicker-element">
														<input type="text" class="hoverBox colorPicker form-control" id="ew-shadow" name="shadow" value="#000" >
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-md-4">
												<div class="form-group">
													<label for="ew-selectedSliceColor">Winner Background Color:</label>
													<div class="text-center colorpickerField colorpicker-element">
														<input type="text" class="hoverBox colorPicker form-control" id="ew-selectedSliceColor" name="selectedSliceColor" value="#333" >
													</div>
												</div>
											</div>
										</div>
									</div>
									
									
									
									
									
									
								</div>
							</div>
							<div class="panel-footer">
								<div class="clearfix">
									<button type="submit" class="btn btn-success pull-right copyCode">Copy to clipboard</button>
									<button type="submit" class="btn btn-primary pull-right wheelGenBtn">Update Code</button>
								</div>
								<pre class="code text-left">
<code class="language-js">
$(".easyWheel").easyWheel({
  items: [
    {
      name    : '20% OFF',
      message : 'You win 20% off',
      color   : '#3498db',
      win     : true
    },{
      name    : 'No luck',
      message : 'You have No luck today',
      color   : '#ffc107',
      win     : false
    },{
      name    : '30% OFF',
      message : 'You win 30% off',
      color   : '#f44336',
      win     : true
    },{
      name    : 'Lose',
      message : 'You Lose :(',
      color   : '#3498db',
      win     : false
    },{
      name    : '40% OFF',
      message : 'You win 40% off',
      color   : '#ffc107',
      win     : true
    },{
      name    : 'Nothing',
      message : 'You get Nothing :(',
      color   : '#f44336',
      win     : false
    }
  ]
});
</code>
								</pre>
							</div>
						</div>
					</div>
				</form>
			</div>
    </section><!--//cards-section-->
  </div><!--//page-wrapper-->
    <footer class="footer text-center">
        <div class="container">
            <small class="copyright">Copyright © 2018 22Codes</small>
        </div><!--//container-->
    </footer><!--//footer-->
    <!-- Main Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/plugins/prism/prism.js"></script>
	<script type="text/javascript" src="assets/plugins/spectrum/spectrum.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery.colourbrightness.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery.easing.1.3.js"></script>
    <script type="text/javascript">
	var _0x48c1=["\x75\x73\x65\x20\x73\x74\x72\x69\x63\x74","\x45\x61\x73\x79\x57\x68\x65\x65\x6C","\x76\x61\x6C\x69\x64\x61\x74\x65","\x70\x72\x6F\x74\x6F\x74\x79\x70\x65","\x64\x65\x66\x61\x75\x6C\x74\x73","\x57\x69\x6E","\x23\x33\x34\x39\x38\x64\x62","\x4C\x6F\x73\x65","\x23\x66\x66\x63\x31\x30\x37","\x68","\x23\x66\x66\x66","\x23\x30\x30\x30","\x23\x38\x65\x34\x34\x61\x64","\x23\x33\x33\x33","","\x65\x61\x73\x79\x57\x68\x65\x65\x6C","\x23\x43\x43\x33\x33\x33\x33","\x73\x70\x69\x6E","\x64\x61\x74\x61","\x6F","\x65\x78\x74\x65\x6E\x64","\x69\x6E\x69\x74\x69\x61\x6C\x73","\x72\x6F\x74\x61\x74\x65\x73","\x69\x74\x65\x6D\x73","\x65\x61\x73\x69\x6E\x67","\x70\x6F\x77","\x69\x6E\x73\x74\x61\x6E\x63\x65\x55\x69\x64","\x65\x77","\x67\x75\x69\x64","\x69\x6E\x69\x74","\x77\x61\x72\x6E\x69\x6E\x67","\x4D\x69\x6E\x20\x6E\x75\x6D\x62\x65\x72\x20\x6F\x66\x20\x72\x6F\x74\x61\x74\x65\x73\x20\x69\x73\x20\x22\x31\x22","\x6C\x6F\x67","\x73\x6C\x69\x63\x65\x4C\x69\x6E\x65\x57\x69\x64\x74\x68","\x4D\x61\x78\x20\x73\x6C\x69\x63\x65\x4C\x69\x6E\x65\x57\x69\x64\x74\x68\x20\x69\x73\x20\x22\x31\x30\x22","\x63\x65\x6E\x74\x65\x72\x4C\x69\x6E\x65\x57\x69\x64\x74\x68","\x4D\x61\x78\x20\x63\x65\x6E\x74\x65\x72\x4C\x69\x6E\x65\x57\x69\x64\x74\x68\x20\x69\x73\x20\x22\x31\x30\x22","\x6F\x75\x74\x65\x72\x4C\x69\x6E\x65\x57\x69\x64\x74\x68","\x4D\x61\x78\x20\x6F\x75\x74\x65\x72\x4C\x69\x6E\x65\x57\x69\x64\x74\x68\x20\x69\x73\x20\x22\x31\x30\x22","\x74\x72\x69\x6D","\x64\x65\x73\x74\x72\x6F\x79","\x73\x70\x69\x6E\x6E\x69\x6E\x67","\x66\x69\x6E\x69\x73\x68","\x62\x6F\x6F\x6C\x65\x61\x6E","\x72\x65\x6D\x6F\x76\x65\x43\x6C\x61\x73\x73","\x68\x74\x6D\x6C","\x24\x77\x68\x65\x65\x6C","\x63\x6C\x69\x63\x6B\x2E","\x6F\x66\x66","\x72\x65\x73\x69\x7A\x65\x2E","\x6F\x70\x74\x69\x6F\x6E","\x75\x6E\x64\x65\x66\x69\x6E\x65\x64","\x66\x75\x6E\x63\x74\x69\x6F\x6E","\x69\x6E\x41\x72\x72\x61\x79","\x74\x79\x70\x65","\x64\x75\x72\x61\x74\x69\x6F\x6E","\x6D\x61\x78","\x69\x6E\x69\x74\x69\x61\x6C\x69\x7A\x65","\x65\x78\x65\x63\x75\x74\x65","\x65\x61\x73\x79\x57\x68\x65\x65\x6C\x20","\x61\x64\x64\x43\x6C\x61\x73\x73","\x74\x6F\x74\x61\x6C\x53\x6C\x69\x63\x65\x73","\x61\x70\x70\x65\x6E\x64\x54\x6F","\x65\x57\x68\x65\x65\x6C\x2D\x77\x72\x61\x70\x70\x65\x72","\x3C\x64\x69\x76\x2F\x3E","\x65\x57\x68\x65\x65\x6C\x2D\x69\x6E\x6E\x65\x72","\x70\x72\x65\x70\x65\x6E\x64\x54\x6F","\x65\x57\x68\x65\x65\x6C","\x65\x57\x68\x65\x65\x6C\x2D\x62\x67\x2D\x6C\x61\x79\x65\x72","\x73\x76\x67","\x31\x2E\x31","\x68\x74\x74\x70\x3A\x2F\x2F\x77\x77\x77\x2E\x77\x33\x2E\x6F\x72\x67\x2F\x32\x30\x30\x30\x2F\x73\x76\x67","\x68\x74\x74\x70\x3A\x2F\x2F\x77\x77\x77\x2E\x77\x33\x2E\x6F\x72\x67\x2F\x31\x39\x39\x39\x2F\x78\x6C\x69\x6E\x6B","\x30\x70\x78","\x30\x20\x30\x20\x32\x30\x30\x20\x32\x30\x30","\x70\x72\x65\x73\x65\x72\x76\x65","\x65\x6E\x61\x62\x6C\x65\x2D\x62\x61\x63\x6B\x67\x72\x6F\x75\x6E\x64\x3A\x6E\x65\x77\x20\x30\x20\x30\x20\x32\x30\x30\x20\x32\x30\x30\x3B","\x3C\x67\x2F\x3E","\x73\x74\x72\x69\x6E\x67","\x73\x68\x61\x64\x6F\x77","\x72\x61\x64\x69\x61\x6C\x47\x72\x61\x64\x69\x65\x6E\x74","\x53\x56\x47\x49\x44\x5F\x31\x5F","\x35\x30\x25","\x75\x73\x65\x72\x53\x70\x61\x63\x65\x4F\x6E\x55\x73\x65","\x6F\x75\x74\x65\x72\x48\x54\x4D\x4C","\x73\x74\x6F\x70","\x30\x2E\x31\x36\x37\x36","\x73\x74\x6F\x70\x2D\x63\x6F\x6C\x6F\x72\x3A","\x3B\x73\x74\x6F\x70\x2D\x6F\x70\x61\x63\x69\x74\x79\x3A\x31","\x30\x2E\x35\x35\x35\x31","\x30\x2E\x36\x31\x38\x39","\x31","\x3B\x73\x74\x6F\x70\x2D\x6F\x70\x61\x63\x69\x74\x79\x3A\x30","\x63\x69\x72\x63\x6C\x65","\x30","\x73\x68\x61\x64\x6F\x77\x4F\x70\x61\x63\x69\x74\x79","\x30\x2E","\x75\x72\x6C\x28\x23\x53\x56\x47\x49\x44\x5F\x31\x5F\x29","\x76","\x74\x65\x78\x74\x4C\x69\x6E\x65","\x76\x65\x72\x74\x69\x63\x61\x6C","\x65\x57\x68\x65\x65\x6C\x2D\x74\x78\x74\x2D\x77\x72\x61\x70","\x65\x57\x68\x65\x65\x6C\x2D\x74\x78\x74","\x72\x6F\x74\x61\x74\x65\x28","\x67\x65\x74\x44\x65\x67\x72\x65\x65","\x64\x65\x67\x29","\x63\x73\x73","\x3C\x64\x65\x66\x73\x2F\x3E","\x65\x57\x68\x65\x65\x6C\x2D\x63\x65\x6E\x74\x65\x72","\x63\x65\x6E\x74\x65\x72\x43\x6C\x61\x73\x73","\x72\x6F\x74\x61\x74\x65\x43\x65\x6E\x74\x65\x72","\x74\x72\x75\x65","\x63\x65\x6E\x74\x65\x72\x48\x74\x6D\x6C","\x63\x65\x6E\x74\x65\x72\x49\x6D\x61\x67\x65","\x3C\x69\x6D\x67\x20\x2F\x3E","\x63\x65\x6E\x74\x65\x72\x49\x6D\x61\x67\x65\x57\x69\x64\x74\x68","\x63\x65\x6E\x74\x65\x72\x57\x69\x64\x74\x68","\x77\x69\x64\x74\x68","\x25","\x73\x72\x63","\x61\x74\x74\x72","\x3C\x64\x69\x76\x20\x63\x6C\x61\x73\x73\x3D\x22\x65\x77\x2D\x63\x65\x6E\x74\x65\x72\x2D\x65\x6D\x70\x74\x79\x22\x20\x73\x74\x79\x6C\x65\x3D\x22\x77\x69\x64\x74\x68\x3A","\x25\x3B\x20\x68\x65\x69\x67\x68\x74\x3A","\x25\x22\x20\x2F\x3E","\x61\x70\x70\x65\x6E\x64","\x3C\x64\x69\x76\x20\x63\x6C\x61\x73\x73\x3D\x22\x65\x77\x2D\x63\x65\x6E\x74\x65\x72\x2D\x68\x74\x6D\x6C\x22\x3E","\x3C\x2F\x64\x69\x76\x3E","\x63\x65\x6E\x74\x65\x72\x48\x74\x6D\x6C\x57\x69\x64\x74\x68","\x63\x6F\x6C\x6F\x72","\x3C\x73\x76\x67\x20\x76\x65\x72\x73\x69\x6F\x6E\x3D\x22\x31\x2E\x31\x22\x20\x69\x64\x3D\x22\x4C\x61\x79\x65\x72\x5F\x31\x22\x20\x78\x6D\x6C\x6E\x73\x3D\x22\x68\x74\x74\x70\x3A\x2F\x2F\x77\x77\x77\x2E\x77\x33\x2E\x6F\x72\x67\x2F\x32\x30\x30\x30\x2F\x73\x76\x67\x22\x20\x78\x6D\x6C\x6E\x73\x3A\x78\x6C\x69\x6E\x6B\x3D\x22\x68\x74\x74\x70\x3A\x2F\x2F\x77\x77\x77\x2E\x77\x33\x2E\x6F\x72\x67\x2F\x31\x39\x39\x39\x2F\x78\x6C\x69\x6E\x6B\x22\x20\x78\x3D\x22\x30\x70\x78\x22\x20\x79\x3D\x22\x30\x70\x78\x22\x20\x76\x69\x65\x77\x42\x6F\x78\x3D\x22\x30\x20\x30\x20\x38\x30\x20\x31\x31\x35\x22\x20\x73\x74\x79\x6C\x65\x3D\x22\x65\x6E\x61\x62\x6C\x65\x2D\x62\x61\x63\x6B\x67\x72\x6F\x75\x6E\x64\x3A\x6E\x65\x77\x20\x30\x20\x30\x20\x38\x30\x20\x31\x31\x35\x3B\x22\x20\x78\x6D\x6C\x3A\x73\x70\x61\x63\x65\x3D\x22\x70\x72\x65\x73\x65\x72\x76\x65\x22\x3E\x3C\x67\x3E\x3C\x70\x61\x74\x68\x20\x66\x69\x6C\x6C\x3D\x22","\x6D\x61\x72\x6B\x65\x72\x43\x6F\x6C\x6F\x72","\x22\x20\x64\x3D\x22\x4D\x34\x30\x2C\x30\x43\x31\x37\x2E\x39\x2C\x30\x2C\x30\x2C\x31\x37\x2E\x37\x2C\x30\x2C\x33\x39\x2E\x34\x53\x34\x30\x2C\x31\x31\x35\x2C\x34\x30\x2C\x31\x31\x35\x73\x34\x30\x2D\x35\x33\x2E\x39\x2C\x34\x30\x2D\x37\x35\x2E\x36\x53\x36\x32\x2E\x31\x2C\x30\x2C\x34\x30\x2C\x30\x7A\x20\x4D\x34\x30\x2C\x35\x32\x2E\x35\x63\x2D\x37\x2C\x30\x2D\x31\x32\x2E\x36\x2D\x35\x2E\x36\x2D\x31\x32\x2E\x36\x2D\x31\x32\x2E\x34\x20\x53\x33\x33\x2C\x32\x37\x2E\x37\x2C\x34\x30\x2C\x32\x37\x2E\x37\x73\x31\x32\x2E\x36\x2C\x35\x2E\x36\x2C\x31\x32\x2E\x36\x2C\x31\x32\x2E\x34\x43\x35\x32\x2E\x36\x2C\x34\x36\x2E\x39\x2C\x34\x37\x2C\x35\x32\x2E\x35\x2C\x34\x30\x2C\x35\x32\x2E\x35\x7A\x22\x2F\x3E\x3C\x70\x61\x74\x68\x20\x66\x69\x6C\x6C\x3D\x22\x72\x67\x62\x61\x28\x30\x2C\x20\x30\x2C\x20\x30\x2C\x20\x30\x2E\x33\x29\x22\x20\x64\x3D\x22\x4D\x34\x30\x2C\x31\x39\x2E\x32\x63\x2D\x31\x31\x2E\x37\x2C\x30\x2D\x32\x31\x2E\x32\x2C\x39\x2E\x33\x2D\x32\x31\x2E\x32\x2C\x32\x30\x2E\x38\x53\x32\x38\x2E\x33\x2C\x36\x30\x2E\x38\x2C\x34\x30\x2C\x36\x30\x2E\x38\x53\x36\x31\x2E\x32\x2C\x35\x31\x2E\x35\x2C\x36\x31\x2E\x32\x2C\x34\x30\x53\x35\x31\x2E\x37\x2C\x31\x39\x2E\x32\x2C\x34\x30\x2C\x31\x39\x2E\x32\x7A\x20\x4D\x34\x30\x2C\x35\x32\x2E\x35\x20\x63\x2D\x37\x2C\x30\x2D\x31\x32\x2E\x36\x2D\x35\x2E\x36\x2D\x31\x32\x2E\x36\x2D\x31\x32\x2E\x34\x53\x33\x33\x2C\x32\x37\x2E\x37\x2C\x34\x30\x2C\x32\x37\x2E\x37\x73\x31\x32\x2E\x36\x2C\x35\x2E\x36\x2C\x31\x32\x2E\x36\x2C\x31\x32\x2E\x34\x43\x35\x32\x2E\x36\x2C\x34\x36\x2E\x39\x2C\x34\x37\x2C\x35\x32\x2E\x35\x2C\x34\x30\x2C\x35\x32\x2E\x35\x7A\x22\x2F\x3E\x3C\x2F\x67\x3E\x3C\x2F\x73\x76\x67\x3E","\x65\x57\x68\x65\x65\x6C\x2D\x6D\x61\x72\x6B\x65\x72","\x61\x6E\x6E\x75\x6C\x61\x72\x53\x65\x63\x74\x6F\x72","\x70\x61\x74\x68","\x73\x6C\x69\x63\x65\x4C\x69\x6E\x65\x43\x6F\x6C\x6F\x72","\x61\x75\x74\x6F","\x74\x65\x78\x74\x43\x6F\x6C\x6F\x72","\x62\x72\x69\x67\x68\x74\x6E\x65\x73\x73","\x65\x57\x68\x65\x65\x6C\x2D\x74\x69\x74\x6C\x65","\x6E\x61\x6D\x65","\x74\x65\x78\x74\x4F\x66\x66\x73\x65\x74","\x64\x65\x67\x29\x20\x74\x72\x61\x6E\x73\x6C\x61\x74\x65\x28\x30\x70\x78\x2C\x20\x2D\x35\x30\x25\x29","\x6C\x65\x74\x74\x65\x72\x53\x70\x61\x63\x69\x6E\x67","\x74\x6F\x4E\x75\x6D\x62\x65\x72","\x6C\x65\x74\x74\x65\x72\x2D\x73\x70\x61\x63\x69\x6E\x67","\x3C\x74\x65\x78\x74\x20\x73\x74\x72\x6F\x6B\x65\x2D\x77\x69\x64\x74\x68\x3D\x22\x30\x22\x20\x66\x69\x6C\x6C\x3D\x22","\x22\x20\x64\x79\x3D\x22","\x25\x22\x3E\x3C\x74\x65\x78\x74\x50\x61\x74\x68\x20\x78\x6C\x69\x6E\x6B\x3A\x68\x72\x65\x66\x3D\x22\x23\x65\x77\x2D\x74\x65\x78\x74\x2D","\x22\x20\x73\x74\x61\x72\x74\x4F\x66\x66\x73\x65\x74\x3D\x22\x35\x30\x25\x22\x20\x73\x74\x79\x6C\x65\x3D\x22\x74\x65\x78\x74\x2D\x61\x6E\x63\x68\x6F\x72\x3A\x20\x6D\x69\x64\x64\x6C\x65\x3B\x22\x3E","\x3C\x2F\x74\x65\x78\x74\x50\x61\x74\x68\x3E\x3C\x2F\x74\x65\x78\x74\x3E","\x66\x6F\x6E\x74\x2D\x73\x69\x7A\x65","\x66\x6F\x6E\x74\x53\x69\x7A\x65","\x65\x78\x65\x63","\x74\x65\x78\x74\x41\x72\x63","\x72\x65\x70\x6C\x61\x63\x65","\x6E\x6F\x6E\x65","\x65\x77\x2D\x74\x65\x78\x74\x2D","\x65\x61\x63\x68","\x63\x65\x6E\x74\x65\x72\x43\x69\x72\x63\x6C\x65","\x31\x30\x30","\x63\x65\x6E\x74\x65\x72\x4C\x69\x6E\x65\x43\x6F\x6C\x6F\x72","\x63\x65\x6E\x74\x65\x72\x42\x61\x63\x6B\x67\x72\x6F\x75\x6E\x64","\x6F\x75\x74\x65\x72\x4C\x69\x6E\x65\x43\x6F\x6C\x6F\x72","\x23\x66\x66\x66\x30","\x53\x56\x47","\x63\x72\x65\x61\x74\x65\x45\x6C\x65\x6D\x65\x6E\x74\x4E\x53","\x73\x65\x74\x41\x74\x74\x72\x69\x62\x75\x74\x65","\x6F\x57\x69\x74\x68\x44\x65\x66\x61\x75\x6C\x74\x73","\x63\x78","\x72\x32","\x73\x74\x61\x72\x74\x44\x65\x67\x72\x65\x65\x73","\x50\x49","\x63\x6F\x73","\x63\x79","\x73\x69\x6E","\x65\x6E\x64\x44\x65\x67\x72\x65\x65\x73","\x72\x31","\x63\x6C\x6F\x73\x65\x52\x61\x64\x69\x61\x6E\x73","\x73\x74\x61\x72\x74\x52\x61\x64\x69\x61\x6E\x73","\x4D","\x6A\x6F\x69\x6E","\x70\x75\x73\x68","\x41","\x4C","\x7A","\x20","\x63\x65\x6E\x74\x65\x72\x58","\x63\x65\x6E\x74\x65\x72\x59","\x74\x68\x69\x63\x6B\x6E\x65\x73\x73","\x69\x6E\x6E\x65\x72\x52\x61\x64\x69\x75\x73","\x6F\x75\x74\x65\x72\x52\x61\x64\x69\x75\x73","\x6D\x61\x74\x63\x68","\x6D\x61\x70","\x73\x70\x6C\x69\x74","\x23","\x6C\x65\x6E\x67\x74\x68","\x73\x6C\x69\x63\x65","\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6A\x6B\x6C\x6D\x6E\x6F\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7A\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4A\x4B\x4C\x4D\x4E\x4F\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5A","\x72\x61\x6E\x64\x6F\x6D","\x66\x6C\x6F\x6F\x72","\x63\x68\x61\x72\x41\x74","\x72\x61\x6E\x64\x6F\x6D\x43\x6F\x6C\x6F\x72","\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39\x41\x42\x43\x44\x45\x46","\x46\x6F\x6E\x74\x53\x63\x61\x6C\x65","\x2E\x65\x57\x68\x65\x65\x6C\x2D\x77\x72\x61\x70\x70\x65\x72","\x66\x69\x6E\x64","\x6E\x75\x6D\x62\x65\x72\x54\x6F\x41\x72\x72\x61\x79","\x73\x65\x6C\x65\x63\x74\x65\x64\x53\x6C\x69\x63\x65\x49\x44","\x73\x65\x6C\x65\x63\x74\x65\x64","\x6F\x62\x6A\x65\x63\x74","\x73\x65\x6C\x65\x63\x74\x65\x64\x49\x6E\x64\x65\x78","\x61\x72\x72\x61\x79","\x67\x65\x74\x52\x61\x6E\x64\x6F\x6D\x49\x6E\x74","\x6E\x75\x6D\x62\x65\x72","\x64\x65\x67\x53\x74\x61\x72\x74","\x64\x65\x67\x45\x6E\x64","\x63\x61\x6C\x63\x53\x6C\x69\x63\x65\x53\x69\x7A\x65","\x73\x74\x61\x72\x74","\x65\x6E\x64","\x74\x6F\x4F\x62\x6A\x65\x63\x74","\x61\x6A\x61\x78","\x64\x61\x74\x61\x54\x79\x70\x65","\x6A\x73\x6F\x6E","\x63\x61\x63\x68\x65","\x6E\x6F\x6E\x63\x65","\x63\x6F\x75\x6E\x74\x65\x72","\x6C\x61\x73\x74\x57\x69\x6E\x6E\x65\x72","\x72\x65\x73\x75\x6C\x74\x73","\x69\x73\x41\x72\x72\x61\x79","\x65\x72\x72\x6F\x72","\x4E\x6F\x6E\x63\x65\x20\x54\x79\x70\x65\x20\x49\x6E\x63\x6F\x72\x72\x65\x63\x74\x20\x74\x72\x79\x20\x74\x6F\x20\x75\x73\x65\x20\x50\x4F\x53\x54\x20\x4D\x65\x74\x68\x6F\x64\x65\x20\x77\x69\x74\x68\x20\x6E\x6F\x6E\x63\x65\x20\x69\x64","\x73\x70\x69\x6E\x43\x6F\x75\x6E\x74","\x6E\x6F\x77","\x63\x61\x6C\x6C","\x6F\x6E\x46\x61\x69\x6C","\x69\x64","\x72\x75\x6E","\x64\x6F\x6E\x65","\x69\x73\x50\x6C\x61\x69\x6E\x4F\x62\x6A\x65\x63\x74","\x69\x73\x45\x6D\x70\x74\x79\x4F\x62\x6A\x65\x63\x74","\x69\x6E\x50\x72\x6F\x67\x72\x65\x73\x73","\x72\x65\x73\x65\x74\x43\x6F\x75\x6E\x74","\x6F\x6E\x53\x74\x61\x72\x74","\x6C\x61\x73\x74\x53\x74\x65\x70","\x63\x75\x72\x72\x65\x6E\x74\x53\x74\x65\x70","\x72\x65\x76\x65\x72\x73\x65","\x66\x72\x61\x6D\x65","\x69\x6E\x74\x65\x72\x76\x61\x6C","\x66\x78","\x2E\x65\x57\x68\x65\x65\x6C","\x63\x75\x72\x72\x65\x6E\x74\x53\x6C\x69\x63\x65","\x73\x6C\x69\x63\x65\x50\x65\x72\x63\x65\x6E\x74","\x63\x69\x72\x63\x6C\x65\x50\x65\x72\x63\x65\x6E\x74","\x6F\x6E\x50\x72\x6F\x67\x72\x65\x73\x73","\x6D\x61\x72\x6B\x65\x72\x41\x6E\x69\x6D\x61\x74\x69\x6F\x6E","\x65\x61\x73\x65\x49\x6E\x45\x6C\x61\x73\x74\x69\x63","\x65\x61\x73\x65\x49\x6E\x42\x61\x63\x6B","\x65\x61\x73\x65\x49\x6E\x42\x6F\x75\x6E\x63\x65","\x65\x61\x73\x65\x4F\x75\x74\x45\x6C\x61\x73\x74\x69\x63","\x65\x61\x73\x65\x4F\x75\x74\x42\x61\x63\x6B","\x65\x61\x73\x65\x4F\x75\x74\x42\x6F\x75\x6E\x63\x65","\x65\x61\x73\x65\x49\x6E\x4F\x75\x74\x45\x6C\x61\x73\x74\x69\x63","\x65\x61\x73\x65\x49\x6E\x4F\x75\x74\x42\x61\x63\x6B","\x65\x61\x73\x65\x49\x6E\x4F\x75\x74\x42\x6F\x75\x6E\x63\x65","\x4D\x61\x72\x6B\x65\x72\x45\x61\x73\x69\x6E\x67","\x2E\x65\x57\x68\x65\x65\x6C\x2D\x6D\x61\x72\x6B\x65\x72","\x61\x6E\x69\x6D\x61\x74\x65","\x66\x69\x6C\x6C","\x64\x61\x74\x61\x2D\x66\x69\x6C\x6C","\x63\x6C\x61\x73\x73","\x73\x76\x67\x3E\x70\x61\x74\x68","\x73\x65\x6C\x65\x63\x74\x65\x64\x53\x6C\x69\x63\x65\x43\x6F\x6C\x6F\x72","\x65\x77\x2D\x63\x63\x75\x72\x72\x65\x6E\x74","\x65\x71","\x2E\x65\x57\x68\x65\x65\x6C\x2D\x74\x78\x74\x3E\x2E\x65\x57\x68\x65\x65\x6C\x2D\x74\x69\x74\x6C\x65","\x65\x77\x2D\x63\x75\x72\x72\x65\x6E\x74","\x63\x75\x72\x72\x65\x6E\x74\x53\x6C\x69\x63\x65\x44\x61\x74\x61","\x6F\x6E\x53\x74\x65\x70","\x6F\x6E\x43\x6F\x6D\x70\x6C\x65\x74\x65","\x62\x75\x74\x74\x6F\x6E","\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74","\x6F\x6E","\x68\x65\x69\x67\x68\x74","\x66\x6E","\x61\x70\x70\x6C\x79","\x61\x6D\x64","\x6A\x71\x75\x65\x72\x79","\x65\x78\x70\x6F\x72\x74\x73"];!function(_0x87cax1){_0x48c1[0];_0x48c1[52]==  typeof define&& define[_0x48c1[286]]?define([_0x48c1[287]],_0x87cax1):_0x48c1[51]!=  typeof exports?module[_0x48c1[288]]= _0x87cax1(require(_0x48c1[287])):_0x87cax1(jQuery)}(function(_0x87cax1){_0x48c1[0];var _0x87cax2=window[_0x48c1[1]]|| {};(_0x87cax2= function(){return function(_0x87cax2,_0x87cax3){var _0x87cax4,_0x87cax5=this;_0x87cax5[_0x48c1[4]]= {items:[{name:_0x48c1[5],color:_0x48c1[6]},{name:_0x48c1[7],color:_0x48c1[8]}],width:400,fontSize:14,textOffset:8,textLine:_0x48c1[9],textArc:!1,letterSpacing:0,textColor:_0x48c1[10],centerWidth:45,shadow:_0x48c1[11],shadowOpacity:3,centerLineWidth:5,centerLineColor:_0x48c1[10],centerBackground:_0x48c1[12],sliceLineWidth:5,sliceLineColor:_0x48c1[10],selectedSliceColor:_0x48c1[13],outerLineColor:_0x48c1[10],outerLineWidth:5,centerImage:_0x48c1[14],centerHtml:_0x48c1[14],centerHtmlWidth:45,centerImageWidth:45,rotateCenter:!1,centerClass:_0x48c1[14],button:_0x48c1[14],easing:_0x48c1[15],markerAnimation:!0,markerColor:_0x48c1[16],selected:!1,type:_0x48c1[17],duration:8e3,rotates:8,max:0,frame:6,ajax:null,onStart:function(_0x87cax1,_0x87cax2,_0x87cax3){},onStep:function(_0x87cax1,_0x87cax2,_0x87cax3){},onProgress:function(_0x87cax1,_0x87cax2,_0x87cax3){},onComplete:function(_0x87cax1,_0x87cax2,_0x87cax3){},onFail:function(_0x87cax1,_0x87cax2,_0x87cax3){}},_0x87cax4= _0x87cax1(_0x87cax2)[_0x48c1[18]](_0x48c1[15])|| {},_0x87cax5[_0x48c1[19]]= _0x87cax1[_0x48c1[20]]({},_0x87cax5[_0x48c1[4]],_0x87cax3,_0x87cax4),_0x87cax5[_0x48c1[21]]= {slice:{id:null,results:null},currentSliceData:{id:null,results:null},winner:0,rotates:parseInt(_0x87cax5[_0x48c1[19]][_0x48c1[22]]),spinCount:0,counter:0,now:0,resetCount:0,currentSlice:0,currentStep:0,lastStep:0,slicePercent:0,circlePercent:0,items:_0x87cax5[_0x48c1[19]][_0x48c1[23]],spinning:!1,inProgress:!1,nonce:null,$wheel:_0x87cax1(_0x87cax2)},_0x87cax1[_0x48c1[20]](_0x87cax5,_0x87cax5[_0x48c1[21]]),_0x87cax1[_0x48c1[20]](_0x87cax1[_0x48c1[24]],{easyWheel:function(_0x87cax1,_0x87cax2,_0x87cax3,_0x87cax4,_0x87cax5){return -_0x87cax4* ((_0x87cax2= _0x87cax2/ _0x87cax5- 1)* _0x87cax2* _0x87cax2* _0x87cax2- 1) + _0x87cax3}}),_0x87cax1[_0x48c1[20]](_0x87cax1[_0x48c1[24]],{easeOutQuad:function(_0x87cax1,_0x87cax2,_0x87cax3,_0x87cax4,_0x87cax5){return -_0x87cax4* (_0x87cax2/= _0x87cax5) * (_0x87cax2- 2) + _0x87cax3}}),_0x87cax1[_0x48c1[20]](_0x87cax1[_0x48c1[24]],{MarkerEasing:function(_0x87cax1){var _0x87cax2=1- Math[_0x48c1[25]](1- 6* _0x87cax1,2);return _0x87cax2< 0&& (_0x87cax2= 0),_0x87cax2}}),_0x87cax5[_0x48c1[26]]= _0x48c1[27]+ _0x87cax5[_0x48c1[28]](),_0x87cax5[_0x48c1[2]](),_0x87cax5[_0x48c1[29]]()}}())[_0x48c1[3]][_0x48c1[2]]= function(_0x87cax2){var _0x87cax3=this;_0x87cax3[_0x48c1[22]]< 1&& (_0x87cax3[_0x48c1[22]]= 1,console[_0x48c1[32]](_0x48c1[30],_0x48c1[31])),parseInt(_0x87cax3[_0x48c1[19]][_0x48c1[33]])> 10&& (_0x87cax3[_0x48c1[19]][_0x48c1[33]]= 10,console[_0x48c1[32]](_0x48c1[30],_0x48c1[34])),parseInt(_0x87cax3[_0x48c1[19]][_0x48c1[35]])> 10&& (_0x87cax3[_0x48c1[19]][_0x48c1[35]]= 10,console[_0x48c1[32]](_0x48c1[30],_0x48c1[36])),parseInt(_0x87cax3[_0x48c1[19]][_0x48c1[37]])> 10&& (_0x87cax3[_0x48c1[19]][_0x48c1[37]]= 10,console[_0x48c1[32]](_0x48c1[30],_0x48c1[38])),void(0)=== _0x87cax1[_0x48c1[24]][_0x87cax1[_0x48c1[39]](_0x87cax3[_0x48c1[19]][_0x48c1[24]])]&& (_0x87cax3[_0x48c1[19]][_0x48c1[24]]= _0x48c1[15])},_0x87cax2[_0x48c1[3]][_0x48c1[40]]= function(_0x87cax2){var _0x87cax3=this;_0x87cax3[_0x48c1[41]]&& _0x87cax3[_0x48c1[41]][_0x48c1[42]](),_0x48c1[43]==  typeof _0x87cax2&& !0=== _0x87cax2&& _0x87cax3[_0x48c1[46]][_0x48c1[45]](_0x48c1[14])[_0x48c1[44]](_0x87cax3[_0x48c1[26]]),_0x87cax1[_0x48c1[20]](_0x87cax3[_0x48c1[19]],_0x87cax3[_0x48c1[4]]),_0x87cax1[_0x48c1[20]](_0x87cax3,_0x87cax3[_0x48c1[21]]),_0x87cax1(document)[_0x48c1[48]](_0x48c1[47]+ _0x87cax3[_0x48c1[26]]),_0x87cax1(document)[_0x48c1[48]](_0x48c1[49]+ _0x87cax3[_0x48c1[26]])},_0x87cax2[_0x48c1[3]][_0x48c1[50]]= function(_0x87cax2,_0x87cax3){var _0x87cax4=this;if(-1=== _0x87cax1[_0x48c1[53]]( typeof _0x87cax3,[_0x48c1[51],_0x48c1[52]]) && -1=== _0x87cax1[_0x48c1[53]]( typeof _0x87cax4[_0x48c1[19]][_0x87cax2],[_0x48c1[51],_0x48c1[52]])){var _0x87cax5=[_0x48c1[24],_0x48c1[54],_0x48c1[55],_0x48c1[22],_0x48c1[56]];-1!= _0x87cax1[_0x48c1[53]](_0x87cax2,_0x87cax5) && (_0x87cax4[_0x48c1[19]][_0x87cax2]= _0x87cax3)}},_0x87cax2[_0x48c1[3]][_0x48c1[42]]= function(){var _0x87cax1=this;_0x87cax1[_0x48c1[41]]&& _0x87cax1[_0x48c1[41]][_0x48c1[42]]()},_0x87cax2[_0x48c1[3]][_0x48c1[29]]= function(){var _0x87cax1=this;_0x87cax1[_0x48c1[57]](),_0x87cax1[_0x48c1[58]]()},_0x87cax2[_0x48c1[3]][_0x48c1[57]]= function(){var _0x87cax2=this;_0x87cax2[_0x48c1[46]][_0x48c1[60]](_0x48c1[59]+ _0x87cax2[_0x48c1[26]]);var _0x87cax3=360/ _0x87cax2[_0x48c1[61]](),_0x87cax4=0,_0x87cax5=0;_0x87cax2[_0x48c1[46]][_0x48c1[45]](_0x48c1[14]);var _0x87cax6=_0x87cax1(_0x48c1[64])[_0x48c1[60]](_0x48c1[63])[_0x48c1[62]](_0x87cax2.$wheel),_0x87cax7=_0x87cax1(_0x48c1[64])[_0x48c1[60]](_0x48c1[65])[_0x48c1[62]](_0x87cax6),_0x87cax8=_0x87cax1(_0x48c1[64])[_0x48c1[60]](_0x48c1[67])[_0x48c1[66]](_0x87cax7),_0x87cax9=_0x87cax1(_0x48c1[64])[_0x48c1[60]](_0x48c1[68])[_0x48c1[62]](_0x87cax8),_0x87caxa=_0x87cax1(_0x87cax2.SVG(_0x48c1[69],{version:_0x48c1[70],xmlns:_0x48c1[71],"\x78\x6D\x6C\x6E\x73\x3A\x78\x6C\x69\x6E\x6B":_0x48c1[72],x:_0x48c1[73],y:_0x48c1[73],viewBox:_0x48c1[74],"\x78\x6D\x6C\x3A\x73\x70\x61\x63\x65":_0x48c1[75],style:_0x48c1[76]}));_0x87caxa[_0x48c1[62]](_0x87cax9);var _0x87caxb=_0x87cax1(_0x48c1[77]),_0x87caxc=_0x87cax1(_0x48c1[77]);if(_0x87caxb[_0x48c1[62]](_0x87caxa),_0x48c1[78]==  typeof _0x87cax2[_0x48c1[19]][_0x48c1[79]]&& _0x48c1[14]!== _0x87cax1[_0x48c1[39]](_0x87cax2[_0x48c1[19]][_0x48c1[79]])){var _0x87caxd=_0x87cax1(_0x87cax2.SVG(_0x48c1[80],{id:_0x48c1[81],cx:_0x48c1[82],cy:_0x48c1[82],r:_0x48c1[82],gradientUnits:_0x48c1[83]}))[_0x48c1[62]](_0x87caxa),_0x87caxe=_0x87cax2.SVG(_0x48c1[85],{offset:_0x48c1[86],style:_0x48c1[87]+ _0x87cax2[_0x48c1[19]][_0x48c1[79]]+ _0x48c1[88]})[_0x48c1[84]]+ _0x87cax2.SVG(_0x48c1[85],{offset:_0x48c1[89],style:_0x48c1[87]+ _0x87cax2[_0x48c1[19]][_0x48c1[79]]+ _0x48c1[88]})[_0x48c1[84]]+ _0x87cax2.SVG(_0x48c1[85],{offset:_0x48c1[90],style:_0x48c1[87]+ _0x87cax2[_0x48c1[19]][_0x48c1[79]]+ _0x48c1[88]})[_0x48c1[84]]+ _0x87cax2.SVG(_0x48c1[85],{offset:_0x48c1[91],style:_0x48c1[87]+ _0x87cax2[_0x48c1[19]][_0x48c1[79]]+ _0x48c1[92]})[_0x48c1[84]];_0x87cax1(_0x87caxe)[_0x48c1[62]](_0x87caxd),_0x87cax1(_0x87cax2.SVG(_0x48c1[93],{cx:_0x48c1[82],cy:_0x48c1[82],r:_0x48c1[82],"\x73\x74\x72\x6F\x6B\x65\x2D\x77\x69\x64\x74\x68":_0x48c1[94],"\x66\x69\x6C\x6C\x2D\x6F\x70\x61\x63\x69\x74\x79":parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[95]])< 9?_0x48c1[96]+ parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[95]]):1,fill:_0x48c1[97]}))[_0x48c1[62]](_0x87caxa)};if(_0x87caxc[_0x48c1[62]](_0x87caxa),_0x48c1[98]=== _0x87cax2[_0x48c1[19]][_0x48c1[99]]|| _0x48c1[100]=== _0x87cax2[_0x48c1[19]][_0x48c1[99]]){var _0x87caxf=_0x87cax1(_0x48c1[64]);_0x87caxf[_0x48c1[60]](_0x48c1[101]),_0x87caxf[_0x48c1[62]](_0x87cax8);var _0x87cax10=_0x87cax1(_0x48c1[64]);_0x87cax10[_0x48c1[60]](_0x48c1[102]),_0x87cax10[_0x48c1[106]]({transform:_0x48c1[103]+ (-360/ _0x87cax2[_0x48c1[61]]() / 2 + _0x87cax2[_0x48c1[104]]())+ _0x48c1[105]}),_0x87cax10[_0x48c1[62]](_0x87caxf)}else {var _0x87cax11=_0x87cax1(_0x48c1[77]),_0x87cax12=_0x87cax1(_0x48c1[107]);_0x87cax12[_0x48c1[62]](_0x87caxa),_0x87cax11[_0x48c1[62]](_0x87caxa)};var _0x87cax13=_0x87cax1(_0x48c1[64]);if(_0x87cax13[_0x48c1[60]](_0x48c1[108]),_0x87cax13[_0x48c1[60]](_0x87cax2[_0x48c1[19]][_0x48c1[109]]),_0x87cax13[_0x48c1[62]](!0=== _0x87cax2[_0x48c1[19]][_0x48c1[110]] || _0x48c1[111]=== _0x87cax2[_0x48c1[19]][_0x48c1[110]]?_0x87cax8:_0x87cax7),_0x48c1[78]==  typeof _0x87cax2[_0x48c1[19]][_0x48c1[112]]&& _0x48c1[14]=== _0x87cax1[_0x48c1[39]](_0x87cax2[_0x48c1[19]][_0x48c1[112]])&& _0x48c1[78]==  typeof _0x87cax2[_0x48c1[19]][_0x48c1[113]]&& _0x48c1[14]!== _0x87cax1[_0x48c1[39]](_0x87cax2[_0x48c1[19]][_0x48c1[113]])){var _0x87cax14=_0x87cax1(_0x48c1[114]);parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[115]])|| (_0x87cax2[_0x48c1[19]][_0x48c1[115]]= parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[116]])),_0x87cax14[_0x48c1[106]](_0x48c1[117],parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[115]])+ _0x48c1[118]),_0x87cax14[_0x48c1[120]](_0x48c1[119],_0x87cax2[_0x48c1[19]][_0x48c1[113]]),_0x87cax14[_0x48c1[62]](_0x87cax13),_0x87cax13[_0x48c1[124]](_0x48c1[121]+ parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[115]])+ _0x48c1[122]+ parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[115]])+ _0x48c1[123])};if(_0x48c1[78]==  typeof _0x87cax2[_0x48c1[19]][_0x48c1[112]]&& _0x48c1[14]!== _0x87cax1[_0x48c1[39]](_0x87cax2[_0x48c1[19]][_0x48c1[112]])){var _0x87cax15=_0x87cax1(_0x48c1[125]+ _0x87cax2[_0x48c1[19]][_0x48c1[112]]+ _0x48c1[126]);parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[127]])|| (_0x87cax2[_0x48c1[19]][_0x48c1[127]]= parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[116]])),_0x87cax15[_0x48c1[106]]({width:parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[127]])+ _0x48c1[118],height:parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[127]])+ _0x48c1[118]}),_0x87cax15[_0x48c1[62]](_0x87cax13)};_0x48c1[128]!== _0x87cax1[_0x48c1[39]](_0x87cax2[_0x48c1[19]][_0x48c1[54]])&& _0x87cax1(_0x48c1[64])[_0x48c1[60]](_0x48c1[132])[_0x48c1[62]](_0x87cax6)[_0x48c1[124]](_0x48c1[129]+ _0x87cax2[_0x48c1[19]][_0x48c1[130]]+ _0x48c1[131]),_0x87cax1[_0x48c1[158]](_0x87cax2[_0x48c1[23]],function(_0x87cax6,_0x87cax7){var _0x87cax8=360/ _0x87cax2[_0x48c1[61]]()* _0x87cax6;_0x87cax5+= _0x87cax3;var _0x87cax9=_0x87cax2[_0x48c1[133]]({centerX:100,centerY:100,startDegrees:_0x87cax4,endDegrees:_0x87cax5,innerRadius:parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[116]]),outerRadius:100.5- parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[37]])});_0x87caxb[_0x48c1[124]](_0x87cax2.SVG(_0x48c1[134],{"\x73\x74\x72\x6F\x6B\x65\x2D\x77\x69\x64\x74\x68":0,fill:_0x87cax7[_0x48c1[128]],"\x64\x61\x74\x61\x2D\x66\x69\x6C\x6C":_0x87cax7[_0x48c1[128]],d:_0x87cax9})),_0x87caxc[_0x48c1[124]](_0x87cax2.SVG(_0x48c1[134],{"\x73\x74\x72\x6F\x6B\x65\x2D\x77\x69\x64\x74\x68":0,fill:_0x87cax2[_0x48c1[19]][_0x48c1[135]],d:_0x87cax2[_0x48c1[133]]({centerX:100,centerY:100,startDegrees:_0x87cax5+ 0.2,endDegrees:_0x87cax5- 0.2,innerRadius:parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[116]]),outerRadius:100.5- parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[37]])},!0)}));var _0x87caxa=_0x48c1[136]!== _0x87cax1[_0x48c1[39]](_0x87cax2[_0x48c1[19]][_0x48c1[137]])?_0x87cax1[_0x48c1[39]](_0x87cax2[_0x48c1[19]][_0x48c1[137]]):_0x87cax2[_0x48c1[138]](_0x87cax7[_0x48c1[128]]);if(_0x48c1[98]=== _0x87cax2[_0x48c1[19]][_0x48c1[99]]|| _0x48c1[100]=== _0x87cax2[_0x48c1[19]][_0x48c1[99]]){var _0x87caxd=_0x87cax1(_0x48c1[64]);_0x87caxd[_0x48c1[60]](_0x48c1[139]),_0x87caxd[_0x48c1[45]](_0x87cax7[_0x48c1[140]]),_0x87caxd[_0x48c1[106]]({paddingRight:parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[141]])+ _0x48c1[118],transform:_0x48c1[103]+ _0x87cax8+ _0x48c1[142],color:_0x87caxa}),_0x87caxd[_0x48c1[62]](_0x87cax10),_0x87cax2[_0x48c1[144]](_0x87cax2[_0x48c1[19]][_0x48c1[143]])> 0&& _0x87cax10[_0x48c1[106]](_0x48c1[145],_0x87cax2[_0x48c1[144]](_0x87cax2[_0x48c1[19]][_0x48c1[143]]))}else {var _0x87caxe=_0x48c1[146]+ _0x87caxa+ _0x48c1[147]+ _0x87cax2[_0x48c1[144]](_0x87cax2[_0x48c1[19]][_0x48c1[141]])+ _0x48c1[148]+ _0x87cax6+ _0x48c1[149]+ _0x87cax7[_0x48c1[140]]+ _0x48c1[150];_0x87cax11[_0x48c1[106]](_0x48c1[151],parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[152]])/ 2),parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[143]])> 0&& _0x87cax11[_0x48c1[106]](_0x48c1[145],parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[143]])),_0x87cax11[_0x48c1[124]](_0x87caxe);var _0x87caxf=/(^.+?)L/[_0x48c1[153]](_0x87cax9)[1];if(!0!== _0x87cax2[_0x48c1[19]][_0x48c1[154]]){var _0x87cax13=/(^.+?),/,_0x87cax14=/(^.+?)A/[_0x48c1[153]](_0x87caxf),_0x87cax15=_0x87caxf[_0x48c1[155]](_0x87cax14[0],_0x48c1[14]),_0x87cax16=_0x87cax13[_0x48c1[153]](_0x87cax15),_0x87cax17=_0x87cax15[_0x48c1[155]](_0x87cax16[1],0);_0x87caxf= _0x87caxf[_0x48c1[155]](_0x87cax15,_0x87cax17)};_0x87cax12[_0x48c1[124]](_0x87cax2.SVG(_0x48c1[134],{"\x73\x74\x72\x6F\x6B\x65\x2D\x77\x69\x64\x74\x68":0,fill:_0x48c1[156],id:_0x48c1[157]+ _0x87cax6,d:_0x87caxf}))};var _0x87cax18=_0x87cax1(_0x48c1[64]);_0x87cax18[_0x48c1[45]](_0x87cax7),_0x87cax18[_0x48c1[62]](_0x87caxd),_0x87cax4+= _0x87cax3});var _0x87cax16=parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[33]]);if(_0x48c1[98]!== _0x87cax2[_0x48c1[19]][_0x48c1[99]]|| _0x87cax2[_0x48c1[19]][_0x48c1[99]],parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[116]])> _0x87cax16){var _0x87cax17=_0x87cax2.SVG(_0x48c1[93],{class:_0x48c1[159],cx:_0x48c1[160],cy:_0x48c1[160],r:parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[116]])+ 1,stroke:_0x87cax2[_0x48c1[19]][_0x48c1[161]],"\x73\x74\x72\x6F\x6B\x65\x2D\x77\x69\x64\x74\x68":parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[35]]),fill:_0x87cax2[_0x48c1[19]][_0x48c1[162]]});_0x87cax1(_0x87cax17)[_0x48c1[62]](_0x87caxa)};var _0x87cax18=_0x87cax2.SVG(_0x48c1[93],{cx:_0x48c1[160],cy:_0x48c1[160],r:100- parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[37]])/ 2,stroke:_0x87cax2[_0x48c1[19]][_0x48c1[163]],"\x73\x74\x72\x6F\x6B\x65\x2D\x77\x69\x64\x74\x68":parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[37]]),"\x66\x69\x6C\x6C\x2D\x6F\x70\x61\x63\x69\x74\x79":0,fill:_0x48c1[164]});_0x87cax1(_0x87cax18)[_0x48c1[62]](_0x87caxa),_0x87cax9[_0x48c1[45]](_0x87cax9[_0x48c1[45]]())},_0x87cax2[_0x48c1[3]][_0x48c1[144]]= function(_0x87cax1){return NaN=== Number(_0x87cax1)?0:Number(_0x87cax1)},_0x87cax2[_0x48c1[3]][_0x48c1[165]]= function(_0x87cax1,_0x87cax2){var _0x87cax3=document[_0x48c1[166]](_0x48c1[71],_0x87cax1);for(var _0x87cax4 in _0x87cax2){_0x87cax3[_0x48c1[167]](_0x87cax4,_0x87cax2[_0x87cax4])};return _0x87cax3},_0x87cax2[_0x48c1[3]][_0x48c1[133]]= function(_0x87cax1,_0x87cax2){var _0x87cax3=this,_0x87cax4=parseInt(_0x87cax3[_0x48c1[19]][_0x48c1[33]]),_0x87cax5=_0x87cax3[_0x48c1[168]](_0x87cax1),_0x87cax6=[[_0x87cax5[_0x48c1[169]]+ _0x87cax5[_0x48c1[170]]* Math[_0x48c1[173]]((_0x87cax1[_0x48c1[171]]+ _0x87cax4/ 4)* Math[_0x48c1[172]]/ 180),_0x87cax5[_0x48c1[174]]+ _0x87cax5[_0x48c1[170]]* Math[_0x48c1[175]]((_0x87cax1[_0x48c1[171]]+ _0x87cax4/ 4)* Math[_0x48c1[172]]/ 180)],[_0x87cax5[_0x48c1[169]]+ _0x87cax5[_0x48c1[170]]* Math[_0x48c1[173]]((_0x87cax1[_0x48c1[176]]- _0x87cax4/ 4)* Math[_0x48c1[172]]/ 180),_0x87cax5[_0x48c1[174]]+ _0x87cax5[_0x48c1[170]]* Math[_0x48c1[175]]((_0x87cax1[_0x48c1[176]]- _0x87cax4/ 4)* Math[_0x48c1[172]]/ 180)],[_0x87cax5[_0x48c1[169]]+ _0x87cax5[_0x48c1[177]]* Math[_0x48c1[173]]((_0x87cax1[_0x48c1[176]]- _0x87cax4)* Math[_0x48c1[172]]/ 180),_0x87cax5[_0x48c1[174]]+ _0x87cax5[_0x48c1[177]]* Math[_0x48c1[175]]((_0x87cax1[_0x48c1[176]]- _0x87cax4)* Math[_0x48c1[172]]/ 180)],[_0x87cax5[_0x48c1[169]]+ _0x87cax5[_0x48c1[177]]* Math[_0x48c1[173]]((_0x87cax1[_0x48c1[171]]+ _0x87cax4)* Math[_0x48c1[172]]/ 180),_0x87cax5[_0x48c1[174]]+ _0x87cax5[_0x48c1[177]]* Math[_0x48c1[175]]((_0x87cax1[_0x48c1[171]]+ _0x87cax4)* Math[_0x48c1[172]]/ 180)]],_0x87cax7=(_0x87cax5[_0x48c1[178]]- _0x87cax5[_0x48c1[179]])% (2* Math[_0x48c1[172]])> Math[_0x48c1[172]]?1:0,_0x87cax8=1,_0x87cax9=0;!0=== _0x87cax2 && _0x87cax4>= parseInt(_0x87cax3[_0x48c1[19]][_0x48c1[116]])?(_0x87cax8= 0,_0x87cax9= 1):!0!== _0x87cax2 && _0x87cax4>= parseInt(_0x87cax3[_0x48c1[19]][_0x48c1[116]]) && (_0x87cax8= 1,_0x87cax9= 1);var _0x87caxa=[];return _0x87caxa[_0x48c1[182]](_0x48c1[180]+ _0x87cax6[0][_0x48c1[181]]()),_0x87caxa[_0x48c1[182]](_0x48c1[183]+ [_0x87cax5[_0x48c1[170]],_0x87cax5[_0x48c1[170]],0,_0x87cax7,_0x87cax8,_0x87cax6[1]][_0x48c1[181]]()),_0x87caxa[_0x48c1[182]](_0x48c1[184]+ _0x87cax6[2][_0x48c1[181]]()),_0x87caxa[_0x48c1[182]](_0x48c1[183]+ [_0x87cax5[_0x48c1[177]],_0x87cax5[_0x48c1[177]],0,_0x87cax7,_0x87cax9,_0x87cax6[3]][_0x48c1[181]]()),_0x87caxa[_0x48c1[182]](_0x48c1[185]),_0x87caxa[_0x48c1[181]](_0x48c1[186])},_0x87cax2[_0x48c1[3]][_0x48c1[168]]= function(_0x87cax1){var _0x87cax2={cx:_0x87cax1[_0x48c1[187]]|| 0,cy:_0x87cax1[_0x48c1[188]]|| 0,startRadians:(_0x87cax1[_0x48c1[171]]|| 0)* Math[_0x48c1[172]]/ 180,closeRadians:(_0x87cax1[_0x48c1[176]]|| 0)* Math[_0x48c1[172]]/ 180},_0x87cax3=void(0)!== _0x87cax1[_0x48c1[189]]?_0x87cax1[_0x48c1[189]]:100;return void(0)!== _0x87cax1[_0x48c1[190]]?_0x87cax2[_0x48c1[177]]= _0x87cax1[_0x48c1[190]]:void(0)!== _0x87cax1[_0x48c1[191]]?_0x87cax2[_0x48c1[177]]= _0x87cax1[_0x48c1[191]]- _0x87cax3:_0x87cax2[_0x48c1[177]]= 200- _0x87cax3,void(0)!== _0x87cax1[_0x48c1[191]]?_0x87cax2[_0x48c1[170]]= _0x87cax1[_0x48c1[191]]:_0x87cax2[_0x48c1[170]]= _0x87cax2[_0x48c1[177]]+ _0x87cax3,_0x87cax2[_0x48c1[177]]< 0&& (_0x87cax2[_0x48c1[177]]= 0),_0x87cax2[_0x48c1[170]]< 0&& (_0x87cax2[_0x48c1[170]]= 0),_0x87cax2},_0x87cax2[_0x48c1[3]][_0x48c1[138]]= function(_0x87cax1){var _0x87cax2,_0x87cax3,_0x87cax4,_0x87cax5;return _0x87cax1[_0x48c1[192]](/^rgb/)?(_0x87cax2= (_0x87cax1= (_0x87cax1= _0x87cax1[_0x48c1[192]](/rgba?\(([^)]+)\)/)[1])[_0x48c1[194]](/ *, */)[_0x48c1[193]](Number))[0],_0x87cax3= _0x87cax1[1],_0x87cax4= _0x87cax1[2]):_0x48c1[195]== _0x87cax1[0]&& 7== _0x87cax1[_0x48c1[196]]?(_0x87cax2= parseInt(_0x87cax1[_0x48c1[197]](1,3),16),_0x87cax3= parseInt(_0x87cax1[_0x48c1[197]](3,5),16),_0x87cax4= parseInt(_0x87cax1[_0x48c1[197]](5,7),16)):_0x48c1[195]== _0x87cax1[0]&& 4== _0x87cax1[_0x48c1[196]]&& (_0x87cax2= parseInt(_0x87cax1[1]+ _0x87cax1[1],16),_0x87cax3= parseInt(_0x87cax1[2]+ _0x87cax1[2],16),_0x87cax4= parseInt(_0x87cax1[3]+ _0x87cax1[3],16)),_0x87cax5= (299* _0x87cax2+ 587* _0x87cax3+ 114* _0x87cax4)/ 1e3,_0x87cax5< 125?_0x48c1[10]:_0x48c1[13]},_0x87cax2[_0x48c1[3]][_0x48c1[28]]= function(_0x87cax1){var _0x87cax2=_0x48c1[198],_0x87cax3=_0x48c1[14];_0x87cax1|| (_0x87cax1= 8);for(var _0x87cax4=0;_0x87cax4< _0x87cax1;_0x87cax4++){_0x87cax3+= _0x87cax2[_0x48c1[201]](Math[_0x48c1[200]](Math[_0x48c1[199]]()* _0x87cax2[_0x48c1[196]]))};return _0x87cax3},_0x87cax2[_0x48c1[3]][_0x48c1[202]]= function(){for(var _0x87cax1=_0x48c1[195],_0x87cax2=0;_0x87cax2< 6;_0x87cax2++){_0x87cax1+= _0x48c1[203][Math[_0x48c1[200]](16* Math[_0x48c1[199]]())]};return _0x87cax1},_0x87cax2[_0x48c1[3]][_0x48c1[204]]= function(_0x87cax1){var _0x87cax2=this,_0x87cax3=1+ 1* (_0x87cax2[_0x48c1[46]][_0x48c1[117]]()- parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[117]]))/ parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[117]]);_0x87cax3> 4?_0x87cax3= 4:_0x87cax3< 0.1&& (_0x87cax3= 0.1),_0x87cax2[_0x48c1[46]][_0x48c1[206]](_0x48c1[205])[_0x48c1[106]](_0x48c1[151],100* _0x87cax3+ _0x48c1[118])},_0x87cax2[_0x48c1[3]][_0x48c1[207]]= function(_0x87cax1){var _0x87cax2,_0x87cax3=[];for(_0x87cax2= 0;_0x87cax2< _0x87cax1;_0x87cax2++){_0x87cax3[_0x87cax2]= _0x87cax2};return _0x87cax3},_0x87cax2[_0x48c1[3]][_0x48c1[61]]= function(){return this[_0x48c1[23]][_0x48c1[196]]},_0x87cax2[_0x48c1[3]][_0x48c1[104]]= function(_0x87cax1){return 360/ this[_0x48c1[61]]()},_0x87cax2[_0x48c1[3]][_0x48c1[208]]= function(_0x87cax2){var _0x87cax3=this;if(_0x87cax3[_0x48c1[209]]= _0x87cax3[_0x48c1[19]][_0x48c1[209]],_0x48c1[210]=== _0x87cax1[_0x48c1[54]](_0x87cax3[_0x48c1[209]])){if(void(0)!== _0x87cax3[_0x48c1[209]][0]&& void(0)!== _0x87cax3[_0x48c1[209]][0][_0x48c1[211]]){return _0x87cax3[_0x48c1[209]][0][_0x48c1[211]]}}else {if(_0x48c1[212]=== _0x87cax1[_0x48c1[54]](_0x87cax3[_0x48c1[209]])){_0x87cax3[_0x48c1[209]]= _0x87cax3[_0x48c1[209]][_0x87cax2]}else {if(_0x48c1[78]=== _0x87cax1[_0x48c1[54]](_0x87cax3[_0x48c1[209]])&& _0x48c1[199]=== _0x87cax1[_0x48c1[39]](_0x87cax3[_0x48c1[209]])){return _0x87cax3[_0x48c1[213]](0,_0x87cax3[_0x48c1[61]]()- 1)};if(_0x48c1[214]!== _0x87cax1[_0x48c1[54]](_0x87cax3[_0x48c1[209]])){return}}};return _0x87cax3[_0x48c1[209]]},_0x87cax2[_0x48c1[3]][_0x48c1[215]]= function(_0x87cax1){return 360- this[_0x48c1[104]]()* _0x87cax1},_0x87cax2[_0x48c1[3]][_0x48c1[216]]= function(_0x87cax1){var _0x87cax2=this;return 360- (_0x87cax2[_0x48c1[104]]()* _0x87cax1+ _0x87cax2[_0x48c1[104]]())},_0x87cax2[_0x48c1[3]][_0x48c1[213]]= function(_0x87cax1,_0x87cax2){return Math[_0x48c1[200]](Math[_0x48c1[199]]()* (_0x87cax2- _0x87cax1+ 1)+ _0x87cax1)},_0x87cax2[_0x48c1[3]][_0x48c1[217]]= function(_0x87cax1){var _0x87cax2=this,_0x87cax3=_0x87cax2[_0x48c1[215]](_0x87cax1)- (parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[33]])+ 2),_0x87cax4=_0x87cax2[_0x48c1[216]](_0x87cax1)+ (parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[33]])+ 2),_0x87cax5=[];return _0x87cax5[_0x48c1[218]]= _0x87cax3,_0x87cax5[_0x48c1[219]]= _0x87cax4,_0x87cax5},_0x87cax2[_0x48c1[3]][_0x48c1[220]]= function(_0x87cax1){for(var _0x87cax2={},_0x87cax3=0;_0x87cax3< _0x87cax1[_0x48c1[196]];++_0x87cax3){void(0)!== _0x87cax1[_0x87cax3]&& (_0x87cax2[_0x87cax3]= _0x87cax1[_0x87cax3])};return _0x87cax2},_0x87cax2[_0x48c1[3]][_0x48c1[221]]= function(_0x87cax2){var _0x87cax3=this;_0x87cax2[_0x48c1[222]]= _0x48c1[223],_0x87cax2[_0x48c1[224]]=  !1,void(0)=== _0x87cax2[_0x48c1[18]]&& (_0x87cax2[_0x48c1[18]]= {}),!0=== _0x87cax2[_0x48c1[225]] && (_0x87cax2[_0x48c1[18]][_0x48c1[225]]= _0x87cax3[_0x48c1[28]](8),_0x87cax3[_0x48c1[225]]= _0x87cax2[_0x48c1[18]][_0x48c1[225]]),0!== _0x87cax3[_0x48c1[226]]?_0x87cax2[_0x48c1[18]][_0x48c1[227]]= _0x87cax3[_0x48c1[197]][_0x48c1[228]]:_0x87cax2[_0x48c1[18]][_0x48c1[227]]=  !1,_0x87cax1[_0x48c1[221]](_0x87cax2)[_0x48c1[238]](function(_0x87cax2){_0x87cax1[_0x48c1[229]](_0x87cax2)&& (_0x87cax2= _0x87cax3[_0x48c1[220]](_0x87cax2)),_0x87cax3[_0x48c1[225]]&& (_0x48c1[78]!=  typeof _0x87cax2[_0x48c1[225]]&& console[_0x48c1[32]](_0x48c1[230],_0x48c1[231]),_0x87cax2[_0x48c1[225]]!== _0x87cax3[_0x48c1[225]])?_0x87cax3[_0x48c1[19]][_0x48c1[235]][_0x48c1[234]](_0x87cax3.$wheel,_0x87cax3[_0x48c1[197]][_0x48c1[228]],_0x87cax3[_0x48c1[232]],_0x87cax3[_0x48c1[233]]):_0x87cax3[_0x48c1[237]](parseInt(_0x87cax2[_0x48c1[236]]))})},_0x87cax2[_0x48c1[3]][_0x48c1[218]]= function(){var _0x87cax2=this;_0x87cax1[_0x48c1[239]](_0x87cax2[_0x48c1[19]][_0x48c1[221]])&&  !_0x87cax1[_0x48c1[240]](_0x87cax2[_0x48c1[19]][_0x48c1[221]])?_0x87cax2[_0x48c1[221]](_0x87cax2[_0x48c1[19]][_0x48c1[221]]):_0x87cax2[_0x48c1[237]]()},_0x87cax2[_0x48c1[3]][_0x48c1[237]]= function(_0x87cax2){var _0x87cax3=this;if(!_0x87cax3[_0x48c1[241]]){if(_0x87cax3[_0x48c1[241]]=  !0,_0x87cax2){_0x87cax3[_0x48c1[197]][_0x48c1[236]]= _0x87cax2}else {if(0!== _0x87cax3[_0x48c1[19]][_0x48c1[56]]&& _0x87cax3[_0x48c1[226]]>= _0x87cax3[_0x48c1[19]][_0x48c1[56]]){return};_0x48c1[210]==  typeof _0x87cax3[_0x48c1[19]][_0x48c1[209]]?_0x87cax3[_0x48c1[197]][_0x48c1[236]]= _0x87cax3[_0x48c1[208]](_0x87cax3[_0x48c1[242]]):_0x87cax3[_0x48c1[197]][_0x48c1[236]]= _0x87cax3[_0x48c1[213]](0,_0x87cax3[_0x48c1[61]]()- 1)};if(_0x87cax3[_0x48c1[61]]()<= _0x87cax3[_0x48c1[242]]&& (_0x87cax3[_0x48c1[242]]= 0),void(0)!== _0x87cax3[_0x48c1[23]][_0x87cax3[_0x48c1[197]][_0x48c1[236]]]){_0x87cax3[_0x48c1[197]][_0x48c1[228]]= _0x87cax3[_0x48c1[23]][_0x87cax3[_0x48c1[197]][_0x48c1[236]]],_0x87cax3[_0x48c1[197]][_0x48c1[196]]= _0x87cax3[_0x48c1[197]][_0x48c1[236]],_0x87cax3[_0x48c1[19]][_0x48c1[243]][_0x48c1[234]](_0x87cax3.$wheel,_0x87cax3[_0x48c1[197]][_0x48c1[228]],_0x87cax3[_0x48c1[232]],_0x87cax3[_0x48c1[233]]);var _0x87cax4=_0x87cax3[_0x48c1[217]](_0x87cax3[_0x48c1[197]][_0x48c1[236]]),_0x87cax5=_0x87cax3[_0x48c1[213]](_0x87cax4[_0x48c1[218]],_0x87cax4[_0x48c1[219]]),_0x87cax6=360* parseInt(_0x87cax3[_0x48c1[22]])+ _0x87cax5;_0x87cax3[_0x48c1[244]]=  -1,_0x87cax3[_0x48c1[245]]= 0;var _0x87cax7,_0x87cax8=!1,_0x87cax9=_0x87cax3[_0x48c1[207]](_0x87cax3[_0x48c1[61]]())[_0x48c1[246]]();if(0!== parseInt(_0x87cax3[_0x48c1[19]][_0x48c1[247]])){var _0x87caxa=_0x87cax1[_0x48c1[249]][_0x48c1[248]];_0x87cax1[_0x48c1[249]][_0x48c1[248]]= parseInt(_0x87cax3[_0x48c1[19]][_0x48c1[247]])};_0x87cax3[_0x48c1[41]]= _0x87cax1({deg:_0x87cax3[_0x48c1[233]]})[_0x48c1[267]]({deg:_0x87cax6},{duration:parseInt(_0x87cax3[_0x48c1[19]][_0x48c1[55]]),easing:_0x87cax1[_0x48c1[39]](_0x87cax3[_0x48c1[19]][_0x48c1[24]]),step:function(_0x87cax2,_0x87cax4){0!== parseInt(_0x87cax3[_0x48c1[19]][_0x48c1[247]])&& (_0x87cax1[_0x48c1[249]][_0x48c1[248]]= parseInt(_0x87cax3[_0x48c1[19]][_0x48c1[247]])),_0x87cax3[_0x48c1[233]]= _0x87cax2% 360,_0x48c1[128]!== _0x87cax1[_0x48c1[39]](_0x87cax3[_0x48c1[19]][_0x48c1[54]])&& _0x87cax3[_0x48c1[46]][_0x48c1[206]](_0x48c1[250])[_0x48c1[106]]({transform:_0x48c1[103]+ _0x87cax3[_0x48c1[233]]+ _0x48c1[105]}),_0x87cax3[_0x48c1[245]]= Math[_0x48c1[200]](_0x87cax2/ (360/ _0x87cax3[_0x48c1[61]]())),_0x87cax3[_0x48c1[251]]= _0x87cax9[_0x87cax3[_0x48c1[245]]% _0x87cax3[_0x48c1[61]]()];var _0x87cax5=_0x87cax3[_0x48c1[61]](),_0x87cax6=1600/ _0x87cax5,_0x87caxb=1600/ 360* _0x87cax3[_0x48c1[233]]/ 1600* 100,_0x87caxc=((_0x87cax3[_0x48c1[251]]+ 1)* _0x87cax6- (1600- 1600/ 360* _0x87cax3[_0x48c1[233]]))/ _0x87cax6* 100;if(_0x87cax3[_0x48c1[252]]= _0x87caxc,_0x87cax3[_0x48c1[253]]= _0x87caxb,_0x87cax3[_0x48c1[19]][_0x48c1[254]][_0x48c1[234]](_0x87cax3.$wheel,_0x87cax3[_0x48c1[252]],_0x87cax3[_0x48c1[253]]),_0x87cax3[_0x48c1[244]]!== _0x87cax3[_0x48c1[245]]){if(_0x87cax3[_0x48c1[244]]= _0x87cax3[_0x48c1[245]],!0=== _0x87cax3[_0x48c1[19]][_0x48c1[255]] && -1=== _0x87cax1[_0x48c1[53]](_0x87cax1[_0x48c1[39]](_0x87cax3[_0x48c1[19]][_0x48c1[24]]),[_0x48c1[256],_0x48c1[257],_0x48c1[258],_0x48c1[259],_0x48c1[260],_0x48c1[261],_0x48c1[262],_0x48c1[263],_0x48c1[264]])){var _0x87caxd=parseInt(_0x87cax3[_0x48c1[19]][_0x48c1[55]])/ _0x87cax3[_0x48c1[61]]();_0x87cax7=  -38,_0x87cax8&& _0x87cax8[_0x48c1[85]](),_0x87cax8= _0x87cax1({deg:0})[_0x48c1[267]]({deg:_0x87cax7},{easing:_0x48c1[265],duration:_0x87caxd/ 2,step:function(_0x87cax2){_0x87cax1(_0x48c1[266])[_0x48c1[106]]({transform:_0x48c1[103]+ _0x87cax2+ _0x48c1[105]})}})};_0x48c1[128]=== _0x87cax1[_0x48c1[39]](_0x87cax3[_0x48c1[19]][_0x48c1[54]])?(_0x87cax3[_0x48c1[46]][_0x48c1[206]](_0x48c1[271])[_0x48c1[158]](function(_0x87cax2){_0x87cax1(this)[_0x48c1[120]](_0x48c1[270],_0x48c1[14])[_0x48c1[120]](_0x48c1[268],_0x87cax1(this)[_0x48c1[120]](_0x48c1[269]))}),_0x87cax3[_0x48c1[46]][_0x48c1[206]](_0x48c1[271])[_0x48c1[274]](_0x87cax3[_0x48c1[251]])[_0x48c1[120]](_0x48c1[270],_0x48c1[273])[_0x48c1[120]](_0x48c1[268],_0x87cax3[_0x48c1[19]][_0x48c1[272]]),_0x87cax3[_0x48c1[46]][_0x48c1[206]](_0x48c1[275])[_0x48c1[44]](_0x48c1[273]),_0x87cax3[_0x48c1[46]][_0x48c1[206]](_0x48c1[275])[_0x48c1[274]](_0x87cax3[_0x48c1[251]])[_0x48c1[60]](_0x48c1[273])):(_0x87cax3[_0x48c1[46]][_0x48c1[206]](_0x48c1[271])[_0x48c1[120]](_0x48c1[270],_0x48c1[14]),_0x87cax3[_0x48c1[46]][_0x48c1[206]](_0x48c1[271])[_0x48c1[274]](_0x87cax3[_0x48c1[251]])[_0x48c1[120]](_0x48c1[270],_0x48c1[276]),_0x87cax3[_0x48c1[46]][_0x48c1[206]](_0x48c1[275])[_0x48c1[44]](_0x48c1[276]),_0x87cax3[_0x48c1[46]][_0x48c1[206]](_0x48c1[275])[_0x48c1[274]](_0x87cax3[_0x48c1[251]])[_0x48c1[60]](_0x48c1[276])),_0x87cax3[_0x48c1[277]][_0x48c1[236]]= _0x87cax3[_0x48c1[251]],_0x87cax3[_0x48c1[277]][_0x48c1[228]]= _0x87cax3[_0x48c1[23]][_0x87cax3[_0x48c1[277]][_0x48c1[236]]],_0x87cax3[_0x48c1[277]][_0x48c1[228]][_0x48c1[196]]= _0x87cax3[_0x48c1[277]][_0x48c1[236]],_0x87cax3[_0x48c1[19]][_0x48c1[278]][_0x48c1[234]](_0x87cax3.$wheel,_0x87cax3[_0x48c1[277]][_0x48c1[228]],_0x87cax3[_0x48c1[252]],_0x87cax3[_0x48c1[253]])};0!== parseInt(_0x87cax3[_0x48c1[19]][_0x48c1[247]])&& (_0x87cax1[_0x48c1[249]][_0x48c1[248]]= _0x87caxa)},fail:function(_0x87cax1,_0x87cax2,_0x87cax4){_0x87cax3[_0x48c1[241]]=  !1,_0x87cax3[_0x48c1[19]][_0x48c1[235]][_0x48c1[234]](_0x87cax3.$wheel,_0x87cax3[_0x48c1[197]][_0x48c1[228]],_0x87cax3[_0x48c1[232]],_0x87cax3[_0x48c1[233]])},complete:function(_0x87cax1,_0x87cax2,_0x87cax4){_0x87cax3[_0x48c1[241]]=  !1,_0x87cax3[_0x48c1[19]][_0x48c1[279]][_0x48c1[234]](_0x87cax3.$wheel,_0x87cax3[_0x48c1[197]][_0x48c1[228]],_0x87cax3[_0x48c1[232]],_0x87cax3[_0x48c1[233]])}}),_0x87cax3[_0x48c1[226]]++,_0x87cax3[_0x48c1[232]]++,_0x87cax3[_0x48c1[242]]++}}},_0x87cax2[_0x48c1[3]][_0x48c1[58]]= function(){var _0x87cax2=this;_0x87cax2[_0x48c1[251]]= _0x87cax2[_0x48c1[61]]()- 1,_0x48c1[78]==  typeof _0x87cax2[_0x48c1[19]][_0x48c1[280]]&& _0x48c1[14]!== _0x87cax1[_0x48c1[39]](_0x87cax2[_0x48c1[19]][_0x48c1[280]])&& _0x87cax1(document)[_0x48c1[282]](_0x48c1[47]+ _0x87cax2[_0x48c1[26]],_0x87cax2[_0x48c1[19]][_0x48c1[280]],function(_0x87cax1){_0x87cax1[_0x48c1[281]](),_0x87cax2[_0x48c1[218]]()}),_0x87cax2[_0x48c1[46]][_0x48c1[106]](_0x48c1[151],parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[152]])),_0x87cax2[_0x48c1[46]][_0x48c1[117]](parseInt(_0x87cax2[_0x48c1[19]][_0x48c1[117]])),_0x87cax2[_0x48c1[46]][_0x48c1[283]](_0x87cax2[_0x48c1[46]][_0x48c1[117]]()),_0x87cax2[_0x48c1[46]][_0x48c1[206]](_0x48c1[205])[_0x48c1[117]](_0x87cax2[_0x48c1[46]][_0x48c1[117]]()),_0x87cax2[_0x48c1[46]][_0x48c1[206]](_0x48c1[205])[_0x48c1[283]](_0x87cax2[_0x48c1[46]][_0x48c1[117]]()),_0x87cax2.FontScale(),_0x87cax1(window)[_0x48c1[282]](_0x48c1[49]+ _0x87cax2[_0x48c1[26]],function(){_0x87cax2[_0x48c1[46]][_0x48c1[283]](_0x87cax2[_0x48c1[46]][_0x48c1[117]]()),_0x87cax2[_0x48c1[46]][_0x48c1[206]](_0x48c1[205])[_0x48c1[117]](_0x87cax2[_0x48c1[46]][_0x48c1[117]]()),_0x87cax2[_0x48c1[46]][_0x48c1[206]](_0x48c1[205])[_0x48c1[283]](_0x87cax2[_0x48c1[46]][_0x48c1[117]]()),_0x87cax2.FontScale()})},_0x87cax1[_0x48c1[284]][_0x48c1[15]]= function(){var _0x87cax3,_0x87cax4,_0x87cax5=this,_0x87cax6=arguments[0],_0x87cax7=Array[_0x48c1[3]][_0x48c1[197]][_0x48c1[234]](arguments,1),_0x87cax8=Array[_0x48c1[3]][_0x48c1[197]][_0x48c1[234]](arguments,2),_0x87cax9=_0x87cax5[_0x48c1[196]],_0x87caxa=[_0x48c1[40],_0x48c1[218],_0x48c1[42],_0x48c1[50]];for(_0x87cax3= 0;_0x87cax3< _0x87cax9;_0x87cax3++){if(_0x48c1[210]==  typeof _0x87cax6|| void(0)=== _0x87cax6?_0x87cax5[_0x87cax3][_0x48c1[15]]=  new _0x87cax2(_0x87cax5[_0x87cax3],_0x87cax6):-1!== _0x87cax1[_0x48c1[53]](_0x87cax1[_0x48c1[39]](_0x87cax6),_0x87caxa) && (_0x87cax4= _0x48c1[50]=== _0x87cax1[_0x48c1[39]](_0x87cax6)?_0x87cax5[_0x87cax3][_0x48c1[15]][_0x87cax6][_0x48c1[285]](_0x87cax5[_0x87cax3][_0x48c1[15]],_0x87cax7,_0x87cax8):_0x87cax5[_0x87cax3][_0x48c1[15]][_0x87cax6][_0x48c1[285]](_0x87cax5[_0x87cax3][_0x48c1[15]],_0x87cax7)),void(0)!== _0x87cax4){return _0x87cax4}};return _0x87cax5}})
	</script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
</body>
</html> 
