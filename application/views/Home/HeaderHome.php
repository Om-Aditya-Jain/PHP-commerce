<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel='canonical' href='https://ajar-me.com/'>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "name": "Jadeed Ajar General Trading LLC",
  "url": "https://www.ajar-me.com",
  "description": "Dubai's premier supplier of door handles, knobs, hinges, and more.",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://ajar-me.com/product/search_query/{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Store",
  "name": "Jadeed Ajar General Trading - Dubai",
  "url": "https://www.ajar-me.com",
  "image": "https://ajar-me.com/assets/ajar-logo.png",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Aswaaq Warehouse, 28B Street, AL Qusais Industrial area 5",
    "addressLocality": "Dubai",
    "addressRegion": "Dubai",
    "postalCode": "12345",
    "addressCountry": "AE"
  },
  "description": "Your one-stop shop for high-quality door handles, knobs, hinges, and other hardware products in Dubai.",
  "telephone": "+971 4 229 4540"
}
</script>
<link rel="icon" href="<?= base_url() ?>assets/fav-ajar-logo.png" type="image/gif">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
  rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<title>AJAR - Ajar: Furniture Fittings and Accessories in Dubai</title>
<script>
  // Add this script to handle the scrolling behavior

  // Select the navigation bar element
  const items = ['about', 'home', 'download', 'product', 'showroom', 'contact', 'searchicon']

  // Function to add the 'scrolled' class when the page is scrolled
  function handleScroll() {
    if (window.scrollY > 0) {
      items.forEach(element => {
        const item = document.getElementById(element);
        item.classList.add('blackheading');
      });
      const navBar = document.getElementById('nav');
      navBar.classList.add('scrolled');
      const searchBar = document.getElementById('search-div');
      searchBar.classList.add('search-div_scrolled');
      const logo = document.getElementById('logoimage');
      logo.classList.remove('logo_img');
      logo.classList.add('logo_img_scrolled');
    } else {
      const searchBar = document.getElementById('search-div');
      searchBar.classList.remove('search-div_scrolled');
      const navBar = document.getElementById('nav');
      navBar.classList.remove('scrolled');
      const logo = document.getElementById('logoimage');
      logo.classList.add('logo_img');
      logo.classList.remove('logo_img_scrolled');
      items.forEach(element => {
        const item = document.getElementById(element);
        item.classList.remove('blackheading');
      });
    }
  }

  // Listen for the 'scroll' event and call the handleScroll function
  window.addEventListener('scroll', handleScroll);
