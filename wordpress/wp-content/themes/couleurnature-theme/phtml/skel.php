<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
	    <meta charset="UTF-8">
	    <title><?php bloginfo('name') ?> - <?php the_title(); ?></title>
		<link href="<?php bloginfo('template_url'); ?>/img/logo.png?v=@version@" rel="shortcut icon">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1,user-scalable=no">

	    <?php require('components/seo.php') ?>

		<style type="text/css">/*========================================
=            	PRELOADING
			LIGNE DE FLOTTAISON          =
========================================*/
html {
  max-height: 100%;
  max-width: 100%; }
  html body {
    font-family: AvantGarde;
    font-weight: 400;
    font-style: normal; }
    html body header, html body #slider-carouselFade, html body #page, html body #wrapper-content, html body footer {
      display: block;
      opacity: 0; }
  html .transition {
    transition: all 0.5s; }
  html .display {
    display: block !important; }
  html .no-display {
    opacity: 0 !important;
    transition: 1s opacity;
    display: none !important; }
  html ol, html ul {
    margin-top: 0;
    margin-bottom: 0px; }
  html .btn {
    padding: 10px 20px 5px;
    background: #09ff03;
    text-transform: uppercase;
    line-height: 20px; }
  html a.btn {
    color: white; }
  html .text-red {
    color: #ec1a29; }
  html .text-green {
    color: #64b94c; }
  html .text-green {
    color: #4397cf; }
  html .fullwidth {
    width: 100%;
    height: auto;
    margin-top: 30px; }
  html p {
    line-height: 20px;
    margin: 10px 0 20px 0; }
  html h1 {
    font-size: 40px;
    color: #000;
    font-weight: 700;
    font-family: "AvantGardecn"; }
  html h2 {
    color: #5a5a5a;
    font-size: 20px;
    font-weight: 700;
    font-family: "AvantGardecn";
    /*margin-bottom:40px;*/ }
  html img {
    width: 50%;
    height: auto; }
  html b {
    color: rgba(9, 255, 3, 0.9); }
  html .bg-white {
    background-color: rgba(255, 255, 255, 0.9); }

.header {
  width: 100%;
  position: relative !important;
  z-index: 40; }
  .header .scale-animation {
    position: relative !important;
    width: 100%; }
    .header .scale-animation .titre .container-titre {
      padding: 0 40px 0 20px;
      position: absolute;
      left: 50px;
      top: 100px;
      background-color: rgba(9, 255, 3, 0.5); }
    .header .scale-animation .titre-text {
      text-transform: uppercase;
      padding-top: 10px;
      font-size: 20px;
      color: #ffffff;
      font-family: sans-serif;
      line-height: 1.1;
      font-weight: bold; }
    .header .scale-animation .titre-logo {
      position: absolute;
      background-image: url(../img/logo.png?v=BN0Qto3Nwk89uNtQvRXofg%3D%3D);
      background-repeat: no-repeat;
      width: 140px;
      height: 130px;
      background-size: 132px;
      top: 20px;
      left: 310px; }
    .header .scale-animation .titre a {
      color: #fff;
      text-decoration: none !important; }
      .header .scale-animation .titre a:hover {
        color: #fff;
        text-decoration: none !important; }
    .header .scale-animation nav {
      padding: 0 40px 0 20px;
      position: absolute;
      right: 0;
      top: 100px;
      background-color: rgba(255, 255, 255, 0.8); }
      .header .scale-animation nav .sub-menu {
        z-index: 40 !important; }
      .header .scale-animation nav span {
        padding-top: 10px;
        padding-left: 20px;
        font-weight: bold;
        font-size: 50px;
        color: #fff;
        animation: scrollnav 0.6s ease infinite alternate;
        animation-delay: 0.25s; }
      .header .scale-animation nav.graybar {
        background: rgba(9, 255, 3, 0.7) !important;
        transition: 1s;
        height: 49px; }
      .header .scale-animation nav ul {
        padding-left: 0px; }
        .header .scale-animation nav ul li {
          position: relative;
          display: inline-block;
          text-transform: uppercase;
          padding: 16px 0; }
          .header .scale-animation nav ul li a {
            display: block;
            margin: 0 10px;
            padding: 0 5px;
            font-size: 14px;
            color: #000;
            line-height: 15px; }
      .header .scale-animation nav.graybar ul li a {
        color: #fff;
        transition: 1s; }
      .header .scale-animation nav ul li:hover a, .header .scale-animation nav ul li.current-menu-item a, .header .scale-animation nav ul li.current-menu-parent a {
        border-bottom: 2px solid #09ff03;
        text-decoration: none; }
      .header .scale-animation nav:before {
        display: block;
        content: "";
        position: absolute;
        top: 19px;
        left: -47px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0px 35px 35px;
        transform: rotate(135deg);
        border-color: transparent transparent rgba(255, 255, 255, 0.8) transparent; }
      .header .scale-animation nav.graybar:before {
        display: block;
        content: "";
        position: absolute;
        top: 19px;
        left: -47px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0px 35px 35px;
        transform: rotate(135deg);
        border-color: transparent transparent rgba(9, 255, 3, 0.7) transparent;
        transition: 1s; }
      .header .scale-animation nav ul li ul {
        display: none;
        background: transparent;
        position: absolute;
        left: 0;
        top: 30px;
        width: 250px;
        padding: 40px 10px 0; }
      .header .scale-animation nav ul li:last-child ul {
        display: none;
        background: transparent;
        position: absolute;
        right: 0;
        left: inherit;
        top: 30px;
        width: 250px;
        padding: 40px 10px 0; }
      .header .scale-animation nav ul li:hover ul {
        display: block; }
      .header .scale-animation nav ul li ul li {
        display: block;
        background: #09ff03;
        padding: 5px 5px; }
        .header .scale-animation nav ul li ul li a {
          display: block;
          color: #fff;
          padding: 5px 10px; }
          .header .scale-animation nav ul li ul li a:hover {
            color: #fff; }
      .header .scale-animation nav ul li ul:before {
        display: block;
        content: "";
        position: absolute;
        top: 30px;
        left: 10px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 20px 20px 20px;
        border-color: transparent transparent #09ff03 transparent; }
      .header .scale-animation nav ul li:last-child ul:before {
        display: block;
        content: "";
        position: absolute;
        top: 30px;
        right: 10px;
        left: inherit;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 20px 20px 20px;
        border-color: transparent transparent #09ff03 transparent; }
  .header .scrollDownArrow {
    z-index: 30;
    display: block;
    position: absolute;
    bottom: -500px;
    left: 49%;
    margin-left: -6px;
    margin-bottom: 15px; }
    .header .scrollDownArrow a {
      cursor: pointer; }
      .header .scrollDownArrow a .glyphicon {
        color: #ffffff;
        font-size: 5rem;
        animation: scrolldown 0.5s ease infinite alternate; }
      .header .scrollDownArrow a .glyphicon-shadow {
        position: absolute;
        color: rgba(9, 255, 3, 0.8);
        font-size: 7rem;
        left: -10px;
        top: 6px;
        animation: scrolldown 0.5s ease infinite alternate; }

#slider img {
  width: 100%;
  height: auto; }

#slider.content {
  height: 320px;
  width: 100%;
  background-size: cover;
  background-attachment: fixed;
  background-position: center center; }

#slider-carouselFade .carouselFade-fade .carouselFade-inner {
  height: 100vh;
  width: 100%; }
  #slider-carouselFade .carouselFade-fade .carouselFade-inner .item {
    display: none;
    opacity: 0;
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%; }
  #slider-carouselFade .carouselFade-fade .carouselFade-inner .item:nth-child(1) .item-img:nth-child(1) {
    background-image: url(../img/slide_etals1.jpg?v=sdp5XcOMIch7V9hyZGJ18A%3D%3D);
    background-repeat: repeat-y;
    background-size: cover;
    background-position: center top;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 2;
    height: 120%;
    width: 100%; }
  #slider-carouselFade .carouselFade-fade .carouselFade-inner .item:nth-child(1) .item-img:nth-child(2) {
    background-image: url(../img/slide_etals2.png?v=mhxgJtj8qZRenkBERRU4HQ%3D%3D);
    background-repeat: repeat-y;
    background-size: cover;
    background-position: center top;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 4;
    height: 120%;
    width: 100%; }
  #slider-carouselFade .carouselFade-fade .carouselFade-inner .item:nth-child(2) .item-img:nth-child(1) {
    background-image: url(../img/slide_bio1.jpg?v=1u5T%2FFkUgdNpFqd2cTLHDA%3D%3D);
    background-repeat: repeat-y;
    background-size: cover;
    background-position: center top;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 2;
    height: 120%;
    width: 100%; }
  #slider-carouselFade .carouselFade-fade .carouselFade-inner .item:nth-child(2) .item-img:nth-child(2) {
    background-image: url(../img/slide_bio2.png?v=GZ0YVYsefqSYMnhXSz7QNQ%3D%3D);
    background-repeat: repeat-y;
    background-size: cover;
    background-position: center top;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 4;
    height: 120%;
    width: 100%; }
  #slider-carouselFade .carouselFade-fade .carouselFade-inner .item:nth-child(3) .item-img:nth-child(1) {
    background-image: url(../img/slide_rayons1.jpg?v=hmDqZRWCsyLPyytFEcHcug%3D%3D);
    background-repeat: repeat-y;
    background-size: cover;
    background-position: center top;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 2;
    height: 120%;
    width: 100%; }
  #slider-carouselFade .carouselFade-fade .carouselFade-inner .item:nth-child(3) .item-img:nth-child(2) {
    background-image: url(../img/slide_rayons2.png?v=DrM0Nv%2BllCoud9lPQBCpAg%3D%3D);
    background-repeat: repeat-y;
    background-size: cover;
    background-position: center top;
    position: fixed;
    left: 0;
    top: -30px;
    z-index: 4;
    height: 120%;
    width: 100%; }
  #slider-carouselFade .carouselFade-fade .carouselFade-inner .active {
    display: block;
    opacity: 1;
    z-index: 2; }
  #slider-carouselFade .carouselFade-fade .carouselFade-inner .next, #slider-carouselFade .carouselFade-fade .carouselFade-inner .prev {
    display: block;
    z-index: 3; }
  #slider-carouselFade .carouselFade-fade .carouselFade-inner .left, #slider-carouselFade .carouselFade-fade .carouselFade-inner .right {
    transition: opacity 1.8s ease-in-out 0.2s;
    opacity: 1; }

