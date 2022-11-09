<!DOCTYPE html>
<html>

<head>
	<title>ENEST-4</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/laraval/evest/resources/css/style.css">
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
					<div class="cate-heading">
						<p>CATEGORIES</p>
					</div>
					<div class="items">
						@include('common/category')
					</div>
				</div>
				<div class="contact">

					<div class="product-info">
						<span>Sort by:</span>
						<form>
							<select>
								<option>product name</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
						</form>
					</div>
					<div class="display-product">
						<span>Displaying 1 to 5(of 6 new product)</span>
						<div class="btnnn">
							<input class="pre" type="submit" name="" value="Previous">
							<input class="nxt" type="submit" name="" value="Next">
						</div>
					</div>
					@foreach($allproduct as $row)
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="http://localhost/laraval/evest/resources/images/{{$row->proimage}}">
							</div>
							<div class="stock">
								<p>In Stock:{{$row->instock}}</p>
							</div>
						</div>
						<div class="machine-info">
							<div class="date">
								<span> Date Added:{{$row->time}}</span>
							</div>
							<!-- <hr class="hr"> -->
							<div class="washer">
								<p>{{$row->productname}}</p>
							</div>
							<div class="model-info">
								<span>Model:{{$row->model}}</span>
								<p>Manufacturer:{{$row->manufact}}</p>
							</div>
							<div class="price">
								<span>Rs.{{$row->price}}</span>
							</div>
							<div class="checkout">
								<a href="{{'http://localhost/laraval/evest/public/buynow/'.$row->id}}"><input type="submit" name="" value="BUY NOW"></a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
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