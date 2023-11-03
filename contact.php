<?php require_once "_header.php"; ?>
<h1>Contact</h1>
        </div>
    <?php require_once "_asideContent.php"; ?>
    <div class="contact">
        <div class="infoContact">
            <ul>
                <li>Adresse :</li>
                <li>25 rue des fougères</li>
                <li>89000 Ardèche</li>
                <li>Téléphone :</li>
                <li>03 56 45 85 41</li>
                <li>Email :</li>
                <li><a href="mailto:contact@contact.com" title="Envoyer un mail">contact@contact.com</a></li>
            </ul>
        </div>
        <div class="form">
            <form action="">
                <p>Nous contacter :</p>
                <div class="formContainer">
                    <label for="nom">Votre nom :</label>
                    <input type="text" placeholder="Nom" name="nom" id="nom">
                </div>
                <div class="formContainer">
                    <label for="prenom">Votre prénom :</label>
                    <input type="text" placeholder="Prénom" name="prenom" id="prenom">
                </div>
                <div class="formContainer">
                    <label for="email">Votre email :</label>
                    <input type="text" placeholder="Email" name="email" id="email">
                </div>
                <div class="formContainer">
                    <label for="msg">Votre message :</label>
                    <textarea name="msg" style="resize:none" id="msg" cols="30" rows="5"></textarea>
                </div>
               
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </div>
<?php require_once "_footer.php"; ?>
