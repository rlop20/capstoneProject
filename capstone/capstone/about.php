<!DOCTYPE html>
<!-- Robert Lopez -->
<html>

<head>
<link rel="stylesheet" href="capstone.css">
<title>view</title>
<script type="text/javascript"
	src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    
    </script>
<style>
body {
	background-color: #fefcf4;
	margin: 0px;
}

.searchBar {
	width: 500px;
	margin: auto;
	font-family: cursive;
	text-align: center;
	font-size: 20pt;
}

.onebook {
	background-color: #f4f1eb;
	border-radius: 5px;
	box-shadow: 0 0 15px gray;
	float: left;
	margin: 40px;
	padding: 10px;
	width: 150px;
	height: 230px;
}

.imgout {
	height: 150px;
	width: 150px;
	float: left;
	padding-top: -50px;
}

.imgin {
	height: 400px;
	width: 300px;
	float: right;
	margin-top: 100px;
	margin-right: 650px;
}

.score {
	margin-left: 30px;
	margin-top: 30px;
}

.dot {
	height: 100px;
	width: 100px;
	background-color: rgb(229, 255, 0);
	border-radius: 50%;
	display: inline-block;
	margin-left: 200px;
}

.headerHome {
	border: rgb(0, 0, 0) solid 3px;
	bottom: -20px;
	color: rgb(0, 0, 0);
	font-size: 18pt;
	right: 10%;
	padding: 3px;
	position: relative;
	margin: 20px;
	float: right;
}

.header {
	background-image:
		url("https://media.istockphoto.com/id/1069944196/vector/the-abstract-vector-image-green-wave-on-white-background.jpg?s=612x612&w=0&k=20&c=-YGMrq4vYBxk17hRGenYvushzoJ9Pq_T2eXb2N250ic=");
	box-shadow: 0 5px 5px rgb(58, 37, 37);
	height: 104px;
	background-repeat: no-repeat;
	background-size: cover;
	position: relative;
}

.headerText {
	margin: 20px;
}

.header>div {
	bottom: -10px;
	color: black;
	font-family: Tahoma, sans-serif;
	font-size: 36pt;
	position: absolute;
	left: 10%;
}

.aboutText {
	margin: auto;
	width: 300px;
	border: 15px solid green;
	padding: 50px;
	margin: 20px;
	width: 300px;
	display: flex;
	justify-content: center;
}
</style>
</head>

<body>

	<div class="header">
		<div class="headerText">
			Better <span>Choice!</span> <img
				src='https://static.wixstatic.com/media/69e890_7ac3191467e244b3845421625a7f9e11~mv2.png/v1/fill/w_319,h_321,al_c,q_85,enc_auto/IMG_1596.png'
				width=80px height=80px>
		</div>
		<button class="headerHome" onclick="window.location.href='about.php'">About</button>
		<button class="headerHome" onclick="window.location.href='view.html'">Home</button>

	</div>

	<div class='aboutText'>
		<p>Our website offers a new way to quickly make a better choice in
			your diet! Just enter your craving in our search bar and we will give
			you a healthy version of it.</p>
	
	</div>
	<div class='aboutText'>
		<p>How it works: <br>
		-Search for a food. <br>
		-Look at the results and click a food that looks best to you.<br>
		-This will take you to a new page with the information about the food. </p>
	
	</div>
	<div class='aboutText'>
		<p>How we decide what is outputted: <br><br>
		Each food is from a rich database filled with many types of foods. 
		We use the sugar, salts, fats, and proteins from each food. We also
		use a score from the database that is higher if the food has less
		processed ingredients. So, the foods chosen contain a nutritious amount
		of macros such as high protein and a high score which means less
		ingredients.</p>
	</div>
</body>

</html>