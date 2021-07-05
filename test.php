<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Selectize.js Demo</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/stylesheet.css">
		<!--[if IE 8]><script src="js/es5.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="../dist/js/standalone/selectize.js"></script>
		<script src="js/index.js"></script>
		<style type="text/css">
		.demo-animals .scientific {
			font-weight: normal;
			opacity: 0.3;
			margin: 0 0 0 2px;
		}
		.demo-animals .scientific::before {
			content: '(';
		}
		.demo-animals .scientific::after {
			content: ')';
		}
		
		</style>
	</head>
    <body>
		<div id="wrapper">
			
			<div class="demo">
				<div class="control-group">
					<select id="select-gear" class="demo-default" multiple placeholder="Select gear...">
						<option value="">Select gear...</option>
						<optgroup label="Climbing">
							<option value="pitons">Pitons</option>
							<option value="cams">Cams</option>
							<option value="nuts">Nuts</option>
							<option value="bolts">Bolts</option>
							<option value="stoppers">Stoppers</option>
							<option value="sling">Sling</option>
						</optgroup>
						<optgroup label="Skiing">
							<option value="skis">Skis</option>
							<option value="skins">Skins</option>
							<option value="poles">Poles</option>
						</optgroup>
					</select>
				</div>
				<script>
					$('#select-gear').selectize({
						sortField: 'text'
					});
				</script>
			</div>

			
			
			

		</div>
	</body>
</html>
