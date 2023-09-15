<x-layout>





<!-- WEBCAM -->

<!-- <video id="cameraFeed" autoplay></video> -->





<video class="video-bg" src="/coding.mp4" autoplay muted loop></video>

<!-- sezioni -->

<section class="section watch"><h1 class="title" >Il tuo sito da 0</h1></section>

<section class="section watch"><h1 class="title" >Tecniche avanzate di codifica web</h1></section>

<section class="section watch"><h1 class="title" >Design esclusivi</h1></section>






<!-- PRESENTAZIONE -->

<div class="panel1">
<div class="container">
  <p class="watch intro fade-in" >My Name Is</p>
  <h1 style="color: orange;" class="watch title-bg fade-in">Lorenzo Ricciardiello</h1>
  <p class="watch intro fade-in" >I'm From Naples,Italy</p>

  <div class="h-text">
    <div class="h-animate">
      <span class="text first-text">I'm a&nbsp;</span>
      <span class="text sec-text">Developer</span>
    </div>
  </div>


  <img src="/man.gif" alt="" class="man fade-inImg watch">
</div>
</div>


<!-- pannello -->

<div class="panel">
<div class="container">

  <div class="h-text">
    <div class="h-animate">
    <span class="text2 first-text2">I Miei Linguaggi&nbsp;</span>
      <span class="text2 sec-text2 ">HTML</span>
    </div>
  </div>
  <br>
  <br>
  <img src="/linguaggi.webp" alt="" class="watch fade-inImg appleWatch">
</div>
</div>

<!-- pannello 2 -->


<div class="panel2">
<div class="container">

<div class="h-text">
    <div class="h-animate">
    <span class="text3 first-text3">PHP &nbsp;</span>
      <span class="text3 sec-text3">è un potente linguaggio</span>
    </div>
  </div>

  <br>
  <br>
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="" class="watch  fade-inImg appleWatch2">
</div>
</div>


<!-- pannello 3 -->

<div class="panel3">
<div class="container">
  <p style="color: black;" class="watch intro fade-in" >L'uso del linguaggio Javascript tramite lo strumento della manipolazione del DOOM rende il tuo sito dinamico più che mai</p>
  <br>
  <br>
  <img src="https://www.creativemotions.it/wp-content/uploads/2021/11/Cos-e-javascript.jpg" alt="" class="watch fade-inImg appleWatch3">
</div>
</div>




<!-- pannello 4 -->


<div class="panel4">
<div class="container">
  <p style="color: black;"  class="watch intro fade-in" >
Laravel è uno dei framework di sviluppo web più popolari e apprezzati, ampiamente utilizzato dalla comunità di sviluppatori per costruire applicazioni web moderne e robuste. </p>
  <br>
  <br>
  <img src="/laravel.png" alt="" class="watch fade-inImg appleWatch4">
</div>
</div>



<div class="panelRecens">
<div class="container">
      <!-- AGGIUNGI RECENSIONE -->

      <div class="mb-3">
        <form action="{{route('contatti.nuovo')}}" method="POST">
            @csrf
        <label for="userName" class="form-label">Inserisci La Tua Email</label>
        <input type="text" class="form-control" name="name" id="userName" placeholder="..">
      </div>
      <div class="mb-3">
        <label for="userDescription" class="form-label">Inserisci La Tua Richiesta</label>
        <input type="text" class="form-control" name="request" id="userDescription" placeholder="..">
      </div>
      <button id="addReviewBtn" class="btn btn-custom">Aggiungi Recensione</button>
    </form>
      <!-- FINE RECENSIONE -->
    </div>
  </div>


</x-layout>









