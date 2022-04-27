<?php include_once('templates/header.php') ?>



<!-- primeira postagem -->
<section id="post1" class="d-flex">
  <div class="container align-self-center">
    <div class="row">
      <div class="col-md-12 postagem">
        <h1>Olá</h1>
        <p>Eu estou aqui para te <br>
          ajudar a entender os seus<br>
          caminhos e as suas novas<br>
          possibilidades </p>
      </div>
    </div>
  </div>
</section>
<!-- fim -->

<!-- sobre mim -->

<section id="post2" class="caixa fundo">
  <div class="container align-self-center">
    <div class="row">
      <div class="col-md-12 postagem">
        <img src="<?= $BASE_URL ?>/img/julieta.png" alt="Julieta foto" width="142" class="img-fluid">
        <h1>Conheça um pouco sobre mim</h1>
        <p>Sou Fabiane Vilaça, possuo 7 anos atuando no tarot</p>

        <p>A seguir, você encontrará informações sobre, como funciona o meu atendimento, tipos de leitura e suas descrições, para que
          escolha qual a melhor pra você e informações importantes e como se preparar</p>

      </div>
    </div>
  </div>
</section>
<!-- fim -->

<!-- cartas-->

<section id="post3" class="caixa">
  <div class="container align-self-center">
    <div class="row">
      <div class="col-md-6 centralizar">
        <img src="<?= $BASE_URL ?>img/cartas.svg" alt="imagem" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h1>Cartas</h1>
        <p>
          Eu utilizo alguns tipos de cartas, sendo o Tarot (com 78 cartas) e o baralho cigano
          (com 36 cartas). A escolha das cartas que serão utilizadas dependerá do tipo de
          consulta e da energia desta, não há uma regra, é individual para cada consulta e cada
          consulente.
          Todos os meus atendimentos possuem como objetivo o acolhimento, esclarecimento
          e auxílio na tomada de decisão para que seja feita de forma sábia, e por meio da
          minha consulta, você terá um espaço livre para desabafar e correlacionar as cartas
          com o que vier na sua cabeça.
          <br>

          O atendimento é realizado por envio de fotos das cartas e áudios com as
          explicações, e pode ser feito de duas formas: <br><br>
          <span class="font-weight-bold">Síncrona:</span> Marcamos um horário para que você acompanhe enquanto envio as
          cartas e áudios, dessa forma podemos trocar idéias e sanar dúvidas em tempo
          real, com ambas/os online. <br><br>
          <span class="font-weight-bold"> Assíncrona:</span> Nesta, combinamos quando eu posso te enviar. Você não precisa
          estar online no momento do envio, e fazer outras perguntas quando estiver
          livre. O tempo da minha resposta varia, mas leva no máximo 24 horas. <br>
        </p>


      </div>
    </div>
  </div>
</section>


