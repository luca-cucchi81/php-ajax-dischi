$(document).ready(function () {

$.ajax({
    url: 'server.php',
    method: 'GET',
    success: function (db) {
        getAlbums(db);     
    },
    error: function (error) {
        alert('Attenzione errore');
    }
});

// Funzione per prendere gli album dal json creato
function getAlbums(albumsList){
    albumsList.forEach(function (cd) {
        var source = $('#card-template').html();
        var template = Handlebars.compile(source);
        var disco = template(cd);
        $('.container').append(disco);
    });
}


});
