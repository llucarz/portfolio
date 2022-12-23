<?php
$hero = $data['hero']
?>

<section id="hero" class="hero">
    <div class="container">
      <div class="grid">
        <div class="hero__item left">
          <span><?php echo $hero['title']; ?></span>
          <h1 class="title"><?php echo $hero['under_title']; ?></h1>
          <p><?php echo $hero['text_content']; ?></p>
        </div>
        <div class="hero__item right">
          <div class="hero__avatar">
            <img src="./img/avatar.png" width="400" height="400" loading="lazy"
              alt="Avatar John Doe - Développeur web freelance">
          </div>
        </div>
      </div>
    </div>
  </section>