@extends('layouts.base')

@section('css', './css/style.css')
@section('title', 'Accueil')

@section('content')
    
    <form method="POST" action="/calcul" class="flex">
        @csrf
        <label for="numberOne">Entre ton premier nombre :</label>
        <input type="number" name="numberOne" id="numberOne" value="">

        <label for="numberTwo">Entre ton deuxième nombre :</label>
        <input type="number" name="numberTwo" id="numberTwo" value="">

        <label for="">Selectionner votre opérateur :</label>
        <select name="operator" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <button type="submit"> Envoyez !</button>
        <p>Le resultat est : {{$result ?? ''}}</p>
    </form>

   
@endsection