</script>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Kumbh Sans', sans-serif;
  }

  body {
    margin: 0;
    padding: 0;
  }

  main {
    top: 0;
    width: 100%;
  }

  nav {
    height: 90px;
    width: 100%;
    background-color: transparent;
    z-index: 10;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;

    @media screen and (max-width:768px) {
      height: 70px;
      background-color: white;
    }
  }

  .scrolled {
    background-color: white;
    transition: background-color 0.5s ease;
  }

  .blackheading {
    color: black !important;
  }

  #navbar {
    width: 70%;
    height: 100%;
    padding: 0rem 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    list-style-type: none;
    margin-bottom: 0;

    @media only screen and (max-width:1200px) {
      width: 95%;

      @media screen and (max-width:900px) {
        display: none;
      }
    }

  }

  #navbar-small {
    display: none;

    @media screen and (max-width:900px) {
      width: 100%;
      height: 100%;
      padding: 0rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      list-style-type: none;
      margin-bottom: 0;
    }
  }

  #navbar-small li {
    margin: 0;
    padding: 0;
    border: none;
    cursor: pointer;
  }

  .icons {
    display: flex;
    gap: 1rem;
    margin-top: 0;
  }

  .search {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .glyphicon {
    font-size: 20px;
  }

  .glyphicon-chevron-down {
    font-size: 12px;
  }

  .glyphicon-chevron-right {
    font-size: 12px;
  }

  #navbar li {
    height: 100%;
    display: flex;
    align-items: center;
    margin: 0;
    padding: 0;
    border: none;
    cursor: pointer;
  }

  #navbar li span {
    margin-left: 5px;
  }

  #navbar li a {
    text-decoration: none;
  }

  #navbar li a:hover {
    color: black;
    text-decoration: none;
  }

  .logo {
    height: 100%;
    display: flex;
    align-items: center;
  }

  .logo_img {
    width: 100;
    content: url(<?php echo base_url('/assets/ajar-logo-white.png') ?>);
  }

  .logo_img_scrolled {
    width: 100;
    content: url(<?php echo base_url('/assets/ajar-logo.png') ?>);
  }

  .hero {
    width: 100%;
    padding-top: 60px;
  }

  .hero-image {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 5rem;
  }

  .navbar-headings {
    font-weight: 600;
    color: white;
  }

  .dropdown {
    position: absolute;
    list-style-type: none;
    background-color: white;
    display: none;
    top: 60;
    min-width: 200px;
    transition: 0.5s;
  }

  .dropdown-item {
    font-size: 16px;
    font-weight: 400;
    white-space: nowrap;
    display: flex;
    align-items: center;
  }

  .dropdown-item:hover {
    background-color: rgba(0, 0, 0, 0.1);
  }

  #about:hover .about {
    display: block;
    transition: 1s;
  }

  #about:hover .dropdown-item {
    padding: 1rem 0rem;
  }

  #products:hover .products {
    display: block;
  }

  #products:hover .dropdown-item {
    padding: 1rem 0rem;
  }

  #products:hover .dropdown-item:first-child {
    padding-right: 0.5rem;
  }

  #products-submenu:hover .products-submenu {
    display: block;
  }

  .products-submenu {
    top: 0;
    left: 205;
  }

  #download:hover .download {
    display: block;
  }

  #download:hover .dropdown-item {
    padding: 1rem 0rem;
  }

  #showroom:hover .showroom {
    display: block;
  }

  #showroom:hover .dropdown-item {
    padding: 1rem 0rem;
  }

  #contact:hover .contact {
    display: block;
  }

  #contact:hover .dropdown-item {
    padding: 1rem 0rem;
  }

  .dropdown-item a {
    color: black;
  }

  .contact {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    top: 33;
    left: -95;

  }



  /* Fixed sidenav, full height */
  .sidenav {

    height: 100%;
    /* width: 0px; */
    width: 0px;
    position: fixed;
    z-index: 11;
    top: 0;
    right: 0;
    background-color: white;
    overflow-x: hidden;
    /* padding-top: 20px; */
    transition: 0.5s;
  }

  /* Style the sidenav links and the dropdown button */
  .sidenav a,
  .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 15px;
    font-weight: 500;
    color: black;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
    transition: 0.3s;
  }

  .dropdown-btn {
    display: flex;
  }

  .sidenav .closebtn {
    font-size: 36px;
    width: 36px;
    height: 36px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0;
  }

  .sidenav-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0px 8px 0px 16px;
    background-color: rgba(240, 242, 245);
    font-size: 15px;
    font-weight: bold;
    margin-bottom: 2rem;
  }

  /* Main content */
  .main {
    margin-left: 200px;
    /* Same as the width of the sidenav */
    font-size: 20px;
    /* Increased text to enable scrolling */
    padding: 0px 10px;
  }

  /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
  .dropdown-container {
    display: none;
    background-color: white;
    padding-left: 8px;
    transition: 0.5s;
    /* transition: max-height 0.2s ease-out; */
  }

  .dropdown-container a,
  .dropdown-container .dropdown-btn {
    color: rgba(0, 0, 0, 0.6);
  }

  .fa-plus,
  .fa-minus {
    font-weight: normal;
    -webkit-text-stroke: 0.5px white;
    font-size: 12px;
  }

  .dropdown-btn-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 20px;
    width: 20px;
    margin-left: auto;
    margin-right: 8px;
    border: 2px solid rgba(0, 0, 0, 0.6);
    border-radius: 50px;
  }

  .active .dropdown-btn-icon {
    border: 2px solid rgba(80, 173, 85);
  }

  .active .fa-plus {
    display: none;
  }

  .active .fa-minus {
    display: block;
    color: rgba(80, 173, 85);
  }

  .fa-plus {
    display: block;
    color: rgba(0, 0, 0, 0.6);
  }

  .fa-minus {
    display: none;
  }



  #overlay {
    display: none;
    position: fixed;
    height: 100vh;
    width: 100vw;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 8;
  }

  .search-div {
    z-index: 7;
    position: fixed;
    top: 90;
    height: 60px;
    width: 100vw;
    padding: 10px 20px;
    display: none;
    align-items: center;
    justify-content: center;

    @media screen and (max-width:768px) {
      background-color: #C4C4C4;
      justify-content: space-between;
      padding-right: 0;
      top: 70;
    }
  }

  .search-div_scrolled {
    background-color: #C4C4C4
  }

  .search-bar {
    height: 100%;
    width: 60%;
    display: flex;
    align-items: center;
    background-color: #fff;
    border-radius: 5px;

    @media screen and (max-width:1200px) {
      width: 95%;

      @media screen and (max-width:768px) {
        width: 100%;
      }
    }

  }

  .search {
    width: 100%;
  }

  .search-close-icon {
    color: white;
    margin-top: -5px;
    font-size: 40px;
    padding: 0px 15px;
    cursor: pointer;

    @media screen and (max-width:768px) {
      color: black;
    }
  }

  .search .autocomplete input {
    height: 100%;
    width: 100%;
    border: none;
    border-radius: 5px 0px 0px 5px;
    padding: 0px 15px;
    font-size: 18px;
  }

  .search span {
    display: flex;
    justify-content: center;
    align-items: center;
    color: #D9D9D9;
    background-color: rgba(18, 79, 144, 1);
    height: 100%;
    width: 50px;
    top: 0;
    border-radius: 0px 5px 5px 0px;
    cursor: pointer;
  }

  /*the container must be positioned relative:*/
  .autocomplete {
    position: relative;
    display: inline-block;
  }

  .autocomplete-items {
    position: absolute;
    border: 1px solid #d4d4d4;
    border-bottom: none;
    border-top: none;
    z-index: 99;
    /*position the autocomplete items to be the same width as the container:*/
    top: 100%;
    left: 0;
    right: 0;
  }

  .autocomplete-items div {
    padding: 5px 10px;
    cursor: pointer;
    background-color: #fff;
    border-bottom: 1px solid #d4d4d4;
    font-size: 18px;
    overflow: hidden;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 1;
    display: -webkit-box;
    width: 100%;
    max-height: 60px;
  }

  .autocomplete-items div img {
    max-height: 50px;
    max-width: 50px;
    object-fit: contain;
    margin-right: 5px;
  }

  /*when hovering an item:*/
  .autocomplete-items div:hover {
    background-color: #e9e9e9;
  }

  /*when navigating through the items using the arrow keys:*/
  .autocomplete-active {
    background-color: DodgerBlue !important;
    color: #ffffff;
  }

  .searchicon {
    color: white;

    @media screen and (max-width:768px) {
      color: black;
    }
  }
