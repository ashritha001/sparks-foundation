<!DOCTYPE html>
<html>
<head>
  <title>Basic banking system
 </title>
</head>
<style>
	
	@media only screen and ( min-width: 100px)
{
	
	
	.order{
		position: absolute;
		top: 30%;
		font-size: 0.38cm;
		left: 65%;
	}
	.order1{
		position: absolute;
		left: 85%;
		top: 30%;
		font-size: 0.38cm;
	}
.order:hover{
	opacity: 1;
		padding: 0.1cm;
		background-color: #DA70D6;
		color: black;
		border-radius: 0.2cm;
		
}
.order1:hover{
	opacity: 1;
		padding: 0.1cm;
		background-color: #DA70D6;
		color: black;
		border-radius: 0.2cm;
		
}

	.n{
		position: absolute;
		top: 0.5cm;
		right: 0.5cm;
		height: 8%;
		left: 0.5cm;

		background-color: white;
		
	
	}
	
	.na{
		width: 1cm;
		height: 1cm;
		position: absolute;
		top: 0.25cm;
		left: 0.5cm;
	}
	.n h2{
		position: absolute;
		font-size: 0.7cm;
		left: 2cm;
		top: -0.23cm;
		background-color: white;
		
		color:#DA70D6;
		font-weight: bold;
		cursor: pointer;
	}
	h2:hover{
		text-decoration: underline;
		color: black;
	}
	.m{
		width: 15%;
		height: 15%;
		left: 20%;
		position: absolute;
		top: 6cm;
	}
	.i{
		width: 15%;
		height: 15%;
		left: 20%;
		position: absolute;
		top: 10.5cm;
	}
	.i:hover{
		width: 18%;
		height: 18%;
	}
	.m:hover{
		width: 18%;
		height: 18%;
	}
	.mail{
			width: 20%;
		height: 20%;
		left: 20%;
	}
	.build{
		width: 100%;
		height: 17cm;
	}
	
	h3{
		font-size: 0.5cm;
		position: absolute;
		left: 1.5cm;
		top: 3cm;
	}
	h3:hover{
		text-decoration: underline;
	}

}
@media only screen and (min-width: 1000px){
	.n h2{
		position: relative;
		left: 9%;
		top: -0.6cm;
		width: 7cm;
		padding-left: 0.5cm;
		background-color: white;
		
		color:#DA70D6;
		font-weight: bold;
		cursor: pointer;
		font-size: 0.8cm;
	}
	h2:hover{
		text-decoration: underline;
		color: black;
	}

		.order{
		position: absolute;
		top: 15%;
		font-size: 0.42cm;
		left: 65%;
	}
	.order1{
		position: absolute;
		left: 85%;
		top: 15%;
		font-size: 0.42cm;
	}
.order:hover{
	opacity: 1;
		padding: 0.35cm;
		top: -0.15cm;
		background-color: #DA70D6;
		color: black;
		border-radius: 0.2cm;
		
}
.order1:hover{
	opacity: 1;
		padding: 0.35cm;
		top: -0.15cm;
		background-color: #DA70D6;
		color: black;
		border-radius: 0.2cm;
		
}
	.na{
		width:2cm; 
		height:1cm;
		position: absolute;
		top: 5%;
		left: 3%;
	}
	
	.build{
		background-repeat: no-repeat;
		background-size: cover;
		position: absolute;
		top: 2cm;
		border: 0.1cm solid #DA70D6;
		left: 0.05cm;
		width: 99%;
		height: 17cm;
	

	}
		.mail{
		position: absolute;
		top: 30%;
		left: 30%;
		width: 30%;
		height: 30%;
	}
	.m{
		position: absolute;
		top: 1.5cm;
		left: -5cm;
		width: 32%;
		height: 65%;
		background-color: black;
}
	.m:hover{
		width: 35%;
		height: 68%;
	}
		.insta{
		position: absolute;
		top: 50%;
		left: 30%;
		width: 30%;
		height: 30%;
	}
	.i{
		position: absolute;
		top: 3cm;
		left: -5cm;
		width: 32%;
		height: 65%;
		background-color: black;
}
.i:hover{
		width: 35%;
		height: 68%;
	}
	.h{
		position: absolute;
		top: 15%;
		left: 14%;
		color: black;
		font-size: 0.8cm;
	}
	.h:hover{
		text-decoration: underline;
	}
}
	</style>
	<body>
		
		<nav class="n">
			<img src="b.jpg" class="na">
<h2 class="logo">ASYA BANK</h2>

 <a href="index.html" class="order1">HOME</a>
 <a href="contact.php" class="order">CONTACT</a>

</nav>
<img src="hs.png" class="build">
<h3 class="h">IN QUERY CONTACT</h3>
<div class="mail">
	<a href = "mailto: ashrithaaacharya001@gmail.com">
	<img src="mail.jpg" class="m">
</a>
</div>
<div class="insta">
	<a href = "https://www.instagram.com/ashritha_a_acharya/">
	<img src="insta.png" class="i">
</a>
</div>
</body>
</html>