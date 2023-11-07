<?php 

header("Content-type: text/css; charset: UTF-8");

include'../../include_/color.php';

?>

/*-----------------------------------------------------------------------------------

    Version: 1.0

-----------------------------------------------------------------------------------
    
    [Table of contents] 
	
    1. Template default css (assets/css/bundle.css)
    2.  header css here
        2.1 Top Drodown css here
		2.2 mobile menu css here
        2.3 header middle css here
        2.4 mini cart css here
        2.5 header bottom css here
        2.6 submenu css here*
        2.7 Categories menu
		2.8 slider  css here
		2.9 small product css here
		2.10 shipping css here
		2.11 product  css here
		2.12 featured css here
		2.13 brand css here
		2.14 blog  css here
		2.15 static  css here
		2.16 newsletter css here
		2.17 footer  css here
    3. modal css here
	4.  home page 2 css here
    5.home page 3 css here
	6.home page 4 css here 
    7. shop page css here
	8. product details css here
	9. portfolio page css here
	10. about page css here*
	11. services page css here
	12. about page 2 css here
	13. blog  sidebar css here
	14. blog details css here
	15. single product css here
	16. contact page css here
	17. contact two css here
	18. error page css here
	19. faq page css start
	20. my account page ss here
    21. cart page css here
    22. wishlist css here
    23. check out  css here
    24. portfolio details css here
   
-----------------------------------------------------------------------------------*/

/*-------
     2.  header css here
----*/

.sticky-header.sticky {
	position: fixed;
	width: 100%;
	z-index: 999;
	top: 0;
	-webkit-box-shadow: 0 8px 6px -6px rgba(0,0,0,0.3);
	box-shadow: 0 8px 6px -6px rgba(0,0,0,0.3);
	-webkit-transition: all 300ms ease-in;
	transition: all 300ms ease-in;
}
.header_top {
	padding: 10px 0;
	border-bottom: 1px solid rgba(255,255,255,0.2);
	background: #03a9f4;
}
.contact_link span {
	color: #ffffff;
	line-height: 22px;
}
.top_left_sidebar {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
.switcher > ul > li,.header_right_info > ul > li {
    display: inline-block;
    padding-right: 15px;
    margin-right: 15px;
    position: relative;
}
.header_right_info ul li::before,.switcher ul li::before {
	position: absolute;
	content: "";
	width: 1px;
	height: 13px;
	background: #fff;
	top: 50%;
	-webkit-transform: translatey(-50%);
	transform: translatey(-50%);
	right: 0;
}
.header_right_info ul li:last-child::before,.switcher ul li:last-child::before{
    display: none;
}
.switcher {
    margin-left: 42px;
}
.switcher > ul > li > a,.header_right_info > ul > li > a {  
    display: block;
    text-transform: capitalize;
    color: #ffffff;
	line-height: 22px;
}
.header_right_info ul li a:hover,.switcher ul li a:hover,.dropdown_currency li.select a,.dropdown_languages li.select{
    color: <?php echo $color ?>;
}
.switcher ul li:last-child,.header_right_info ul li:last-child{
    padding: 0;
    margin: 0;
}
.header_right_info ul li a i,.switcher ul li a img {
	margin-right: 5px;
}

/*  2.1 Top Drodown css here */
.dropdown_currency,.dropdown_languages {
	position: absolute;
	z-index: 99;
	top: 148%;
	width: 150px;
	background: #fff;
	-webkit-box-shadow: 1px 1px 5px 0 rgba(0,0,0,0.2);
	box-shadow: 1px 1px 5px 0 rgba(0,0,0,0.2);
	padding: 10px 15px;
	left: 0;
    display: none;
}
.dropdown_currency li,.dropdown_languages li {
	font-size: 12px;
	color: #666666;
	line-height: 30px;
}
/* 2.2 mobile menu css here */
.mean-container .mean-bar {
	position: absolute;
	right: 0;
	z-index: 9999;
}
.mobile-menu.shop_sidebar .mean-bar {
	top: -13px;
	z-index: 9999;
}
.mean-container a.meanmenu-reveal {
	right: 40px;
	top: -23px;
	width: 24px;
}
.mean-container a.meanmenu-reveal span {
	background: #fff;
	height: 3px;
	margin-top: 4px;
}
.mean-container .mean-bar {
	top: 50px;
}
.mean-container a.meanmenu-reveal {
	color: #fff;
	right: 0;
}

.mobile-menu .mean-nav ul li li li a,.mean-container .mean-nav ul li li a  {
	padding: 11px 0 11px 33px;
	text-transform: uppercase;
	font-weight: 700;
}
.mobile-menu.mobile_menu_two a.meanmenu-reveal span{
	background: <?php echo $color ?>;
}
.mobile-menu.mobile_menu_two a.meanmenu-reveal{
    color: <?php echo $color ?>;
}
.mobile-menu.mobile_menu_four a.meanmenu-reveal span {
	background: #666666;
}
.mobile-menu.mobile_menu_four a.meanmenu-reveal {
	color: #666666;
}
/* 2.3 header middle css here */
.header_middle {
	background: #03a9f4;
	padding: 27px 0 28px;
}
.search_form form {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	height: 50px;
	background: #fff;
	position: relative;
}
.search_form form input {
    background: none;
    border: none;
    height: 100%;
    padding: 0 10px;
    border-right: 1px solid #03a9f4;
    color: #999;
}
.nice-select {
	border: none;
    height: 100%;
    line-height: 46px;
}
.select_categories.selcct_c_four .nice-select::after {
	top: 53%;
}
.select_categories {
	padding: 0 10px;
}

.select_categories ul.list {
	max-height: 320px;
	overflow: auto;
	width: 200px;
	z-index: 999999;
}
 .nice-select .option {
	line-height: 35px;
	min-height: 30px;
	padding-left: 15px;
	padding-right: 15px;
}
.select_categories.select_three .nice-select {
    line-height: 44px;
}
.search_form form button {
	background: #f59d1f;
	border: none;
	color: #fff;
	display: block;
	width: 70px;
	height: 100%;
	font-size: 20px;
	line-height: 40px;
	cursor: pointer;
	-webkit-transition: .3s;
	transition: .3s;
}
.search_form form button:hover,.header_widget > ul > li > a:hover,.cart_button a:hover{
    background: <?php echo $color ?>;
    border-color: <?php echo $color ?>;
}
.header_widget ul li{
    display: inline-block;
    position: relative;
}
.header_widget > ul > li > a {
	width: 50px;
	height: 50px;
	margin-left: 15px;
	line-height: 46px;
	border: 2px solid #fff;
	border-radius: 50%;
	text-align: center;
	color: #fff;
    display: block;
    font-size: 26px;
}
.header_widget > ul > li:first-child > a {
	margin: 0;
}
.header_widget {
	position: relative;
}

/* 2.4 mini cart css here */
.cart_item,.cart_price_line,.cart_total {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	padding: 15px 0;
	border-bottom: 1px solid #e5e5e5;
}
.header_widget span.cart__quantity {
	font-size: 16px;
	font-weight: 700;
	background: <?php echo $color ?>;
	color: #fff;
	width: 25px;
	height: 25px;
	display: inline-block;
	text-align: center;
	line-height: 25px;
	border-radius: 50%;
	position: absolute;
	top: -6px;
	right: -7px;
}
.mini_cart {
	position: absolute;
	width: 300px;
	background: #fff;
	-webkit-box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.2);
	box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.2);
	z-index: 999;
	padding: 10px 20px 20px;
	right: 0;
	top: 100%;
    display: none;
}

.cart_img {
  width: 30%;
  margin-right: 20px;
}
.cart_info {
	width: 60%;
	text-align: left;
}
.cart_remove {
  width: 10%;
}
.cart_img img {
  width: 100%;
}
.cart_info a {
	color: #777;
	font-size: 14px;
	text-transform: capitalize;
	line-height: 20px;
	margin: 0 0 5px;
}
.cart_info span.cart_price,.cart_price_line span.prices,.cart_total span.prices {
	color: <?php echo $color ?>;
	font-size: 16px;
	font-weight: 600;
	display: block;
}
.cart_info span.quantity {
	color: #9a9a9a;
	font-size: 12px;
	font-weight: 400;
}
.cart_remove a {
	font-size: 18px;
	color: #333;
}
.cart_remove a:hover,.cart_info a:hover{
    color: <?php echo $color ?>;
}
.cart_price_line,.cart_total {
	-webkit-box-pack: justify;
	-ms-flex-pack: justify;
	justify-content: space-between;
}
.cart_price_line span,.cart_total span {
	font-weight: 700;
	color: #333333;
	font-size: 14px;
	text-transform: capitalize;
}
.cart_button a {
	width: ;
	display: block;
	text-align: center;
	font-size: 14px;
	font-weight: 700;
	line-height: 45px;
	text-transform: uppercase;
	border: 0;
	background: #444444;
	color: #fff;
}

/* 2.5 header bottom css here*/
.main_menu nav > ul > li {
	display: inline-block;
	position: relative;
}
.header_bottom {
	background: #131313;
	margin-bottom: 30px;
}
.header_bottom.header_c_bottom {
	margin-bottom: 35px;
}
.main_menu nav > ul > li > a {
	font-size: 14px;
	font-weight: 700;
	line-height: 20px;
	padding: 20px 24px;
	display: block;
	color: #fff;
	text-transform: uppercase;
}
.main_menu nav ul li.active a,.main_menu nav ul li a:hover,.main_menu ul li ul.sub_menu li a:hover,.main_menu ul li ul.mega_menu li ul.mega_dropdown li a:hover,.main_menu ul li ul.mega_menu > li > a:hover {
	color: <?php echo $color ?>;
	background: #fff;
}
.main_menu nav > ul > li.mega_item:hover > a,.main_menu nav > ul > li.dropdown_item:hover > a {
	color: <?php echo $color ?>;
	background: #fff;
}
.main_menu nav ul li a i {
	margin-left: 3px;
}
.main_menu.menu_four nav ul > li > a:hover {
	color: <?php echo $color ?>;
}
/* 2.6 submenu css here*/
.main_menu ul li ul.sub_menu {
	position: absolute;
	min-width: 220px;
	padding: 10px 0;
	background: #ffffff;
	-webkit-box-shadow: 0 2px 2px 2px rgba(0,0,0,0.2);
	box-shadow: 0 2px 2px 2px rgba(0,0,0,0.2);
	top: 120%;
	left: 0;
	visibility: hidden;
	opacity: 0;
	-webkit-transition: .3s;
	transition: .3s;
	z-index: 9999;
}
.main_menu_inner {
	position: relative;
}
.main_menu ul li:hover ul.sub_menu,.main_menu ul li:hover ul.mega_menu{
    visibility: visible;
    opacity: 1;
    top: 100%;
}
.main_menu ul li ul.sub_menu li a,.main_menu ul li ul.mega_menu li ul.mega_dropdown li a {
	padding: 12px 25px;
	display: block;
	color: #444444;
	font-size: 14px;
	text-transform: capitalize;
	line-height: 18px;
	font-weight: 400;
}
.main_menu ul li ul.sub_menu li a {
	padding: 8px 25px;
}
.main_menu ul li ul.mega_menu{
    position: absolute;
}
.main_menu ul li ul.mega_menu {
	position: absolute;
	width: 764px;
	right: 0;
	padding: 30px 0 10px 30px;
	background: #ffffff;
	-webkit-box-shadow: 0 2px 2px 2px rgba(0,0,0,0.2);
	box-shadow: 0 2px 2px 2px rgba(0,0,0,0.2);
	top: 120%;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: .3s;
	transition: .3s;
	z-index: 9999;
}




.main_menu ul li ul.mega_menu > li {
	width: 33.33%;
	float: left;
	padding: 0px 15px 20px 15px;
}
.main_menu ul li ul.mega_menu > li > a {
	color: #6d6d6d;
	font-size: 16px;
	font-weight: 700;
	text-transform: capitalize;
	margin-bottom: 15px;
	display: block;
}
.main_menu ul li ul.mega_menu li ul.mega_dropdown li a{
    padding: 6px 0
}
/*header area css end*/


/*------- 
    2.7 Categories menu
----*/
.categories_title h2 {
	font-size: 20px;
	font-weight: bold;
	line-height: 35px;
	text-transform: uppercase;
	color: #fff;
	cursor: pointer;
	padding: 5px 0;
    margin-bottom: 0;
    display: inline-block;
}
.categories_title img {
	margin-right: 5px;
}
.categories_menu_inner {
	padding: 8px 0 0;
	border-left: 1px solid #ddd;
	border-right: 1px solid #ddd;
	background: #fff;
}
.categories_title {
	background: <?php echo $color ?>;
	text-align: center;
}
.categories_menu.categorie_page_menu.right_categorie {
	margin-top: 22px;
}
.categories_menu_inner ul li a:hover,.categories_menu_inner ul li ul.categories_mega_menu > li > a:hover{
    color: <?php echo $color ?>;
}
.categories_menu_inner > ul > li > a {
	font-size: 13px;
	color: #444;
	line-height: 41px;
	text-transform: uppercase;
	padding: 0 15px;
	font-weight: 400;
	display: block;
	cursor: pointer;
}
.categories_menu_inner > ul > li > a:focus {
	color: <?php echo $color ?> !important;
}
.categories_menu_inner ul li a i {
	margin-right: 7px;
	font-size: 14px;
	font-weight: 400;
}
.categories_menu_inner ul li a i.fa-angle-right {
	float: right;
	color: #444444;
	font-size: 15px;
	line-height: 35px;
    transition: .3s;
    -webkit-transition: .3s;
}
.categories_menu_inner ul li {
	position: relative;
}
.categories_menu_inner ul li ul.categories_mega_menu {
	position: absolute;
	left: 120%;
	width: 720px;
	-webkit-box-shadow: 1px 0 6px 0 rgba(0,0,0,0.3);
	box-shadow: 1px 0 6px 0 rgba(0,0,0,0.3);
	background: #fff;
	padding: 20px;
	overflow: hidden;
	top: 0;
	-webkit-transition: .3s;
	transition: .3s;
    z-index: 99;
    opacity: 0;
    visibility: hidden;
}
.categories_menu_inner ul li ul.categories_mega_menu.open {
	opacity: 1;
	visibility: visible;
	left: 100%;
}
.categories_menu_inner ul li ul.categories_mega_menu > li{
    padding: 0 15px;
    border-right: 1px solid #ddd;
    width: 25%;
	float: left;
}

