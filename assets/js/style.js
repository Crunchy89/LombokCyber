function see() {
	if (document.getElementById("password").type === "password") {
		document.getElementById("password").type = "text";
		document.getElementById("slash").className = "fas fa-fw fa-eye-slash";
	} else {
		document.getElementById("password").type = "password";
		document.getElementById("slash").className = "fas fa-fw fa-eye";
	}
}