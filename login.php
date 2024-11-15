<?php require_once("./layout/header.php");?>

<br>
<br>
<br>
<br>
<br>
    <div class= "container1">
    <h2 style="width: 30%; padding: 8px; margin: 8px auto; text-align: center">Login</h2>
    
    <form>
      <!-- Benutzername -->
      <label for="username" style="width: 30%; padding: 8px; margin: 8px auto; text-align: center">Benutzername:</label><br>
      <input type="text" id="username" name="username" placeholder="Benutzername eingeben" 
             style="width: 30%; padding: 10px; margin-bottom: 16px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
      <br>
      <!-- Passwort -->
      <label for="password" style="width: 30%; padding: 8px; margin: 8px auto; text-align: center">Passwort:</label><br>
      <input type="password" id="password" name="password" placeholder="Passwort eingeben" 
             style="width: 30%; padding: 10px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
      <br>
      <!-- Login-Button -->
      <button type="submit" 
              style="width: 30%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">
        Login
      </button>
      <br>
      <!-- Passwort vergessen-Link -->
      <p style="margin-top: 15px;">
        <a href="#" style="color: #007bff; text-decoration: none;">Passwort vergessen?</a>
      </p>
    </form>

  </div>
  </body> 

    

    

<?php require_once("./layout/footer.php");?>