</style>
<main id="main">
  <nav id="nav">
    <ul class="" id="navbar">
      <li>
        <div class="logo"><img id="logoimage" class="logo_img" alt="brand logo" style="height:70px;">
        </div>
      </li>
      <li><a href="<?php echo base_url(); ?>" class="navbar-headings" id="home">HOME</a></li>
      <li id="about" onmouseover="on();" onmouseout="off();" class="navbar-headings" id="about">ABOUT US <span
          class="glyphicon glyphicon-chevron-down"></span>
        <ul class="about dropdown">
          <li class="dropdown-item">&emsp;<a href="<?php echo base_url('/About/Company'); ?>">Company</a>&emsp;</li>
          <li class="dropdown-item">&emsp;<a
              href="<?php echo base_url('/About/Certifications'); ?>">Certifications</a>&emsp;</li>
        </ul>
      </li>
      <li style="position:relative;" id="products" onmouseover="on();" onmouseout="off();" class="navbar-headings"><a
          href="<?php echo base_url('/product'); ?>" class="navbar-headings" id="product">PRODUCTS <span
            class="glyphicon glyphicon-chevron-down"></span></a>
        <ul class="products dropdown">
          <!-- <li class="dropdown-item" id="products-submenu" style="justify-content:space-between;">&emsp;AJAR <span
              class="glyphicon glyphicon-chevron-right"></span>
            <ul class="products-submenu dropdown">
              <li class="dropdown-item">&emsp;<a href="#">Lever Handles</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Knob Handles</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Pull Handles</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Hinges</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Locking Devices</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Europrofile Cylinder</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Master Key</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Panic Exit</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Door Closer</a>&emsp;</li>
              <li class="dropdown-item">&emsp;<a href="#">Door Accessories</a>&emsp;</li>
            </ul>
          </li>
          <li class="dropdown-item">&emsp;<a href="#">EBCO</a>&emsp;</li>
          <li class="dropdown-item">&emsp;<a href="#">CES</a>&emsp;</li>
          <li class="dropdown-item">&emsp;<a href="#">BWS (Breuer + Schmitz)</a>&emsp;</li>
          <li class="dropdown-item">&emsp;<a href="#">FSB</a>&emsp;</li>
          <li class="dropdown-item">&emsp;<a href="#">HELM</a>&emsp;</li>
          <li class="dropdown-item">&emsp;<a href="#">NORSEAL</a>&emsp;</li> -->
          <?php foreach ($product_category as $pc) { ?>
            <li class="dropdown-item">&emsp;<a href="<?php echo base_url('/product/category/' . $pc['id'] . '/'); ?>">
                <?php echo $pc['name'] ?>
              </a>&emsp;</li>
          <?php } ?>
        </ul>
      </li>
      <!-- <li id="download" onmouseover="on();" onmouseout="off();" class="navbar-headings">DOWNLOADS <span
          class="glyphicon glyphicon-chevron-down"></span>
        <ul class="download dropdown">
          <li class="dropdown-item">&emsp;<a href="#">Catalogues</a>&emsp;</li>
        </ul>
      </li> -->
      <!-- <li id="showroom" onmouseover="on();" onmouseout="off();" class="navbar-headings">SHOWROOM <span
          class="glyphicon glyphicon-chevron-down"></span>
        <ul class="showroom dropdown">
          <li class="dropdown-item">&emsp;<a href="#">Showroom Tour Video</a>&emsp;</li>
          <li class="dropdown-item">&emsp;<a href="#">Showroom Pictures</a>&emsp;</li>
        </ul>
      </li> -->
      <!-- <li id="contact" onmouseover="on();" onmouseout="off();" class="navbar-headings">CONTACT US <span
          class="glyphicon glyphicon-chevron-down">
          <ul class="contact dropdown">
            <li class="dropdown-item">&emsp;<a href="<?php echo base_url('/Contact'); ?>">Office Location Map</a>&emsp;
            </li>
            <li class="dropdown-item">&emsp;<a href="#">Office Address</a>&emsp;</li>
          </ul>
      </li> -->
      <li><a href="<?php echo base_url('download'); ?>" class="navbar-headings" id="download">DOWNLOAD</a></li>
      <li><a href="<?php echo base_url('showroom'); ?>" class="navbar-headings" id="showroom">EXPERIENCE CENTER</a></li>
      <li><a href="<?php echo base_url('contact'); ?>" class="navbar-headings" id="contact">CONTACT US</a></li>
      <li><span id="searchicon" class="glyphicon glyphicon-search searchicon" onclick="showSearchBar();"></span></li>
    </ul>
    <ul id="navbar-small">
      <li>
        <div class="logo"><img src="<?php echo base_url('/assets/ajar-logo.png') ?>" alt="brand logo"
            style="height:50px;">
        </div>
      </li>
      <li>
        <div class="icons" style="margin-top:0px;"><span class="glyphicon glyphicon-search searchicon"
            onclick="showSearchBar();"></span><span class="glyphicon glyphicon-menu-hamburger searchicon"
            onclick="openNav()"></span></div>
      </li>
    </ul>

    <div id="mySidenav" class="sidenav">
      <div class="sidenav-head">
        MENU <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="font-weight:100;">&times;</a>
      </div>
      <a href="<?php echo base_url(); ?>">HOME</a>
      <button class="dropdown-btn">ABOUT US
        <div class="dropdown-btn-icon"><i class="fa fa-plus dropdown-icon"></i><i class="fa fa-minus dropdown-icon"></i>
        </div>
      </button>
      <div class="dropdown-container">
        <a href="<?php echo base_url('/About/Company'); ?>">Company</a>
        <a href="<?php echo base_url('/About/Certifications'); ?>">Certifications</a>
      </div>
      <button class="dropdown-btn">PRODUCTS
        <div class="dropdown-btn-icon"><i class="fa fa-plus dropdown-icon"></i><i class="fa fa-minus dropdown-icon"></i>
        </div>
      </button>
      <div class="dropdown-container">
        <a href="<?php echo base_url('product'); ?>">All</a>
        <?php foreach ($product_category as $pc) { ?>
          <a href="<?php echo base_url('/product/category/' . $pc['id']); ?>">
            <?php echo $pc['name'] ?>
          </a>
        <?php } ?>
        <!-- <button class="dropdown-btn">AJAR
          <div class="dropdown-btn-icon"><i class="fa fa-plus dropdown-icon"></i><i
              class="fa fa-minus dropdown-icon"></i>
          </div>
        </button>
        <div class="dropdown-container">
          <a href="#">Lever Handles</a>
          <a href="#">Knob Handles</a>
          <a href="#">Pull Handles</a>
          <a href="#">Hinges</a>
          <a href="#">Locking Devices</a>
          <a href="#">Europrofile Cylinder</a>
          <a href="#">Master Key</a>
          <a href="#">Panic Exit</a>
          <a href="#">Door Closer</a>
          <a href="#">Door Accessories</a>
        </div>
        <a href="#">EBCO</a>
        <a href="#">CES</a>
        <a href="#">BWS (Breuer + Schmitz)</a>
        <a href="#">FSB</a>
        <a href="#">HELM</a>
        <a href="#">NORSEAL</a> -->
      </div>
      <!-- <button class="dropdown-btn">DOWNLOADS
        <div class="dropdown-btn-icon"><i class="fa fa-plus dropdown-icon"></i><i class="fa fa-minus dropdown-icon"></i>
        </div>
      </button>
      <div class="dropdown-container">
        <a href="#">Catalogues</a>
      </div>
      <button class="dropdown-btn">SHOWROOM
        <div class="dropdown-btn-icon"><i class="fa fa-plus dropdown-icon"></i><i class="fa fa-minus dropdown-icon"></i>
        </div>
      </button>
      <div class="dropdown-container">
        <a href="#">Showroom Tour Video</a>
        <a href="#">Showroom Pictures</a>
      </div>
      <button class="dropdown-btn">CONTACT US
        <div class="dropdown-btn-icon"><i class="fa fa-plus dropdown-icon"></i><i class="fa fa-minus dropdown-icon"></i>
        </div>
      </button>
      <div class="dropdown-container">
        <a href="<?php echo base_url('/Contact'); ?>">Office Location Map</a>
        <a href="#">Office Address</a>
      </div> -->

      <a href="<?php echo base_url('Download'); ?>">DOWNLOAD</a>
      <a href="<?php echo base_url('Showroom'); ?>">EXPERIENCE CENTER</a>
      <a href="<?php echo base_url('Contact'); ?>">CONTACT US</a>
    </div>

  </nav>
  <div class="search-div" id="search-div">
    <div class="search-bar">
      <form class="search" id="search-form" action="<?php echo base_url('/product/update_search'); ?>" method="POST">
        <input type="hidden" id="product-id" name="product-id">
        <div class="autocomplete" style="width:100%">
          <input id="myInput" type="text" name="searched-product" placeholder="search here..." autocomplete="off" <?php if (isset($_SESSION['searched-product'])) {
            echo "value = '" . $_SESSION['searched-product'] . "'";
          } ?>>
        </div>
        <span class="glyphicon glyphicon-search" onclick="submitSearchForm();"></span>
      </form>
    </div>
    <div class="search-close-icon" onclick="hideSearchBar();">&times;</div>
  </div>
