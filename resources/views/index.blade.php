<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetLar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <header class="top-header">
        <div class="container header-content">
            <div class="logo">
                <img src="{{ asset('storage/imagens/logo-petlar.png') }}" alt="PetLar Logo">
            </div>
            <nav class="main-nav">
                <a href="#">Conheça o Canil</a>
                <a href="#">Quero adotar</a>
                <a href="#">Login</a>
            </nav>
            <img src="{{ asset('storage/imagens/logo-prefeitura.png') }}" alt="Prefeitura" class="logo-prefeitura">
        </div>
    </header>

    <main class="main-content">
        <section class="hero">
            <img src="{{ asset('storage/imagens/banner.png') }}" alt="Banner com cachorro e gato">
            <div class="slogan">Adotar é um ato de amor.</div>
            <img src="{{ asset('storage/imagens/selo-meio-ambiente.png') }}" class="selo-meio-ambiente" alt="Selo Meio Ambiente">
        </section>

        <section class="localizacao">
            <h2>Canil Municipal de Varginha</h2>
            <p>Avenida dos Imigrantes, nº 3758, bairro da Vargem, Varginha, Minas Gerais</p>
        </section>

        <section class="animais">
            @php
                $animais = [
                    ['nome' => 'Nildo', 'status' => 'disponível', 'raca' => 'SRD', 'idade' => '6 anos', 'porte' => 'Médio', 'sexo' => 'Macho', 'img' => 'nildo.jpg'],
                    ['nome' => 'Preta', 'status' => 'disponível', 'raca' => 'SRD', 'idade' => '8 anos', 'porte' => 'Grande', 'sexo' => 'Fêmea', 'img' => 'preta.jpg'],
                    ['nome' => 'Amarelo', 'status' => 'disponível', 'raca' => 'SRD', 'idade' => '3 anos', 'porte' => 'Médio', 'sexo' => 'Macho', 'img' => 'amarelo.jpg'],
                    ['nome' => 'Sofia', 'status' => 'disponível', 'raca' => 'Toad', 'idade' => '17 anos', 'porte' => 'Pequeno', 'sexo' => 'Fêmea', 'img' => 'sofia.jpg'],
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
                        <img src="{{ asset('storage/imagens/' . $animal['img']) }}" alt="{{ $animal['nome'] }}">
                        <p>Raça: {{ $animal['raca'] }}</p>
                        <p>Idade: {{ $animal['idade'] }}</p>
                        <p>Porte: {{ $animal['porte'] }}</p>
                        <p>Sexo: {{ $animal['sexo'] }}</p>
                        <a href="#" class="btn-vermais">VER MAIS</a>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-top">
            <img src="{{ asset('storage/imagens/dog-cat.png') }}" alt="Cão e gato fofos">
        </div>
        <div class="footer-content">
            <h2>PetLar</h2>
            <div class="contato">
                <div>
                    <strong>Secretaria Municipal do Meio Ambiente (SEMEA)</strong>
                    <p>R. Jaime Venturato, 50 - Vila São Geraldo, Varginha - MG, 37030-400</p>
                    <p>Telefone: (35) 3690-2311</p>
                </div>
                <div>
                    <strong>Canil Municipal de Varginha</strong>
                    <p>Avenida dos Imigrantes, nº 3758, Vargem, Varginha - MG, 37022-562</p>
                    <p>Telefone: (35) 3690-2019</p>
                </div>
            </div>
            <div class="redes-sociais">
                <img src="{{ asset('storage/imagens/whatsapp.png') }}" alt="WhatsApp">
                <img src="{{ asset('storage/imagens/instagram.png') }}" alt="Instagram">
                <img src="{{ asset('storage/imagens/facebook.png') }}" alt="Facebook">
            </div>
        </div>
    </footer>

</body>
</html>
