
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home - Cargo Ltd</title>
	<style>
		body {
			margin: 0;
			font-family: Arial, sans-serif;
			background-color: #f0f0f0;
		}
		.container {
			width:100%;
			background-color: #fff;
		}
		.header {
			background-color: #2c3e50;
			color: white;
			padding: 20px;
			text-align: center;
			position: relative;
		}
		.logout {
			position: absolute;
			top: 20px;
			right: 20px;
		}
		.logout a {
			color: white;
			text-decoration: none;
			font-weight: bold;
			background-color: #e74c3c;
			padding: 8px 12px;
			border-radius: 4px;
		}
		.logout a:hover {
			background-color: #c0392b;
		}
		.nav {
			display: flex;
			justify-content: center;
			background-color: #ecf0f1;
			padding: 15px;
			gap: 30px;
			flex-wrap: wrap;
			list-style: none;
			margin: 0;
		}
		.nav li {
			position: relative;
		}
		.nav a {
			text-decoration: none;
			color: #2c3e50;
			font-weight: bold;
			padding: 10px 15px;
			border-radius: 4px;
			display: block;
			transition: background 0.3s, color 0.3s;
		}
		.nav a:hover {
			background-color: #2c3e50;
			color: white;
		}
		.dropdown-content {
			display: none;
			position: absolute;
			top: 100%;
			left: 0;
			background-color: #fff;
			min-width: 160px;
			box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
			z-index: 1;
		}
		.dropdown-content a {
			padding: 10px 15px;
			display: block;
			color: #2c3e50;
			border-bottom: 1px solid #eee;
		}
		.dropdown-content a:hover {
			background-color: #2c3e50;
			color: white;
		}
		.nav li:hover .dropdown-content {
			display: block;
		}
	</style>
</head>
<body>
	<div class="container">
		<header class="header">
			<h1>WELCOME TO CARGO LTD</h1>
			<div class="logout">
				<a href="login.php">Logout</a>
			</div>
		</header>
		<nav>
			<ul class="nav">
				<li><a href="Furniture.php">Furniture</a></li>
				<li><a href="import.php">IMPORT</a></li>
				<li><a href="export.php">EXPORT</a></li>
				<li>
					<a href="#">Reports ▾</a>
					<div class="dropdown-content">
						<a href="report.php">GeneralReport</a>
						
					</div>
				</li>
			</ul>
		</nav>
	</div>
</body>
</html>