</main>
<div id="overlay"></div>
<script>
  /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var dropdownIcon = document.getElementsByClassName("dropdown-icon");
  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }

</script>
<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  function on() {
    document.getElementById("overlay").style.display = "block";
  }

  function off() {
    document.getElementById("overlay").style.display = "none";
  }

  function showSearchBar() {
    document.getElementById("search-div").style.display = "flex";
  }

  function hideSearchBar() {
    document.getElementById("search-div").style.display = "none";
  }

  function submitSearchForm() {
    document.getElementById("search-form").submit();
  }

</script>
<script>
  let products = [];
  let product_images = [];
  let product_id = [];
  <?php
  foreach ($products as $p) {
    ?>
    products.push('<?php echo $p['product_name']; ?>');
    products.push('<?php echo $p['product_code']; ?>');
    product_images.push('<?php echo base_url() . $p['product_image_url']; ?>');
    product_images.push('<?php echo base_url() . $p['product_image_url']; ?>');
    product_id.push('<?php echo $p['id']; ?>');
    product_id.push('<?php echo $p['id']; ?>');
  <?php } ?>
  // console.log(products);
  function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
      the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function (e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false; }
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.className = "searched-product-div";
          b.innerHTML = "<img src='" + product_images[i] + "'>";
          b.innerHTML += "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          b.innerHTML += "<input type='hidden' value='" + product_id[i] + "' >";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function (e) {
            /*insert the value for the autocomplete text field:*/
            inp.value = this.getElementsByTagName("input")[0].value;
            console.log(this.getElementsByTagName("input")[1].value)
            document.getElementById("product-id").value = this.getElementsByTagName("input")[1].value;
            submitSearchForm();
            /*close the list of autocompleted values,
            (or any other open lists of autocompleted values:*/
            closeAllLists();
          });
          a.appendChild(b);
        }
      }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function (e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      }
      // else if (e.keyCode == 13) {
      //   /*If the ENTER key is pressed, prevent the form from being submitted,*/
      //   e.preventDefault();
      //   if (currentFocus > -1) {
      //     /*and simulate a click on the "active" item:*/
      //     if (x) x[currentFocus].click();
      //   }
      // }
    });
    function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
        except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
          x[i].parentNode.removeChild(x[i]);
        }
      }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function (e) {
      closeAllLists(e.target);
    });
  }

  autocomplete(document.getElementById("myInput"), products);

  $('searched-product-div').each(function () {
    if ($(this)[0].scrollWidth > $(this).width()) {
      $(this).prepend('<div class="hellip"">&hellip;</div>');
    }
  });
</script>
<!-- <script>
  function redirectToProductPage(product) {
    console.log(product);
  }
</script> -->