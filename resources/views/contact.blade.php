@extends('layout')

@section('title', 'Page de contact')

@section('content')

    <div class="login-box">
    <h2>Contactez-nous</h2>
        <form action="/contact" method="POST">
            @csrf
            <div class="user-box">
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" class="form-control">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="user-box">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="user-box">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-control"></textarea>
                @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button type="submit" class="btn">SUBMIT</button>
        </a>

        </form>
    </div>

    @endsection