.categories_menu_inner ul li ul.categories_mega_menu > li > a {
	line-height: 30px;
	font-size: 14px;
	font-weight: 700;
	color: #404040;
	text-transform: uppercase;
	display: block;
	margin-bottom: 5px;
}
.categorie_sub_menu ul li a {
	color: #404040;
	text-transform: capitalize;
	display: block;
	font-size: 13px;
	font-weight: 400;
	line-height: 38px;
}

.categories_menu_inner ul li ul.categories_mega_menu.decor {
	width: 550px;
}
.categories_menu_inner ul li ul.categories_mega_menu.decor > li {
	width: 33.33%;
}
.categories_menu_inner ul li ul.categories_mega_menu.hobbies {
	width: 400px;
}
.categories_menu_inner ul li ul.categories_mega_menu.hobbies > li {
	width: 50%;
}
.categorie_sub {
	opacity: 0;
	z-index: 999;
	position: absolute;
	width: 101%;
	left: -1px;
	border: lef;
	border-left: 1px solid #ddd;
	border-right: 1px solid #ddd;
	border-bottom: 1px solid #ddd;
	background: #fff;
	transition: .3s;
	top: 65%;
	visibility: hidden;
}
.categorie_sub.open {
	top: 95%;
	opacity: 1;
	visibility: visible;
}
.categories_menu_inner ul li.has-sub > a::before {
	position: absolute;
	content: "\f055";
	font-family: FontAwesome;
	top: 0;
	right: 20px;
	font-size: 18px;
	pointer-events: none;
}
.categories_menu_inner ul li.has-sub > a.open::before{
    content: "\f056";
}
.categories_menu_inner ul li.has-sub ul.categorie_sub li a {
	text-transform: uppercase;
	font-size: 13px;
	font-weight: 400;
	padding-bottom: 16px;
	padding-left: 15px;
	display: block;
}
.categories_menu_inner ul li.has-sub {
	border-bottom: 1px solid #ddd;
	padding-bottom: 10px;
}
 .categories_menu_inner ul li ul.categories_mega_menu li:last-child {
	border-right: 0;
    }
    .categories_menu_inner ul li ul.categories_mega_menu > li:first-child {
        padding-left: 0;
    }
    .categories_menu_inner ul li ul.categories_mega_menu > li:last-child {
        padding-right: 0;
    }

/* 2.8 slider  css here*/
.slider_content h1 {
	font-size: 54px;
	line-height: 54px;
	font-weight: 700;
	color: rgb(23, 23, 23);
	text-transform: uppercase;
	margin-bottom: 15px;
}
.slider_desc p {
	font-size: 14px;
	line-height: 25px;
	font-weight: 400;
	color: rgb(102, 102, 102);
	margin-bottom: 15px;
}
.slider_discount ul li {
	font-size: 14px;
	line-height: 20px;
	font-weight: 400;
	color: rgb(245, 157, 31);
	text-transform: uppercase;
	font-style: italic;
}
.slider_discount {
	margin-bottom: 20px;
}
.slider_button a {
	font-size: 14px;
	line-height: 20px;
	font-weight: 700;
	color: rgb(255, 255, 255);
	text-transform: uppercase;
	background-color: rgb(234, 58, 60);
	padding: 10px 30px;
	display: inline-block;
}
.slider_button a:hover{
    background:  rgb(245, 157, 31);
}
.slider_content {
	margin-top: 40px;
	overflow: hidden;
	padding-right: 10px;
}
.single_slider {
    height: 465px;
	background-position: center center;
	background-size: cover;
}
.slider_content.sale {
	margin-top: 100px;
	margin-left: 30px;
}
.slider_content.sale h2 {
	font-size: 46px;
	line-height: 46px;
	font-weight: 700;
	color: rgb(255, 255, 255);
	text-transform: uppercase;
	margin-bottom: 5px;
}
.slider_content.sale h1 {
	font-size: 100px;
	line-height: 100px;
	font-weight: 700;
	color: rgb(245, 157, 31);
	margin-bottom: 5px;
}
.slider_desc_up p {
	font-size: 15px;
	line-height: 20px;
	font-weight: 400;
	color: rgb(255, 255, 255);
	margin-bottom: 30px;
    
}
.slider_active.owl-carousel .owl-dots .owl-dot {
	width: 12px;
	height: 12px;
	background: #fff;
	display: inline-block;
	margin: 0 3px;
	border-radius: 50%;
}
.slider_active.owl-carousel .owl-dots .owl-dot.active{
    background: <?php echo $color ?>;
}
.slider_active.owl-carousel .owl-dots {
	position: absolute;
	bottom: 45px;
	width: 100%;
	text-align: center;
}
.active .slider_content h1,.active .slider_desc p,.active .slider_discount,.active .slider_button,.active .slider_content h2,.active .slider_desc_up p,.active .slider_content h3{
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-duration: 1.5s;
    animation-duration: 1.5s;
    -webkit-animation-delay: 0.3s;
    animation-delay: 0.3s;
}
.active .slider_desc p{
    -webkit-animation-delay: 0.5s;
    animation-delay: 0.5s;
}
.active .slider_discount,.active .slider_content.sale h1,.active .slider_content h3{
    -webkit-animation-delay: 0.7s;
    animation-delay: 0.7s;
}
.active .slider_button{
    -webkit-animation-delay: 0.9s;
    animation-delay: 0.9s;
}
.active .slider_desc_up p{
    -webkit-animation-delay: 0.9s;
    animation-delay: 0.9s;
}
/*slider area css end*/

/* 2.9 small product css here*/
.top_title h2 {
	text-transform: uppercase;
	color: #fff;
	background: <?php echo $color ?>;
	padding: 10px 20px;
	line-height: 18px;
	font-size: 16px;
	font-weight: 700;
	position: relative;
	display: inline-block;
	margin-bottom: 0;
}
.top_title h2::before {
	position: absolute;
	content: "";
	width: 40px;
	height: 40px;
	border: 20px solid transparent;
	border-left: 20px solid <?php echo $color ?>;
	top: 0;
	right: -40px;
}
.top_title {
	border-bottom: 3px solid <?php echo $color ?>;
}
/*small product*/
.small_product {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}
.small_product_thumb {
	width: 125px;
	margin-right: 5px;
	position: relative;
}
.samll_product_ratting ul {
	line-height: 17px;
}
.samll_product_ratting ul li {
  display: inline-block;
}
.samll_product_ratting ul li a {
  color: #f0c808;
}
.small_product_name a {
	color: #555555;
	font-size: 14px;
	font-weight: 400;
	text-transform: capitalize;
	line-height: 30px;
}
.small_product_price {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}
.small_product_content {
	width: 100%;
}
.small_product_price span {
	font-weight: 600;
	font-size: 16px;
	color: <?php echo $color ?>;
}
.small_product_price span.old_price {
	color: #999999;
	text-decoration: line-through;
	font-size: 14px;
	margin-left: 15px;
}
.small_product {
	padding: 14px 15px 10px;
	border-bottom: 1px solid #ddd;
}
.small_product:last-child {
	border: none;
}
.top_sellers {
	border: 1px solid #ddd;
}
.product_discount {
	position: absolute;
	top: 7px;
	left: 7px;
}
.product_discount span {
	font-size: 12px;
	font-weight: 700;
	padding: 2px 7px;
	background: <?php echo $color ?>;
	color: #fff;
	line-height: 18px;
}
.small_product_active.owl-carousel .owl-nav div,.product_active.owl-carousel .owl-nav div,.featured_active.owl-carousel .owl-nav div,.blog_active.owl-carousel .owl-nav div  {
	position: absolute;
	top: -38px;
	right: 40px;
	font-size: 28px;
	color: #999999;
    -webkit-transition: .3s;
    transition: .3s;
}
.small_product_active.owl-carousel .owl-nav div {
	top: -36px;
}
.small_product_active.owl-carousel .owl-nav div:hover,.small_product_name a:hover,.product_active.owl-carousel .owl-nav div:hover,.featured_active.owl-carousel .owl-nav div:hover,.blog_active.owl-carousel .owl-nav div:hover{
    color: <?php echo $color ?>;
}
.small_product_active.owl-carousel .owl-nav div.owl-next,.product_active.owl-carousel .owl-nav div.owl-next,.featured_active.owl-carousel .owl-nav div.owl-next,.blog_active.owl-carousel .owl-nav div.owl-next {
	right: 20px;
}
/*small product css end*/


/* 2.10 shipping css here*/
.single_shipping {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	background: #b2b2b2;
	min-height: 66px;	
}
.shippin_icone {
	background: rgba(0,0,0,0.1);
	width: 70px;
	text-align: center;
    margin-right: 15px;
}
.shippin_icone i {
	font-size: 40px;
	color: #fff;
	line-height: 66px;
}
.shipping_content{
    padding: 15px 0;
}
.shipping_content h3 {
	color: #fff;
	font-size: 12px;
	margin-top: 10px;
	text-transform: uppercase;
	font-weight: 700;
}
/*shipping  css end*/

/* 2.11 product  css here*/
.product_area,.banner_area {
	margin-bottom: 40px;
}
.product_active {
	padding: 13px 15px 10px;
}
.product_thumb {
	position: relative;
	overflow: hidden;
}
.product_thumb img {
	width: 100%;
}
.product_countdown {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}
.product_active.owl-carousel .owl-nav div {
	top: -36px;
	right: 75px;
}
.product_active.owl-carousel .owl-nav div.owl-next {
	right: 50px;
}
.single_countdown {
	background: rgb(245, 157, 31);
	margin-right: 5px;
	padding: 3px 7px;
}
.countdown_number {
	font-size: 15px;
	color: #fff;
	font-weight: 700;
	line-height: 15px;
}
.countdown_title {
	font-size: 12px;
	text-align: center;
	line-height: 14px;
	color: #fff;
	font-weight: 600;
	text-transform: capitalize;
}
.product_content {
	padding: 11px 0 10px 0;
	background: #fff;
}
.product_inner {
	border: 1px solid #ddd;
}
.product_action {
	position: absolute;
	top: 50%;
	right: 50px;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: .3s;
	transition: .3s;
	transform: translatey(-50%);
}
.product_action ul li a, .quick_view a {
	text-align: center;
	line-height: 38px;
	height: 38px;
	width: 38px;
	border-radius: 100%;
	font-size: 18px;
	display: block;
	background: rgba(0,0,0,0.3);
	color: #fff;
}
.product_action ul li a:hover,.quick_view a:hover{
    background-color: <?php echo $color ?>;
    color: #fff;
}
.product_action ul li {
	margin-bottom: 7px;
}
.quick_view{
    position: absolute;
    top: 50%;
    left: 50px;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    -webkit-transition: .3s;
    transition: .3s;
    opacity: 0;
    visibility: hidden;
}
.single_product:hover .product_action{
    opacity: 1;
    visibility: visible;
    right: 0;
}
.single_product:hover .quick_view{
    left: 0;
    opacity: 1;
    visibility: visible;    
}
.product_thumb::before,.small_product_thumb::before {
	position: absolute;
	content: "";
	width: 100%;
	height: 100%;
	background: rgba(229,229,229,0.5);
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	pointer-events: none;
	opacity: 0;
}
.single_product:hover .product_thumb::before,.small_product:hover .small_product_thumb::before{
    -webkit-animation: zoomIn 300ms ease-in-out;
    animation: zoomIn 300ms ease-in-out;
    opacity: 1;
}

