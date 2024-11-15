<?php require_once("./layout/header.php");?>



<br>
<br>
<br>
<br>
<br>
<div class="container1">
<h1>Willkommen auf meiner EK-Website</h1>
    <p>Kurs: Web Programmierung by Ali Khorsandfard</p>
    <p>Informatiker Sommer 2024</p>
    <p>Name: Daniel Gerking</p>
    <p>Standort: Herford</p>
    <form>
    <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Bitte Email eingeben" style="width: 30%; padding: 8px; margin: 8px auto; text-align: center">
    </div>
    <div class="form-group">
        <br>
    <label for="message">Nachricht:</label>
    <textarea class="form-control" id="message" rows="3" placeholder="Bitte Nachricht eingeben" style="width: 30%; padding: 8px; margin: 8px auto; text-align: center"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Anfrage absenden</button>
    <br>
    <br>
    </form>
</div>

<?php require_once("./layout/footer.php");?>