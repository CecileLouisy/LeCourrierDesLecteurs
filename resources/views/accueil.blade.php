<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <title>Le courrier des lecteurs</title>    
</head>
<body>
    <h1>Le courrier des lecteurs</h1>
    <div class="containerArticles">
        @foreach ($articles as $article)
        <div class="articles">
            <h2>{{$article->title}}</h2>            
            <p>Auteur: {{$article->author}}</p>
            <p>Date: {{$article->created_at->format('d/m/Y')}}</p>
            <a href="/details/{{$article->id}}" class=show>Voir</a>
            <a href="/update/{{$article->id}}" class=show>Modifier</a>

            <form action="/delete/{{$article->id}}" method="post">
                    @csrf
                    @method("delete")
                <button class=show>Supprimer</button>
            </form>
                      
        </div>
            
        @endforeach 
    </div>   
    
</body>
</html>