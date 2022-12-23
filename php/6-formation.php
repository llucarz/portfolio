<?php
$formation = $data["formation"];
$contents = $formation["contents"];
$competence = $contents["competence"];
?>

<section id="portfolio" class="portfolio">
<div class="container">
  <div class="section-header">
    <h2 class="section-title"><?php echo $formation["title"]?></h2>
    <p><?php echo $formation["under_title"]?></p>
  </div>
  <ul class="grid portfolio-filters list-unstyled">
    <li class="grid__item">
      <a href="#" class="active" data-filter="all"><?php echo $formation["all"]?></a>
    </li>
    <li class="grid__item">
      <a href="#" data-filter="exp"><?php echo $formation["exp"]?></a>
    </li>
    <li class="grid__item">
      <a href="#" data-filter="cours"><?php echo $formation["cours"]?></a>
    </li>
    <li class="grid__item">
      <a href="#" data-filter="perso"><?php echo $formation["perso"]?></a>
    </li>
  </ul>
  <div class="grid">
    <?php foreach($contents as $item => $elements): ?>
        <div class="grid__item">
          <div class="card" data-category="<?php echo $elements['data_cat']?>">
            <img src="https://picsum.photos/600/400?random=1" loading="lazy" width="365" height="243"
              alt="projet de la ville" class="card__image">
            <div class="card__inner">
              <h3 class="card__title"><?php echo $elements['title']?></h3>
              <p class="category"><?php echo $elements['category']?></p>
            </div>
            <div class="card__overlay">
              <a href="#" class="card__link" data-id="modal-<?php echo $elements['modal']?>">+</a>
            </div>
          </div>
          <div class="modal" id="modal-<?php echo $elements['modal']?>">
            <button class="modal__close">&times;</button>
            <div class="modal__content">
              <div class="container">
                <div class="grid">
                  <div class="grid__item">
                    <img src="<?php echo $elements['img1']?>" loading="lazy" width="560" height="373" class="card__image" alt="<?php echo $elements['alt_img1']?>" />
                    <img src="<?php echo $elements['img2']?>" loading="lazy" width="560" height="373" class="card__image" alt="<?php echo $elements['alt_img2']?>" />
                  </div>
                  <div class="grid__item">
                    <h4 class="modal__title h2"><?php echo $elements['modal_title']?></h4>
                    <p>
                      <svg width="15" height="15" aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar" class="svg-inline--fa fa-calendar fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 64h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zm-6 400H54c-3.3 0-6-2.7-6-6V160h352v298c0 3.3-2.7 6-6 6z"></path></svg>
                      <i>Année : <?php echo $elements['annee']?></i>
                    </p>
                    <p class="category">
                      <svg width="15" height="15" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tag" class="svg-inline--fa fa-tag fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M0 252.118V48C0 21.49 21.49 0 48 0h204.118a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882L293.823 497.941c-18.745 18.745-49.137 18.745-67.882 0L14.059 286.059A48 48 0 0 1 0 252.118zM112 64c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z"></path></svg>
                      <?php echo $elements['category']?>
                    </p>
                    <p><?php echo $elements['text_content']?></p>
                    <h5 class="h3"><?php echo $elements['under_modal_title']?></h5>
                    <p><?php echo $elements['second_text_content']?></p>
                    <h5 class="h3"><?php echo $elements['title_competence']?></h5>
                    <ul>
                      <?php foreach($competence as $item):?>
                      <li><?php echo $item['competence']; ?></li>
                      <?php endforeach ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php endforeach?>
  </div>
</section>