<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/cadastro.css" />
    <title>Formulario de Inscrição</title>
  </head>

  <header>
    <h1>Formulário de Iscrição</h1>
    <p>Faça parte do grande envento.</p>
  </header>

  <body>
    <div class="container">
      <form class="form">
        <div class="form-group">
          <label for="nome">Nome</label>
          <input
            type="text"
            id="nome"
            name="nome"
            placeholder="Digite seu nome"
            required
          />
        </div>
        <div class="form-group">
          <label for="email">Contacto</label>
          <input
            type="tel"
            id="tel"
            name="tel"
            placeholder="Digite seu contacto"
            required
          />
        </div>
        <div class="form-group">
          <label for="idade">Idade</label>
          <input
            type="number"
            id="idade"
            name="idade"
            min="10"
            max="99"
            placeholder="Idade"
            required
          />
        </div>
        <div class="form-group">
          <label for="situacao">Qual cidade onde pertences?</label>
          <select id="dropdown" name="situacao" required>
            <option value="disable selected value">Escolha sua cidade</option>
            <option value="Luanda">Luanda</option>
            <option value="Benguela">Benguela</option>
            <option value="Huila">Huila</option>
            <option value="Huambo">Huambo</option>
            <option value="Bié">Bié</option>
            <option value="Malange">Malange</option>
          </select>
        </div>

        <div class="form-radio-checkbox">
          <label>Visita?</label>
          <label>
            <input
              type="radio"
              name="visita"
              value="sim"
              class="input-radio"
            />Sim
          </label>
          <label>
            <input
              type="radio"
              name="visita"
              value="nao"
              class="input-radio"
            />Não
          </label>
          <label>
            <input
              type="radio"
              name="visita"
              value="talvez"
              class="input-radio"
            />Talvez
          </label>
        </div>

        <div class="form-radio-checkbox">
          <label> Kit do Congresso selecione?</label>
          <label>
            <input
              type="checkbox"
              name="melhorias"
              value="projetos-de-front-end"
              class="input-checkbox"
            />T-Shert -<i style="color:green; font-size:10pt"> 1000,00kz</i>
          </label>
          <label>
            <input
              type="checkbox"
              name="melhorias"
              value="projetos-de-back-end"
              class="input-checkbox"
            />Bone - <i style="color:green; font-size:10pt">1000,00 kz</i>
          </label>
          <label>
            <input
              type="checkbox"
              name="melhorias"
              value="visualização-de-dados"
              class="input-checkbox"
            />Passeata -<i style="color:green; font-size:10pt"> 1000,00kz</i>
          </label>       
         
        </div>

        <div class="form-textarea">
          <label> Algum comentário ou sugestão?</label>
          <textarea
            name="mensagem"
            id="mensagem"
            cols="60"
            rows="6"
            placeholder="Digite aqui sua mensagem"
          ></textarea>
        </div>

        <div class="form-group">
          <button onclick="enviar()"
          >Enviar</button>
        </div>
      </form>
      <footer>
        <p>IASDMR<strong>Congresso</strong> - 2023</p>
      </footer>
    </div>

    <script src="script.js"></script>
  </body>
</html>
