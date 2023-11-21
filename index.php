<?php
// Informations de connexion à la base de données
$serveur = "lefrancq.free.nf";
$utilisateur = "nsi0_35465431";
$mot_de_passe = "jkhebqIKhCpsq";
$nom_base_de_donnees = "ftpupload.net";

// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $nom_base_de_donnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Exemple de requête SQL
$requete = "SELECT * FROM ma_table";
$resultat = $connexion->query($requete);

// Traitement des résultats
if ($resultat->num_rows > 0) {
    while ($ligne = $resultat->fetch_assoc()) {
        echo "Colonne1: " . $ligne["colonne1"] . " - Colonne2: " . $ligne["colonne2"] . "<br>";
    }
} else {
    echo "Aucun résultat trouvé.";
}

// Fermer la connexion
$connexion
