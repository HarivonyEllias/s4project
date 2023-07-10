<!DOCTYPE html>
<html>
<head>
  <style>
    .container {
      width: 300px;
      margin: 0 auto;
      background-color: #f0f0f0;
      padding: 20px;
    }

    .item {
      margin-bottom: 10px;
      padding: 10px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .item h3 {
      margin: 0;
    }

    .item p {
      margin: 5px 0;
    }

    .btn-modifier {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
    }

    .btn-modifier:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php foreach ($regimes as $regime) { ?>
      <div class="item">
        <h3><?php echo $regime->menu; ?></h3>
        <p><?php echo $regime->description; ?></p>
        <p><?php echo $regime->prix; ?></p>
        <a class="btn-modifier" href="modifier_regime?idRegime=<?php echo $regime->id ?>&menu=<?php echo $regime->menu ?>&description=<?php echo $regime->description ?>&prix=<?php echo $regime->prix ?>">Modifier</a>
        <a class="btn-modifier" href="supprimer_regime?idRegime=<?php echo $regime->id ?>">Supprimer</a>
      </div>
    <?php } ?>
  </div>
  <div>
    <form method="get" action="ajouter_regime">
      <button type="submit">Ajouter</button>
    </form>
  </div>
</body>

</html>
