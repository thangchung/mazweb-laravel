<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <title>Sample Application</title>
    <link href="assets/css/frontend.css" media="all" rel="stylesheet" type="text/css" />
    <script data-main="assets/js/main" src="../bower_components/requirejs/require.js"></script>
    <script type="text/javascript">
        var app = {
            dir: '../bower_components',
            deps: [
                '$'
            ],
            init: function($) {
                $(document).ready(function() {
                    // Load the main app module to start the app
                    requirejs([app.dir + "/mazweb/js/homepage"]);
                });
            }
        };
    </script>
</head>
<body>
	<h1>Welcome to homepage</h1>


</body>
</html>