<!--  tipos de leitura -->
<section id="post4" class="caixa fundo">
  <div class="container align-self-center">
    <div class="row">
      <div class="col-md-12">
        <h1>Tipos de Leitura</h1>
        <h2>Meus atendimentos</h2>
        <div class="row">
          <div class="col-md-6">
            <p>
              <span class="font-weight-bold">Perguntas Avulsas:</span> Dúvidas rápidas, questões de “sim” ou
              “não” e perguntas objetivas.
            </p>
          </div>

          <div class="col-md-6">
            <p>
              <span class="font-weight-bold">Leitura de Julieta:</span> Leitura indicada para momento de
              reorganização da vida. Nesta você entenderá sobre as
              tendências da sua vida profissional, financeira, afetiva,
              amorosa, familiar e amizades. Tudo isso para um período de
              03 meses. Te dou o direito de fazer mais 3 perguntas sobre o
              que quiser.
          </div>
          </p>
        </div>
      </div>
    </div>
    <!-- cards das leituras -->
    <div class="row">
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card">
          <img class="card-img-top mx-auto text-center" alt="Leitura do Opus" src="<?= $BASE_URL ?>img/exemplo.png" style="width: 100px;">
          <div class="card-body">
            <h5 class="card-title">Leitura do Opus</h5>
            <p class="card-text">Nesta leitura, você entenderá as tendências da sua vida
              profissional e financeira para um período de 03 meses. As cartas revelarão
              pontos positivos e negativos que existem no seu caminho e te darão um
              conselho de como lidar com a situação. Te dou o direito de fazer mais 2
              perguntas sobre o tema. Você precisa me enviar uma contextualização de
              como está atualmente.</p>
            <a href="" class="btn btn-custom">Quero essa leitura</a>

          </div>
        </div>

      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card">
          <img src="<?= $BASE_URL ?>img/exemplo.png" alt="Leitura de Afrodite" class="card-img-top mx-auto text-center" style="width: 100px;">
          <div class="card-body">
            <h5 class="card-title">Leitura de Afrodite</h5>
            <p class="card-text">Indicada para pessoas solteiras, aqui serão analisados os
              pontos chave da sua vida amorosa, indicando como você se posiciona, que tipo
              de pessoa tem atraído, quais as perspectivas da vida amorosa, e o que deveria
              mudar para que fique melhor. Te dou o direito de fazer mais 2 perguntas sobre
              o tema.</p>
            <a href="" class="btn btn-custom">Quero essa leitura</a>
          </div>

        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <div class="card">
          <img src="<?= $BASE_URL ?>img/exemplo.png" alt="Leitura dos Enamorados" class="card-img-top mx-auto text-center" style="width: 100px;">
          <div class="card-body">
            <h5 class="card-title">Leitura dos Enamorados</h5>
            <p class="card-text"> Indicada para pessoas que possuem um par, pois nesta analisaremos
              qual a dinâmica do seu atual, futuro ou ex relacionamento. Serão analisados sentimentos,
              pensamentos e atitudes seus e da pessoa em questão. Essa relação precisa ser no mínimo uma
              paquera. Você também poderá entender as tendências para o futuro da relação e um conselho.
              Te dou o direito de fazer mais 2 perguntas sobre o tema.</p>
            <a href="" class="btn btn-custom">Quero essa leitura</a>
          </div>
        </div>
      </div>

    </div>


    <div class="row ">
      <div class="col-md-6 d-flex justify-content-center">
        <div class="card ">
          <img src="<?= $BASE_URL ?>img/exemplo.png" alt="Leitura do Protagonista" class="card-img-top mx-auto text-center" style="width: 100px;">
          <div class="card-body">
            <h5 class="card-title">Leitura do Protagonista</h5>
            <p class="card-text">Esta leitura tem como objetivo entender sobre o que você tende a
              expressar (exteriorizar) para um período de 3 meses. Será revelado o que precisa melhorar, qual
              o conselho e como as pessoas te enxergam no momento. Te dou o direito de fazer mais 2
              perguntas sobre o tema.</p>
            <a href="" class="btn btn-custom">Quero essa leitura</a>
          </div>

        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center">
        <div class="card">
          <img src="<?= $BASE_URL ?>img/exemplo.png" alt="Leitura das Duas Vias" class="card-img-top mx-auto text-center" style="width: 100px;">
          <div class="card-body">
            <h5 class="card-title">
              Leitura das Duas Vias
            </h5>
            <p class="card-text">Leitura indicada para quem necessita saber uma tendência, ou seja,
              possível (is) consequência (s) em uma tomada de decisão que envolve a possibilidade de duas
              escolhas.
              Ex: “penso em sair de um lugar. Se eu ficar, qual a tendência? E se eu optar por sair, qual a
              tendencia?”
              Te dou o direito de fazer 1 pergunta sobre o tema.

            </p>
            <a href="" class="btn btn-custom">Quero essa leitura</a>
          </div>
        </div>
      </div>


    </div>

  </div>

</section>


<!-- como deve se preparar -->


<section id="preparo" class="caixa">
  <div class="container align-self-center d-flex justify-content-center">
    <div class="row text-center" style="width: 600px;">
      <div class="col-md-12" >
        <h1>Como me preparar para a
          leitura e o que devo saber?
        </h1>

        <p >É muito importante para nós profissionais que você consulente entenda que o
          futuro é mutável, que o que lemos são tendências, relacionadas com as
          energias que envolvem as situações. Portanto, se algo não sair tão bom quando
          lemos, você tem o poder de seguir o conselho e melhorar.
          É importante também, que façam seu momento de relaxamento antes das
          leituras, para a energia fluir. E que seu coração e mente estejam abertos a
          receberem e respeitarem a mensagem. As cartas não nos revelam aquilo que
          queremos ouvir, mas sim, o que precisamos saber.
          Portanto, descruze braços e pernas, faça sua oração e concentre-se.
          Saliento que, a leitura não é algo imediato, tudo o que é mostrado se trata de
          um processo que necessita de reflexão.</p>
      </div>

    </div>
  </div>

</section>



<?php include_once('templates/footer.php') ?>