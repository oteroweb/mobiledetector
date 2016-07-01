 <script src="mobile-detect.min.js"></script>
<script>
    var md = new MobileDetect(window.navigator.userAgent);
 var userLang = navigator.language || navigator.userLanguage; 
 console.log(userLang);
// window.location = "http://www.yoururl.com";
// document.location = "MyPage.php?action=DoThis";

var ismobile = md.mobile();
var isphone = md.phone();
var istablet = md.tablet();

if (!ismobile || !isphone || !istablet) {
	console.log("es escritorio");
	switch(userLang) {
	    case "es":
	    // en caso de que sea escritorio y español

		// window.location = "http://www.yoururl.com"; 
		// en caso de que no sirva este usar 
		// document.location = "MyPage.php?action=DoThis";

	        // break;
	    case "en":
	        // code block
	//         break;
	    default:
	        // en caso de que no sea ningun idioma pero si sea escritorio
	}
}
else {
	switch(userLang) {
	    case "es":
	    // en caso de que sea escritorio y español

		// window.location = "http://www.yoururl.com"; 
		// en caso de que no sirva este usar 
		// document.location = "MyPage.php?action=DoThis";

	        // break;
	    case "en":
	        // code block
	//         break;
	    default:
	        // en caso de que no sea ningun idioma pero si sea escritorio
	}
}
</script>

<?php 
 ?>