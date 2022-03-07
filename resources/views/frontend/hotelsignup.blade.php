@extends('welcome')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <style>
        /* @extend display-flex; */
display-flex {
  display: flex;
  display: -webkit-flex; }

/* @extend list-type-ulli; */
list-type-ulli, ul {
  list-style-type: none;
  margin: 0;
  padding: 0; }

/* roboto-slab-300 - latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 300;
  src: url("../fonts/roboto-slab/roboto-slab-v7-latin-300.eot");
  /* IE9 Compat Modes */
  src: local("Roboto Slab Light"), local("RobotoSlab-Light"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.woff2") format("woff2"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.woff") format("woff"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.ttf") format("truetype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.svg#RobotoSlab") format("svg");
  /* Legacy iOS */ }
/* roboto-slab-regular - latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 400;
  src: url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.eot");
  /* IE9 Compat Modes */
  src: local("Roboto Slab Regular"), local("RobotoSlab-Regular"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.woff2") format("woff2"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.woff") format("woff"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.ttf") format("truetype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.svg#RobotoSlab") format("svg");
  /* Legacy iOS */ }
/* roboto-slab-700 - latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 700;
  src: url("../fonts/roboto-slab/roboto-slab-v7-latin-700.eot");
  /* IE9 Compat Modes */
  src: local("Roboto Slab Bold"), local("RobotoSlab-Bold"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.woff2") format("woff2"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.woff") format("woff"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.ttf") format("truetype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.svg#RobotoSlab") format("svg");
  /* Legacy iOS */ }
a:focus, a:active {
  text-decoration: none;
  outline: none;
  transition: all 300ms ease 0s;
  -moz-transition: all 300ms ease 0s;
  -webkit-transition: all 300ms ease 0s;
  -o-transition: all 300ms ease 0s;
  -ms-transition: all 300ms ease 0s; }

input, select, textarea {
  outline: none;
  appearance: unset !important;
  -moz-appearance: unset !important;
  -webkit-appearance: unset !important;
  -o-appearance: unset !important;
  -ms-appearance: unset !important; }

input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
  appearance: none !important;
  -moz-appearance: none !important;
  -webkit-appearance: none !important;
  -o-appearance: none !important;
  -ms-appearance: none !important;
  margin: 0; }

input:focus, select:focus, textarea:focus {
  outline: none;
  box-shadow: none !important;
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  -o-box-shadow: none !important;
  -ms-box-shadow: none !important; }

input[type=checkbox] {
  appearance: checkbox !important;
  -moz-appearance: checkbox !important;
  -webkit-appearance: checkbox !important;
  -o-appearance: checkbox !important;
  -ms-appearance: checkbox !important; }

input[type=radio] {
  appearance: radio !important;
  -moz-appearance: radio !important;
  -webkit-appearance: radio !important;
  -o-appearance: radio !important;
  -ms-appearance: radio !important; }

img {
  max-width: 100%;
  height: auto; }

figure {
  margin: 0; }

p {
  margin-bottom: 0px; }

input:-webkit-autofill {
  box-shadow: 0 0 0 30px white inset;
  -moz-box-shadow: 0 0 0 30px white inset;
  -webkit-box-shadow: 0 0 0 30px white inset;
  -o-box-shadow: 0 0 0 30px white inset;
  -ms-box-shadow: 0 0 0 30px white inset; }

h2 {
  color: #222;
}

h3 {
  font-weight: bold;
  color: #222;
  font-size: 15px;
  margin: 0px;
  margin-bottom: 35px; }

.clear {
  clear: both; }

#cc {
  line-height: 1.8;
  color: #fff;

  font-weight: 400;
  margin: 0px; }

