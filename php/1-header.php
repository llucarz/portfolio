<?php

$header = $data['header'];

?>

<header class="header">
    <div class="container d-flex">
      <div class="logo">
        <?php echo $header['7']; ?>
      </div>
      <nav class="navbar ">
        <ul class="menu list-unstyled">
          <li><a href="#hero"><?php echo $header['1']; ?></a></li>
          <li><a href="#about"><?php echo $header['2']; ?></a></li>
          <li><a href="#formation"><?php echo $header['3']; ?></a></li>
          <li><a href="#skills"><?php echo $header['4']; ?></a></li>
          <li><a href="#experience"><?php echo $header['5']; ?></a></li>
          <li><a href="#contact"><?php echo $header['6']; ?></a></li>
        </ul>
      </nav>
      <div class="right">
        <ul class="socials list-unstyled">
          <li>
            <a href="https://google.fr">
              <svg aria-hidden="true" class="icon linkedin" focusable="false" data-prefix="fab" data-icon="linkedin-in"
                class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512">
                <path fill="currentColor"
                  d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                </path>
              </svg>
            </a>
          </li>
        </ul>
        <button class="burger"><span class="bar"></span></button>
      </div>
    </div>
  </header>