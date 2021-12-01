'use strict'

let fotoArtista = document.getElementById('fotoArtista');
let fileArtista = document.getElementById('your_picture');

function FotoArtista() {
    fileArtista.addEventListener('change', () => {

        if (fileArtista.files.length <= 0) {
            return;
        }

        let reader = new FileReader();

        reader.onload = () => {
            fotoArtista.src = reader.result;
        }

        reader.readAsDataURL(fileArtista.files[0]);
    });
}



'use strict'

let foto = document.getElementById('img_card');
let fileFoto = document.getElementById('flFoto');
let file = document.getElementById('flImage');

function obraFoto() {
    file.addEventListener('change', () => {

        if (file.files.length <= 0) {
            return;
        }

        let reader = new FileReader();

        reader.onload = () => {
            foto.src = reader.result;
        }

        reader.readAsDataURL(file.files[0]);
    });
}