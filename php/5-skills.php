<?php
$skills = $data['skills']
?>
<section id="skills" class="skills">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title"><?php echo $skills['title']; ?></h2>
        <p><?php echo $skills['text_content']; ?></p>
      </div>
      <div class="grid">
        <div class="grid__item">
          <h3>Domaines de compétences</h3>
          <ul class="list-unstyled">
            <?php foreach($skills['competence_ok'] as $item):?>
            <li>
              <h4><?php echo $item[0];?></h4>
              <p><?php echo $item[1];?></p>
            </li>
            <?php endforeach ?>
          </ul>
        </div>
        <div class="grid__item">
          <h3>Compétences en développement</h3>
          <div class="progressbar">
            <div class="bar" data-width="75">HTML</div>
          </div>
          <div class="progressbar">
            <div class="bar" data-width="75">CSS</div>
          </div>
          <div class="progressbar">
            <div class="bar" data-width="45">PHP</div>
          </div>
          <div class="progressbar">
            <div class="bar" data-width="30">JAVASCRIPT</div>
          </div>
          <div class="progressbar">
            <div class="bar" data-width="50">Python</div>
          </div>
          <div class="progressbar">
            <div class="bar" data-width="25">MySQL</div>
          </div>
          <h3>Compétences en langue</h3>
          <div class="progressbar">
            <div class="bar" data-width="90">Français</div>
          </div>
          <div class="progressbar">
            <div class="bar" data-width="45">Anglais</div>
          </div>
          <div class="progressbar">
            <div class="bar" data-width="16">Allemand</div>
          </div>
        </div>
      </div>
    </div>
</section>