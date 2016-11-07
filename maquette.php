<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste de contacts</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</head>
<body>

 
<div class="container">
   
        </div>
        <div class="col-sm-4">
            <select name="Categorie" id="categorie" >
                <option value=""></option>
            </select>
        </div>
        <div class="col-sm-4">
        </div>
    </div>
</div>


<div class="container">
 <div class="row">
       
    <table class="table">
        <thead>
        <tr>
		 <div class="col-sm-">
            <th>Nom</th>
			</div>
			 <div class="col-sm-">
            <th>Prénom</th>
			</div>
			 <div class="col-sm-">
            <th>Age</th>
			</div>
			 <div class="col-sm-">
            <th>Numéros fixe</th>
			</div>
			 <div class="col-sm-">
            <th>Numéros mobile</th>
			</div>
			<div class="col-sm-">
            <th>Email</th>
			</div>
        </tr>
        </thead>
        <tbody id="tableauresultat">
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <button id="monbouton" class="btn btn-standard">Charger les données</button>
 
    <div id="resultat"></div>
</div>
</body>
</html>