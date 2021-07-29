function subscribe(){

	let email = document.getElementById('email').value;
	const http = new XMLHttpRequest();
	http.open('GET', `server_subscribe.php?email=${email}`, true);
	http.send();
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}
function unsubscribe(){

	let email = document.getElementById('email').value;
	const http = new XMLHttpRequest();
	http.open('GET', `server_unsubscribe.php?email=${email}`, true);
	http.send();
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}