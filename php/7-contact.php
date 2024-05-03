<section id="contact" class="contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Contact</h2>
            <p>Si mon profil vous intéresse ou si vous avez besoin de plus amples informations n’hésitez pas à me contacter via le formulaire ci-dessous.</p>
        </div>
        <form action="./ConfPHPMailer/mailer.php" class="form" method="POST">
            <label for="name">
                <input type="text" name="name" id="name" placeholder="Nom">
            </label>
            <label for="subject">
                <input type="text" name="subject" id="subjet" placeholder="Sujet">
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



