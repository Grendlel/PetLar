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
       <section class="animais">
           @php
               $animais = [
                   ['nome' => 'Nirdo', 'cor' => 'caramelo', 'pelo' => 'curto', 'castrado' => 'sim', 'vermifugado' => 'sim', 'vacinas' => 'todas', 'descricao' => 'NILDOOO', 'especie' => 'canina', 'img' => 'instagram.png', 'raca' => 'SRD', 'idade' => '6 anos', 'porte' => 'Médio', 'sexo' => 'Macho', ]
               ];
           @endphp


           <div class="card-grid">
               @foreach ($animais as $animal)
                   <div class="animal-perf">
                       <div>
                           <img src="{{ asset('storage/images/' . $animal['img']) }}" alt="{{ $animal['nome'] }}">
                           <p>Nome: {{ $animal['nome'] }}</p>
                       </div>
                       <p>Descricao: {{ $animal['descricao'] }}</p>
                   </div>
               @endforeach
           </div>
       </section>
       <div class="card-grid">
           @foreach ($animais as $animal)
               <div class="animal-perf-desc">
                   <p>Nome: {{ $animal['nome'] }}</p>
                   <p>Especie: {{ $animal['especie'] }}</p>
                   <p>Porte: {{ $animal['porte'] }}</p>
                   <p>Idade: {{ $animal['idade'] }}</p>
                   <p>Cor: {{ $animal['cor'] }}</p>
                   <p>Pelagem: {{ $animal['pelo'] }}</p>
                   <p>Sexo: {{ $animal['sexo'] }}</p>
                   <p>Castrado: {{ $animal['castrado'] }}</p>
                   <p>Raca: {{ $animal['raca'] }}</p>
                   <p>Vermifugado: {{ $animal['vermifugado'] }}</p>
                   <p>Vacinas: {{ $animal['vacinas'] }}</p>
               </div>
           @endforeach
       </div>
   @endsection


</body>


</html>
