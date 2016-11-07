$(function(){

    $.ajax({
        url:'listerequete.php',
        success: function(result){
            var $contenue = "";
            var obj = $.parseJSON(result);
            obj.forEach(function(element){
                $contenue += '<option value="'+element.id_categorie+'">'+element.nom_categorie+'</option>';

            });

            $("#categorie").html($contenue);

        }

    });


    $("button").click(function(){
    
        $.ajax({
            url: 'requete.php',
            data: 'categorie='+ $("#categorie").val(),
            type: 'POST',
            success: function(result){
                resultat = "";
                console.log("Résultat : ",result);

                var obj = $.parseJSON(result);
                obj.forEach(function(element){
                    resultat += '<tr>';
                    resultat += '<td>'+element.Nom+'</td>';
                    resultat += '<td>'+element.Prenom+'</td>';
                    resultat += '<td>'+element.age+'</td>';
                    resultat += '<td>'+element.num_tel+'</td>';
                    resultat += '<td>'+element.num_tel_mob+'</td>';
                    resultat += '<td>'+element.email+'</td>';
                    resultat += '</tr>';
                });
                $("#tableauresultat").html(resultat);
            },
            error: function(result){
                resultat = "ERREUR " + result;
                $("#error").html(resultat);
            }
        });
   })

});

// $(function(){
    // $("#monbouton").click(function(){

    // });
// });