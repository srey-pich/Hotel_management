@extends('frontlayout')
@section('content')
    <style>
        body {
            padding: 25px;
            background-color: hsla(330, 17%, 91%, 0.969);
            color: black;
            font-size: 15px;
            /* text-align: right; */
        }

        .dark-mode {
            background-color: black;
            color: rgb(230, 157, 157);
        }
        .shopping-cart{
	padding-bottom: 50px;
	font-family: 'Montserrat', sans-serif;
}

.shopping-cart.dark{
	background-color: #f6f6f6;
}

.shopping-cart .content{
	box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
	background-color: white;
}

.shopping-cart .block-heading{
    padding-top: 50px;
    margin-bottom: 40px;
    text-align: center;
}

.shopping-cart .block-heading p{
	text-align: center;
	max-width: 420px;
	margin: auto;
	opacity:0.7;
}

.shopping-cart .dark .block-heading p{
	opacity:0.8;
}

.shopping-cart .block-heading h1,
.shopping-cart .block-heading h2,
.shopping-cart .block-heading h3 {
	margin-bottom:1.2rem;
	color: #3b99e0;
}

.shopping-cart .items{
	margin: auto;
}

.shopping-cart .items .product{
	margin-bottom: 20px;
	padding-top: 20px;
	padding-bottom: 20px;
}

.shopping-cart .items .product .info{
	padding-top: 0px;
	text-align: center;
}

.shopping-cart .items .product .info .product-name{
	font-weight: 600;
}

.shopping-cart .items .product .info .product-name .product-info{
	font-size: 14px;
	margin-top: 15px;
}

.shopping-cart .items .product .info .product-name .product-info .value{
	font-weight: 400;
}

.shopping-cart .items .product .info .quantity .quantity-input{
    margin: auto;
    width: 80px;
}

.shopping-cart .items .product .info .price{
	margin-top: 15px;
    font-weight: bold;
    font-size: 22px;
 }

.shopping-cart .summary{
	border-top: 2px solid #5ea4f3;
    background-color: #f7fbff;
    height: 100%;
    padding: 30px;
}

.shopping-cart .summary h3{
	text-align: center;
	font-size: 1.3em;
	font-weight: 600;
	padding-top: 20px;
	padding-bottom: 20px;
}

