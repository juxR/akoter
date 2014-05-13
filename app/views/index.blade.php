@extends('layout.layout')
@section('container')
<section class="main">
 <h3 class="section" role="heading" aria-level="3">Faites une recherche via la carte, voir les dernières annonces, qu'est-ce que c'est Akoter et comment vous pouvez contribuer à l'avancement du site et les derniers avis d'utilisateurs</h3>

 
 
<div class="home">
 <a href="#informations" class="goTo" title="Aller à la suite du contenu"><span class="icon icon-chevron11"></span></a>
 <div class="residence" id="residence">
   <div class="wrapper">
     <section class="kots" id="main">
      <h4 aria-level="4" role="heading" class="mainTitle">Les dernières annonces</h4>
      <div id="container" class="wrapper">
        <div class="kot prenium" itemscope itemtype="http://schema.org/Residence">

          <div itemscope itemprop="geo" itemtype="GeoCoordinates">
            <meta content="40" itemprop="latitude">
            <meta content="54" itemprop="longitude">
          </div>
          <div class="mainInfos">
            <div class="photo">
              <a href="" title="Voir l'annonce">
                <img itemprop="image" src="./img/photo2.png" alt="Photo du logement de XXX">
              </a>
            </div>
            <div class="content">
              <h5 aria-level="5" itemprop="name" role="heading" class="titleKot"><a href="" title="Aller sur l'annonce: titre de l'annonce...">Titre de l'annonce qui peut être long ou court</a>
              </h5>
              <span class="typeAndLocation"><a href="" title="Voir les studios de Namur">Studio | <span itemprop="address" itemscope itemtype="PostalAddress"><span class="city" itemprop="addressRegion">Namur</span></a><span class="section" itemprop="streetAddress">Rue marchal le grand méchant loup</span>
              <meta content="4000" itemprop="postal">
              <meta content="BE" itemprop="addressCountry">
            </span></span>

            <p itemprop="description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nulla quia quas dolorum fugiat odio illum quo quae vero necessitatibus placeat recusandae pariatur veritatis voluptas labore est aliquid sed nobis Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, libero, esse, iusto, consectetur nulla dolore vitae accusantium impedit possimus modi quo facere adipisci ipsa quae explicabo quibusdam fuga minus repellendus.
            </p>

          </div>
          <div class="special">
            <div class="wifi spe" title="Wifi disponible"></div>
            <div class="bathroom spe" title="Salle de bain privée"></div>
            <div class="kitchen spe" title="Cuisine privée"></div>
            <div class="washbasin spe" title="Lavabo dans la chambre"></div>
          </div>
        </div>
        <div class="addInfos">
          <div class="muchRate">
            <div class="star">
              <div class="icons">
                <span class="section">5 étoiles</span>
                <span class="icon one"></span>
                <span class="icon one"></span>
                <span class="icon one"></span>
                <span class="icon half-one"></span>
                <span class="icon no-one"></span>
              </div>
              <span class="number"><b>4000</b> votes</span>
            </div>
            <div class="howMuch">
             <span class="icon icon-user3"></span>
             <span class="peoples"><b>1000</b> places</span>
           </div>
         </div>
         <div class="who">
           <div class="locateBy">
            <span>
              Louez par <a href="" title="Voir le profil de Jean-Marc"><i>Jean-Marc</i></a>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="kot" itemscope itemtype="http://schema.org/Residence">

      <div itemscope itemprop="geo" itemtype="GeoCoordinates">
        <meta content="40" itemprop="latitude">
        <meta content="54" itemprop="longitude">
      </div>
      <div class="mainInfos">
        <div class="photo">
          <a href="" title="Voir l'annonce">
            <img itemprop="image" src="./img/photo2.png" alt="Photo du logement de XXX">
          </a>
        </div>
        <div class="content">
          <h5 aria-level="5" itemprop="name" role="heading" class="titleKot"><a href="" title="Aller sur l'annonce: titre de l'annonce...">Titre de l'annonce qui peut être long ou court</a>
          </h5>
          <span class="typeAndLocation"><a href="" title="Voir les studios de Namur">Studio | <span itemprop="address" itemscope itemtype="PostalAddress"><span class="city" itemprop="addressRegion">Namur</span></a><span class="section" itemprop="streetAddress">Rue marchal le grand méchant loup</span>
          <meta content="4000" itemprop="postal">
          <meta content="BE" itemprop="addressCountry">
        </span></span>

        <p itemprop="description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nulla quia quas dolorum fugiat odio illum
        </p>

      </div>
      <div class="special">
        <div class="wifi spe" title="Wifi disponible"></div>
        <div class="bathroom spe" title="Salle de bain privée"></div>
        <div class="kitchen spe" title="Cuisine privée"></div>
        <div class="washbasin spe" title="Lavabo dans la chambre"></div>
      </div>
    </div>
    <div class="addInfos">
      <div class="muchRate">
        <div class="star">
          <div class="icons">
            <span class="section">5 étoiles</span>
            <span class="icon one"></span>
            <span class="icon one"></span>
            <span class="icon one"></span>
            <span class="icon half-one"></span>
            <span class="icon no-one"></span>
          </div>
          <span class="number"><b>4000</b> votes</span>
        </div>
        <div class="howMuch">
         <span class="icon icon-user3"></span>
         <span class="peoples"><b>1000</b> places</span>
       </div>
     </div>
     <div class="who">
       <div class="locateBy">
        <span>
          Louez par <a href="" title="Voir le profil de Jean-Marc"><i>Jean-Marc</i></a>
        </span>
      </div>
    </div>
  </div>
