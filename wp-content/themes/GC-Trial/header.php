<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://use.fontawesome.com/983040db07.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/standardize.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/header.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/footer.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/staff.css">

  <title><?php echo get_bloginfo( 'name' ); ?></title>

  <?php wp_head(); ?>
</head>
<body>
  <header>

    <div class="logoContain">
      <div class="logoDiv">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/Gold_Logo.jpg" alt="Golden Comm Header Logo">
      </div>
    </div>

    <nav class="primaryNav">

      <div class="menuItem">
        <p>ABOUT</p>
      </div>
      <div class="menuItem">
        <p>LIBRARY</p>
      </div>
      <div class="menuItem">
        <p>PORTFOLIO</p>
      </div>
      <div class="menuItem">
        <p>SERVICES</p>
      </div>
      <div class="menuItem">
        <p>PEOPLE</p>
      </div>
      <div class="menuItem">
        <p>BLOG</p>
      </div>
      <div class="menuItem">
        <p>CONTACT</p>
      </div>
    </nav>

    <div class="customerServiceNumber">
      <p class="customerService">Customer Service</p>
      <p class="customerServicePhone">(949) 574-5500</p>
    </div>

    <div class="salesRepCTA">
      <div class="srCTAtext">
        <p class="looking">Looking for Local Sales Rep</p>
        <p class="clickHere">CLICK HERE</p>
      </div>
    </div>


  </header>