.main {
  padding: 60px 0px;
  position: relative;
  background-image: url("dist/img/four.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  -o-background-size: cover;
  -ms-background-size: cover;
  background-position: center center; }

.agency{
  width: 586px;
  background: #fff;
  margin-left: 380px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  -o-border-radius: 10px;
  -ms-border-radius: 10px; }

.appointment-form {
  padding: 50px 60px 70px 60px; }

input, select {
  width: 100%;
  display: block;
  border: none;
  border-bottom: 2px solid #ebebeb;
  padding: 5px 0;
  color: #222;
  margin-bottom: 31px; }
  input:focus, select:focus {
    color: #222;
    border-bottom: 2px solid #4966b1; }

input[type=checkbox]:not(old) {
  width: 2em;
  margin: 0;
  padding: 0;
  font-size: 1em;
  display: none; }

input[type=checkbox]:not(old) + label {
  display: inline-block;
  margin-top: 7px;
  margin-bottom: 25px; }

input[type=checkbox]:not(old) + label > span {
  display: inline-block;
  width: 22px;
  height: 22px;
  margin-right: 13px;
  margin-bottom: 3px;
  border: 1px solid #ebebeb;

  vertical-align: bottom; }

/* input[type=checkbox]:not(old):checked + label > span {
  background-image: -moz-linear-gradient(white, white);
  background-image: -o-linear-gradient(white, white);
  background-image: -webkit-linear-gradient(white, white);
  background-image: linear-gradient(white, white); } */

input[type=checkbox]:not(old):checked + label > span:before {
  content: '\f26b';
  display: block;
  color: #999;
  font-size: 11px;
  line-height: 1.2;
  text-align: center;
  font-family: 'Material-Design-Iconic-Font';
  font-weight: bold; }

.label-agree-term {
  color: #999; }

.term-service {
  color: #222; }

.submit {
  width: auto;
  background: #4966b1;
  color: #fff;
  padding: 16px 17px;
  justify-content:center;
  border: none;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  position: absolute;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  cursor: pointer;
  box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -moz-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -webkit-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -o-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -ms-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7); }
  .submit:hover {
    background: #3a518d; }

/* ul {
  background: 0 0;
  z-index: 9; }

ul li {
  padding: 3px 0px;
  z-index: 2;
  color: #999; }
  ul li:last-child {
    border-bottom: 1px solid #ebebeb; }

ul li:not(.init) {
  display: none;
  background: #fff;
  color: #222;
  padding: 5px 10px;
  border-left: 1px solid #ebebeb;
  border-right: 1px solid #ebebeb;
  border-top: 1px solid #ebebeb; }

ul li:not(.init):hover, ul li.selected:not(.init) {
  background: #4966b1;
  color: #fff; }

li.init {
  cursor: pointer;
  position: relative;
  border-bottom: 2px solid #ebebeb; }
  li.init:after {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    font-size: 20px;
    color: #999;
    font-family: 'Material-Design-Iconic-Font';
    content: '\f2f9'; } */

#confirm_type {
  margin-bottom: 30px; }

.form-group-2 {
  margin-top: 15px;
  margin-bottom: 30px; }

.form-check {
  margin-bottom: 20px; }

.select-list {
  position: relative;
  display: inline-block;
  width: 100%;
  margin-bottom: 55px; }

.list-item {
  position: absolute;
  width: 100%; }

#confirm_type {
  z-index: 99; }

#hour_appointment {
  z-index: 9; }

@media screen and (max-width: 1024px) {
  .container {
    margin: 0 auto; } }
@media screen and (max-width: 768px) {
  .container {
    width: calc( 100% - 30px);
    max-width: 100%; } }
@media screen and (max-width: 480px) {
  .appointment-form {
    padding: 50px 30px 70px 30px; } }
    </style>
</head>
<body id="cc">

    <div class="main">

        <div class="container agency">
            <form method="POST" class="appointment-form" id="appointment-form">
                <h2>Hotel Registration Form</h2>
  </br>
                <div class="form-group-1">
                    <input type="text" name="title" id="title" placeholder="Company Name" required />
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="password" name="password" id="password" placeholder="Password" required />
                    <input type="number" name="phone_number" id="phone_number" placeholder="Phone number" required />
                    <div class="select-list">
                        <select name="Location" id="course_type">
                            <option slected value="">Location</option>
                            <option value="Lahore">Lahore</option>
                            <option value="Karachi">Karachi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group-2">
                    <h3>More Information</h3>
                    <div class="select-list">
                    <input type="url" name="url" id="url" placeholder="Facebook Url" required />
                    <input type="number" name="number" id="number" placeholder="Registration No" required />
                        <select name="no of trips done" id="confirm_type">
                        <option seleected value="">No of Rooms available</option>
                            <option seleected value="">1 - 10</option>
                            <option value="by_email">10 - 20</option>
                            <option value="by_email">20 - 30</option>
                            <option value="by_email">30+ or more</option>
                        </select>
                    </div>
                    
                </div>
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Register" />
                </div>
  </br>
  </br>
  </br>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
@endsection