</div> <!-- end kot -->
<div class="kot" itemscope itemtype="http://schema.org/Residence">

  <div itemscope itemprop="geo" itemtype="GeoCoordinates">
    <meta content="40" itemprop="latitude">
    <meta content="54" itemprop="longitude">
  </div>
  <div class="mainInfos">
    <div class="photo">
      <a href="" title="Voir l'annonce">
        <img itemprop="image" src="./img/photo2.png" alt="Photo du logement de XXX">
      </a>
    </div>
    <div class="content">
      <h5 aria-level="5" itemprop="name" role="heading" class="titleKot"><a href="" title="Aller sur l'annonce: titre de l'annonce...">Titre de l'annonce qui peut être long ou court</a>
      </h5>
      <span class="typeAndLocation"><a href="" title="Voir les studios de Namur">Studio | <span itemprop="address" itemscope itemtype="PostalAddress"><span class="city" itemprop="addressRegion">Namur</span></a><span class="section" itemprop="streetAddress">Rue marchal le grand méchant loup</span>
      <meta content="4000" itemprop="postal">
      <meta content="BE" itemprop="addressCountry">
    </span></span>

    <p itemprop="description">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nulla quia quas dolorum fugiat odio illum
    </p>

  </div>
  <div class="special">
    <div class="wifi spe" title="Wifi disponible"></div>
    <div class="bathroom spe" title="Salle de bain privée"></div>
    <div class="kitchen spe" title="Cuisine privée"></div>
    <div class="washbasin spe" title="Lavabo dans la chambre"></div>
  </div>
</div>
<div class="addInfos">
  <div class="muchRate">
    <div class="star">
      <div class="icons">
        <span class="section">5 étoiles</span>
        <span class="icon one"></span>
        <span class="icon one"></span>
        <span class="icon one"></span>
        <span class="icon half-one"></span>
        <span class="icon no-one"></span>
      </div>
      <span class="number"><b>4000</b> votes</span>
    </div>
    <div class="howMuch">
     <span class="icon icon-user3"></span>
     <span class="peoples"><b>1000</b> places</span>
   </div>
 </div>
 <div class="who">
   <div class="locateBy">
    <span>
      Louez par <a href="" title="Voir le profil de Jean-Marc"><i>Jean-Marc</i></a>
    </span>
  </div>
</div>
</div>
</div><!-- endkot -->
<div class="kot" itemscope itemtype="http://schema.org/Residence">

  <div itemscope itemprop="geo" itemtype="GeoCoordinates">
    <meta content="40" itemprop="latitude">
    <meta content="54" itemprop="longitude">
  </div>
  <div class="mainInfos">
    <div class="photo">
      <a href="" title="Voir l'annonce">
        <img itemprop="image" src="./img/photo2.png" alt="Photo du logement de XXX">
      </a>
    </div>
    <div class="content">
      <h5 aria-level="5" itemprop="name" role="heading" class="titleKot"><a href="" title="Aller sur l'annonce: titre de l'annonce...">Titre de l'annonce qui peut être long ou court</a>
      </h5>
      <span class="typeAndLocation"><a href="" title="Voir les studios de Namur">Studio | <span itemprop="address" itemscope itemtype="PostalAddress"><span class="city" itemprop="addressRegion">Namur</span></a><span class="section" itemprop="streetAddress">Rue marchal le grand méchant loup</span>
      <meta content="4000" itemprop="postal">
      <meta content="BE" itemprop="addressCountry">
    </span></span>

    <p itemprop="description">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nulla quia quas dolorum fugiat odio illum
    </p>

  </div>
  <div class="special">
    <div class="wifi spe" title="Wifi disponible"></div>
    <div class="bathroom spe" title="Salle de bain privée"></div>
    <div class="kitchen spe" title="Cuisine privée"></div>
    <div class="washbasin spe" title="Lavabo dans la chambre"></div>
  </div>
