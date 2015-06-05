var URL_UPDATE_PANIER = '_update_panier.php';
$(document).ready(function(){
    console.log('Démarrage');
    $("button").click(function(){
        console.log('Click');
        $.ajax({
            url: URL_UPDATE_PANIER, // Url
            type : 'GET', // Commande HTTP
            async : true, // Requête asynchrone
            dataType : 'json',
            success: function(result){
                console.log('Réponse Ajax');
                console.log(result);
                $("#nb_bananes").html(result.SESS_NB_BANANE);
            },
            error: function(xhr){
                console.log("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    });
});