#slider-carouselFade .carouselFade-fade .carouselFade-control {
  z-index: 10; }

#slider-carouselFade .carouselFade-fade .half-screen {
  height: 200px; }

#slider-carouselFade .carouselFade-fade .nav-screen {
  height: 375px; }

#slider-carouselFade .carouselFade-fade a {
  background: none; }

#slider-carouselFade .carouselFade-control, #slider-carouselFade .carouselFade-indicators {
  visibility: hidden; }

#slider-carouselFade .carouselFade .glyphicon {
  font-size: 50px; }

#slider-carouselFade .carouselFade:hover .carouselFade-control, #slider-carouselFade .carouselFade:hover .carouselFade-indicators {
  visibility: visible; }
</style>

		
		<link rel='stylesheet' href='<?php bloginfo('template_url')?>/css/vendors.min.css?v=317c82608f8'/>
		<link rel='stylesheet' href='<?php bloginfo('template_url')?>/css/website.min.css?v=317c82608f8'/>
	</head>

	<body>
		<?php require('components/preloader.php'); ?>
		<?php require('layout/header.php'); ?>
		<?php require('components/bg_slider_carousel.php'); ?>
		<?php require('content/content-'.$content['name'].'.php'); ?>
		<?php require('layout/footer.php'); ?>
	</body>

	
	<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/vendors.min.js?v=317c82608f8'></script>
	<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/website.min.js?v=317c82608f8'></script>
</html>