</div>
<div class="addInfos">
  <div class="muchRate">
    <div class="star">
      <div class="icons">
        <span class="section">5 étoiles</span>
        <span class="icon one"></span>
        <span class="icon one"></span>
        <span class="icon one"></span>
        <span class="icon half-one"></span>
        <span class="icon no-one"></span>
      </div>
      <span class="number"><b>4000</b> votes</span>
    </div>
    <div class="howMuch">
     <span class="icon icon-user3"></span>
     <span class="peoples"><b>1000</b> places</span>
   </div>
 </div>
 <div class="who">
   <div class="locateBy">
    <span>
      Louez par <a href="" title="Voir le profil de Jean-Marc"><i>Jean-Marc</i></a>
    </span>
  </div>
</div>
</div>
</div><!-- endkot -->
<div class="kot" itemscope itemtype="http://schema.org/Residence">

  <div itemscope itemprop="geo" itemtype="GeoCoordinates">
    <meta content="40" itemprop="latitude">
    <meta content="54" itemprop="longitude">
  </div>
  <div class="mainInfos">
    <div class="photo">
      <a href="" title="Voir l'annonce">
        <img itemprop="image" src="./img/photo2.png" alt="Photo du logement de XXX">
      </a>
    </div>
    <div class="content">
      <h5 aria-level="5" itemprop="name" role="heading" class="titleKot"><a href="" title="Aller sur l'annonce: titre de l'annonce...">Titre de l'annonce qui peut être long ou court</a>
      </h5>
      <span class="typeAndLocation"><a href="" title="Voir les studios de Namur">Studio | <span itemprop="address" itemscope itemtype="PostalAddress"><span class="city" itemprop="addressRegion">Namur</span></a><span class="section" itemprop="streetAddress">Rue marchal le grand méchant loup</span>
      <meta content="4000" itemprop="postal">
      <meta content="BE" itemprop="addressCountry">
    </span></span>

    <p itemprop="description">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nulla quia quas dolorum fugiat odio illum
    </p>

  </div>
  <div class="special">
    <div class="wifi spe" title="Wifi disponible"></div>
    <div class="bathroom spe" title="Salle de bain privée"></div>
    <div class="kitchen spe" title="Cuisine privée"></div>
    <div class="washbasin spe" title="Lavabo dans la chambre"></div>
  </div>
</div>
<div class="addInfos">
  <div class="muchRate">
    <div class="star">
      <div class="icons">
        <span class="section">5 étoiles</span>
        <span class="icon one"></span>
        <span class="icon one"></span>
        <span class="icon one"></span>
        <span class="icon half-one"></span>
        <span class="icon no-one"></span>
      </div>
      <span class="number"><b>4000</b> votes</span>
    </div>
    <div class="howMuch">
     <span class="icon icon-user3"></span>
     <span class="peoples"><b>1000</b> places</span>
   </div>
 </div>
 <div class="who">
   <div class="locateBy">
    <span>
      Louez par <a href="" title="Voir le profil de Jean-Marc"><i>Jean-Marc</i></a>
    </span>
  </div>
</div>
</div>
</div><!-- endkot -->
<div class="kot" itemscope itemtype="http://schema.org/Residence">

  <div itemscope itemprop="geo" itemtype="GeoCoordinates">
    <meta content="40" itemprop="latitude">
    <meta content="54" itemprop="longitude">
  </div>
  <div class="mainInfos">
    <div class="photo">
      <a href="" title="Voir l'annonce">
        <img itemprop="image" src="./img/photo2.png" alt="Photo du logement de XXX">
      </a>
    </div>
    <div class="content">
      <h5 aria-level="5" itemprop="name" role="heading" class="titleKot"><a href="" title="Aller sur l'annonce: titre de l'annonce...">Titre de l'annonce qui peut être long ou court</a>
      </h5>
      <span class="typeAndLocation"><a href="" title="Voir les studios de Namur">Studio | <span itemprop="address" itemscope itemtype="PostalAddress"><span class="city" itemprop="addressRegion">Namur</span></a><span class="section" itemprop="streetAddress">Rue marchal le grand méchant loup</span>
      <meta content="4000" itemprop="postal">
      <meta content="BE" itemprop="addressCountry">
    </span></span>

    <p itemprop="description">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nulla quia quas dolorum fugiat odio illum
    </p>

  </div>
  <div class="special">
    <div class="wifi spe" title="Wifi disponible"></div>
    <div class="bathroom spe" title="Salle de bain privée"></div>
    <div class="kitchen spe" title="Cuisine privée"></div>
    <div class="washbasin spe" title="Lavabo dans la chambre"></div>
  </div>
