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
                   ['nome' => 'Nildo', 'cor' => 'caramelo', 'pelo' => 'curto', 'castrado' => 'sim', 'vermifugado' => 'sim', 'vacinas' => 'todas', 'descricao' => '  Faxinildo, um dos cachorros mais amados de Varginha, carinhosamente apelidado como “Nildo” (ou ainda, “Nirdo”), é um dos três caezinhos do Campus Varginha do CEFET-MG. Ele gosta muito de denguinho e é bem calmo (a não ser que se assuste ou sua missão de guardião do CEFET o chame). 
  Seu hobbie preferido é caminhar pelo CEFET acompanhando seus amigos Preta e Amarelo por diversas aventuras, como caça a ratos e exploração de cantinhos novos do Campus; mas, por vezes, gosta de aproveitar um tempo sozinho, relaxando enquanto pega seu bronzeado diário, não achou mesmo que essa cor caramelo perfeita se mantém sozinha, né? 
Ele também gosta muito dos funcionários, em especial seu papai humano, um funcionário que sempre o dá muito amor e carinho!', 'especie' => 'canina', 'img' => 'nirdo.jpg', 'raca' => 'SRD', 'idade' => '6 anos', 'porte' => 'Médio', 'sexo' => 'Macho', ]
               ];
           @endphp


           <div class="card-grid">
               @foreach ($animais as $animal)
                   <div class="row animal-perf">
                       <div class="col-md-6">
                           <img src="{{ asset('storage/images/' . $animal['img']) }}" alt="{{ $animal['nome'] }}">
                           <p class="nome">{{ $animal['nome'] }}</p>
                       </div>
                       <div class="col-md-6">
                            <p>{{ $animal['descricao'] }}</p>
                       </div>
                       
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
