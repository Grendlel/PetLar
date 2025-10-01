<section class="filtro">
          @php
              $nome = [];
              $especie = [];
              $raca = [];
              $porte = [];
              $pelagem = [];
              $idade = [];
              $foto = [];
              $descricao = [];
              $cor = [];
              $sexo = [];
              $castrado = [];
              $vacinado = [];
              $quaisvacinas = [];
              $vermifugado = [];
      </section>


      <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">


       @csrf
       <div>
           <label for="nome">Nome</label>
           <input type="text" id="nome" name="nome">
       </div>
       <div>
           <label for="especie">Espécie</label>
           <select name="especie" id="especie">
               <option value="canina">Canina</option>
               <option value="felina">Felina</option>
               <option value="outro">Outro</option>
           </select>
       </div>
       <div>
           <label for="raca">Raça</label>
           <input type="text" id="raca" name="raca">
       </div>
       <div>
           <label for="porte">Porte</label>
           <select name="porte" id="porte">
               <option value="pequeno">Pequeno</option>
               <option value="medio">Médio</option>
               <option value="grande">Grande</option>
           </select>
       </div>
       <div>
           <label for="pelagem">Pelagem</label>
           <select name="pelagem" id="pelagem">
               <option value="curta">Curta</option>
               <option value="media">Média</option>
               <option value="grande">Grande</option>
           </select>
       </div>
       <div>
           <label for="idade">Idade</label>
           <input type="number" id="idade" name="idade">
       </div>
       <div>
           <text>Foto do pet</text>
           <input type="file" id="foto" name="foto">
       </div>
       <div>
           <label for="descricao">Descrição</label>
           <input type="text" id="descricao" name="descricao">
       </div>
       <div>
           <label for="cor">Cor</label>
           <select name="cor" id="cor">
               <option value="bicolor">Bicolor</option>
               <option value="branco">Branco</option>
               <option value="caramelo">Caramelo</option>
               <option value="cinza">Cinza</option>


               <option value="escaminha">Escaminha</option>
               <option value="frajola">Frajola</option>
               <option value="laranja">Laranja</option>
               <option value="marrom">Marrom</option>


               <option value="preto">Preto</option>
               <option value="tigrado">Tigrado</option>
               <option value="tricolor">Tricolor</option>
               <option value="outros">Outros</option>
           </select>
          
       </div>
       <div>
           <label for="sexo">Sexo</label>
           <select name="sexo" id="sexo">
               <option value="macho">Macho</option>
               <option value="femea">Fêmea</option>
           </select>
       </div>
       <div>
           <label for="castrado">Castrado</label>
           <select name="castrado" id="castrado">
               <option value="sim">Sim</option>
               <option value="nao">Não</option>
           </select>
       </div>
       <div>
           <label for="vacinado">Vacinado</label>
           <select name="vacinado" id="vacinado">
               <option value="sim">Sim</option>
               <option value="nao">Não</option>
           </select>
           <input type="text" id="quaisvacinas" name="quaisvacinas" placeholder="Quais vacinas?">
       </div>
       <div>
           <label for="vermifugado">Vermifugado nos últimos 3 meses?</label>
           <select name="vermifugado" id="vermifugado">
               <option value="sim">Sim</option>
               <option value="nao">Não</option>
           </select>
       </div>


       <div>
           <button type="submit">Enviar</button>
       </div>
   </form>
