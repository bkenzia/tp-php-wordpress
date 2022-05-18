<?php
/**
 * Upload d'images
 */
function upload($files) {
    // Destination de l'image
    $destination = "public/images/";
    // Récupération du chemin complet de l'image (ex: public/images/image.jpg)
    $cheminDestination = $destination . "" . $files['image']['name'];

    // Autorisation d'upload
    $uploadAutorise = true;

    $uploadReussi = false;
    // Type de l'image en minuscule (ex: jpg)
    $typeImage = strtolower(pathinfo($cheminDestination, PATHINFO_EXTENSION));

    // Extensions autorisées
    $extensions = ["jpg","png","gif"];
    // Chemin temporaire
    $cheminTemporaire = $files['image']['tmp_name'];

    // Si le fichier existe déja
    if(file_exists($cheminDestination)) {
        echo "Le fichier existe déja";
        // On interdit l'upload
        $uploadAutorise = false;
    }

    // Si l'extension du fichier n'est pas autorisée
    if(!in_array($typeImage, $extensions)) {
        echo "Le type de fichier n'est pas autorisé";
        // On interdit l'upload
        $uploadAutorise = false;
    }

    // Si l'upload est autorisé
    if($uploadAutorise == true) {
        // On transfert l'image depuis son emplacement temporaire vers l'emplacement de destination
        if(move_uploaded_file($cheminTemporaire, $cheminDestination)) {
            echo "Le fichier a bien été uploadé";

            $uploadReussi = true;
        }
    }

    return $uploadReussi;
}