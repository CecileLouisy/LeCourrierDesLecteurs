<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <h1>{{$details->title}}</h1>
    <p>Auteur : {{$details->author}}, Age : {{$details->age}}</p>
    <p>Date : {{$details->created_at}}</p>
    <p>{{$details->content}}</p>
    <p>Me contacter : {{$details->email}}, Département : {{$details->zipcode}}</p>
    <a href="/" class=show>Retour</a>

</body>
</html>