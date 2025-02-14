
<?php include './header.php'; ?>

<?php

class pokemon {
  public $nome;
  public $poder;
  public $foto;
}

$pokemon1 = new Pokemon();
$pokemon1->nome = "Pikachu";
$pokemon1->poder = "Poder Eletrizante";
$pokemon1->foto = "https://img.pokemondb.net/artwork/large/pikachu.jpg";

$pokemon2 = new Pokemon();
$pokemon2->nome = "Charizard";
$pokemon2->poder = "Poder de Fogo Ardente";
$pokemon2->foto = "";

$pokemons = [
  $pokemon1,
  $pokemon2
];

?>

    <div class="container">
      <div class="row">
        <?php foreach ($pokemons as $key => $pokemon) { ?>

          <!-- pikachu -->
          <div class="col-12 col-lg-3 p-3">
            <div class="card" style="width: 18rem;">
              <img src="<?php echo $pokemon->foto; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php $pokemon->nome; ?></h5>
                <p class="card-text"><?php $pokemon->poder; ?></p>
                <a href="#" class="btn btn-primary">Ver mais</a>
              </div>
            </div>
          </div>
          
        <?php } ?>
       
        </div>
    </div>


<?php include './footer.php'; ?>