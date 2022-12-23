</section>
<section id="contact" class="contact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Contact</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae eos nulla est omnis assumenda,
                earum saepe eligendi id reprehenderit aliquid. Perferendis praesentium voluptatem itaque facere
                dolorum. Recusandae atque illum quibusdam!</p>
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

<?php
    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $firstname = htmlspecialchars($_POST['firstname'])
        $lastname = htmlspecialchars($_POST['lastname'])
        $email = htmlspecialchars($_POST['email'])
        $message = htmlspecialchars($_POST['message'])

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

        }
        else {
            echo 'Email non valide'
        }
    }
    else {
        heade('Location:index.php')
        die()
    }
?>