@extends('site.master.layout')

@section('content')

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
<!--
            @if(date('H') >= 0 && date('H') <= 12)
              <p>Bom dia!</p>
              @elseif(date('H') >= 13 && date('H') <= 18)
              <p>Boa tarde!</p>
            @else
              <p>Bom noite!</p>
            @endif
-->
              <img src="/img/carroselImg1.jpg" alt="" width="1400" height="500"/>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
            <img src="/img/carroselImg2.jpg" alt="" width="1300" height="600"/>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
            <img src="/img/carroselImg3.jpg" alt=""width="1300" height="500"/>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <img src="/img/round1.png" width="200" height="200"/>

        <h2>Alimentação Saudável</h2>
        <p>Para que uma alimentação seja saudável, é importante ter variedade, equilíbrio, controle de quantidade (comer o que lhe é adequado) e qualidade dos alimentos. Ou seja: conhecer a procedência dos ingredientes é uma das formas de conseguir uma alimentação saudável.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="/img/round2.png" width="200" height="200"/>

        <h2>Saúde da Mulher</h2>
        <p> Cuidados com a saúde íntima e a realização de exames preventivos, estão entre as principais dicas para a manutenção de uma vida saudável e, consequentemente, para o aumento da longevidade feminina.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="/img/round3.png" width="200" height="200"/>

        <h2>Saúde do Homem</h2>
        <p>Novembro é o mês de conscientização sobre a saúde integral do homem. Além dos alertas de prevenção e diagnóstico precoce do câncer de próstata, é reforçada a importância do acesso da população masculina a cuidados com saúde mental, doenças crônicas, doenças sexualmente transmissíveis, além de prevenção a fatores de risco.</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Como combater a dengue. <span class="text-muted">Dengue mata!!</span></h2>
        <p class="lead">A melhor forma de prevenção da dengue é evitar a proliferação do mosquito Aedes Aegypti, eliminando água armazenada que podem se tornar possíveis criadouros, como em vasos de plantas, lagões de água, pneus, garrafas pláticas, piscinas sem uso e sem manutenção, e até mesmo em recipientes pequenos, como tampas de garrafas.</p>
      </div>
      <div class="col-md-5">
      <img src="/img/box2.png" width="500" height="500"/>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Importância e benefícios da vacinação. <span class="text-muted">Vacinas de campanha e rotina.</span></h2>
        <p class="lead">A vacinação é a forma mais eficaz e segura de se adquirir proteção contra uma doença infecciosa. A vacinação elimina ou reduz drasticamente o risco de adoecimento ou de manifestações graves, que podem levar à internação e até mesmo ao óbito. Por ano, a vacinação evita de dois a três milhões de mortes, segundo a Organização Mundial da Saúde (OMS).</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="/img/box3.jpg" width="500" height="500"/>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Posto de saúde comunitário: <span class="text-muted">Entenda como funciona.</span></h2>
        <p class="lead">As Unidades Básicas de Saúde (UBS) são a porta de entrada preferencial do Sistema Único de Saúde (SUS). O objetivo desses postos é atender até 80% dos problemas de saúde da população, sem que haja a necessidade de encaminhamento para outros serviços, como emergências e hospitais.</br>O médico de família tem uma formação ampla e integrada, que prepara o médico para fazer o atendimento de crianças, adolescentes, jovens, adultos e idosos, homens e mulheres, sendo capaz de resolver cerca de 80% dos motivos que levam as pessoas a procurar um médico. </p>
      </div>
      <div class="col-md-5">
      <img src="/img/box5.jpg" width="500" height="500"/>

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

@endsection