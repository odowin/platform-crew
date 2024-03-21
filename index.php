<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>IPGG Platform Crew</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> <link rel="stylesheet" href="style.css">

</head>
<body>
<h1>IPGG Platform Crew</h1>

<!-- partial:index.partial.html -->
<div id="wrap">
<?php
$data = json_decode(file_get_contents('data.json'), true);
if ($data) {
  $counter = 1; // Initialisation du compteur
  foreach ($data as $item):
?>
    <a href="#" class="hb">
      <div class="c">
        <img src="<?= $item['imageUrl'] ?>" alt="Photo <?= $counter ?>"/>
        <div class="txt">
          <h1><?= $item['title'] ?></h1>
          <p><?= nl2br($item['text']) ?></p>
        </div>
      </div>
      </a>
  <div class="fullBg">
    <img src="<?= $item['imageUrl'] ?>" alt="Photo <?= $counter ?>"/>
  </div>
<?php
  $counter++; // Incrémentation du compteur à chaque tour de boucle
  endforeach;
} else {
  echo '<p>Impossible de charger les données.</p>';
}
?>
  <div class="fullBg">
    <img src="" alt=""/>
  </div>
</div>
<a href="#" class="credits">Photos by ...<br/>on ipgg platform</a>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="script.js"></script>
  <script src="script.js"></script>
</body>
</html>
