<?php $contact = $data['contact'];?>
</section>
<section id="contact" class="contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php echo $contact['title']?></h2>
            <p><?php echo $contact['text_content']?></p>
        </div>
        <form action="contact.php" class="form">
            <label for="firstname">
                <input type="text" name="firstname" id="firstname" placeholder="Nom">
            </label>
            <label for="lastname">
                <input type="text" name="lastname" id="lastname" placeholder="Prenom">
            </label>
            <label for="email">
                <input type="email" name="email" id="email" placeholder="Email">
            </label>
            <textarea name="message" id="message" placeholder="Message"></textarea>
            <div class="g-recaptcha" data-sitekey="6LcdJp4jAAAAAIL6PDZn7N0LcfUGp1hpVcYK_Ggk"></div>
            <input type="submit" class="btn" value="Envoyer">
        </form>
    </div>
</section>
