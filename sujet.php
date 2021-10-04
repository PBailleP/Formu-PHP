<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="prenom">Prenom :</label>
      <input  type="text"  id="prenom"  name="user_prenom">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
      <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="tel">Telephone :</label>
      <input  type="text"  id="tel"  name="user_tel">
    </div>
    <div>
      <label  for="subject">Choisissez un sujet :</label>
      <select name="sujet" id="subject">
          <option value="">Choose a subject</option>
          <option value="Quetes">Quetes</option>
          <option value="Dojo">Dojo</option>
          <option value="Workshop">Workshop</option>
      </select> 
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
     <a href="thanks.php"><button  type="submit">Envoyer votre message</button></a>
    </div>
  </form>   
</body>
</html>