.product_active.owl-carousel .col-lg-3{
	min-width: 100%;
	-webkit-box-flex: 100%;
	-ms-flex: 100%;
	flex: 100%;
}
.product_timing {
	margin-bottom: 10px;
}
.product_banner img,.single_banner img,.feature_banner_box img,.single_instagram_img img {
	width: 100%;
	-webkit-transition: .3s;
	transition: .3s;
}
.product_banner:hover img,.single_banner:hover img,.feature_banner_box:hover img,.single_instagram_img:hover img{
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
/*product  css end*/



/* 2.12 featured css here*/
.hot_category {
	background-repeat: no-repeat;
	background-attachment: scroll;
	background-position: center center;
	background-size: cover;
	height: 100%;
	padding: 15px;
}
.hot_category h2 {
	color: #444444;
	font-size: 16px;
	text-transform: capitalize;
	font-weight: 700;
	margin-bottom: 20px;
	margin-top: 12px;
}
.hot_category ul li a {
	color: #666666;
	font-size: 13px;
	line-height: 30px;
	text-transform: capitalize;
}
.hot_category ul li a:hover{
    color: <?php echo $color ?>;
}
.featured_left {
	border: 1px solid #ddd;
}
.featured_produt {
	padding: 7px 10px;
}
.featured_active.owl-carousel .owl-nav div {
	top: -43px;
}
.feature_banner_box {
	margin-bottom: 30px;
}

.top_sellers.featured {
	padding-bottom: 0;
}
.featured_produt.fashion_product {
	padding: 5px 10px;
}

/*featured css here*/


/* 2.13 brand css here*/
.brand_active.owl-carousel .col-lg-2,.blog_active.owl-carousel .col-lg-3 {
	min-width: 100%;
    -webkit-box-flex: 100%;
    -ms-flex: 100%;
    flex: 100%;
}

.single_brand,.blog_thumb {
  overflow: hidden;
}
.row.brand_padding {
	margin-right: 0;
	margin-left: 0;
}
.single_brand img {
	margin: 0 auto;
}
.brand_logo_two .single_brand img {
	margin: inherit;
}
.single_brand img,.blog_thumb img {
  width: 100%;
  -webkit-transition: .3s;
  transition: .3s;
}
.brand_active.owl-carousel .single_brand img {
	width: inherit;
}
.single_brand:hover img,.blog_thumb:hover img {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
.brand_active.owl-carousel .owl-nav div {
	display: none;
}

.brand_active.owl-carousel .owl-stage-outer {
	border: 1px solid #ddd;
	padding: 12px 0;
}
/*brand css end*/

/* 2.14 blog  css here*/
.blog_active.owl-carousel .owl-nav div {
	top: -66px;
	right: 60px;
}
.blog_active.owl-carousel .owl-nav div.owl-next {
	right: 38px;
}
.blog_content h4 {
	font-size: 14px;
	margin-bottom: 5px;
	font-weight: 400;
	text-transform: capitalize;
	font-family: 'Open Sans', sans-serif;
}
.blog_content h4 a{
    color: #555555;
}
.blog_content h4 a:hover,.blog_post ul li a:hover{
    color: <?php echo $color ?>;
}
.blog_content p {
	line-height: 24px;
	font-size: 13px;
	color: #666666;
	padding: 0 0 24px 0;
	margin: 0;
}
.blog_post ul li {
	width: 50%;
	float: left;
	line-height: 44px;
    height: 44px;
	color: #555555;
	border: 1px solid #ddd;
    -webkit-transition: .3s;
    transition: .3s;
    text-align: center;
}
.blog_post ul li a{
    display: block;
}
.blog_post ul li.read_more:hover{
    background: #e5e5e5;
}
.blog_post ul li:first-child{
    border-right: 0;
}
.blog_thumb {
	margin-bottom: 26px;
	position: relative;
}
/*blog  css end*/

/* 2.15 static  css here*/
.single_static {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}
.icone_static {
	margin-right: 20px;
}
.icone_static i {
	width: 70px;
	height: 70px;
	line-height: 70px;
	text-align: center;
	background: <?php echo $color ?>;
	color: #fff;
	font-size: 26px;
	border-radius: 50%;
}
.icone_static i.fa-cubes {
	background: #03a9f4;
}

.icone_static i.fa-tags {
	background: #f59d1f;
}
.icone_static i.fa-codepen {
	background: #5db851;
}
.icone_static i.fa-cut {
	background: #9d66e2;
}
.icone_static i.fa-diamond {
	background: #999999;
}
.content_static h4 {
	font-size: 16px;
	color: #444444;
	font-weight: 700;
	text-transform: capitalize;
	margin-bottom: 10px;
}
.content_static p {
	font-size: 13px;
	line-height: 25px;
	margin: 0;
}
.static_area {
	padding: 38px 0 32px;
	background: #f7f7f7;
}
/*static css end*/


/* 2.16 newsletter css here*/
.newsletter_area {
	background: #000000;
	padding: 30px 0 32px;
}
.social_icone ul li {
	display: inline-block;
}
.newslatter_inner form {
	position: relative;
	width: 490px;
	float: left;
    background: #fff;
}
.newslatter_inner h4 {
	float: left;
	line-height: 45px;
	color: <?php echo $color ?>;
	margin-right: 20px;
	font-size: 16px;
	text-transform: uppercase;
	font-weight: 700;
	margin-bottom: 0;
}
.newslatter_inner form input {
	border: none;
	background: none;
	color: #666;
	padding: 5px 155px 5px 15px;
	font-size: 13px;
	text-transform: capitalize;
}
.newslatter_inner form button {
	position: absolute;
	right: 0;
	border: none;
	background: <?php echo $color ?>;
	color: #fff;
	font-weight: 700;
	padding: 0 25px;
	text-transform: uppercase;
	height: 100%;
	cursor: pointer;
	-webkit-transition: .3s;
	transition: .3s;
	font-size: 15px;
}
.newslatter_inner form button::before {
	position: absolute;
	content: "";
	width: 16px;
	height: 45px;
	border-right-color: <?php echo $color ?>;
	border-style: solid;
	border-width: 22px 16px 22px 0;
	top: 0;
	right: 100%;
	cursor: pointer;
    -webkit-transition: .3s;
    transition: .3s;
}
.newslatter_inner form button:hover::before,.newslatter_inner form button:hover{
    border-right-color: #f59d1f;
    background: #f59d1f;
}
.newslatter_inner form button {
	position: absolute;
	right: 0;
	border: none;
	background: <?php echo $color ?>;
	color: #fff;
	font-weight: 700;
	padding: 0 25px;
	text-transform: uppercase;
	height: 100%;
	cursor: pointer;
	-webkit-transition: .3s;
	transition: .3s;
	font-size: 15px;
    top:0;
}
.social_icone ul li{
    margin-right: 10px;
}
.social_icone ul li a {
	height: 24px;
	width: 24px;
	text-align: center;
	display: block;
	border: 2px solid #ffffff;
	border-radius: 100%;
	color: #ffffff;
}
.social_icone ul li a {
	height: 28px;
	width: 28px;
	text-align: center;
	display: block;
	border: 2px solid #ffffff;
	border-radius: 100%;
	color: #ffffff;
	line-height: 26px;
}
.social_icone ul li a:hover{
    background: #fff;
    color: #262626;
    border-color: #fff;
}
.single_instagram_img {
	width: 30.33%;
	float: left;
	margin: 0 3px 6px;
}

/*newsletter css end*/

/* 2.17 footer  css here*/
.footer_area {
	background: #262626;
}
.single_footer h4 {
	font-size: 16px;
	font-weight: 700;
	line-height: 30px;
	text-transform: uppercase;
	display: block;
	color: #fff;
	margin-bottom: 20px;
}
.single_footer ul li a,.single_footer ul li {
	color: #fff;
	display: block;
	text-transform: capitalize;
	line-height: 29px;
	font-weight: 400;
}
.single_footer ul li {
	margin-bottom: 5px;
}
.single_footer ul li i,.single_footer ul li a i.fa-envelope-square{
    color: <?php echo $color ?>;
    font-size: 16px;
    margin-right: 10px;
}
.single_footer ul li a i {
	color: #9f9f9f;
	font-size: 7px;
	line-height: 20px;
	margin-right: 5px;
    transition: .3s;
}
.single_footer ul li a:hover{
    color: <?php echo $color ?>;
    padding-left: 5px;

}
.single_footer ul li a:hover i{
     color: <?php echo $color ?>;
}
.single_instagram_img{
    overflow: hidden;
}
.instagram_img {
	margin-top: 10px;
	display: inline-block;
}
.footer_top {
	padding: 28px 0 25px;
	border-bottom: 1px solid rgba(255,255,255,0.1);
}
.footer_tags a {
	display: inline-block;
	font-size: 13px;
	text-transform: capitalize;
	font-weight: 400;
	border-left: 1px solid #fff;
	color: #fff;
	line-height: 13px;
	padding-left: 6px;
	margin-left: 6px;
}
.footer_tags a:first-child {
	border: 0;
	padding-left: 0;
	margin-left: 0;
}
.footer_tags {
	padding: 25px 0;
     border-bottom: 1px solid rgba(255,255,255,0.1);
}
.footer_tags a:hover{
    color: <?php echo $color ?>;
}
.payment {
	text-align: right;
}
.widget_copyright p {
	margin: 0;
	color: #fff;
	line-height: 25px;
	text-transform: capitalize;
}
.copyright_area {
	padding: 21px 0;
}
.widget_copyright p a {
	color: <?php echo $color ?>;
	font-weight: 600;
	padding: 0 3px;
}
.widget_copyright p a:hover{
    text-decoration: underline;
}
/*footer area css end*/



/* 3. modal css here*/
.modal_body {
	padding: 0 6px 34px;
}
.modal-content button.close {
	position: relative;
	left: 94%;
	width: 30px;
	height: 30px;
	display: inline-block;
	border: 1px solid #555;
	top: 10px;
	border-radius: 5px;
	cursor: pointer;
}
.modal-dialog.modal-dialog-centered {
  min-width: 870px;
}
.modal_tab_button ul li {
  width: 70px;
  float: left;
  border: 1px solid #ddd;
  margin-right: 11px;
}
.modal_tab_button ul li a {
  padding: 0;
}
.modal_title h2,.modal_social h2 {
	font-size: 20px;
	text-transform: uppercase;
	font-weight: 700;
    margin-bottom: 10px;
}
.modal_price span {
	font-weight: 600;
	color: #f26667;
	font-size: 16px;
}
.modal_price span.old_price{
    color: #999;
    font-size: 14px;
    font-weight: 400;
    text-decoration: line-through;
    margin-left: 5px;
}
.modal_content p,.modal_description p {
	line-height: 24px;
	font-size: 15px;
	color: #666666;
	margin: 0;
}
.modal_size ul li,.modal_social ul li {
	display: inline-block;
	margin-right: 3px;
}
.modal_size ul li a, .modal_social ul li a {
	text-transform: uppercase;
	display: inline-block;
	border: 1px solid #ddd;
	width: 32px;
	height: 32px;
	text-align: center;
	line-height: 32px;
	border-radius: 50%;
	font-size: 12px;
	color: #222222;
	font-weight: 600;
}
.modal_social ul li a {
	font-size: 13px;
}
.modal_size h2 {
	font-size: 16px;
	color: #222222;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 18px;
}
.modal_size.mb-15 {
	margin-bottom: 20px;
}
.modal_description.mb-15 {
	margin-bottom: 40px;
}
.modal_social h2 {
	margin-bottom: 16px;
}
.modal_price.mb-10 {
	margin-bottom: 5px;
}
.modal_add_to_cart form input {
	width: 80px;
	border: 1px solid #ddd;
	background: none;
	padding: 0 17px;
	font-weight: 700;
	border-radius: 5px;
	height: 40px;
}
.modal_add_to_cart form button,.product_d_tab_content_item > a {
	background: none;
	border: 1px solid #444;
	margin-left: 10px;
	font-size: 12px;
	font-weight: 700;
	height: 38px;
	line-height: 18px;
	padding: 10px 15px;
	text-transform: uppercase;
	background: #444;
	color: #fff;
	border-radius: 5px;
    -webkit-transition: .3s;
    transition: .3s;
    cursor: pointer;
}
.product_d_tab_content_item a {
	margin-left: 0;
	display: block;
}
.modal_add_to_cart form button:hover,.modal_size ul li a:hover,.modal_social ul li a:hover,.product_d_tab_content_item > a:hover{
    background: <?php echo $color ?>;
    border-color: <?php echo $color ?>;
    color: #fff;
}

/*modal css here*/




/*-----------------
      4.  home page 2 css here
    -------------------------*/

.header_top.top_two {
	background: #f2f2f2;
}
.contact_link.link_two span,.switcher.switcher_two > ul > li > a,.header_right_info.right_info_two > ul > li > a {
	color: #3f3f3f;
}
.switcher.switcher_two > ul > li::before,.header_right_info.right_info_two ul li::before {
	background: #3f3f3f;
}
.switcher.switcher_two > ul > li > a:hover,.header_right_info.right_info_two > ul > li > a:hover{
    color: <?php echo $color ?>;;
}
.header_widget.widget_two > ul > li > a {
	color: #3f3f3f;
	border: 2px solid #bbb;
}
.header_widget.widget_two > ul > li > a:hover{
    border-color: <?php echo $color ?>;
    color: #fff;
}
.header_middle.middle_two {
	background: #fff;
}
.search_form.form_two form {
	border: 1px solid #ddd;
}
.search_form.form_two form input {
	border-right: 1px solid #ddd;
}
.shipping_content.sp_c_two h3 {
	color: #666;
	line-height: 24px;
	margin: 0;
}
.shipping_content.sp_c_two {
	padding: 0;
}
.single_shipping.single_sp_two {
	background: none;
	min-height: 0;
}
.shippin_icone.icone_two {
  background: none;
  width: 30px;
}
.shippin_icone.icone_two i {
  color: #666666;
  font-size: 24px;
  line-height: 24px;
}
.shipping_area.shipping_two {
	padding: 7px 0;
	border: 1px solid #e5e5e5;
	margin-bottom: 30px;
}

/*main menu css here*/
.main_menu.menu_two nav > ul > li > a {
	color: #444;
	padding: 13px 22px;
}
.main_menu.menu_two nav > ul > li:first-child > a {
	padding-left: 0;
}
.main_menu.menu_two nav > ul > li > a:hover,.main_menu.menu_two nav > ul > li.active > a,.featured_active_two.owl-carousel .owl-nav div:hover,.blog_active_two.owl-carousel .owl-nav div:hover,.brand_active_two.owl-carousel .owl-nav div:hover,.main_menu.menu_four nav > ul > li.active > a{
    color: <?php echo $color ?>;
}

/*slider css here*/
.single_slider.single_sl_two {
	height: 417px;
}
.slider_content.slider_c_two h2 {
	font-size: 52px;
	text-transform: capitalize;
	font-weight: 700;
	margin-bottom: 20px;
}
.slider_content.slider_c_two h1 {
	font-size: 100px;
	line-height: 90px;
	color: #fff;
	margin-bottom: 35px;
}
.slider_content.slider_c_two  a:hover{
    background: #fff;
    color: #444;
}

/*product css here*/
.featured_active_two.owl-carousel .owl-nav div,.blog_active_two.owl-carousel .owl-nav div,.brand_active_two.owl-carousel .owl-nav div,.featured_active_three.owl-carousel .owl-nav div,.categorie_banner_active.owl-carousel .owl-nav div,.f_active_four.owl-carousel .owl-nav div,.details_s_product_active.owl-carousel .owl-nav div {
	position: absolute;
	top: -51px;
	right: 40px;
	font-size: 28px;
	color: #999999;
	-webkit-transition: .3s;
	transition: .3s;
}
.featured_produt.featured_p_two {
	padding: 5px 10px 2px;
}
.featured_active_two.owl-carousel .owl-nav div {
	top: -42px;
}
.brand_active_two.owl-carousel .owl-nav div {
	top: -37px;
}
.blog_active_two.owl-carousel .owl-nav div{
	top: -66px;
}
.featured_active_two.owl-carousel .owl-nav div.owl-next,.blog_active_two.owl-carousel .owl-nav div.owl-next,.brand_active_two.owl-carousel .owl-nav div.owl-next,.featured_active_three.owl-carousel .owl-nav div.owl-next,.categorie_banner_active.owl-carousel .owl-nav div.owl-next,.owl-nav div,.f_active_four.owl-carousel .owl-nav div.owl-next,.details_s_product_active.owl-carousel .owl-nav div.owl-next {
	right: 13px;
}
.featured_active_two.owl-carousel .owl-nav {
	display: block;
}

.featured_banner.featured_bn_two {
	margin-top: 0;
}

.brand_active_two.owl-carousel .single_brand img {
	width: inherit;
}
.brand_logo.brand_logo_two {
	border: 1px solid #ddd;
}
.single_brand_item {
	padding: 0 30px;
}

/*-----------------
        home page two css end
    -------------------------*/





/*-----------
   5.home page 3 css here
    -----------------------*/

/*header css here*/
.header_top.top_three {
	background: #131313;
}
.contact_link.link_three span,.switcher.switcher_three > ul > li > a,.header_right_info.right_info_three > ul > li > a {
	color: #b2b2b2;
}
.switcher.switcher_three > ul > li > a:hover,.header_right_info.right_info_three > ul > li > a:hover{
    color: <?php echo $color ?>;
}
.header_middle.middle_three {
	background: #262626;
}
.main_menu.menu_three nav > ul > li > a {
	padding: 8px 10px;
	background: none;
}
.header_widget.widget_three > ul > li > a {
	width: 46px;
	height: 46px;
	line-height: 40px;
	font-size: 23px;
	margin-left: 10px;
}
.header_widget.widget_three > ul > li:first-child > a{
    margin: 0;
}
.header_bottom.bottom_three {
	background: #131313;
	margin-bottom: 0;
}

.search_form.form_three form {
	height: ;
	height: 45px;
}
.search_form.form_three form input {
	border-right: 1px solid #131313;
}

/*slider css here*/
.single_slider.single_slider_three {
	height: 480px;
}
.slider_content.slider_c_three h2 {
	font-size: 32px;
	color: rgb(41, 157, 255);
	font-weight: 700;
	line-height: 32px;
}
.slider_content.slider_c_three {
	text-align: center;
	margin-top: 80px;
}
.slider_content.slider_c_three h1 {
	font-size: 70px;
	line-height: 70px;
	color: #fff;
	font-weight: 700;
}
.slider_content.slider_c_three p{
    color: #fff;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 700;
}
.slider_content.slider_c_three h1 span{
    font-style: italic;
    font-size: 50px;
}
.slider_content.slider_c_three.sale {
	margin-top: 100px;
}

.slider_content.slider_c_three.sale h2 {
	font-size: 42px;
	line-height: 42px;
	color: #444;
}

/*product css here*/
.sidebar_banner_three{
    overflow: hidden
}
.sidebar_banner_three img {
	width: 100%;
	-webkit-transition: .3s;
	transition: .3s;
}
.sidebar_banner_three img:hover{
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
.top_title.title_three {
	border-top: 1px solid #ddd;
	border-right: 1px solid #ddd;
}
.single_product.s_product_three {
	padding: 2px 15px;
}
.product_content.p_content_three {
	padding: 5px 0 7px 0;
}
.small_product_price.s_price_three span {
	line-height: 20px;
}
.featured_produt.featured_product_three {
	padding: 8px 10px 8px;
}
.categories_menu_inner.categorie_inner_three ul li#cat_toggle ul li.has-sub.open {
    background: #fff;
}
.featured_active_three.owl-carousel .owl-nav div {
	top: -45px;
}
.featured_active_three.owl-carousel .owl-nav div:hover{
    color: <?php echo $color ?>;
}
 /* home page three css end*/

/*-----------
   6.home page 4 css here 
    -----------------------*/
.main_menu.menu_four.d-none.d-lg-block {
	text-align: right;
}
.main_menu.menu_four ul li ul.sub_menu,.main_menu.menu_four ul li ul.mega_menu {
	text-align: left;
}
.main_menu.menu_four nav > ul > li:last-child > a {
	padding-right: 0;
}
.header_middle.middle_four {
        background: #fff;
    }
.main_menu.menu_four nav > ul > li > a {
	color: #444444;
}
.header_top.top_four {
	background: #f2f2f2;
}

.search_form.form_four form {
	border: 1px solid #ddd;
	height: 45px;
}
.search_form.form_four form input {
	border-right: 1px solid #ddd;
}
.header_widget.widget_four > ul > li > a {
	color: #3f3f3f;
	border: none;
	width: 45px;
	height: 45px;
}
.header_widget.widget_four > ul > li > a:hover{
    color: #fff;
}
.header_bottom_four {
	margin-bottom: 40px;
}
.single_slider.single_sl_four {
	height: 410px;
}
.slider_content.slider_c_four h1 {
	font-size: 55px;
	text-transform: capitalize;
	font-weight: 900;
	color: #fff;
	line-height: 64px;
}
.slider_content.slider_c_four.elgant_bags.elgant h1 {
	color: color: rgb(23, 23, 23);
	color: rgb(23, 23, 23);
	text-transform: uppercase;
	font-weight: 700;
}
.slider_content.slider_c_four h3 {
	font-size: 28px;
	color: #fff;
	margin-bottom: 20px;
	line-height: 34px;
}
.slider_button.s_button_four a {
	background: rgb(68, 68, 68);
}
.slider_button.s_button_four a:hover {
	background: rgb(245, 157, 31);
}
.slider_active.slider_a_four .owl-dots {
	bottom: 10px;
}
/*categorie banner css here*/
.categories_menu_inner.categorie_inner_three,.categories_menu_inner.categorie_inner_four,.categories_menu_inner.categorie_inner {
	display: none;
	position: absolute;
	z-index: 999;
	width: 90%;
}
.categories_menu_inner.categorie_inner_four {
	z-index: 9999;
}
.search_form.form_four form button {
	background: <?php echo $color ?>;
}
.search_form.form_four form button:hover{
    background: #f59d1f;
}

.categorie_banner_active.owl-carousel .col-lg-2 {
	min-width: 100%;
}
.categorie_banner_title h2 {
	color: #222;
	font-size: 16px;
	text-transform: uppercase;
	display: inline-block;
	font-weight: 700;
	line-height: 20px;
	margin-bottom: 0;
	margin-bottom: 10px;
}
.categorie_banner_active.owl-carousel .owl-nav div {
	top: -55px;
	right: 65px;
}
.categorie_banner_active.owl-carousel .owl-nav div.owl-next {
	right: 40px;
}
.categorie_banner_title {
	border-bottom: 3px solid <?php echo $color ?>;
	margin-bottom: 16px;
}
.categorie_thumb {
	position: relative;
	overflow: hidden;
}
.categorie_thumb img{
    width: 100%;
    -webkit-transition: .3s;
    transition: .3s;
        
}
.categorie_thumb:hover img{
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
.categorie_number {
	position: absolute;
	top: 60%;
	-webkit-transform: translatey(-50%);
	transform: translatey(-50%);
	left: 0;
	right: 0;
	text-align: center;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: .3s;
    transition: .3s;
}
.categorie_number span {
	font-size: 14px;
	font-weight: 400;
	color: #666666;
	line-height: 30px;
	text-transform: capitalize;
	background: #fff;
	padding: 5px 10px;
    -webkit-transition: .3s;
    transition: .3s;
}
.categorie_thumb:hover .categorie_number{
    opacity: 1;
    visibility: visible;
    top: 50%;
}
.categorie_number span:hover{
    background: <?php echo $color ?>;
    color: #fff;
}
.categorie_name a{
    font-size: 14px;
	font-weight: 400;
	color: #666666;
    line-height: 30px;
}
.categorie_banner_active.owl-carousel .owl-nav div:hover,.categorie_name a:hover,.f_active_four.owl-carousel .owl-nav div:hover{
    color: <?php echo $color ?>;
}


/* featured four csshere  */
.featured_produt.feature_p_four {
	border: 1px solid #ddd;
	padding: 0;
}
.single_product.single_p_four {
	padding: 5px 10px;
}
.featured_active.f_active_four.owl-carousel .owl-nav div {
	top: -37px;
}

.single_blog.single_blog_four {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}
.single_blog.single_blog_four {
	padding: 18px 15px;
	border-bottom: 1px solid #ddd;
}
.blog_area_two {
	border: 1px solid #ddd;
}
.single_blog.single_blog_four:last-child {
	border: none;
}
.blog_content.blog_c_four h4 {
	margin-bottom: 5px;
}
.blog_content.blog_c_four p {
	padding: 0;
	line-height: 20px;
}
.blog_thumb.thumb_four {
	margin-bottom: 0;
	width: 156px;
	margin-right: 15px;
}
.blog_active_two.active_four.owl-carousel .owl-nav div {
	top: -46px;
}

.single_brand_item.single_i_four,.shipping_content.sp_c_four {
	padding: 0;
}
.brand_itens_inner:last-child,.single_shipping.single_sp_four:last-child {
	border: none;
}
.brand_itens_inner {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-pack: distribute;
	justify-content: space-around;
	border-bottom: 1px solid #ddd;
}
.single_brand.single_b_four {
	padding: 4px;
}
.shipping_area.shipping_four {
	border: 1px solid #ddd;
}

.shippin_icone.icone_four i {
	color: <?php echo $color ?>;
	font-size: 28px;
    line-height: 24px;
}
.shippin_icone.icone_four,.single_shipping.single_sp_four{
	background: none;
}
.shipping_content.sp_c_four h3 {
	color: #666;
	margin: 0;
}
.single_shipping.single_sp_four {
	border-bottom: 1px solid #ddd;
	min-height: 0;
	padding: 26px 0 23px;
	align-items: center;
}
.f_active_four.owl-carousel .owl-nav div {
	top: -37px;
}

.brand_active_two.active_four .owl-nav div {
	top: -46px;
}
.brand_active_two.active_four .owl-nav div:hover,.blog_active_two.active_four.owl-carousel .owl-nav div:hover {
	color: <?php echo $color ?>;
}
/* home page four css end*/



/*----------
    7. shop page css here
        ----------------------*/

.single_slider.single_sl_categorie {
	height: 290px;
	margin-bottom: 30px;
}
/*sidebar categorie css here*/
.categorie_filter ul li input {
	display: inline-block;
	width: 15px;
	height: 15px;
	margin-right: 9px;
}
.categorie__titile h2 {
	display: block;
	color: #fff;
	border-bottom: 3px solid <?php echo $color ?>;
	padding: 0 20px;
	line-height: 35px;
	text-transform: uppercase;
	font-size: 16px;
	font-weight: 700;
	background: #444444;
	margin-bottom: 20px;
}
.categorie_filter ul li {
	margin-bottom: 10px;
	line-height: 18px;
}
.categorie_filter.color ul li label {
	width: 15px;
	height: 15px;
	cursor: pointer;
	margin-right: 10px;
	margin-bottom: -3px;
}
.categorie_filter.color {
	padding-bottom: 10px;
}
.categorie_filter.color ul li a {
	font-size: 15px;
}
.categorie_filter.color ul li label.input_color {
	background: #434A54;
}
.categorie_filter.color ul li label.input_color1 {
	background: #F39C11;
}
.categorie_filter.color ul li label.input_color2 {
	background: #5D9CEC;
}
.categorie_filter.color ul li label.input_color3 {
	background: #F1C40F;
}
.categorie_filter ul li a {
	color: #666666;
	font-size: 13px;
}
.categorie_filter ul li a:hover{
    color: <?php echo $color ?>;
}
.sidebar_categorie_item {
	border: 1px solid #ddd;
	margin-bottom: 30px;
}
.categorie_filter {
	padding: 0 22px;
}
.categorie_filter ul li input[type="radio"] {
	display: none;
}
.ca_search_filters input {
	background: none;
	border: none;
	height: inherit;
	color: #666;
	font-size: 12px;
	width: 120px;
}
.ca_search_filters #slider-range {
	margin-bottom: 22px;
	background: #e5e5e5;
	border-radius: 0;
	border: none;
	height: 8px;
	margin-top: 12px;
}

.ui-slider-horizontal .ui-slider-range {
	background: #f59d1f;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
	border: 1px solid #f59d1f;
	background: #f59d1f;
	font-weight: bold;
	color: #f59d1f;
	width: 16px;
	height: 16px;
	border-radius: 0;
    cursor: ew-resize;
}

/*categorie paoduct css here*/
.categorie__name h2,.categorie__name span {
	font-size: 28px;
	font-weight: 900;
	color: #333333;
	text-transform: uppercase;
	margin-bottom: 0;
}
.categorie__name span {
	font-size: 13px;
	float: right;
    line-height: 40px;
}
.categorie_product_toolbar p {
	color: #555;
	background: #ddd;
	display: inline-block;
	float: right;
	background: #f5f5f5;
	line-height: 36px;
	padding: 0 15px;
}
.categorie_product_toolbar form {
	display: inline-block;
	margin-left: 100px;
}
.categorie_product_toolbar form .nice-select {
	line-height: 35px;
	float: right;
	border: 1px solid #ddd;
	margin-left: 25px;
}

.categorie_product_toolbar form label {
	text-transform: uppercase;
	font-size: 14px;
	line-height: 35px;
	font-weight: 700;
}
.categorie_product_toolbar {
	border-bottom: 3px solid <?php echo $color ?>;
	padding-bottom: 10px;
}
.categorie_product_button ul li a {
	color: #999;
	font-size: 16px;
}
.categorie_product_button ul li a {
	color: #999;
	font-size: 16px;
	width: 38px;
	height: 38px;
	display: block;
	text-align: center;
	line-height: 38px;
	margin-right: 5px;
}
.categorie_product_button ul li a.active,.categorie_product_button ul li a:hover {
	background: <?php echo $color ?>;
	color: #fff;
}
.categorie_product_button {
	display: inline-block;
}
.single_product.categorie {
	margin-bottom: 20px;
}
.product_action.action_categorie {
	position: none;
	position: inherit;
	opacity: inherit;
	visibility: visible;
	margin-top: 22px;
	display: inline-block;
	margin-bottom: 0;
}
.categorie_product_toolbar .nice-select ul.list {
	overflow: auto;
	max-height: 250px;
	width: 200px;
}
.product_action.action_categorie ul li {
	display: inline-block;
	margin-right: 5px;
}
.product_action.action_categorie > ul > li {
	margin-bottom: 2px;
}
.product_in_stock span {
	display: inline-block;
	color: #fff;
	font-weight: 600;
	padding: 5px 15px;
	margin-bottom: 20px;
	background: #333;
	line-height: 20px;
	border-radius: 5px;
}
.small_product_name.categorie_name a {
	color: #444;
	font-weight: 700;
	font-size: 17px;
	margin-bottom: 5px;
	display: block;
}
.single__product_drsc p {
	color: #666666;
	line-height: 22px;
	margin-bottom: 15px;
}
.quick_view.categorie_view {
	left: 20%;
}
.single_product:hover .quick_view.categorie_view {
	left: 44%;
	left: ;
}
.product_banner.product_banner_two.fix.mb-30 {
	margin-top: 30px;
}

.page_numbers_toolbar ul li {
  display: inline-block;
}
.page_numbers_toolbar ul li a {
  background: #e5e5e5;
  color: #444;
  display: inline-block;
  font-size: 13px;
  font-weight: 700;
  line-height: 30px;
  width: 32px;
  height: 30px;
  text-align: center;
    text-transform: uppercase;
}
.page_numbers_toolbar {
	text-align: center;
	margin-top: 10px;
	margin-bottom: 40px;
}
.page_numbers_toolbar ul li a.current_page,.page_numbers_toolbar ul li a:hover,.page_numbers_toolbar ul li a.next_page {
	background: <?php echo $color ?>;
	color: #fff;
}
.page_numbers_toolbar ul li a.next_page {
	width: 55px;
    position: relative;
}
.page_numbers_toolbar ul li a.next_page::before {
	position: absolute;
	content: "";
	height: 30px;
	width: 11px;
	border-left-color: <?php echo $color ?>;
	border-width: 15px 0 15px 11px;
	border-style: solid;
	left: 100%;
}
.row.cate_tab_product {
	min-width: 100%;
}

.categories_menu_inner.categorie_sidebar_inner ul li ul.categories_mega_menu {
	right: 120%;
	left: auto;
}
.categories_menu_inner.categorie_sidebar_inner ul li ul.categories_mega_menu.open{
    right: 100%;
}
/* shop page css end*/


/* 8. product details css here*/
.product_d_tab_button {
	width: 25%;
	float: left;
}
.tab-content.product_d_content {
	width: 75%;
	float: left;
	border: 1px solid #ddd;
}
.modal_tab_img {
	position: relative;
}
.view_img {
	position: absolute;
	bottom: 30px;
	left: 0;
	right: 0;
	text-align: center;
}

.view_img a,.view_video a {
	font-weight: 700;
	background: rgba(255,255,255,0.5);
	line-height: 22px;
	color: #777676;
	padding: 10px 0;
	width: 139px;
	display: inline-block;
	-webkit-box-shadow: 0 2px 8px rgba(0,0,0,0.16);
	box-shadow: 0 2px 8px rgba(0,0,0,0.16);
}

.product_d_color ul li a {
	width: 26px;
	height: 27px;
	display: inline-block;
	line-height: 34px;
}
.product_d_color ul li {
	display: inline-block;
	border: 1px solid #ddd;
	line-height: 12px;
	padding: 1px;
}
.product_d_color ul li a.p_yellow {
	background: rgb(241, 196, 15) none repeat scroll 0% 0%;
}
.product_details_tab_button ul li a {
	display: block;
	padding: 10px 30px;
	float: left;
	text-transform: uppercase;
	color: #5b5b5b;
	font-size: 16px;
	font-weight: 700;
    position: relative;
}
.product_details_tab_button ul li a::before {
	content: "";
	width: 18px;
	height: 44px;
	border: 21px solid transparent;
	border-left-color: transparent;
	border-left-style: solid;
	border-left-width: 20px;
	border-left: 20px solid transparent;
	position: absolute;
	top: 0px;
	right: -40px;
	-webkit-transition: .5s;
	transition: .5s;
}
.product_details_tab_button {
	border-bottom: 3px solid <?php echo $color ?>;
}
.product_details_tab_button ul li a:hover,.product_details_tab_button ul li a.active{
    
    background: <?php echo $color ?>;
    color: #fff;
}
.product_details_tab_button ul li a.active::before{
    border-left: 20px solid <?php echo $color ?>;
}
.product_details_tab_button ul li a:hover::before {
    border-left: 20px solid <?php echo $color ?>;
}
.product_details_tab_inner {
	border: 1px solid #ddd;
}
.product_d_table {
	padding: 20px 30px;
}
.product_d_table table {
	width: 100%;
}
.product_d_table table tbody tr {
	border-bottom: 1px solid #ddd;
}
.product_d_table table tbody tr td:first-child {
	border-right: 1px solid #ddd;
	width: 30%;
	font-weight: 700;
}
.product_d_table table tbody tr td {
	padding: 7px 17px;
}
.product_d_table table {
	border-top: 1px solid #ddd;
}
.product_d_tab_content {
	padding: 20px 30px 10px;
}
.product_d_tab_content p {
	font-size: 13px;
	line-height: 22px;
}
.product_d_tab_content_inner {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	padding: 0 30px 12px;
}

.product_review_form {
	padding: 0 30px 30px;
}

.product_review_form h2 {
	font-size: 20px;
	text-transform: uppercase;
	color: #555;
	font-weight: 700;
	margin-bottom: 10px;
}
.samll_product_ratting.review_rating {
	margin-bottom: 12px;
}
.review_form_comment textarea {
	background: none;
	border: 1px solid #dddd;
	height: 120px;
	resize: none;
}
.review_form_comment {
	margin-bottom: 10px;
}
.review_form_author input {
	background: none;
	border: 1px solid #ddd;
}
.review_form_author {
	margin-bottom: 15px;
}
.product_review_form button {
	border: none;
	background: #333;
	color: #fff;
	text-transform: uppercase;
	font-weight: 700;
	padding: 5px 15px;
	display: block;
	border-radius: 5px;
    transition: .3s;
    cursor: pointer;
}
.product_review_form button:hover{
    background: <?php echo $color ?>;
}
.samll_product_ratting ul li a.comment_form {
	color: #555;
	font-weight: 500;
}
.product_d_tab_content_item strong, .product_d_tab_content_item p {
	margin-bottom: 5px;
	display: block;
}
.details_s_product_active.owl-carousel .col-lg-4,.details_s_product_active.owl-carousel .col-lg-3 {
	min-width: 100%;
	-webkit-box-flex: 100%;
	-ms-flex: 100%;
	flex: 100%;
}
.product_details_s_product_inner {
	border: 1px solid #ddd;
}
.details_s_product_active {
	padding: 0 10px;
}
.product_d_right h1 {
	color: #333333;
	text-transform: uppercase;
	font-size: 28px;
	line-height: 1;
	font-weight: 900;
	margin-bottom: 15px;
}
.product_reference p,.product_condition p {
  color: #919191;
}
.product_reference p span,.product_condition p span {
  color: <?php echo $color ?>;
}
.product_d_quantity {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}
.product_d_quantity input {
	width: 70px;
	border: 1px solid #ddd;
	background: none;
	padding: 0 12px;
	height: 40px;
}
.product_d_quantity form {
	margin-right: 50px;
}
.product_d_quantity button {
	background: <?php echo $color ?>;
	font-size: 14px;
	font-weight: 900;
	color: #fff;
	text-transform: uppercase;
	border: none;
	height: 40px;
	padding-right: 15px;
	padding-left: 0;
	-webkit-transition: .3s;
	transition: .3s;
	cursor: pointer;
	line-height: 40px;
}
.product_d_quantity button:hover{
    background: #d12c2e;
}
.product_d_quantity button i {
	width: 50px;
	background: #d12c2e;
	height: 100%;
	line-height: 41px;
	margin-right: 8px;
}
.product_d_size .nice-select {
	display: inline-block;
	border: 1px solid #ddd;
	height: 25px;
	line-height: 25px;
}
.product_d_size,.product_d_color {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}
.product_d_size label,.product_d_color label {
	color: #919191;
	font-weight: 700;
	margin-right: 20px;
}
.product_in_stock p {
	display: inline-block;
	font-style: italic;
	margin-right: 20px;
}
.product_d_social ul li{
    display: inline-block;
}
.product_d_social ul li a {
	padding: 6px 12px;
	display: block;
	border: 1px solid #ddd;
	font-size: 13px;
}
.product_d_social ul li a i{
    color: #e04b34;
}
.product_d_social ul li a:hover i{
    color: #fff;
}
.product_d_social ul li a:hover{
    background: #e04b34;
    color: #fff;
    border-color: #e04b34;
}
.details_s_product_active.owl-carousel .owl-nav div {
	top: -47px;
	right: 65px;
}
.details_s_product_active.related_product.owl-carousel .owl-nav div {
	top: -56px;
}
.details_s_product_active.owl-carousel .owl-nav div.owl-next {
	right: 40px;
}
/*product details css end*/


/* 9. portfolio page css here*/
.breadcrumbs_area {
	margin-bottom: 30px;
}

.breadcrumb_header a {
	display: inline-block;
	color: #333;
	margin-right: 15px;
	font-size: 16px;
	line-height: 34px;
}
.breadcrumb_header a:hover,.portfolio__content > a:hover{
    color: #e04b34;
}
.breadcrumb_header span {
	color: #333;
	margin-right: 15px;
	text-transform: capitalize;
}
.breadcrumb_title h2 {
	font-size: 24px;
	font-weight: 800;
	margin: 10px 0 0;
	text-transform: uppercase;
	line-height: 40px;
}
.portfolio_button {
	padding: 65px 0;
	background: #f5f5f5;
	margin-bottom: 30px;
}
.portfolio_tab_button ul li {
    display: inline-block;
}
.portfolio_tab_button {
	text-align: center;
}
.portfolio_thumb {
	position: relative;
}
.portfolio_popup{
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	text-align: center;
	-webkit-transform: translatey(-50%);
	transform: translatey(-50%);
}
.portfolio_link {
	position: absolute;
	top: 50%;
	text-align: center;
	-webkit-transform: translatey(-50%);
	transform: translatey(-50%);
	right: 15px;
	height: 60px;
	width: 60px;
	background-color: rgba(1,98,189,1.00);
	border: 3px solid #fff;
	border-radius: 50%;
    -webkit-transition: .3s;
    transition: .3s;
    opacity: 0;
}
.portfolio_popup a {
	font-size: 16px;
	line-height: 22px;
	color: #ffffff;
	font-weight: 400;
	border-radius: 50%;
	background-color: rgba(1,98,189,1.00);
	display: inline-block;
    text-align: center;
    -webkit-transition: .3s;
    transition: .3s;
    opacity: 0;
    padding: 0;
}
.single_portfolio_inner:hover .portfolio_link{
    top: 80%;
    opacity: 1;
}
.single_portfolio_inner:hover .portfolio_popup a {
	opacity: 1;
	padding: 15px 18px;
}
.portfolio_popup a:hover,.portfolio_link:hover{
    background: #e04b34;
}
.portfolio_link a {
	color: #ffffff;
	font-size: 16px;
	line-height: 56px;
	display: block;
}
.portfolio__content > a {
	font-size: 17px;
	color: #000000;
	font-weight: 700;
	display: block;
	line-height: 29px;
}
.portfolio__content span {
	color: #71a9d0;
	text-transform: capitalize;
	font-weight: 400;
}

.portfolio__content {
	background: #f5f5f5;
	padding: 15px 20px;
	opacity: 0;
	visibility: hidden;
	position: absolute;
	z-index: 999;
	width: 100%;
	-webkit-transition: .3s;
	transition: .3s;
}
.single_portfolio_inner:hover .portfolio__content{
    opacity: 1;
    visibility: visible;
}
.portfolio_thumb::before {
	position: absolute;
	content: "";
	width: 100%;
	height: 100%;
	background: #000;
	opacity: 0;
    -webkit-transition: .3s;
    transition: .3s;
}
.single_portfolio_inner:hover .portfolio_thumb::before{
    opacity: 0.5;
}

.portfolio_section_area {
	padding-bottom: 56px;
}
.single_portfolio_inner {
	position: relative;
	margin-bottom: 30px;
}
.portfolio_tab {
	padding: 0 15px;
}
.portfolio_tab_button button {
	color: #666;
	background: #fff;
	border-right: 2px solid #f5f5f5;
	line-height: 45px;
	padding: 0 30px;
	font-size: 13px;
	text-transform: capitalize;
	font-weight: 700;
	position: relative;
	display: inline-block;
	border: none;
	cursor: pointer;
	-webkit-transition: .3s;
	transition: .3s;
}
.portfolio_tab_button button::before{
    content: "";
    display: block;
    position: absolute;
    top: 2px;
    right: 2px;
    border-color: transparent;
    border-width: 5px;
    border-style: solid;
    border-top-color: #fff;
    border-right-color: #fff;
    -webkit-transition: .3s;
    transition: .3s;
}
.portfolio_tab_button button.active,.portfolio_tab_button button:hover{
    color: #fff;
    background: #0162bd;
}
.portfolio_thumb img {
	width: 100%;
}
/*portfolio page css end*/





/* 10. about page css here*/
.container-fluid.about_container,.container-fluid.counter,.container-fluid.services_container {
	padding-left: 0;
	padding-right: 0;
}

.about_content {
	padding: 0 50px 0;
    text-align: center;
}
.about_content h1 {
	font-weight: 900;
	line-height: 40px;
	text-transform: uppercase;
	color: #222222;
	font-size: 28px;
	margin-bottom: 20px;
}
.about_content p {
	color: #666666;
	font-size: 15px;
	line-height: 24px;
	margin-bottom: 15px;
}
.view__work {
	text-align: center;
	margin-top: 35px;
}
.view__work a {
  color: #666666;
  border: 1px solid #2f2f2f;
  height: 40px;
  font-size: 13px;
  font-weight: 700;
  line-height: 18px;
  padding: 10px 15px;
  display: inline-block;
    text-transform: uppercase;
}
.view__work a i,.advantages_button a i {
	margin-left: 5px;
}
.about_section_aera {
	margin-bottom: 40px;
}
.view__work a:hover{
    background: <?php echo $color ?>;
    color: #fff;
    border-color: <?php echo $color ?>;
}
.single_counterup {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	padding: 88px 0 80px;
	background: #f3f3f3;
}
.counter_info h2 {
	font-size: 30px;
	font-weight: bold;
	color: #2f2f2f;
	margin-bottom: 5px;
	line-height: 33px;
	margin-bottom: 0;
}
.counter_info p {
	font-size: 12px;
	text-transform: uppercase;
	font-weight: bold;
	color: #2f2f2f;
	margin-bottom: 0;
	line-height: 24px;
}
.counter_img {
	margin-right: 25px;
}
.single_counterup.count-two {
	background: #e8e8e8;
}
.progress_skill {
	position: relative;
	margin-bottom: 40px;
}
.progress_skill:last-child{
    margin-bottom: 0;
}
.progress_skill span.progress_discount {
	position: absolute;
	left: -2px;
	background: #3e3e3e;
	border-radius: 100%;
	border: 3px solid #a0a0a0;
	color: #fff;
	width: 40px;
	height: 40px;
	top: 50%;
	-webkit-transform: translatey(-50%);
	transform: translatey(-50%);
	text-align: center;
	line-height: 35px;
    z-index: 9;
}
.progress-bar.about_prog {
	background-color: rgb(123, 123, 123);
	border-radius: 3px;
}
.progress-bar.about_prog span.progress_persent {
	position: absolute;
	left: 50px;
    text-transform: uppercase;
}
.progressbar_inner h2 {
	font-size: 25px;
	color: #444444;
	margin-bottom: 40px;
	font-weight: 400;
	line-height: 18px;
}
.about_progressbar.mb-50 {
	margin-bottom: 25px;
}
.about_section_aera.about_two {
	margin-bottom: 30px;
}
.about_progressbar.about_p_two.mb-50 {
	margin-bottom: 50px;
}

/*about page css end*/


/* 11. services page css here*/
.services_content h3 {
	font-size: 15px;
	color: #222222;
	text-transform: uppercase;
	font-weight: 900;
	margin-bottom: 5px;
}
.services_thumb {
	margin-bottom: 30px;
}
.services_content p {
	color: #666666;
	font-size: 13px;
	font-weight: 400;
	line-height: 24px;
	margin-bottom: 0;
}
/*our services css here*/
.services_section_title {
	text-align: center;
	margin-bottom: 70px;
}
.services_item {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}
.services_icone i {
	font-size: 35px;
	line-height: 46px;
	color: #4fc1f0;
}
.services_icone {
	margin-right: 15px;
}
.our_services {
	background: #2d313c;
	padding-top: 80px;
}
.services_desc h3 {
	font-size: 13px;
	color: #c6c6c6;
	font-weight: 700;
}
.services_desc p, .services_section_title p {
	color: #aaa;
	font-size: 13px;
	font-weight: 500;
	line-height: 24px;
	margin-bottom: 0;
}
.services_section_title p{
    font-style: italic;
}
.services_section_title h2 {
	color: #ffff;
	font-size: 30px;
	text-transform: uppercase;
	font-weight: 700;
	margin-bottom: 20px;
}
.services_item {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	margin-bottom: 83px;
}
.about_content.services_section {
	padding: 0 80px;
}

/*priceing table css here*/
.priceing_header {
	padding: 20px;
	background: #ef686a;
}
.priceing_header h1 {
	color: #fff;
	font-size: 14px;
	font-weight: 600;
	text-transform: uppercase;
	margin-bottom: 0;
}
.priceing_table_inner {
	padding: 0 20px 40px;
}
.single_priceing {
	background: #fff;
	border-radius: 3px;
	-webkit-box-shadow: 0 1px #FFFFFF inset, 0 1px 3px rgba(34,25,25,0.4);
	box-shadow: 0 1px #FFFFFF inset, 0 1px 3px rgba(34,25,25,0.4);
	text-align: center;
}
.priceing_table {
	padding: 90px 0;
	background: #f6f6f6;
}
.priceing_price h1 {
	font-size: 12px;
	font-weight: bold;
	text-transform: uppercase;
	padding: 50px 0;
	margin: 0;
	line-height: 20px;
}
.priceing_price h1 span {
	font-size: 48px;
}
.priceing_list ul li {
	color: #666666;
	padding: 15px 0;
	border-bottom: 1px solid #f1f0f0;
    line-height: 24px;
}
.priceing_list ul li:first-child{
    border-top: 1px solid #f1f0f0;
}
.purchase_now a {
	margin: 40px 0 0;
	line-height: 40px;
	padding: 0 20px;
	border: 1px solid #2f2f2f;
	color: #2f2f2f;
	display: inline-block;
	font-size: 12px;
	font-weight: 700;
	text-transform: uppercase;
}
.purchase_now a:hover,.purchase_now a.button,.blog_social_sharing ul li a:hover,.widget_search_bar form button:hover,.comment__form form button:hover{
    background: <?php echo $color ?>;
    border-color: <?php echo $color ?>;
    color: #fff;
}
.purchase_now {
	height: 80px;
}
.advantages_wordpress {
	background: #fbaf5d;
	padding: 60px 0;
}
.advantages_content h3 {
	font-size: 30px;
	color: #ffffff;
	font-weight: 600;
	text-transform: capitalize;
}
.advantages_content p {
	font-size: 14px;
	color: #fff;
	font-style: italic;
	font-weight: 400;
}

.advantages_button {
  text-align: center;
}
.advantages_button a {
  font-size: 14px;
  color: #fff;
  padding: 10px 20px;
  display: inline-block;
  border: 2px solid #fff;
}
.advantages_button a:hover {
  background: #fff;
  color: #444444;
}
.comment__form {
	margin-bottom: 40px;
}

/*services page css end*/


/*12. about page 2 css here*/
.about_content.about_c_two {
	margin-bottom: 26px;
}
.about_content.about_c_two h1 {
	margin-bottom: 8px;
	line-height: 32px;
	font-size: 26px;
}
.about_content_two_inner {
	padding: 13px 100px 0;
}
.about__img.about_img_two {
	text-align: center;
}
.container-fluid.about__two {
	padding-left: 0;
	padding-right: 0;
}
.progressbar_inner.prog_inner_two {
	padding: 0 120px;
}
/*about page two css end*/


/*blog page css here*/
.blog__title span a {
	color: #999;
	text-decoration: underline;
	font-size: 12px;
	font-weight: 700;
	text-transform: uppercase;
	padding: 0 10px;
	margin-bottom: 10px;
	display: inline-block;
	line-height: 16px;
}
.blog__title span a:hover {
	color: <?php echo $color ?>;
}
.blog__title h2 {
	font-size: 20px;
	font-weight: 400;
	text-transform: capitalize;
	margin: 15px 0;
}
.blog__title h2 a{
    color: <?php echo $color ?>;
}
.blog__title {
	text-align: center;
}
.blog__title h2 img {
	margin-right: 12px;
}
.blog__post ul li {
  display: inline-block;
  color: #8c8c8c;
  display: inline-block;
  font-size: 12px;
  padding-right: 15px;
  margin-right: 15px;
  border-right: 1px solid #8c8c8c;
}
.blog__post ul li:last-child {
  margin: 0;
  padding: 0;
  border: none;
}
.blog_content.blog__desc {
	text-align: center;
}
.blog_content.blog__desc > a {
	background: <?php echo $color ?>;
	border: 0;
	color: #fff;
	font-weight: 700;
	font-size: 12px;
	margin: 0 0 27px;
	display: inline-block;
	padding: 10px 15px;
	text-transform: uppercase;
	line-height: 20px;
}

.blog_social_sharing ul li,.blog_social_sharing ul li,.blog_social_sharing ul,.blog_social_sharing h3 {
  display: inline-block;
}
.blog_social_sharing h3 {
	font-size: 12px;
	line-height: 26px;
	margin: 0 20px 0 0;
	text-transform: uppercase;
	font-weight: 700;
	color: #8c8c8c;
}
.blog_social_sharing ul li a {
	font-size: 14px;
	line-height: 26px;
	height: 26px;
	width: 26px;
	text-align: center;
	color: #353535;
	margin-right: 10px;
	background: #f7f7f7;
	display: block;
	border-radius: 50%;
}
.blog_content.blog__desc > a:hover{
    background: #333;
}
.blog_content.blog__desc p {
	font-size: 16px;
}
.singli_blog_wrapper {
	padding-bottom: 30px;
	border-bottom: 1px solid #ddd;
}

/*13. blog  sidebar css here*/
.widget_search_bar form {
	padding: 20px;
	border: 1px solid #e5e5e5;
}
.widget_search_bar form input {
	background: none;
	height: 35px;
	border: 1px solid #ddd;
	border-radius: 5px;
	margin-bottom: 10px;
	padding: 0 15px;
}
.widget_search_bar form button,.comment__form form button,.review__form form button {
	background: #444;
	border-radius: 4px;
	color: #fff;
	border: none;
	width: 100%;
	font-size: 16px;
	height: 32px;
    cursor: pointer;
    -webkit-transition: .3s;
    transition: .3s;
}
.widget_search_bar h3, .widget_tweets h3, .widget__categorie h3 {
	font-size: 24px;
	text-transform: capitalize;
	margin-bottom: 20px;
	font-weight: 700;
	color: #222222;
}

.tweets_display {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.tweets_display.recent.mb-30 {
	margin-bottom: 15px;
}
.tweets_display.recent.mb-30:last-child {
	margin-bottom: 0;
}
.tweets_img {
  margin-right: 15px;
}
.tweets_text a, .tweetlink a {
	color: #555;
	font-size: 14px;
	text-transform: capitalize;
}
.tweets_text a.tweet_name {
	font-size: 14px;
	font-weight: 700;
	color: #222222;
}
.tweets_text a.tweet_name:hover,.tweets_text span a:hover,.tweetlink a:hover {
    color: <?php echo $color ?>;
}
.tweets_img.comments img,.tweets_img.comments img:hover{
	border: none;
}

.tweetlink {
	margin-top: 5px;
}
.tweets_img img {
	width: 65px;
}
.tweet_button a {
	background: #1b95e0;
	color: #fff;
	font-size: 12px;
	padding: 2px 5px;
	border-radius: 5px;
}
.widget__categorie ul.widget__categoie_list {
	border: 1px solid #e5e5e5;
	padding: 18px 15px;
}
.widget__categorie ul li a {
	color: #666;
	display: inline-block;
	font-size: 13px;
	font-weight: 400;
	position: relative;
	padding: 0 20px;
    text-transform: capitalize;
}
.widget__categorie ul li a::before {
	position: absolute;
	content: "";
	height: 12px;
	width: 12px;
	border: 1px solid #e5e5e5;
	margin-right: 8px;
	left: 0;
	top: 6px;
}
.widget__categorie ul li a::after{
    position: absolute;
    content: "\f00c";
    font-family: FontAwesome;
    display: block;
    left: 0;
    top: 0;
    color: #41fd07;
    opacity: 0;

}
.widget__categorie ul li a:hover::after{
    opacity: 1;
}
.widget__categorie ul li a:hover{
     color: <?php echo $color ?>;
}
.widget__categorie ul li {
	margin-bottom: 10px;
}
.widget__categorie ul li:last-child {
	margin-bottom: 0;
}
.tweetlink.favorite {
	margin-top: 0;
}
.tweetlink.favorite a {
	font-size: 12px;
}
.widget_blog_small_thumb {
	padding: 25px 15px;
	border: 1px solid #ddd;
}
.widget_tweets.small_thumb.mb-30 h3 {
	font-size: 24px;
}
.tweets_img img {
	border: 2px solid transparent;
}
.tweets_img img:hover {
	border: 2px solid <?php echo $color ?>;
}

.blog_bideo_icone {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  text-align: center;
}
.blog_bideo_icone i {
  width: 60px;
  height: 45px;
  background: <?php echo $color ?>;
  color: #fff;
  line-height: 45px;
  font-size: 25px;
  border-radius: 10px;
}

.blog_aduio_icone audio {
	width: 100%;
	border-radius: 5px;
}
.blog_thumb_active.owl-carousel .owl-nav div {
	position: absolute;
	top: 40%;
	left: 50px;
	color: #fff;
	font-size: 20px;
	width: 30px;
	height: 30px;
    line-height: 30px;
	text-align: center;
	border-radius: 50%;
	-webkit-transform: translatey(-50%);
	transform: translatey(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    visibility: hidden;
    -webkit-transition: .3s;
    transition: .3s;
}
.blog_thumb_active.owl-carousel:hover .owl-nav > div {
	opacity: 1;
    visibility: visible;
    top: 50%;
}
.blog_thumb_active.owl-carousel .owl-nav div.owl-next{
    right: 50px;
    left: auto;
}
.blog_thumb_active.owl-carousel .owl-dots .owl-dot {
	width: 10px;
	height: 10px;
	background: #fff;
	display: inline-block;
	margin: 0 2px;
	border-radius: 50%;
}
.blog_thumb_active.owl-carousel .owl-dots {
	position: absolute;
	top: 50%;
	-webkit-transform: translatey(-50%);
	transform: translatey(-50%);
	text-align: center;
	left: 46%;
}
.blog_thumb_active.owl-carousel .owl-dots .owl-dot.active {
	background: <?php echo $color ?>;
}

/* 14. blog details css here*/
.blog_entry_meta ul li {
	display: inline-block;
	text-transform: uppercase;
	font-size: 13px;
	color: #9999;
}
.blog_entry_meta ul li a {
	color: #999;
}
.blog_entry_meta {
	padding: 15px 0;
	border-top: 1px solid #ddd;
	border-bottom: 1px solid #ddd;
}
.singli_blog_wrapper.gallery.mb-40 {
	border: none;
	padding-bottom: 0;
	margin-bottom: 33px;
}
.blog_entry_content p {
	color: #666666;
	font-size: 15px;
	line-height: 22px;
	margin-bottom: 20px;
}
.blog_entry_content p.blockquote {
	color: #555;
	font-size: 18px;
	font-style: italic;
	margin: 40px 0 40px 0;
	padding: 0 0 0 10px;
	border-left: 5px solid <?php echo $color ?>;
	line-height: 26px;
}

.single_comment_input {
	width: 30.33%;
	float: left;
}
.single_comment_input.middle {
	margin: 0 30px;
}

.comment__form form button {
	width: 150px;
	font-size: 12px;
	text-transform: uppercase;
	font-weight: 700;
	height: 45px;
}
.comment__form.portfolio_c form button {
	border-radius: 0;
}
.comments__title h3 {
	font-size: 18px;
	text-transform: capitalize;
	padding: 20px 0;
	border-bottom: 1px solid #ddd;
	margin-bottom: 20px;
	font-weight: 700;
	color: #222222;
}
.comment__form form textarea,.single_comment_input input{
	background: none;
	border: 1px solid #ddd;
	margin-bottom: 30px;
}
.comment__form form textarea {
	height: 200px;
	resize: none;
}
.blog_social_sharing.gallery_social {
	text-align: center;
	padding-top: 30px;
}
.main_blog_area.port_deatils {
	padding-bottom: 20px;
}

.audio_comments_title h3 {
	text-transform: uppercase;
	border-bottom: 1px solid #e5e5e5;
	font-size: 13px;
	font-weight: 700;
	color: #222222;
    padding-bottom: 20px;
}
.blog__page_content.comments_rp {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: justify;
	-ms-flex-pack: justify;
	justify-content: space-between;
}
.comments_reply a {
	color: #333;
	background: #ebebeb;
	padding: 7px 18px;
	border-radius: 5px;
}
.comments_reply a:hover{
    background: <?php echo $color ?>;
    color: #fff
}
/*blog page css end*/


/*shop fullwidth css here*/
.shop_fullwidth_img {
	text-align: center;
	margin-top: 19px;
}


/* 15. single product css here*/
.breadcrumb_header.product_bread ul li {
  display: inline-block;
}
.breadcrumb_header.product_bread ul {
  display: inline-block;
}
.breadcrumb_header.product_bread > ul > li > i {
  margin-right: 15px;
}
.breadcrumb_header.product_bread > ul > li > a,.breadcrumb_header.product_bread ul li  {
  color: #333;
  font-size: 13px;
}
.breadcrumb_header.product_bread > ul > li > a:hover {
  color: <?php echo $color ?>;
}
.product_d_tab_button.single_product ul li {
	border: 1px solid #ddd;
	margin-bottom: 7px;
}
.product_d_tab_button.single_product {
	width: 16%;
	margin-right: 25px;
}
.tab-content.product_d_content.single_desc {
	width: 79%;
}
.small_product_price.mb-15 span.regular_price {
	font-size: 26px;
}
.product_out_stock.mb-10 p {
	font-style: italic;
}
.product_out_stock.mb-15 p i {
	color: #fa0001;
}
.product_d_social.single_p_d.mb-40 ul li {
  font-weight: 700;
}
.product_d_social.single_p_d.mb-40 ul li a {
  font-weight: 400;
}

.blog__page_content.single_page_product {
	padding: 20px 200px;
}
.blog_inner_page__content {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: justify;
	-ms-flex-pack: justify;
	justify-content: space-between;
	border: 1px solid #ddd;
	padding: 15px;
}
.blog__page_content.single_page_product h2,.review__form h3 {
	font-size: 20px;
	font-weight: 700;
	margin-bottom: 20px;
}
.review__form form textarea {
	height: 90px;
	background: none;
	border: 1px solid #ddd;
	resize: none;
	margin-bottom: 10px;
}
.review__form form button {
	width: 103px;
}
.review__form form button:hover {
	background: <?php echo $color ?>;
}
.single_product__wrapper {
	padding: 10px 20px;
}
/*single product css end*/

/*varibale product css start*/
.product_varibale_size.mb-20 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}


.product_varibale_size.mb-20 .nice-select {
  line-height: 28px;
  border: 1px solid #ddd;
  margin-left: 20px;
}
.product_varibale_size.mb-20 a {
	color: #666666;
	margin-left: 20px;
}
.samll_product_ratting.varibale_ratting.mb-15,.small_product_price.varibale_price {
	padding-bottom: 15px;
	border-bottom: 1px solid #ddd;
}
.product_d_social.varibale_social ul li a {
	border: none;
	padding: 0 5px;
}
.product_d_social.varibale_social ul li a:hover{
    color: <?php echo $color ?>;
    background: none;
}


.additional_table {
	padding: 30px 30px;
}
.additional_table h2 {
  font-size: 16px;
  font-weight: normal;
  margin: 0 0 20px;
  text-transform: uppercase;
}
.additional_table form {
  border: 1px solid #ddd;
}
.additional_table form table tbody tr th {
	width: 150px;
	text-align: center;
	line-height: 30px;
	padding: 9px 0;
	border-right: 1px solid #ddd;
}
.additional_table form table tbody tr td {
	padding: 9px 30px;
	color: #666666;
	font-style: italic;
	font-size: 15px;
}
/*varibale product css end*/


/*16. contact page css here*/
.contact_title h2 {
	font-size: 25px;
	font-weight: 400;
	text-transform: capitalize;
	color: #222222;
	margin-bottom: 15px;
}
.breadcrumbs_area.contact_bread.contact {
	margin-bottom: 40px;
}
.contact_message form input,.contact_textarea textarea {
	background: none;
	border: 1px solid #ddd;
	margin-bottom: 20px;
}
.contact_textarea textarea {
	height: 120px;
	resize: none;
}
.contact_message form button {
	line-height: 42px;
	padding: 0 30px;
	background: <?php echo $color ?>;
	border: none;
	color: #fff;
	text-transform: uppercase;
	font-weight: 700;
	cursor: pointer;
	-webkit-transition: .3s;
	transition: .3s;
}
.contact_message form button:hover{
    background: #999;
}
.contact_title h4 {
	font-size: 25px;
	text-transform: capitalize;
	color: #222222;
	font-weight: 400;
	margin-bottom: 20px;
}
.contact_info ul li {
	padding: 10px 0;
	border-top: 1px solid #e4e4e4;
}
.contact_info ul li i {
	width: 40px;
	height: 40px;
	text-align: center;
	line-height: 40px;
}
.contact_info ul li a {
	color: <?php echo $color ?>;
}

.contact_info.mb-15 h3 {
	font-size: 25px;
	color: #222222;
}
/*contact page css end*/


/*17. contact two css here*/
.contact_title.contact_two h2 {
	font-size: 30px;
	font-weight: 900;
	text-transform: uppercase;
	margin-bottom: 25px;
}
.contact_title.contact_two p {
	font-size: 13px;
	font-style: italic;
}
.contact_title.contact_two {
	text-align: center;
	margin-bottom: 40px;
}


.location__area {
  text-align: center;
}
.location_icone {
  display: inline-block;
  position: relative;
  width: 100px;
  height: 100px;
  line-height: 100px;
  border: 3px solid <?php echo $color ?>;
  border-radius: 50%;
}
.location_icone::before {
	font-style: normal;
    font-weight: 400;
    display: inline-block;
    text-decoration: inherit;
    width: inherit;
    height: inherit;
    font-size: 1em;
    text-align: center;
    text-rendering: optimizelegibility;
}
.location_icone i {
	color: #fff;
	font-size: 30px;
}
.location_icone::after {
	pointer-events: none;
	position: absolute;
	width: 100%;
	height: 100%;
	border-radius: 50%;
	content: '';
    z-index: -1;
	-webkit-box-sizing: content-box;
	box-sizing: content-box;
	top: -2px;
	left: -2px;
	padding: 2px;
	background: <?php echo $color ?>;
	-webkit-transition: opacity 0.2s, -webkit-transform 0.2s;
	transition: opacity 0.2s, -webkit-transform 0.2s;
	transition: transform 0.2s, opacity 0.2s;
	transition: transform 0.2s, opacity 0.2s, -webkit-transform 0.2s;
}
.location_icone:hover::after{
    -webkit-transform: scale(0.85);
    transform: scale(0.85);
    background: <?php echo $color ?>;
}
.location_icone {
	display: inline-block;
	position: relative;
	width: 100px;
	height: 100px;
	line-height: 100px;
	border: 3px solid <?php echo $color ?>;
	border-radius: 50%;
	margin-bottom: 35px;
}
.location__area h2 {
	font-size: 20px;
	margin: 0 0 25px;
	text-transform: capitalize;
	color: #222222;
	font-weight: 700;
}
.location__area p {
	font-size: 13px;
}
.communication_area {
	padding: 48px 0 80px;
}
.contact_two_area.mb-40 {
	padding: 90px 0;
	background: #f6f6f6;
}
.contact_message.contact_2 {
	text-align: center;
}

.contact_message.contact_2 h2 {
	font-size: 30px;
	font-weight: 700;
	color: #222222;
	margin-bottom: 50px;
}

/*contact two css end*/


/* 18. error page css here*/
.error_form {
	text-align: center;
	padding: 104px 0 180px;
}
.error_form h1 {
	font-size: 200px;
	font-weight: 900;
	color: <?php echo $color ?>;
	letter-spacing: 10px;
	line-height: 1.1;
	margin: 0 0 30px;
}
.error_form h2 {
	color: #666666;
	font-size: 35px;
	text-transform: uppercase;
	font-weight: 700;
	line-height: 40px;
	margin-bottom: 25px;
}
.error_form p {
	font-size: 22px;
	font-weight: 300;
	line-height: 32px;
	color: #8c8c8c;
	margin-bottom: 30px;
}
.error_form form {
	width: 450px;
	margin: 0 auto;
	position: relative;
    background: #f8f8f8;
    border: 1px solid #e9e9e9;
    border-radius: 30px;
}
.error_form form input {
	background: none;
	border: none;
    padding: 0 30px;
}
.error_form form button {
	position: absolute;
	right: 10px;
	height: 100%;
	border: none;
	background: no-repeat;
	font-size: 20px;
	color: #222222;
	cursor: pointer;
	-webkit-transition: .3s;
	transition: .3s;
	top: 0;
}
.error_form form button:hover{
   color: <?php echo $color ?>; 
}

.error_form a {
	color: #fff;
	display: inline-block;
	background: <?php echo $color ?>;
	border-radius: 35px;
	font-size: 12px;
	font-weight: bold;
	height: 40px;
	line-height: 40px;
	padding: 0 30px;
	text-transform: uppercase;
	margin-top: 60px;
}

.error_form a:hover{
    background: #da1719;
}
/*error page css end*/

/* 19. faq page css start*/
.breadcrumbs_area.contact_bread.faq_bread {
	margin-bottom: 37px;
}
.faq_content_wrapper h4 {
	font-size: 18px;
	color: #222222;
	font-weight: 700;
}
.faq_content_wrapper p {
	font-size: 13px;
	font-weight: 400;
}
.faq_content_wrapper {
	margin-bottom: 30px;
}

.card-header.card_accor button {
	height: 45px;
	text-decoration: none;
	cursor: pointer;
	position: relative;
	white-space: initial;
}
.card-header.card_accor button.btn-link.collapsed {
	background: #f2f2f2;
	border: 1px solid #e5e5e5;
	width: 100%;
	text-align: left;
    color: #666666;
}
.card-header.card_accor {
	padding: 0;
	border: none;
}
.card.card_dipult {
	margin-bottom: 13px;
}
.card.card_dipult {
	border: none;
}
.card-header.card_accor button.btn-link {
	border-left: 1px solid <?php echo $color ?>;
	border-top: 1px solid <?php echo $color ?>;
	width: 100%;
	text-align: left;
	border-right: 1px solid <?php echo $color ?>;
	color: <?php echo $color ?>;
	font-size: 13px;
	border-bottom: 1px solid #e5e5e5;
}
.collapse.show {
	border-left: 1px solid <?php echo $color ?>;
	border-bottom: 1px solid <?php echo $color ?>;
	border-right: 1px solid <?php echo $color ?>;
}
.card-header.card_accor button.btn-link.collapsed i.fa-minus {
	display: none;
}
.card-header.card_accor button.btn-link i.fa-plus {
	display: none;
}
.card-header.card_accor button.btn-link.collapsed i.fa-plus{
    display: block;
}
.card-header.card_accor button i {
	position: absolute;
	top: 50%;
	-webkit-transform: translatey(-50%);
	transform: translatey(-50%);
	right: 20px;
}
.card-body {
	padding: 30px 30px 20px;
}
.accordion_area {
	padding-bottom: 50px;
}
/*faq page css end*/


/* 20. my account page ss here*/
.main_content_area.my_account {
	padding: 10px 0 50px;
}
.login_form form {
	border: 1px solid #d3ced2;
	padding: 20px;
	border-radius: 5px;
}
.login_title h2 {
	font-size: 30px;
	text-transform: capitalize;
	color: #222222;
	font-weight: 700;
	line-height: 34px;
	margin-bottom: 28px;
}
.login_input input {
	border: 1px solid #e5e5e5;
	height: 32px;
	max-width: 100%;
	padding: 0 0 0 10px;
	background: none;
}
.login_input {
	margin-bottom: 15px;
}
.login_submit button,.table_desc.table-responsive  button,.coupon_code_inner button,.table_cart_button button {
	background: #444;
	border: 0;
	color: #fff;
	display: inline-block;
	font-size: 12px;
	font-weight: 700;
	height: 38px;
	line-height: 18px;
	padding: 10px 15px;
	text-transform: uppercase;
	cursor: pointer;
    -webkit-transition: .3s;
    transition: .3s;
}
.login_submit button {
    margin-right: 10px;
}
.login_submit button:hover,.table_desc.table-responsive  button:hover,.coupon_code_inner  button:hover,.table_cart_button button:hover{
    background:  <?php echo $color ?>;
}
.login_submit label input[type="checkbox"] {
	width: inherit;
	height: inherit;
	margin-right: 3px;
}
.login_submit {
	margin-bottom: 15px;
}
.login_form form a {
	font-size: 13px;
	color: <?php echo $color ?>;
	float: right;
	line-height: 42px;
}
.login_form form a:hover{
    color: #f59d1f;
}
.account_area {
	padding-bottom: 50px;
}
.breadcrumbs_area.login_bread {
	margin-bottom: 35px;
}
.dashboard_tab_button ul li a {
	font-size: 14px;
	color: #666666;
	font-weight: 600;
	text-transform: capitalize;
	background: #f7f7f7;
    border-radius: 3px;
}
.dashboard_tab_button ul li {
	margin-bottom: 5px;
}
.dashboard_tab_button ul li a:hover,.dashboard_tab_button ul li a.active{
    background: <?php echo $color ?>;
    color: #fff;
}
.dashboard_content h3 {
	font-size: 22px;
	text-transform: capitalize;
	font-weight: 600;
	color: #222222;
	margin-bottom: 15px;
}
.dashboard_content p a {
	color: <?php echo $color ?>;
}
.lion_table_area table {
	border-left: 1px solid #ddd;
	border-bottom: 1px solid #ddd;
	border-right: 1px solid #ddd;
}
.lion_table_area table thead {
	background: #f7f7f7;
}
.lion_table_area table tbody tr td {
	border-right: 1px solid #ddd;
	color: #444;
	font-weight: 600;
	text-transform: capitalize;
	font-size: 14px;
	text-align: center;
}
.lion_table_area table tbody tr td:last-child{
    border-right: 0;
}
.lion_table_area table tbody tr td:last-child a {
	color: <?php echo $color ?>;
}
.dashboard_content h4 {
	font-size: 20px;
	text-transform: capitalize;
	color: #222222;
	font-weight: 600;
	margin-bottom: 10px;
}
.dashboard_content a {
	color: <?php echo $color ?>;
	font-weight: 600;
}
.dashboard_content address {
	font-weight: 600;
	color: #222222;
}
.input-radio span input[type="radio"],.account_login_form form span input[type="checkbox"] {
	width: 0;
	height: 0;
	margin-right: 2px;
}
.input-radio span {
	color: #222222;
	font-weight: 600;
	padding-right: 10px;
}
.account_login_form form input {
	border: 1px solid #ddd;
	background: none;
	height: 40px;
	margin-bottom: 20px;
}
.account_login_form form span {
	font-weight: 600;
}
.main_content_area.my_account.ptb-100 {
	padding: 60px 0 100px;
}



/*my account page ss end*/


/* 21. cart page css here*/
.table_desc {
	border: 1px solid #ddd;
	margin-bottom: 40px;
}
.table_desc table thead tr th{
	border-bottom: 3px solid <?php echo $color ?>;
    border-right: 1px solid #ddd;
    color: #5b5b5b;;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 10px;
    text-align: center;
}
.table_desc table tbody tr td{
    border-bottom: 1px solid #ddd;
    border-right: 1px solid #ddd;
    text-align: center;
    padding: 10px;
}

.table_desc table thead tr th:last-child,.table_desc table tbody tr td:last-child {
	border-right: 0;
}
.table_desc table tbody tr td.product_remove a{
    font-size: 30px;
    color: #f59d1f;
}
.table_desc table thead tr th.product_remove,.table_desc table thead tr th.product-price,.table_desc table thead tr th.product_total{
    min-width: 159px; 
}
.table_desc table thead tr th.product_add_cart {
	min-width: 198px;
}
.table_desc table tbody tr td.product-price,.table_desc table tbody tr td.product_total{
    color: <?php echo $color ?>;
    font-size: 18px;
    font-weight: 600;
}
.table_desc table thead tr th.product_thumb, .table_desc table thead tr th.product_quantity {
	min-width: 195px;
}
.table_desc table tbody tr td.product_quantity input {
	width: 60px;
	height: 40px;
	padding: 0 5px 0 10px;
	background: none;
	border: 1px solid #ddd;
}
.table_desc table tbody tr td.product_thumb img {
	width: inherit;
}
.table_desc table thead tr th.product_name {
	min-width: 300px;
}
.table_desc table tbody tr td.product_name a {
	color: #4c4c4c;
	text-transform: capitalize;
	font-size: 14px;
	font-weight: 700;
}
.table_cart_button {
	text-align: right;
	padding: 12px;
}

.coupon_code {
  border: 1px solid #e5e5e5;
}
.coupon_code h3 {
  color: #fff;
  position: relative;
  line-height: 37px;
  padding: 5px 15px;
  background: #444;
  text-transform: uppercase;
  font-size: 16px;
  font-weight: 700;
}
.coupon_code_inner {
  padding: 10px 20px 25px;
}
.coupon_code_inner p {
	color: #999;
	font-size: 13px;
	margin-bottom: 20px;
}
.coupon_code_inner input {
	border: 1px solid #e5e5e5;
	height: 42px;
	background: none;
	margin-bottom: 20px;
}
.cart_total_amount {
	padding: 20px;
}
.cart_subtotal,.shipping_flat_rate {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: justify;
	-ms-flex-pack: justify;
	justify-content: space-between;
}
.cart_subtotal p.subtotal,.shipping_flat_rate p.subtotal{
	color: #444;
	font-weight: 700;
	font-size: 14px;
}
.cart_subtotal p.order_total{
    font-size: 20px;
    font-weight: 700;
}
.cart_subtotal p.order_amount{
    font-size: 20px;
}
.cart_subtotal p.cart_amount,.shipping_flat_rate p.cart_amount{
	text-transform: capitalize;
	font-size: 16px;
	font-weight: 500;
}

.shipping_flat_rate p.cart_amount span {
	margin-right: 100px;
	font-weight: 400;
	font-size: 14px;
}
.flat_rate {
	text-align: right;
    border-bottom: 1px solid #ddd;
}
.flat_rate a {
	color: <?php echo $color ?>;
	font-size: 14px;
	font-weight: 500;
	margin-bottom: 20px;
	display: block;
}
.cart_subtotal.order {
	padding: 20px 0;
}
.cart_to_checkout {
	text-align: right;
}
.cart_to_checkout a {
	background: <?php echo $color ?>;
	color: #fff;
	font-size: 16px;
	padding: 3px 20px;
	line-height: 44px;
	font-weight: 700;
	display: inline-block;
	text-transform: uppercase;
}
.cart_to_checkout a:hover{
    background: #333;
}
.coupon_code_area {
	padding-bottom: 40px;
}
/*cart page css end*/



/* 22. wishlist css here*/

.table_desc form table tbody tr td.product_quantity.stock {
	color: <?php echo $color ?>;
	text-transform: uppercase;
	font-weight: 500;
}
.table_desc form table thead tr th.product_add_cart {
	min-width: 159px;
}

.table_desc.wishlist_desc table thead tr th.product_remove {
	min-width: 140px;
}
.table_desc.wishlist_desc table thead tr th.product_name {
	min-width: 280px;
} 
.table_desc.wishlist_desc table tbody tr:last-child td {
	border-bottom: 0;
}
.table_desc.table-responsive table tbody tr td.product_add_cart a {
	background: #444;
	font-size: 12px;
	font-weight: 700;
	height: 38px;
	line-height: 18px;
	padding: 10px 20px;
	color: #fff;
	text-transform: uppercase;
}
.table_desc.table-responsive table tbody tr td.product_add_cart a:hover{
    background: <?php echo $color ?>;
}
.wishlist-share {
	text-align: center;
}
.social-icon ul li {
	display: inline-block;
}
.wishlist-share h4 {
	font-size: 18px;
	color: #222222;
	font-weight: 700;
	text-transform: capitalize;
}
.social-icon ul li a {
	padding: 0 10px;
	color: #444;
	display: block;
}
.social-icon ul li a:hover{
    color: <?php echo $color ?>;
}
.wishlist-share {
	text-align: center;
	padding: 20px 0;
	border: 1px solid #ddd;
	margin-bottom: 50px;
}
/*wishlist page css end*/

/* 23. check out  css here*/
.customer-login h3 {
	font-size: 13px;
	font-weight: 400;
	color: #666666;
    background-color: #f7f6f7;
	padding: 15px 10px;
	border-top: 3px solid #1e85be;
    margin-bottom: 0;
}
.customer-login h3 a {
	color: <?php echo $color ?>;
}
.card-bodyfive {
	border: 1px solid #ddd;
	margin-top: 25px;
	padding: 10px 15px;
}
.collapse_one.collapse.show {
	border: 0;
}
.Returning_cart_body label,.checkout_form form label {
	color: #666666;
	font-size: 13px;
}
.checkout_form form label.righ_1 {
	cursor: pointer;
    transition: .3s;
}
.checkout_form form label.righ_1:hover{
    background: <?php echo $color ?>;
}
.Returning_cart_body label span,.checkout_form form label span {
	color: red;
}
.Returning_cart_body input {
	border: 1px solid #ddd;
	background: none;
	height: 45px;
}
.Returning_cart_body input[type="submit"], .checkout_coupon_code form input[type="submit"] {
	display: inline-block;
	width: 80px;
	background: #444;
	border: 0;
	color: #fff;
	font-weight: 700;
	text-transform: uppercase;
	font-size: 13px;
	-webkit-transition: .3s;
	transition: .3s;
	margin-right: 20px;
	cursor: pointer;
}
.Returning_cart_body input[type="submit"]:hover,.checkout_coupon_code form input[type="submit"]:hover{
    background: <?php echo $color ?>;
}

.Returning_cart_body label input[type="checkbox"] {
	width: 15px;
	height: 15px;
	margin-right: 10px;
}
.card-bodyfive form a {
	color: <?php echo $color ?>;
	margin-top: 15px;
	display: block;
}
.checkout_coupon_code form input {
	background: none;
	border: 1px solid #ddd;
	width: 200px;
	height: 45px;
	font-size: 12px;
}
.checkout_coupon_code {
	padding: 20px 10px;
}
.checkout_coupon_code form input[type="submit"] {
	width: 130px;
    margin-left: 12px;
}
.Returning_cart_body label[for="remember_box"] span {color: #555;}

.Returning_cart_body label[for="remember_box"] input {
    position: relative;
    top: 3px;
}
.checkout_form form h3,.order_form_two h3,.checkout_form form label.righ_1 {
	font-size: 16px;
	line-height: 30px;
	padding: 5px 10px;
	text-transform: uppercase;
	color: #fff;
	background: #444;
	font-weight: 700;
}
.checkout_form form input {
	border: 1px solid #ddd;
	background: none;
}
.select_form_select .nice-select {
	width: 100%;
	border: 1px solid #ddd;
	height: 45px;
	line-height: 43px;
}

.select_form_select .nice-select.open ul.list {
	width: 100%;
}
.checkout_form form input[type="checkbox"] {
	width: 20px;
	height: 15px;
	margin-right: 10px;
}
.one.collapse.show {
	border: 0;
}

.order-notes textarea {
	border: 1px solid #e5e5e5;
	border-radius: 0;
	height: 32px;
	max-width: 100%;
	padding: 0 0 0 10px;
	background: none;
	font-size: 13px;
	resize: none;
}
.Checkout_page_section {
	padding-bottom: 38px;
}
.order-table.table-responsive.mb-30 form table thead tr th,.order-table.table-responsive.mb-30 form table tbody tr td,.order-table.table-responsive.mb-30 form table tfoot tr th,.order-table.table-responsive.mb-30 form table tfoot tr td {
	min-width: 50%;
	text-align: center;
	padding: 15px 0;
	border-bottom: 1px solid #ddd;
}

.order-table.table-responsive.mb-30 form table {
	width: 100%;
}

.order-table.table-responsive.mb-30 form table tfoot tr.order_total th {
	border-bottom: none;
	font-size: 22px;
}
.order-table.table-responsive.mb-30 form table tfoot tr.order_total td {
	color: <?php echo $color ?>;
	font-size: 22px;
	border-bottom: 0;
}
.panel-default input[type="radio"] {
	width: 0;
	height: 0;
	margin-right: 20px;
}
.order_wrapper .payment-method .panel-default input[type="radio"] {
    width: 15px;
    height: 15px;
}
.order_button button {
	background: <?php echo $color ?>;
	color: #fff;
	font-size: 17px;
	height: 40px;
	font-weight: 700;
	border: 0;
	cursor: pointer;
	-webkit-transition: .3s;
	transition: .3s;
	padding: 0 15px;
	text-transform: capitalize;
}
.order_button button:hover{
    background: #333;
}

.panel-default label img {
	width: 160px;
}

/* 24. portfolio details css here*/
.portfolio_d_thumb {
	text-align: center;
	margin-bottom: 50px;
}
.blog__title.mb-30 h1 {
	font-size: 20px;
	font-weight: 400;
	padding: 0;
	text-transform: capitalize;
	color: #222222;
}

.related_post h2 {
	font-size: 20px;
	 margin: 0; 
	display: inline-block;
	text-transform: uppercase;
	color: #222222;
	font-weight: 700;
}
.related_post {
	padding-bottom: 50px;
	border-bottom: 1px solid #ddd;
	margin-bottom: 20px;
}


/*simple product  css here*/
.tab-content.simple_p_content {
	border: 1px solid #ddd;
	padding: 30px;
}

.modal_tab_img.simple_tab {
	text-align: center;
}
.view_img.view_video {
	text-align: left;
}
.view_img.view_video a {
	text-align: center;
}

.product_d_tab_button.simple_tab_button {
	width: 100%;
}
.product_d_tab_button.simple_tab_button ul.nav {
	display: flex;
	flex-wrap: nowrap;
}



.small_product_price.product_full_price,.product_d_quantity.simple_quantity,.product_d_size.simple_p_size,.product_d_color.simple_p_color {
	justify-content: center;
}


.product_gallery_thumb {
	width: 48%;
	float: left;
	margin: 5px;
}



/*-------------------ESTILOS PROPIOS-------------------*/

.iniciar_sesion{

color: <?php echo $color ?>;

}

.iniciar_sesion:hover{

color: <?php echo $color ?>;

}


.current_page2{

background-color: #343434;
color: #fff;

}




