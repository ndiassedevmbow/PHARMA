<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Gestion Pharmacie</title>
    <script src="JQUERY/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>

<div class="container">
    
<div class="row">
    <header class="page-header col-lg-12 text-center text-info" style="font-variant: small-caps; font-size: 55px;">
        gestion d'une pharmacie
    </header>
</div>

<div class="row">
    <div class="jumbotron col-lg-12 text-center" style="font-family: verdana; font-variant: small-caps; font-size: 25px;">
        nous sommes là pour vous satisfere
    </div>
</div>


<form method="post" action="">

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" placeholder="Remplir nom" id="nom" value="" class="form-control">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" name="prix" placeholder="Remplir prix" id="prix" value="" class="form-control" oninput="traitement()">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="qte">Quantite</label>
            <input type="number" name="qte" placeholder="Remplir qte" id="qte" value="" class="form-control" oninput="traitement()">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="payer">Payer</label>
            <input type="number" name="payer" placeholder="Remplir payer" id="payer" value="" class="form-control" oninput="traitement()">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="total">Total</label>
            <input type="number" name="total" id="total" class="form-control">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="reste">Reste</label>
            <input type="number" name="reste" id="reste" value="" class="form-control">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <input type="submit" class="btn btn-default btn-lg btn-block btn-success" name="btn" id="btn" value="Enregistrer"/>
    </div>
</div>

</form>


</div>

</body>
</html>



<script type="text/javascript">
    function traitement()
    {
        // Récupérer la valeur du Prix
        var prix = document.getElementById("prix").value;
        // Récupérer la valeur du Qte
        var qte = document.getElementById("qte").value;

        // Mettre la valeur de Prix * Qte dans Total
        document.getElementById("total").value = prix*qte;




        // Récupérer la valeur du Payer
        var payer = document.getElementById("payer").value;

        // Récupérer la valeur du Total
        var total = document.getElementById("total").value;
        
        // Mettre la valeur de Total - Payer dans Reste
        document.getElementById("reste").value = total-payer;
    }
</script>



<?php  
$server = "localhost";
$login = "root";
$psw = "";

try {
    $bdd = new PDO("mysql:host=$server; dbname=gestion_pharmacie", $login, $psw);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['btn'])) {


        if(!empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['qte']) && !empty($_POST['payer']))
        {
            $req = $bdd->prepare("INSERT INTO tbpharma(nom, prix, qte, payer, total, reste) VALUES(:nom, :prix, :qte, :payer, :total, :reste)");
        
            $req->bindParam(':nom', $nom);
            $req->bindParam(':prix', $prix);
            $req->bindParam(':qte', $qte);
            $req->bindParam(':payer', $payer);
            $req->bindParam(':total', $total);
            $req->bindParam(':reste', $reste);

        
            $nom = htmlspecialchars($_POST['nom']);
            $prix = htmlspecialchars($_POST['prix']);
            $qte = htmlspecialchars($_POST['qte']);
            $payer = htmlspecialchars($_POST['payer']);
            $total = htmlspecialchars($_POST['total']);
            $reste = htmlspecialchars($_POST['reste']);

            $req->execute();
        }
        else {
            echo "Tout les champs doivent etre rempli";
        }

    }


} catch (Exception $e) {
    echo "Error : ". $e->getMessage();
}
?>