<?php require_once("./layout/header.php");?>

<nav>
        <a href="about.php">Über Uns</a><br>
        <a href="login.php">Login</a><br>
        <a href="secret.php">Privates</a><br>

    </nav>

<h1>Willkommen auf meiner persönlichen Website!</h1>
    <p>Kurs: Web Programmierung by Ali Khorsandfard</p>
    <p>Informatiker Sommer 2024</p>
    <p>Name: Daniel Gerking</p>
    <p>Standort: Herford</p>
    <form>
    <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Bitte Email eingeben">
    </div>
    <div class="form-group">
    <label for="message">Nachricht:</label>
    <textarea class="form-control" id="message" rows="3" placeholder="Bitte Nachricht eingeben"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Anfrage absenden</button>
    </form>

<?php require_once("./layout/header.php");?>