</div>
<div class="addInfos">
  <div class="muchRate">
    <div class="star">
      <div class="icons">
        <span class="section">5 étoiles</span>
        <span class="icon one"></span>
        <span class="icon one"></span>
        <span class="icon one"></span>
        <span class="icon half-one"></span>
        <span class="icon no-one"></span>
      </div>
      <span class="number"><b>4000</b> votes</span>
    </div>
    <div class="howMuch">
     <span class="icon icon-user3"></span>
     <span class="peoples"><b>1000</b> places</span>
   </div>
 </div>
 <div class="who">
   <div class="locateBy">
    <span>
      Louez par <a href="" title="Voir le profil de Jean-Marc"><i>Jean-Marc</i></a>
    </span>
  </div>
</div>
</div>
</div><!-- endkot -->
</div>
</section>
</div>
</div>

<div class="callback">
  <div class="wrapper">
    <h4 aria-level="4" role="heading" class="mainTitle">Que pensent-ils d'Akoter?</h4>
    <div class="onePeople" itemscope itemtype="http://schema.org/Person">
      <div class="vcard">
        <div class="photo" >
          <img itemprop="image" src="./img/photo.jpg" alt="Photo de XXX">
        </div>
        <div class="infos">
          <meta itemprop="nationality" content="Belgian">
          <span class="name" itemprop="name">Jeanne Dupont</span>
          <div itemscope class="address" itemtype="http://schema.org/PostalAddress" itemprop="address">
            <span itemprop="addressRegion">de Bouge</span>
            <meta itemprop="postalCode" content="4000">
          </div>
        </div>
      </div>
      <div class="text">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, eligendi, optio, assumenda quis natus nobis quod minus aliquid minima aliquam quia sapiente iste eius eos quidem odit nihil quo distinctio.
        </p>
      </div>
    </div> 
    <div class="onePeople" itemscope itemtype="http://schema.org/Person">
      <div class="vcard">
        <div class="photo" >
          <img itemprop="image" src="./img/photo.jpg" alt="Photo de XXX">
        </div>
        <div class="infos">
          <meta itemprop="nationality" content="Belgian">
          <span class="name" itemprop="name">Jeanne Dupont</span>
          <div itemscope class="address" itemtype="http://schema.org/PostalAddress" itemprop="address">
            <span itemprop="addressRegion">de Bouge</span>
            <meta itemprop="postalCode" content="4000">
          </div>
        </div>
      </div>
      <div class="text">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, eligendi, optio, assumenda quis natus nobis quod minus aliquid minima aliquam quia sapiente iste eius eos quidem odit nihil quo distinctio.
        </p>
      </div>
    </div>
    <div class="onePeople" itemscope itemtype="http://schema.org/Person">
      <div class="vcard">
        <div class="photo" >
          <img itemprop="image" src="./img/photo.jpg" alt="Photo de XXX">
        </div>
        <div class="infos">
          <meta itemprop="nationality" content="Belgian">
          <span class="name" itemprop="name">Jeanne Dupont</span>
          <div itemscope class="address" itemtype="http://schema.org/PostalAddress" itemprop="address">
            <span itemprop="addressRegion">de Bouge</span>
            <meta itemprop="postalCode" content="4000">
          </div>
        </div>
      </div>
      <div class="text">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, eligendi, optio, assumenda quis natus nobis quod minus aliquid minima aliquam quia sapiente iste eius eos quidem odit nihil quo distinctio.
        </p>
      </div>
    </div>
    <div class="onePeople" itemscope itemtype="http://schema.org/Person">
      <div class="vcard">
        <div class="photo" >
          <img itemprop="image" src="./img/photo.jpg" alt="Photo de XXX">
        </div>
        <div class="infos">
          <meta itemprop="nationality" content="Belgian">
          <span class="name" itemprop="name">Jeanne Dupont</span>
          <div itemscope class="address" itemtype="http://schema.org/PostalAddress" itemprop="address">
            <span itemprop="addressRegion">de Bouge</span>
            <meta itemprop="postalCode" content="4000">
          </div>
        </div>
      </div>
      <div class="text">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, eligendi, optio, assumenda quis natus nobis quod minus aliquid minima aliquam quia sapiente iste eius eos quidem odit nihil quo distinctio.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="informationsSupp">
  <div class="wrapper">
   <h4 aria-level="4" role="heading" class="section">Informations sur Akoter</h4>

   <section class="contrib infos">
     <h5 aria-level="5" role="heading" class="titleText"><span class="fa fa-star"></span>Contribuez à l'avancement</h5>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, ipsam, odio, odit facilis eveniet modi ipsum incidunt mollitia exercitationem tempora inventore quis illum molestias fugiat quibusdam ex officiis quia ea!</p>

   </section>
   <section class="whyus infos">
    <h5 aria-level="5" role="heading" class="titleText"><span class="fa fa-star"></span>Pourquoi choisir Akoter&nbsp;?</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, deleniti repellendus veniam. Accusamus eum libero fugit quam autem nostrum porro eos velit earum. Ducimus, blanditiis saepe eius rem perspiciatis consequuntur.</p>
  </section>

  <section class="data infos">
    <h5 aria-level="5" role="heading" class="titleText"><span class="fa fa-star"></span>Akoter en chiffre ça donne quoi&nbsp;?</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, itaque, nemo mollitia rem corporis magnam iure consectetur doloribus in sed quasi enim cupiditate molestias atque rerum harum voluptatem magni tempora.</p>
  </section>
