<!DOCTYPE html>
<html>

<head>
	<title>ENEST-3</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/laraval/evest/resources/css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="main-div">
		@include('common/header')

		<div class="null">
		</div>
		<div class="main-categorious">
			<div class="footer">
				<div class="categorious">


				</div>

				<div class="contact">
					<div class="contact-us">
						<p>My cart Items</p>
					</div>
					<div class="dish-info">
						<table border="1" width="100%" class="addtocart">
							<tr>
								<th>ID</th>
								<th>userid</th>
								<th>Productname</th>
								<th>Product Price</th>
								<th>qty</th>
								<th>Total</th>
								<th>Remove</th>
							</tr>
							@foreach($cart as $row)
							<tr>
								<td>{{$row->id}}</td>
								<td>{{$row->login->fname}}</td>
								<td>{{$row->product->productname}}</td>
								<td>{{$row->price}}</td>
								<td>{{$row->qty}}</td>
								<td>{{$row->total}}</td>
								<td><a href="{{'delete-cart/'.$row->id}}">Remove</a></td>
							</tr>
							@endforeach
							<tr>
								<th colspan="4"> Total</th>
								<td>{{$qtotal}}</td>
								<td>{{$ptotal}}</td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>

</html>