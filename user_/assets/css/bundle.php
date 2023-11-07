<?php 

header("Content-type: text/css; charset: UTF-8");

include'../../include_/color.php';

?>

/*

    Version: 1.0

*/
/*================================================
[  Table of contents  ]
================================================
01. General
02. Page section margin padding 
05. button
06. button small
09. Input
10. Extra class
12. loading
13. Box Layout
14. Back to top
15. Basic margin padding
 
======================================
[ End table content ]
======================================*/

/*************************
    General
*************************/
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800,800i');
body {
    font-family: 'Open Sans', sans-serif;
    line-height: 24px;
    font-weight: 400;
    font-style: normal;
    color: #666666;
    font-size: 13px;
}
img{
    max-width: 100%;
    -webkit-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
}
a,
.btn {
    -webkit-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
}
.btn {
    border-radius: 0px;
    font-size: 14px;
    padding: 0px 15px;
    height: 30px;
    line-height: 30px;
}
a:focus,
.btn:focus {
    text-decoration: none;
    outline: none;
}
a:hover {
  color: #333;
  text-decoration: none;
}
a:focus {
  color: #333;
  text-decoration: none;
}
a,
button,
input {
    outline: medium none;
    color: #686868;
}
input:focus,select:focus,textarea:focus{
	outline: none;
}
.uppercase { 
    text-transform: uppercase
}
.capitalize { 
    text-transform: capitalize
}
h1,
h2,
h3,
h4,
h5,
h6 {
    font-weight: normal;
    color: #444444;
    margin-top: 0px;
    font-style: normal;
    font-weight: 400;
}
h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a { 
    color: inherit 
}
h1 {
    font-size: 46px;
    font-weight: 500;
}
h2 {
    font-size: 37px;
}
h3 {
    font-size: 28px;
}
h4 {
    font-size: 22px;
}
h5 {
    font-size: 18px;
}
h6 {
    font-size: 16px;
}
ul {
    margin: 0px;
    padding: 0px;
}
li { list-style: none }

p {
    font-size: 14px;
    font-weight: normal;
    line-height: 24px;
    margin-bottom: 10px;
 }

hr{
    margin: 60px 0;
    padding: 0px;
    border-bottom: 1px solid #eceff8;
    border-top: 0px;
}
strong{
    font-weight: bold;
}
hr.style-2{
    border-bottom: 1px dashed #f10;
}
hr.mp-0 {
    margin: 0;
    border-bottom: 1px solid #eceff8;
}
hr.mtb-40 {
    margin: 40px 0;
    border-bottom: 1px solid #eceff8;
    border-top: 0px;
}
label {
    font-size: 15px;
    font-weight: 400;
    color: #626262;
}
*::-moz-selection {
    background: #4fc1f0;
    color: #fff;
    text-shadow: none;
}
::-moz-selection {
    background: #4fc1f0;
    color: #fff;
    text-shadow: none;
}
::selection {
    background: #4fc1f0;
    color: #fff;
    text-shadow: none;
}
.mark, mark {
    background: #4fc1f0 none repeat scroll 0 0;
    color: #ffffff;
}
span.tooltip-content {
  color: #00a9da;
  cursor: help;
  font-weight: 600;
}
.f-left {
    float: left
}
.f-right {
    float: right
}
.fix {
    overflow: hidden
}
.browserupgrade {
    margin: 0.2em 0;
    background: #ccc;
    color: #000;
    padding: 0.2em 0;
}
/***************************
    transtion
****************************/
a.button::after,
a.button-small::after {
    -webkit-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
}
.share ul,
.share:hover ul {
    transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;
    -ms-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
}
a.button-border span,
a.button-border-white span,
input,
select,
textarea {
    -webkit-transition: all 0.5s ease-out 0s;
    transition: all 0.5s ease-out 0s;
}

