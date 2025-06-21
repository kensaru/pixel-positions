import "./bootstrap";

import.meta.glob(["../images/**", "../fonts/**"]);

// after all initializing/setup is done now redirect to the homepage/dashboard - javascript redirect may not work in node (may need to use express's redirect syntax)

// 	window.onload = function () {
// 		window.location.replace("./"); ---> redirects & disables the user from navigating back the previous page
// 		window.location.href = "./"; ---> redirects & still allows the user to be able to navigate back the previous page}
