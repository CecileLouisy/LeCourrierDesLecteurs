<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <h1>Création un nouvel article</h1>
    <form action="{{url('/nouveau')}}" method="POST">
        @csrf
        <div>
            <label for="title">Titre de l'article *</label>
            <input type="text" name="title" id="title" 
            class="@error('title') is-invalid @enderror"
            value="{{old('title')}}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="author">Auteur *</label>
            <input type="text" name="author" id="author" 
            class="@error('author') is-invalid @enderror"
            value="{{old('author')}}">
            @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div>
            <label for="email">Email *</label>
            <input type="email" name="email" id="email" 
            
            class="@error('email') is-invalid @enderror"
            value="{{old('email')}}">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="age">Age *</label>
            <input type="number" name="age" id="age" 
            class="@error('age') is-invalid @enderror"
            value="{{old('age')}}">
            @error('age')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="zipcode">Code postal *</label>
            <input type="text" name="zipcode" id="zipcode" 
            class="@error('zipcode') is-invalid @enderror"
            value="{{old('zipcode')}}">
            @error('zipcode')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="content">Texte du courrier *</label>
            <textarea name="content" id="content" cols="30" rows="10" 
            class="@error('content') is-invalid @enderror">{{ old('content')}}</textarea>
            @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>       
        
        <div>
            <button type="submit" name="subFormCreate">Créer cet article</button>
        </div>
    </form>
</body>
</html>