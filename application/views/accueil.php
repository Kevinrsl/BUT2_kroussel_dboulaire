
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 2.5rem;
    }

    h1{
      font-size: 30px;
    }

    p {
      font-size: 24px;
      text-align: center;
    }

    .annonce {
      width: 100%;
      height: 20rem;
      border-radius: 3rem;
    }

    .categories {
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      flex-wrap: wrap;
    }

    .sous-cat-container {
      width: 21%;
      height: 21%;
      margin-bottom: 1rem;
      margin-top: 1rem;
      text-align: center;
    }

    .sous-cat {
      width: 100%;
      height: 23%;
      border-radius: 3rem;
    }
  </style>
  <title>Catalogue</title>
</head>
<body>

  <img src="./img/veloimage.png" alt="annonce" class="annonce">
  <h1> Location de matériel </h1>

  <div class="categories">
    <div class="sous-cat-container">
      <img src="./img/veloimage.png" alt="endurance" class="sous-cat">
      <p>Endurance</p>
    </div>

    <div class="sous-cat-container">
      <img src="./img/veloimage.png" alt="velos" class="sous-cat">
      <p>Vélos</p>
    </div>
    <div class="sous-cat-container">
      <img src="./img/veloimage.png" alt="endurance" class="sous-cat">
      <p>Prix bas</p>
    </div>

    <div class="sous-cat-container">
      <img src="./img/veloimage.png" alt="velos" class="sous-cat">
      <p>Nouveautés</p>
    </div>

  </div>

</body>
</html>