/*************************
         button
*************************/
.button {
  background-color: rgba(0, 0, 0, 0);
  border: 1px solid #9c9c9c;
  border-radius: 0px;
  -webkit-box-shadow: none;
  box-shadow: none;
  color: #9c9c9c;
  cursor: pointer;
  display: inline-block;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.4px;
  overflow: hidden;
  padding: 12px 30px;
  position: relative;
  text-transform: uppercase;
}
.button:hover{border:1px solid #fff;color:#fff}



/*************************
        Text color
*************************/
.text-blue { color: #4FC1F0; }
.text-white { color: #fff ;}
.text-black { color: #363636; }
.text-theme { color: #f10; }
.text-theme {
  color: #4a90e2;
}

.text-white h1, .text-white p, .text-white h2{ color: #fff; }
/*************************
        Input
*************************/
input {
    background: #eceff8;
    border: 1px solid #eee;
    height: 45px;
    -webkit-box-shadow: none;
    box-shadow: none;
    padding-left: 10px;
    font-size: 14px;
    color: #626262;
    width: 100%;
}
select {
    width: 100%;
    background: #eceff8;
    border: 2px solid #eceff8;
    height: 45px;
    padding-left: 10px;
    -webkit-box-shadow: none;
    box-shadow: none;
    font-size: 14px;
    color: #626262;
}
option {
    background: #fff;
    border: 0px solid #626262;
    padding-left: 10px;
    font-size: 14px;
}
input:focus {
    background: transparent;
    border: 1px solid #4FC1F0;
}
textarea {
    resize: vertical;
    background: #eceff8;
    border: 2px solid #eceff8;
    padding: 10px;
    width: 100%;
    font-size: 14px;
}
textarea:focus {
    background: transparent;
    border: 2px solid #4FC1F0;
    outline: none;
}
::-moz-placeholder {
    color: #444;
}
.input-group.divcenter.input-group .form-control { padding-left: 0px }
/*************************
        back-to-top
*************************/
#scrollUp {
	background: <?php echo $color ?> none repeat scroll 0 0;
	bottom: 85px;
	color: #ffffff;
	cursor: pointer;
	display: none;
	font-size: 20px;
	height: 45px;
	line-height: 45px;
	position: fixed;
	right: 12px;
	text-align: center;
	width: 45px;
	z-index: 9999;
	border-radius: 50%;
	border: 2px solid #fff;
    -webkit-transition: .3s;
    transition: .3s;
}
#scrollUp i {
	line-height: 40px;
	display: block;
}
#scrollUp:hover {
  border-color: <?php echo $color ?>;
}

/*************************
  Basic margin padding
*************************/
.m-0 {
    margin-top: 0;
    margin-right: 0;
    margin-bottom: 0;
    margin-left: 0;
}
.p-0 {
    padding-top: 0;
    padding-right: 0;
    padding-bottom: 0;
    padding-left: 0;
}
/*************************
         Margin top
*************************/
.mt-0 { margin-top: 0 }
.mt-10 { margin-top: 10px }
.mt-12 { margin-top: 12px }
.mt-15 { margin-top: 15px }
.mt-20 { margin-top: 20px }
.mt-30 { margin-top: 30px }
.mt-35 { margin-top: 35px }
.mt-37 { margin-top: 37px }
.mt-40 { margin-top: 40px }
.mt-50 { margin-top: 50px }
.mt-55 { margin-top: 55px }
.mt-60 { margin-top: 60px }
.mt-70 { margin-top: 70px }
.mt-80 { margin-top: 80px }
.mt-90 { margin-top: 90px }
.mt-100 { margin-top: 100px }
.mt-110 { margin-top: 110px }
.mt-120 { margin-top: 120px }
.mt-130 { margin-top: 130px }
.mt-140 { margin-top: 140px }
.mt-160 { margin-top: 160px }
.mt-179 { margin-top: 179px }
.mt-150 { margin-top: 150px }
/*************************
      Margin right
*************************/
.mr-0 { margin-right: 0px }
.mr-10 { margin-right: 10px }
.mr-12 { margin-right: 12px }
.mr-15 { margin-right: 15px }
.mr-20 { margin-right: 20px }
.mr-30 { margin-right: 30px }
.mr-35 { margin-right: 35px }
.mr-40 { margin-right: 40px }
.mr-50 { margin-right: 50px }
.mr-60 { margin-right: 60px }
.mr-70 { margin-right: 70px }
.mr-80 { margin-right: 80px }
.mr-90 { margin-right: 90px }
.mr-100 { margin-right: 100px }
.mr-110 { margin-right: 110px }
.mr-120 { margin-right: 120px }
.mr-130 { margin-right: 130px }
.mr-140 { margin-right: 140px }
.mr-150 { margin-right: 150px }
/*************************
      Margin bottom
*************************/
.mb-0 { margin-bottom: 0 }
.mb-10 { margin-bottom: 10px }
.mb-12 { margin-bottom: 12px }
.mb-15 { margin-bottom: 15px }
.mb-20 { margin-bottom: 20px }
.mb-25 { margin-bottom: 25px }
.mb-30 { margin-bottom: 30px }
.mb-35 { margin-bottom: 35px }
.mb-40 { margin-bottom: 40px }
.mb-45 { margin-bottom: 45px }
.mb-50 { margin-bottom: 50px }
.mb-55 { margin-bottom: 55px }
.mb-60 { margin-bottom: 60px }
.mb-65 { margin-bottom: 65px }
.mb-70 { margin-bottom: 70px }
.mb-80 { margin-bottom: 80px }
.mb-90 { margin-bottom: 90px }
.mb-100 { margin-bottom: 100px }
.mb-110 { margin-bottom: 110px }
.mb-120 { margin-bottom: 120px }
.mb-130 { margin-bottom: 130px }
.mb-140 { margin-bottom: 140px }
.mb-150 { margin-bottom: 150px }
/*************************
        Margin left
*************************/
.ml-0 { margin-left: 0 }
.ml-10 { margin-left: 10px }
.ml-12 { margin-left: 12px }
.ml-15 { margin-left: 15px }
.ml-20 { margin-left: 20px }
.ml-30 { margin-left: 30px }
.ml-40 { margin-left: 40px }
.ml-50 { margin-left: 50px }
.ml-60 { margin-left: 60px }
.ml-70 { margin-left: 70px }
.ml-80 { margin-left: 80px }
.ml-90 { margin-left: 90px }
.ml-100 { margin-left: 100px }
.ml-110 { margin-left: 110px }
.ml-120 { margin-left: 120px }
.ml-125 { margin-left: 125px }
.ml-130 { margin-left: 130px }
.ml-140 { margin-left: 140px }
.ml-150 { margin-left: 150px }
/*************************
        Padding top
*************************/
.pt-0 { padding-top: 0 }
.pt-10 { padding-top: 10px }
.pt-15 { padding-top: 15px }
.pt-20 { padding-top: 20px }
.pt-30 { padding-top: 30px }
.pt-37 { padding-top: 37px }
.pt-40 { padding-top: 40px }
.pt-50 { padding-top: 50px }
.pt-55 { padding-top: 55px }
.pt-60 { padding-top: 60px }
.pt-65 { padding-top: 65px }
.pt-70 { padding-top: 70px }
.pt-75 { padding-top: 75px }
.pt-80 { padding-top: 80px }
.pt-85 { padding-top: 85px }
.pt-95 { padding-top: 95px }
.pt-90 { padding-top: 90px }
.pt-97 { padding-top: 97px }
.pt-100 { padding-top: 100px }
.pt-95 { padding-top: 95px }
.pt-105 { padding-top: 105px }
.pt-110 { padding-top: 110px }
.pt-115 { padding-top: 115px }
.pt-120 { padding-top: 120px }
.pt-125 { padding-top: 125px }
.pt-130 { padding-top: 130px }
.pt-135 { padding-top: 135px }
.pt-140 { padding-top: 140px }
.pt-150 { padding-top: 150px }
.pt-155 { padding-top: 155px }
.pt-180 { padding-top: 180px }
.pt-205 { padding-top: 205px }
.pt-365 { padding-top: 365px }
.pt-370 { padding-top: 370px }   
.pt-380 { padding-top: 380px }
/*************************
        Padding right
*************************/
.pr-0 { padding-right: 0 }
.pr-10 { padding-right: 10px }
.pr-15 { padding-right: 15px }
.pr-20 { padding-right: 20px }
.pr-30 { padding-right: 30px }
.pr-40 { padding-right: 40px }
.pr-50 { padding-right: 50px }
.pr-60 { padding-right: 60px }
.pr-70 { padding-right: 70px }
.pr-80 { padding-right: 80px }
.pr-90 { padding-right: 90px }
.pr-100 { padding-right: 100px }
.pr-110 { padding-right: 110px }
.pr-120 { padding-right: 120px }
.pr-130 { padding-right: 130px }
.pr-140 { padding-right: 140px }
.pr-155 { padding-right: 155px }
.pr-155 { padding-right: 155px }
.pr-180 { padding-right: 180px }
.pr-195 { padding-right: 195px }
/*************************
        Padding bottom
*************************/
.pb-0 { padding-bottom: 0 }
.pb-10 { padding-bottom: 10px }
.pb-15 { padding-bottom: 15px }
.pb-20 { padding-bottom: 20px }
.pb-25 { padding-bottom: 25px }
.pb-30 { padding-bottom: 30px }
.pb-35 { padding-bottom: 35px }
.pb-40 { padding-bottom: 40px }
.pb-45 { padding-bottom: 45px }
.pb-50 { padding-bottom: 50px }
.pb-55 { padding-bottom: 55px }
.pb-60 { padding-bottom: 60px }
.pb-65 { padding-bottom: 65px }
.pb-70 { padding-bottom: 70px }
.pb-75 { padding-bottom: 75px }
.pb-80 { padding-bottom: 80px }
.pb-85 { padding-bottom: 85px }
.pb-90 { padding-bottom: 90px }
.pb-95 { padding-bottom: 95px }
.pb-97 { padding-bottom: 97px }
.pb-100 { padding-bottom: 100px }
.pb-105 { padding-bottom: 105px }
.pb-107 { padding-bottom: 107px }
.pb-110 { padding-bottom: 110px }
.pb-115 { padding-bottom: 115px }
.pb-120 { padding-bottom: 120px }
.pb-125 { padding-bottom: 125px }
.pb-130 { padding-bottom: 130px }
.pb-140 { padding-bottom: 140px }
.pb-145 { padding-bottom: 145px }
.pb-150 { padding-bottom: 150px }
.pb-178 { padding-bottom: 178px }
.pb-180 { padding-bottom: 180px }
.pb-280 { padding-bottom: 280px }
.pb-210 { padding-bottom: 210px }
.pb-285 { padding-bottom: 285px }
.pb-290 { padding-bottom: 290px }
/*************************
        Padding left
*************************/
.pl-0 { padding-left: 0 }
.pl-10 { padding-left: 10px }
.pl-15 { padding-left: 15px }
.pl-20 { padding-left: 20px }
.pl-30 { padding-left: 30px }
.pl-40 { padding-left: 40px }
.pl-50 { padding-left: 50px }
.pl-60 { padding-left: 60px }
.pl-70 { padding-left: 70px }
.pl-80 { padding-left: 80px }
.pl-90 { padding-left: 90px }
.pl-100 { padding-left: 100px }
.pl-110 { padding-left: 110px }
.pl-120 { padding-left: 120px }
.pl-125 { padding-left: 125px }
.pl-130 { padding-left: 130px }
.pl-140 { padding-left: 140px }
.pl-150 { padding-left: 150px }
.pl-155 { padding-left: 155px }
.pl-190 { padding-left: 190px }
.pl-195 { padding-left: 195px }


/***************************
    Page section padding 
****************************/
.ptb-0 { padding: 0 }
.ptb-10 { padding: 10px 0 }
.ptb-15 { padding: 15px 0 }
.ptb-20 { padding: 20px 0 }
.ptb-30 { padding: 30px 0 }
.ptb-32 { padding: 32px 0 }
.ptb-40 { padding: 40px 0 }
.ptb-50 { padding: 50px 0 }
.ptb-60 { padding: 60px 0 }
.ptb-70 { padding: 70px 0 }
.ptb-80 { padding: 80px 0 }
.ptb-90 { padding: 90px 0 }
.ptb-100 { padding: 100px 0 }
.ptb-110 { padding: 110px 0 }
.ptb-120 { padding: 120px 0 }
.ptb-130 { padding: 130px 0 }
.ptb-135 { padding: 135px 0 }
.ptb-140 { padding: 140px 0 }
.ptb-150 { padding: 150px 0 }
.ptb-160 { padding: 160px 0 }
.ptb-170 { padding: 170px 0 }
.ptb-177 { padding: 177px 0 }
.ptb-180 { padding: 180px 0 }
.ptb-190 { padding: 190px 0 }
.ptb-200 { padding: 200px 0 }
.ptb-210 { padding: 210px 0 }
.ptb-220 { padding: 220px 0 }
.ptb-250 { padding: 250px 0 }
.ptb-290 { padding: 290px 0 }
.ptb-310 { padding: 310px 0 }

/***************************
    Page section margin 
****************************/
.mtb-0 { margin: 0 }
.mtb-10 { margin: 10px 0 }
.mtb-15 { margin: 15px 0 }
.mtb-20 { margin: 20px 0 }
.mtb-30 { margin: 30px 0 }
.mtb-40 { margin: 40px 0 }
.mtb-50 { margin: 50px 0 }
.mtb-60 { margin: 60px 0 }
.mtb-70 { margin: 70px 0 }
.mtb-80 { margin: 80px 0 }
.mtb-90 { margin: 90px 0 }
.mtb-100 { margin: 100px 0 }
.mtb-110 { margin: 110px 0 }
.mtb-120 { margin: 120px 0 }
.mtb-130 { margin: 130px 0 }
.mtb-140 { margin: 140px 0 }
.mtb-150 { margin: 150px 0; }
.mtb-290 { margin: 290px 0; }

/*************************
        Extra class
*************************/
.pricing .container .row [class*="col-"] { }



/*Custom cloumn*/

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10 {
    float: left;
}
.col-1{
    width: 10%;
}
.col-2{
    width: 20%;
}
.col-3{
    width: 30%;
}
.col-4{
    width: 40%;
}
.col-5{
    width: 50%;
}
.col-6{
    width: 60%;
}
.col-7{
    width: 70%;
}
.col-8{
    width: 80%;
}
.col-9{
    width: 90%;
}
.col-10{
    width: 100%;
}
 /*************************************
    Background variation set 
 **************************************/
/*colored background*/
 .white-bg { background: #fff; }
 .black-bg { background: #252525 }
 .theme-bg { background: #f4ecea }
 .gray-bg { background: #f0f1f5; }
 .blue-bg { background: #4FC1F0; }
 .default-bg { background: #50C1F0; }
 .transparent-bg { background: transparent; }

/*Opacity background*/
/* black overlay */
[data-overlay] {
  position: relative;
} 
[data-overlay]::before {
  background: #252525 none repeat scroll 0 0;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1;
}
[data-overlay="3"]::before {
  opacity: 0.3;
}
[data-overlay="4"]::before {
  opacity: 0.4;
}
[data-overlay="5"]::before {
  opacity: 0.5;
}
[data-overlay="56"]::before {
  opacity: 0.56;
}
[data-overlay="6"]::before {
  opacity: 0.6;
}
[data-overlay="7"]::before {
  opacity: 0.7;
}
[data-overlay="8"]::before {
  opacity: 0.8;
}

/* white overlay */
[white-overlay] {
  position: relative;
} 
[white-overlay]::before {
  background: #fff none repeat scroll 0 0;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1;
}
[white-overlay="3"]::before {
  opacity: 0.3;
}
[white-overlay="4"]::before {
  opacity: 0.4;
}
[white-overlay="5"]::before {
  opacity: 0.3;
}
[white-overlay="6"]::before {
  opacity: 0.6;
}
[white-overlay="7"]::before {
  opacity: 0.8;
}
[white-overlay="9"]::before {
  opacity: 0.9;
}
