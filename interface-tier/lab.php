
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Canine Reservation Website</title>
  <link rel="stylesheet" href="../style/style.css"/>
</head>
<body>
  <script src="../Ajax/get_breeds.js">
  </script>
  <div>
    <h1>Dog Object Creator</h1>
    <form action="./dog_interface.php" method="post">
      <h2>Please, complete ALL fields. Please note the required format of information.</h2>
      Enter your dog's name (max 20 characters, alphabetic)
      <input type="text" maxlength="20" placeholder="Use up to 20 characters for the name" name="dog_name" id="dog_name" required/><br/><br/>
      Select your Dog's Color: <br/>
        <input type="radio" name="dog_color" id="dog_color" value="brown"/>Brown<br/>
        <input type="radio" name="dog_color" id="dog_color" value="black"/>black<br/>
        <input type="radio" name="dog_color" id="dog_color" value="yellow"/>yellow<br/>
        <input type="radio" name="dog_color" id="dog_color" value="white"/>white<br/>
        <input type="radio" name="dog_color" id="dog_color" value="mixed"/>mixed<br/><br/>
      Enter your dog's weight here (numeric only)
      <input type="number" min="0" max="120" name="dog_weight" id="dog_weight" required/><br/>
      <script>
        AjaxRequest('./dog_interface.php')
      </script>
      <div id="AjaxResponse"></div>
      <input type="hidden" name="dog_app" id="dog_app" value="dog"/>
      <input type="submit" value="click to create your dog"/>
    </form>
  </div>
</body>
</html>