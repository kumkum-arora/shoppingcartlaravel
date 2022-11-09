<!DOCTYPE html>
<html>

<head>
	<title>ENEST-4</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="main-div">
		<div class="head-div">
			<div class="main">
				<div class="head">
					<span>EVEST</span>
					<p>THE BIGGEST CHOICE OF THE WEB</p>
				</div>
				<div class="btn">
					<input type="button" name="" value="Log in">
				</div>
			</div>
		</div>
		<div class="home-page">
			<div class="pagnation">
				<div class="list">
					<ul>
						<li>HOME</li>
						<li>NEW PROJECT</li>
						<li>SPECIAL</li>
						<li>ALL PRODUCTS</li>
						<li>REVIEWS</li>
						<li>CONTACT</li>
						<li>FAQS</li>
					</ul>
				</div>
				<div class="search">
					<div class="search-1">
						<div class="input">
							<input type="text" name="">
						</div>
						<div class="btnn">
							<input type="button" name="" value="Search">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="null">

		</div>
		<div class="main-categorious">
			<div class="footer">
				<div class="categorious">
					<div class="cate-heading">
						<p>CATEGORIES</p>
					</div>
					<div class="items">
						<ul>
							<li>TVs</li>
							<li>Dishwasher</li>
							<li>Ranges</li>
							<li>Computer</li>
							<li>Blu-ray & DVD Player</li>
							<li>Projectors</li>
							<li>Hometheater System</li>
							<li>Cameras</li>
							<li>Camcorders</li>
							<li>Washer & Dryers</li>
							<li>Refrigerators</li>
							<li>Microwaves</li>
						</ul>
					</div>
				</div>
				<div class="contact">
					<div class="contact-us">
						<p>Add Product</p>
					</div>

					<div class="user-info">
						<form action="{{url('/')}}" method="post">
							{{csrf_field()}}
							<table class="login-1">
								<tr class="inpt-1">
									<td><span>Product Name</span></td>
									<td><input type="text" name="fname"></td>
								</tr><br>
								<tr class="inpt-1">
									<td><span>Model</span></td>
									<td><input type="text" name="email"></td>
								</tr>
								<tr class="inpt-1">
									<td><span>Manufacturer</span></td>
									<td><input type="text" name="pass"></td>
								</tr>
								<tr class="inpt-1">
									<td><span>In stock</span></td>
									<td><input type="text" name="pass"></td>
								</tr>
								<tr class="inpt-1">
									<td><span>Price</span></td>
									<td><input type="text" name="pass"></td>
								</tr>
								<tr class="inpt-1">
									<td><span>Product Image</span></td>
									<td><input type="file" name="pass"></td>
								</tr>
								<tr class="logn-btn">
									<td></td>
									<td><input class="log" type="submit" name="save" value="add">
									</td>
								</tr>
							</table>
						</form>

					</div>

				</div>
			</div>
		</div>
</body>

</html>