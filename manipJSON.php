<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Recherche via Open Movie Database</title>
</head>
<body>

	<h1 class="byline">Recherche via Open Movie Database</h1>

  <form class="form-wrapper cf" action="endpoint.php" method="get" target="_blank">

      <input type="text" placeholder="Entrez un titre de film..." name="t" id="title">
      <input type="hidden" name="plot" value="full">
      <input type="hidden" name="apikey" value="#">
    
      <button type="submit">Chercher</button>

  </form>

</body>
</html>





