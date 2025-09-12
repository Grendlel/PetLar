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
               <h2>Seja Bem-Vindo ao Canil.</h2>
           </div>
       </section>


       <section class="animais">
           <div class="loc-text">
               <p>Cuidar dos animais é um ato de amor! Aqui no Canil Municipal de Varginha, oferecemos abrigo, cuidados e muito carinho para cães e gatos resgatados. em situação de abandono ou maus-tratos. Nossa missão é promover o bem-estar animal e econtrar lares responsáveis para nossos companheiros de quatro patas.</p>
           </div>
       </section>
   @endsection


</body>


</html>