.shopping-cart .summary .summary-item:not(:last-of-type){
	padding-bottom: 10px;
	padding-top: 10px;
	border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.shopping-cart .summary .text{
	font-size: 1em;
	font-weight: 600;
}

.shopping-cart .summary .price{
	font-size: 1em;
	float: right;
}

.shopping-cart .summary button{
	margin-top: 20px;
}

@media (min-width: 768px) {
	.shopping-cart .items .product .info {
		padding-top: 25px;
		text-align: left;
	}

	.shopping-cart .items .product .info .price {
		font-weight: bold;
		font-size: 22px;
		top: 17px;
	}

	.shopping-cart .items .product .info .quantity {
		text-align: center;
	}
	.shopping-cart .items .product .info .quantity .quantity-input {
		padding: 4px 10px;
		text-align: center;
	}
}

    </style>
<body>
	<main class="page">
	 	<section class="shopping-cart dark">
	 		<div class="container">
		        <div class="block-heading">
		          <h2>Shopping Cart</h2>
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
		        </div>
		        <div class="content">
	 				<div class="row">
	 					<div class="col-md-12 col-lg-8">
	 						<div class="items">
				 				<div class="product">
				 					<div class="row">
					 					<div class="col-md-3">
					 						<img class="img-fluid mx-auto d-block image" src="assets/img/image.jpg">
					 					</div>
					 					<div class="col-md-8">
					 						<div class="info">
						 						<div class="row">
							 						<div class="col-md-5 product-name">
							 							<div class="product-name">
								 							<a href="#">Lorem Ipsum dolor</a>
								 							<div class="product-info">
									 							<div>Display: <span class="value">5 inch</span></div>
									 							<div>RAM: <span class="value">4GB</span></div>
									 							<div>Memory: <span class="value">32GB</span></div>
									 						</div>
									 					</div>
							 						</div>
							 						<div class="col-md-4 quantity">
							 							<label for="quantity">Quantity:</label>
							 							<input id="quantity" type="number" value ="1" class="form-control quantity-input">
							 						</div>
							 						<div class="col-md-3 price">
							 							<span>$120</span>
							 						</div>
							 					</div>
							 				</div>
					 					</div>
					 				</div>
				 				</div>
				 				<div class="product">
				 					<div class="row">
					 					<div class="col-md-3">
					 						<img class="img-fluid mx-auto d-block image" src="assets/img/image.jpg">
					 					</div>
					 					<div class="col-md-8">
					 						<div class="info">
						 						<div class="row">
							 						<div class="col-md-5 product-name">
							 							<div class="product-name">
								 							<a href="#">Lorem Ipsum dolor</a>
								 							<div class="product-info">
									 							<div>Display: <span class="value">5 inch</span></div>
									 							<div>RAM: <span class="value">4GB</span></div>
									 							<div>Memory: <span class="value">32GB</span></div>
									 						</div>
									 					</div>
							 						</div>
							 						<div class="col-md-4 quantity">
							 							<label for="quantity">Quantity:</label>
							 							<input id="quantity" type="number" value ="1" class="form-control quantity-input">
							 						</div>
							 						<div class="col-md-3 price">
							 							<span>$120</span>
							 						</div>
							 					</div>
							 				</div>
					 					</div>
					 				</div>
				 				</div>
				 				<div class="product">
				 					<div class="row">
					 					<div class="col-md-3">
					 						<img class="img-fluid mx-auto d-block image" src="assets/img/image.jpg">
					 					</div>
					 					<div class="col-md-8">
					 						<div class="info">
						 						<div class="row">
							 						<div class="col-md-5 product-name">
							 							<div class="product-name">
								 							<a href="#">Lorem Ipsum dolor</a>
								 							<div class="product-info">
									 							<div>Display: <span class="value">5 inch</span></div>
									 							<div>RAM: <span class="value">4GB</span></div>
									 							<div>Memory: <span class="value">32GB</span></div>
									 						</div>
									 					</div>
							 						</div>
							 						<div class="col-md-4 quantity">
							 							<label for="quantity">Quantity:</label>
							 							<input id="quantity" type="number" value ="1" class="form-control quantity-input">
							 						</div>
							 						<div class="col-md-3 price">
							 							<span>$120</span>
							 						</div>
							 					</div>
							 				</div>
					 					</div>
					 				</div>
				 				</div>
				 			</div>
			 			</div>
			 			<div class="col-md-12 col-lg-4">
			 				<div class="summary">
			 					<h3>Summary</h3>
			 					<div class="summary-item"><span class="text">Subtotal</span><span class="price">$360</span></div>
			 					<div class="summary-item"><span class="text">Discount</span><span class="price">$0</span></div>
			 					<div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span></div>
			 					<div class="summary-item"><span class="text">Total</span><span class="price">$360</span></div>
			 					<button type="button" class="btn btn-primary btn-lg btn-block" link="{{url('http://127.0.0.1:8000/payment')}}">Checkout</button>
				 			</div>
			 			</div>
		 			</div>
		 		</div>
	 		</div>
		</section>
	</main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
    {{-- <div class="container my-4">
        <div align="right">
            <button onclick="myFunction()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
                    <path
                        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                    <path
                        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                </svg>
            </button>
            <script>
                function myFunction() {
                    var element = document.body;
                    element.classList.toggle("dark-mode");
                }
            </script>
        </div> --}}
        <h3 class="mb-3">Room Booking</h3>

        @if ($errors->any)
            @foreach ($errors->all as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
        @endif

        @if (Session::has('success'))
            <p class="text-success">{{ session('success') }}</p>
        @endif
        <div class="table-responsive">
            <form method="POST" enctype="multipart/form-data" action="{{ url('/admin/booking') }}">
                @csrf
                <table class="table-responsive">
                    <tr>
                        <th>Select Customer <span class="text-danger"></span></th>
                        <td>
                            <select class="form-control" name="customer_id">
                                <option>Select customer</option>
                                @foreach ($customer as $customers)
                                    <option value="{{ $customers->id }}">{{ $customers->full_name }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>checkIn date <span class="text-danger">*</span> </th>
                        <td><input name="checkin_date" type="date" class="form-control checkin-date" /></td>
                    </tr>
                    <tr>
                        <th>checkOut date <span class="text-danger">*</span> </th>
                        <td><input name="checkout_date" type="date" class="form-control" /></td>
                    </tr>
                    <tr>
                        <th>Avaiable Rooms <span class="text-danger">*</span></th>
                        <td>
                            <select class="form-control room-list" name="room_id">
                                <option>Select Room</option>
                                @foreach ($roomtype as $roomtypes)
                                    <option value="{{ $roomtypes->id }}">{{ $roomtypes->titles }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Total adults<span class="text-danger">*</span> </th>
                        <td><input name="total adults" type="text" class="form-control" /></td>
                    </tr>
                    <tr>
                        <th>Total Children</th>
                        <td><input name="total_children" type="text" class="form-control" /></td>
                    </tr>
                    <td colspan="4">
                        <input type="hidden" name="roomprice" class="room-price" value="" />
                        <input type="submit" class="btn btn-primary" />
                    </td>
                </table>
            </form>
        </div>
    @endsection
