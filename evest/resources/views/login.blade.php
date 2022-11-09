<!DOCTYPE html>
<html>

<head>
	<title>ENEST-2</title>
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
				<div class="login-here">
					<div class="login">
						<p>Login Here</p>
						<div class="user-info">
							<form action="{{url('login-submit/')}}" method="post">
								{{csrf_field()}}
								<table class="login-1">
									<tr class="inpt">
										<td><span>Username</span></td>
										<td><input type="text" name="uname"></td>
									</tr><br>
									<tr class="inpt">
										<td><span>Password</span></td>
										<td><input type="password" name="password"></td>
									</tr>
									<tr class="logn-btn">
										<td></td>
										<td><input class="log" type="submit" name="" value="Login">
										</td>
									</tr>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="sign-up">
				<div class="sign">
					<p>New to Enest? <a href=""> Sign up</a></p>
					<div class="user-info">
						<form action="{{url('sign-submit/')}}" method="post">
							{{csrf_field()}}
							<table class="login-1">
								<tr class="inpt-1">
									<td><span>Full Name</span></td>
									<td><input type="text" name="fname"></td>
								</tr><br>
								<tr class="inpt-1">
									<td><span>Email</span></td>
									<td><input type="text" name="email"></td>
								</tr>
								<tr class="inpt-1">
									<td><span>Password</span></td>
									<td><input type="password" name="pass"></td>
								</tr>
								<tr class="logn-btn">
									<td></td>
									<td><input class="log" type="submit" name="save" value="Sign up">
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-1">
				<div class="list-1">
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
				<div class="footer-2">
					<p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i>2013 Enest.Privacy Notice</p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>