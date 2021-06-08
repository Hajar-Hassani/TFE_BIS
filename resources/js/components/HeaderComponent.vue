<template>
  <div class="header_principal shadow">
    <div class="boite_dimension__fixe_l boite_dimension__fixe_m">
      <div class="grille">
        <!--MENU MOBILE-->
        <div class="d_xld__none">
          <nav class=" d_xld__none menuToggle">
            <!--HAMBURGER-->
            <input type="checkbox"/>

            <span></span>
            <span></span>
            <span></span>

            <!--NAVIGATION MOBILE-->
            <ul class="mobileMenu">
              <li><a href="#">Accueil</a></li>
              <li><a href="#a_propos">A propos</a></li>
              <li>
                <router-link to="/patisseries">
                  Mes patisseries
                </router-link>
              </li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav>
        </div>

        <figure class="col-l3" id="logo_principal">
          <router-link to="/">
            <img src="medias/logo.png" alt="Logo SweetCake" title="Logo Sweet Cake, créatrice de patisseries de qualité pour tout événement">
          </router-link>
          <figcaption class="utilitaire_visibilite__none">Logo de SweetCake</figcaption>
        </figure>

        <!--NAVIGATION-->
        <nav class="d_sd__none d_md__none d_ld__none col-l9">
          <ul id="menu" class="menu_type__horizontal">
            <li class="actif"><router-link to="/">Accueil</router-link></li>
            <li><a href="#a-propos">A propos</a></li>
            <li><router-link to="/patisseries">Mes patisseries</router-link></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</template>
