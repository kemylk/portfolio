 <!-- Slideshow container -->


 <div>

 <h1>Projet Application LARAVEL - Fiche de Frais : Cette mission consiste à permettre à un comptable de pouvoir consulter, ajouter et modifier les fiches de frais des visiteurs.
 </h1>
 <br/>
 <br/>
 </div>
 <div class="slideshow-container fade">

<!-- Full images with numbers and message Info -->
<div class="Containers">
  <div class="MessageInfo">1 / 3</div>
  <img src="./images/mission2/vue1.PNG" style="width:100%">
  <div class="Info"> ajout vue connexion comptable inspiré de connexion visiteur( modif bd , requete sql)</div>
</div>

<div class="Containers">
  <div class="MessageInfo">2 / 3</div>
  <img src="./images/mission2/vue2.PNG" style="width:100%">
  <div class="Info">Le controlleur intercepte la requete , verifie si le comptable est redirige sur l acceuil du comptable</div>
</div>

<div class="Containers">
  <div class="MessageInfo">3 / 3</div>
  <img src="./images/mission2/vue3.PNG" style="width:100%">
  <div style="padding-top:20px;">On accede à la fiche de frai en tappant l'id du visiteur et le mois , on peut valide la fiche ou la modifier</div>
</div>

<!-- Back and forward buttons -->
<a class="Back" onclick="plusSlides(-1)">&#10094;</a>
<a class="forward" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The circles/dots -->
<div style="text-align:center">
<span class="dots" onclick="currentSlide(1)"></span>
<span class="dots" onclick="currentSlide(2)"></span>
<span class="dots" onclick="currentSlide(3)"></span>
</div> 