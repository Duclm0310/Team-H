
@extends('layout.layout')
@section('title','Show author')
@section('content')
 <!-- Left Column / Headphones Image -->
<div class="left-column">

<img data-image="red" src="{{url("/upload/".$gucci->photo)}}" class="active" alt="">

</div>


<!-- Right Column -->
<div class="right-column">

<!-- Product Description -->
<div class="product-description">
  <span>{{$gucci->name}}</span>
  <h1>Best</h1>
  <p>">{{$gucci->biography}}</p>
</div>

<!-- Product Configuration -->
<div class="product-configuration">

  <!-- Product Color -->
  <div class="product-color">
    <span>Color</span>

    <div class="color-choose">
      <div>
        <input data-image="red" type="radio" id="red" name="color" value="red" checked>
        <label for="red"><span></span></label>
      </div>
      <div>
        <input data-image="blue" type="radio" id="blue" name="color" value="blue">
        <label for="blue"><span></span></label>
      </div>
      <div>
        <input data-image="black" type="radio" id="black" name="color" value="black">
        <label for="black"><span></span></label>
      </div>
    </div>

  </div>

  <!-- Cable Configuration -->
  <div class="cable-config">
    <span>Cable configuration</span>

    <div class="cable-choose">
      <button>{{$gucci->material->name}}</button>
      <button>{{$gucci->designer->name}}</button>
      <button>
        @foreach($gucci->sales as $sale)
        <span >{{$sale->name}}</span>
        @endforeach
  </button>
    </div>

    <a href="#">How to configurate your headphones</a>
  </div>
</div>

<!-- Product Pricing -->
<div class="product-price">
  <span>{{$gucci->price}}</span>
  <a href="{{url("/gucci/".$gucci->id."/buy")}}" class="cart-btn">Add to cart</a>
  <a href="http://127.0.0.1:8000/gucci" class="cart-btn">Back to Homepage</a>
</div>
</div>
@endsection   

<style>
  /* Basic Styling */
html, body {
height: 100%;
width: 100%;
margin: 0;
font-family: 'Roboto', sans-serif;
}

.container {
max-width: 1200px;
margin: 0 auto;
padding: 15px;
display: flex;
}
/* Columns */
.left-column {
margin-top:75px;
margin-right: 50px;
width: 56%;
position: relative;
}

.right-column {
width: 35%;
margin-top: 60px;
}/* Left Column */
.left-column img {
width: 100%;
position: absolute;
left: 0;
top: 0;
opacity: 0;
transition: all 0.3s ease;
}

.left-column img.active {
opacity: 1;
}

/* Product Description */
.product-description {
border-bottom: 1px solid #E1E8EE;
margin-bottom: 20px;
}
.product-description span {
font-size: 12px;
color: #358ED7;
letter-spacing: 1px;
text-transform: uppercase;
text-decoration: none;
}
.product-description h1 {
font-weight: 300;
font-size: 52px;
color: #43484D;
letter-spacing: -2px;
}
.product-description p {
font-size: 16px;
font-weight: 300;
color: #86939E;
line-height: 24px;
}/* Product Color */
.product-color {
margin-bottom: 30px;
}

.color-choose div {
display: inline-block;
}

.color-choose input[type=&amp;quot;radio&amp;quot;] {
display: none;
}

.color-choose input[type=&amp;quot;radio&amp;quot;] + label span {
display: inline-block;
width: 40px;
height: 40px;
margin: -1px 4px 0 0;
vertical-align: middle;
cursor: pointer;
border-radius: 50%;
}

.color-choose input[type=&amp;quot;radio&amp;quot;] + label span {
border: 2px solid #FFFFFF;
box-shadow: 0 1px 3px 0 rgba(0,0,0,0.33);
}

.color-choose input[type=&amp;quot;radio&amp;quot;]#red + label span {
background-color: #C91524;
}
.color-choose input[type=&amp;quot;radio&amp;quot;]#blue + label span {
background-color: #314780;
}
.color-choose input[type=&amp;quot;radio&amp;quot;]#black + label span {
background-color: #323232;
}

.color-choose input[type=&amp;quot;radio&amp;quot;]:checked + label span {
background-image: url(images/check-icn.svg);
background-repeat: no-repeat;
background-position: center;
}/* Cable Configuration */
.cable-choose {
margin-bottom: 20px;
}

.cable-choose button {
border: 2px solid #E1E8EE;
border-radius: 6px;
padding: 13px 20px;
font-size: 14px;
color: #5E6977;
background-color: #fff;
cursor: pointer;
transition: all .5s;
}

.cable-choose button:hover,
.cable-choose button:active,
.cable-choose button:focus {
border: 2px solid #86939E;
outline: none;
}

.cable-config {
border-bottom: 1px solid #E1E8EE;
margin-bottom: 20px;
}

.cable-config a {
color: #358ED7;
text-decoration: none;
font-size: 12px;
position: relative;
margin: 10px 0;
display: inline-block;
}
.cable-config a:before {
content: &amp;quot;?&amp;quot;;
height: 15px;
width: 15px;
border-radius: 50%;
border: 2px solid rgba(53, 142, 215, 0.5);
display: inline-block;
text-align: center;
line-height: 16px;
opacity: 0.5;
margin-right: 5px;
}/* Product Price */
.product-price {
display: flex;
align-items: center;
}

.product-price span {
font-size: 26px;
font-weight: 300;
color: #43474D;
margin-right: 20px;
}

.cart-btn {
display: inline-block;
background-color: #7DC855;
border-radius: 6px;
font-size: 16px;
color: #FFFFFF;
text-decoration: none;
padding: 12px 30px;
transition: all .5s;
}
.cart-btn:hover {
background-color: #64af3d;
}/* Responsive */
@media (max-width: 940px) {
.container {
flex-direction: column;
margin-top: 60px;
}

.left-column,
.right-column {
width: 100%;
}

.left-column img {
width: 300px;
right: 0;
top: -65px;
left: initial;
}
}

@media (max-width: 535px) {
.left-column img {
width: 220px;
top: -85px;
}
}
  </style>