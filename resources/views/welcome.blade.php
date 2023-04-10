@extends('layout')

@section('title', 'Page de contact')

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
        <title>Laravel</title>        
    </head> 
    <body>
        <main>
            <div class="request-container">
                <!-- tri par created_at le plus récent en premier -->
                <?php
                $contacts = App\Models\Contact::orderBy('created_at', 'desc')->get();
                ?>
            @foreach($contacts as $contact)
                <ul class="request">
                    <li>Nom : {{ $contact->name }}</li>
                    <li>Email : {{ $contact->email }}</li>
                    <li>Message : {{ $contact->message }}</li>
                    <li class="received">Reçu le {{ $contact->created_at }}</li>
                </ul>
@endforeach
            </div>
        </main>
    
    </body>
</html>
@endsection