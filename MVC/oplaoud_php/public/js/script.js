function handleFileSelect(evt) {
    var files = evt.target.files[0]; // FileList object

    var reader = new FileReader();

    // Récupération des informations de l'image
    reader.onload = (function () {
        return function (e) {
            // Création de la balise img
            var img = document.createElement('img');
            // Ajout de l'attribut src avec le chemin de l'image
            img.setAttribute('src', e.target.result);
            // Affichage de l'image
            document.getElementById('list').insertBefore(img, null);
        };
    })(files);

    // Read in the image file as a data URL.
    reader.readAsDataURL(files);
}

document.getElementById('image').addEventListener('change', handleFileSelect, false);