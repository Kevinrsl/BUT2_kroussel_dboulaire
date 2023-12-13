<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      margin: 20px;
    }

    .product {
      width: 30%;
      margin-bottom: 20px;
      border-radius: 2rem;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      position: relative;
    }


    .product img {
      width: 80%;
      height: 15rem;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 2rem;
      margin-top: 2.5rem;
      margin-bottom: 1rem;
      margin-left: 9.5%;
    }

    .product .name {
      position: absolute;
      top: 10px;
      left: 10px;
      font-size: 14px;
    }

    .product .price {
      position: absolute;
      top: 10px;
      right: 10px;
      background-color: #00D499;
      padding: 5px;
      border-radius: 2rem;
      font-size: 14px;
      color: #fff;
    }

    .product .rent-button {
      margin-bottom: 1rem;
      margin-left: auto;
      margin-right: auto;
      height: 4rem;
      width: 90%;
      padding: 10px;
      background-color: #058C42;
      color: #fff;
      text-align: center;
      text-decoration: none;
      display: block;
      border: none;
      border-radius: 4rem;
      cursor: pointer;
    }
  </style>
  <title>Catalogue</title>
</head>
<body>

  <!-- Product 1 -->
  <div class="product">
    <div class="name">Aeroad CF SLX 7 eTap</div>
    <div class="price">100 €</div>
    <img src="./img/veloimage.png" alt="Produit 1">
    <button class="rent-button">Louer</button>
  </div>

  <!-- Product 2 -->
  <div class="product">
    <div class="name">Produit 2</div>
    <div class="price">150 €</div>
    <img src="./img/veloimage.png" alt="Produit 2">
    <button class="rent-button">Louer</button>
  </div>

  <!-- Product 3 -->
  <div class="product">
    <div class="name">Produit 3</div>
    <div class="price">120 €</div>
    <img src="product3.jpg" alt="Produit 3">
    <button class="rent-button">Louer</button>
  </div>

  <div class="product">
    <div class="name">Aeroad CF SLX 7 eTap</div>
    <div class="price">100 €</div>
    <img src="./img/veloimage.png" alt="Produit 1">
    <button class="rent-button">Louer</button>
  </div>

  <!-- Product 2 -->
  <div class="product">
    <div class="name">Produit 2</div>
    <div class="price">150 €</div>
    <img src="./img/veloimage.png" alt="Produit 2">
    <button class="rent-button">Louer</button>
  </div>

  <!-- Product 3 -->
  <div class="product">
    <div class="name">Produit 3</div>
    <div class="price">120 €</div>
    <img src="product3.jpg" alt="Produit 3">
    <button class="rent-button">Louer</button>
  </div>

</body>
</html>
