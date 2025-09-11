<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetLar</title>
    @vite(['resources/js/app.js'])
</head>

<body>

    @extends('layout')
    @section('content')
        <section class="hero">
            <img class="fundo" src="{{ asset('storage/images/banner.png') }}" alt="Banner com cachorro e gato" class='banner'>
            <div class="slogan">
                <p class="slogan-text">
                    Adotar é um ato de amor.
                </p>    
            </div>
            <img src="{{ asset('storage/images/logo-prefeitura.png') }}" class="selo-meio-ambiente"
                alt="Selo Meio Ambiente">
        </section>

        <section class="localizacao">
            <div class="loc-text">
                <h2>Canil Municipal de Varginha</h2>
                <p>Avenida dos Imigrantes, nº 3758, bairro da Vargem, Varginha, Minas Gerais</p>
            </div>
        </section>

        <section class="animais">
            @php
                $animais = [
                    ['nome' => 'Nildo', 'status' => 'disponível', 'raca' => 'SRD', 'idade' => '6 anos', 'porte' => 'Médio', 'sexo' => 'Macho', 'img' => 'mymanga.jpg'],
                    ['nome' => 'Preta', 'status' => 'disponível', 'raca' => 'SRD', 'idade' => '8 anos', 'porte' => 'Grande', 'sexo' => 'Fêmea', 'img' => 'preta.jpg'],
                    ['nome' => 'Amarelo', 'status' => 'disponível', 'raca' => 'SRD', 'idade' => '3 anos', 'porte' => 'Médio', 'sexo' => 'Macho', 'img' => 'amarelo.jpg'],
                    ['nome' => 'Sofia', 'status' => 'disponível', 'raca' => 'Toad', 'idade' => '18 anos', 'porte' => 'Pequeno', 'sexo' => 'Fêmea', 'img' => 'sofia.jpg'],
                    ['nome' => 'Polar', 'status' => 'disponível', 'raca' => 'Polar', 'idade' => '17 anos', 'porte' => 'Grande', 'sexo' => 'Macho', 'img' => 'polar.jpg'],
                    ['nome' => 'Gabriel', 'status' => 'disponível', 'raca' => 'Gambá', 'idade' => '19 anos', 'porte' => 'Imenso', 'sexo' => 'Macho', 'img' => 'gabriel.jpg'],
                    ['nome' => 'Luna', 'status' => 'adotada', 'raca' => 'SRD', 'idade' => '10 meses', 'porte' => 'Pequeno', 'sexo' => 'Fêmea', 'img' => 'luna.jpg'],
                    ['nome' => 'Juia', 'status' => 'disponível', 'raca' => 'Chiuaua', 'idade' => '17 anos', 'porte' => 'Pequeno', 'sexo' => 'Fêmea', 'img' => 'juia.jpg'],
                    ['nome' => 'Neco Arc', 'status' => 'disponível', 'raca' => 'Neco Arc', 'idade' => '1000 anos', 'porte' => 'Minúsculo', 'sexo' => 'Gato', 'img' => 'neco.jpg'],
                ];
            @endphp

            <div class="card-grid">
                @foreach ($animais as $animal)
                    <div class="animal-card">
                        <div class="card-header">
                            <h3>{{ $animal['nome'] }}</h3>
                            <span class="status {{ strtolower($animal['status']) }}">{{ strtoupper($animal['status']) }}</span>
                        </div>
                        <img src="{{ asset('storage/images/' . $animal['img']) }}" alt="{{ $animal['nome'] }}">
                        <p>Raça: {{ $animal['raca'] }}</p>
                        <p>Idade: {{ $animal['idade'] }}</p>
                        <p>Porte: {{ $animal['porte'] }}</p>
                        <p>Sexo: {{ $animal['sexo'] }}</p>
                        <a href="#" class="btn-vermais">VER MAIS</a>
                    </div>
                @endforeach
            </div>
        </section>
    @endsection

</body>

</html>