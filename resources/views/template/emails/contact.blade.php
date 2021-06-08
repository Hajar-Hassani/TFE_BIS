<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
  <h3>Vous avez un nouveau message via le formulaire de contact</h3>
  <div>
  	<p><span><strong>Nom:</strong> {{ $nom }}</span></p>
  	<p><span><strong>Numéro de téléphone :</strong> {{ $telephone }}</span></p>
  	<p><span><strong>Message:</strong> {{ $user_query }}</span></p>
  </div>
  <p><span><strong>Envoyer via :</strong>{{ $email }}</span></p>
</body>
</html>
