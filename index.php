<?php
include 'class/Personnage.php';

/* function generateCard($param)
{
for ($i = 1; $i < $param; $i++) {
?>

<div class="col-md-4 mr-4 card notCliked" id="card0<?php echo $i ?>" data-pok="pika">
<img src="images/sw<?php echo $i ?>.jpg" />
</div>

<?php
}
} */
?>





<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> -->

</head>

<body>
<div class="container-fluid">
  <div class="row text-center justify-content-center mt-4" id="superContain">

    <div class="col-sm-4 col-md-3 col-lg-2 card notCliked ml-3 mr-3 mb-3" id="card01">
        <div class="card-header text-center">
          <strong>Ashsoka</strong>
            <small></br>Padawan d'Anakin</small>
        </div>
        <img src="images/sw1.jpg" alt="">
        <div class="card-body">
            <h4 class="card-title">
              Statistiques
            </h4>
            <p class="card-text">
                <?php echo 'Name: ' . $Ashsoka->name . '<br>';
echo 'Vie: ' . $Ashsoka->vie . '<br>';
echo 'Degats: ' . $Ashsoka->atak . '<br>'; ?>
            </p>
            <div class="btn btn-danger atakButton" id="ashsoka"><strong>Attaquer</strong></div>
        </div>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-2 card notCliked ml-3 mr-3 mb-3" id="card02">
      <div class="card-header text-center">
          <strong>Darth Revan</strong>
          <small></br>Jedi Noir</small>
      </div>
        <img src="images/sw2.jpg" alt="">
      <div class="card-body">
        <h4 class="card-title">
          Statistiques
        </h4>
        <p class="card-text">
        <?php echo 'Name: ' . $Revan->name . '<br>';
echo 'Vie: ' . $Revan->vie . '<br>';
echo 'Degats: ' . $Revan->atak . '<br>'; ?>
            </p>
            <div class="btn btn-danger atakButton" id="revan"><strong>Attaquer</strong></div>
      </div>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-2 card notCliked ml-3 mr-3 mb-3" id="card03">
        <div class="card-header text-center">
            <strong>Yoda</strong>
            <small></br>Maître de l'ordre Jedi</small>
        </div>
        <img src="images/sw3.jpg" alt="">
        <div class="card-body">
            <h4 class="card-title">
                Statistiques
            </h4>
            <p class="card-text">
            <?php echo 'Name: ' . $Yoda->name . '<br>';
echo 'Vie: ' . $Yoda->vie . '<br>';
echo 'Degats: ' . $Yoda->atak . '<br>'; ?>
            </p>
            <div class="btn btn-danger atakButton" id="yoda"><strong>Attaquer</strong></div>
        </div>
    </div>

</div><!-- fin row card -->


<div class="row justify-content-center mt-3 mb-3">
  <div class="col-sm-6 col-md-6 col-lg-4 cardBis" id="combatLog">
    <div class="card-header text-center" style="border-bottom: 1px solid #535353;">
          <strong><h5>LOG DE COMBAT</h5></strong>
    </div>
      <div class="card-body text-center">
        <div class="card-title" id="fight">

        </div>
        <a href=""><p class="card-text btn btn-danger mt-4" style="border-top: 1px solid #535353;">
        <strong> Relancer un combat</strong>
        </p></a>
      </div>
  </div>
</div>

</div><!-- fin container fluid -->

<footer>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 text-center" style="color:whitesmoke">Yirzaraji | 2020</div>
    <div class="col-md-4"></div>
  </div>
</div>
</footer>

   <script src="script.js"></script>
</body>
</html>
