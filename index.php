<?php
file_put_contents('./words.txt', $_POST['words']);

$words = file_get_contents('./words.txt');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Words Level</title>

  <link rel="stylesheet" href="index.css">

  <script defer src="./index.js"></script>
</head>

<body>
  <div class="container">
    <h1>Level</h1>
    <div class="level"></div>
    <h2>Words</h2>
    <div class="count"></div>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
      <textarea name="words" rows="15" cols="60"><?= $words ?></textarea>

      <br>
      <input type="submit" value="Upload">
      <button class="clear">Clear</button>
    </form>
  </div>
</body>

</html>