

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Speech Recognition</title>
    <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  <!-- load font awesome here for icon used on the page -->
</head>
<body>
  <div class="container"> <!--page container -->
    <div class="text-box" contenteditable="true"></div> <!--text box which will contain spoken text -->
    <i class="fa fa-microphone"></i> <!-- microphone icon to be clicked before speaking -->
  </div>
  <audio class="sound" src="http://soundbible.com/grab.php?id=1598&type=mp3"></audio> <!-- sound to be played when we click icon => http://soundbible.com/1598-Electronic-Chime.html -->
  <script src="js/index.js"></script> <!-- link to index.js script -->
</body>
</html>