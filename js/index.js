var email = document.querySelector("#email");
var name = document.querySelector("#FullName");
var number = document.querySelector("#MobileNo");
var addrs = document.querySelector("#address");

function sendEmail() {
	Email.send({
	Host: "smtp.gmail.com",
	Username : "ruturajpujari99@gmail.com",
	Password : "9404005919123456",
	To : 'ruturajpujari999@gmail.com',
	From : "ruturaj Pujari",
	Subject : "inquiry",
	Body : "lkasndkasdasdasasdsadasdsad sad asd as das d as d asd as d asd as d ",
	}).then(
		message => alert("mail sent successfully")
	);
}
