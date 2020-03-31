@extends('../layouts.app')

@section('page_title', 'Add a Product')

@section('css')
    <link href="{{ asset('css/style_products.css') }}" rel="stylesheet">
@endsection

@section('content')

        <div class="row">
            <div class="mx-auto">
                <form method="POST" action="addArticle.php" enctype="multipart/form-data">
                    <input type="text" name="name" value="{{  name}}" placeholder="Nom du nouvel article" required/>
                    <strong class="text-danger"><?= $nomCheck ?></strong>
                    <br> <br>
                    <input type="text" name="price" value="<?= $prix ?>" placeholder="Prix en euros" required/><strong
                        class="text-danger"><?= $prixCheck ?></strong> <br>
                    <br>
                    <input type="file" name="monfichier" value=" <?= $monfichier ?> "/> <strong
                        class="text-danger"><?= $imageCheck ?></strong> <br> <br>
                    <button type="submit" value="submit">Valider</button>
                    <br>
                </form>
            </div>
        </div>

    //sinon affiche l'article saisi (nom, prix, image) mis en forme

<div class="container">
    <div class="card-deck">
        <div class="row mx-auto">
            <div class="card" style="width: 18rem;">
                <img src= ' . $destImg . ' alt= "image de larticle" class="card-img-top" >
                <div class="card-body text-center">
                    <h5 class="card-title">Peluche ' . htmlspecialchars($nom) . '</h5>
                    <h6 class="card-price text-warning">' . htmlspecialchars($prix) . ' euros.</h6>
                </div>
            </div>
            <form>
            <div class="card" style="width: 18rem;">
                 <h5 class="card-title">Supprimer article:</h5>
                 <input type="checkbox">' ?>
    <input type="submit" name="supprimer" value="valider">
    </form>
if (isset($_POST['supprimer'])) {
        deleteArt($bdd, lastInsertId());
    }
    ?>
    </div>
    </div>
    </div>
    </div>';
    newProduct($bdd, $nom, $prix, $destImg);

@endsection
