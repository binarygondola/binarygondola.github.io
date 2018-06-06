<head>
	<title>Moja strona</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href = "css/stylesheet.css"/>
	<script src="js/js.js"></script>
	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  appId            : '2078456029075737',
		  autoLogAppEvents : true,
		  xfbml            : true,
		  version          : 'v2.12'
		});
	  };

	  (function(d, s, id){
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement(s); js.id = id;
		 js.src = "https://connect.facebook.net/en_US/sdk.js";
		 fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
</head>