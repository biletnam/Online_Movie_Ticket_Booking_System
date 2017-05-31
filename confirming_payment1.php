<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<h1 style="font-family:Courier; color:black;" class="style1"><b>Generate M-Ticket!</b></h1>
<form id="test" action="end.php" method="POST" style="width:150px;">
<h4><i>How Many Tickets?:</i></h4>
<select name="no_of_tickets">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
<h4><i>Enter Email-Id:</i></h4>
<input type="text" name="email" maxlength=30 />
<h4><i>Enter Mobile Number:</i></h4>
<input type="text" name="ph-no" maxlength=10 />
<button onclick="myfunction()">Generate</button>
</form>
<script>
function myfunction()
{
	document.getElementById("test").innerHTML=Math.floor((Math.random())*11000);
	alert("1.Code Successfully Sent");
	alert("2.Don't Forget to Pay at Ticket Counter");
	alert("3.Enjoy Your Movie !!");
    document.body.style.background = "#f3f3f3 url('end-pic1.png') no-repeat right top";
}
</script>
</body>
</html>