<?php
$about = $data['about'];
$list = $about ['list'];
?>
<section id="about" class="about">
    <div class="container">
        <div class="grid">
            <div class="grid__item">
              <img src="./img/Cartoonify.png" width="560" height="453" loading="lazy" alt="John Doe - Développeur web freelance">
            </div>
            <div class="grid__item">
              <h2 class="section-title"><?php echo $about['title']; ?></h2>
              <h3><?php echo $about['under_title']; ?></h3>
              <p><?php echo $about['text_content']; ?></p>
              <p><?php echo $about['second_text_content']; ?></p>
            </div>
        </div>
    </div>
</section>