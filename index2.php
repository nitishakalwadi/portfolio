<!DOCTYPE HTML>
<html>
	<head>
	    <style type="text/css">
	      /*.typed-cursor*/body span:after{
            opacity: 1;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
        }
        @keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-moz-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
	    </style>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/lib/typed.js"></script>
		<script type="text/javascript">
		    $(function(){
		        $("body span").typed({
		            strings:["hello ^1000 :^300)"],
		            typeSpeed:0
		        });
		    });
		</script>
	</head>
	<body>
	    <span></span></span>
	</body>
</html>