</div>
</div>

</div>
</section>
<div class="popup lang" data-type="lang">
  <div class="content">
    <a href="" class="closePopup" tabindex="4" title="Fermer la fénêtre"></a>
    <div class="wrapper">
      <h3 aria-level="3" role="heading" class="titlePopup">Choisissez une langue</h3>
      <div class="lang-choice french active">
        <a href="" title="Changer vers le Français" tabindex="1">
          <span class="country-french flag"></span>
          <span class="country-text">Français</span>
        </a>
      </div> 
      <div class="lang-choice neederlands">
        <a href="" title="Changer vers le Français" tabindex="2">
          <span class="country-neederlands flag"></span>
          <span class="country-text">Neederlands</span>
        </a>
      </div>
      <div class="lang-choice english">
        <a href="" title="Changer vers le Français" tabindex="3">
          <span class="country-english flag"></span>
          <span class="country-text">English</span>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="popup advSearch" data-type="advSearch">
  <div class="content">
    <a href="" class="closePopup" tabindex="4" title="Fermer la fénêtre"></a>
    <div class="wrapper">
     <h3 aria-level="3" role="heading" class="titlePopup">Connectez-vous</h3>
     <p class="intro">
       Louez vos logements étudiants ou trouver le logement étudiant de vos rêves !
     </p>


     <div class="connexion">
       <div class="loginSocial">
         <div class="facebook">
           <a href="" title="Connectez-vous avec votre compte Facebook">
             <div class="logo">

             </div>
             <div class="text">
               <span>Connectez-vous avec facebook</span>
             </div>
           </a>
         </div>
         <div class="twitter">
           <a href="" title="Connectez-vous avec votre compte Twitter">
             <div class="logo">

             </div>
             <div class="text">
               <span>Connectez-vous avec facebook</span>
             </div>
           </a>
         </div>

         <span class="email">Ou <a href="" class="toEmailLogin">connectez-vous</a> avec votre email</span>
       </div>
       <div class="loginEmail">
         <p><a href="" class="toSocialLogin">Se connectez via Facebook ou Twitter</a></p>
         <form action="" class="mainType">
           <div class="field">
             <label for="email">Votre email</label>
             <div class="input-email">
              <input type="mail" id="email" class="form-email form-icon" name="email" required placeholder="email@email.com" value="">
            </div>
          </div>
          <div class="field">
            <label for="password">Votre mot de passe</label>
            <div class="input-password">
              <input type="password" required id="password" class="form-password" name="password" value="">
            </div>
          </div>
          <div class="field">
            <input type="checkbox" name="remember"  id="remember">
            <label for="remember">Se souvenir de moi</label>
          </div>
          <div class="field">
            <input type="submit" value="Se connecter">
          </div>
        </form>
      </div>

    </div>
    <div class="register">
     <span class="or">ou</span>
     <span class="email">
      <a href="">Inscrivez-vous avez votre email</a>
    </span>
  </div>
</div>
</div>
</div>

@stop