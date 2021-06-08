<template>
  <div>
    <!--HEADER DU CONTENU PRINCIPAL-->
    <header id="bg_content_header">
      <div class="boite_dimension__fixe_l boite_dimension__fixe_m" id="contenu_header">
        <div class="grille" id="bg_content">
          <div class="col-l7">
            <h1>Le plaisir de s'offrir un petit luxe au quotidien</h1>
            <a class="btn shadow_btn" href="#">Me contacter</a>
            <router-link to="/patisseries" id="call_to_action2" >Mes patisseries</router-link>
          </div>
        </div>
      </div>
    </header>

    <div>
      <!-- Section à propos -->
      <section data-anchor="a-propos" class="boite_dimension__fixe_l boite_dimension__fixe_m section" id="a_propos">
          <aside>
            <h2>A propos de moi</h2>
            <p>Hajar Hassani, autodidact passionnée de la patisserie, j'ai toujours
              voulu partager ce bonheur et le retrouver dans les yeux de ceux qui
              dégustent mes créations. Perfectionniste et toujours à la recherche
              d'idées originales et gourmandes afin de créer l'harmonie gustative
              et visuelle, je réalise pour vous des patisseries sur-mesure.</p>
            <p>Pour n'importe quel événement (anniversaire, mariage, naissance,
              fêtes religieuse, fêtes de familles, dîner entre amis) ou seulement
              pour répondre à vos envies de sucreries !</p>
              <figure id="img_propos">
                <img src="medias/photo_moi.png" alt="Photo de moi qui me représente">
                <figcaption class="utilitaire_visibilite__none">A propos de moi</figcaption>
              </figure>
          </aside>
          <aside id="concept">
            <h3>Concept</h3>
            <ul class="grille">
              <li class="col-l4">
                <h4>1</h4>
                <p>Vous me faites part de vos idées et je crée cette patisserie que vous désirez</p>
              </li>
              <li class="col-l4">
                <h4>2</h4>
                <p>Je passe en cuisine et prépare votre patisserie avec des produits locaux et de saison</p>
              </li>
              <li class="col-l4">
                <h4>3</h4>
                <p>Je vous livre en voiture et vous partagez un moment gourmand avec vos proches, collègues, ...</p>
              </li>
            </ul>
          </aside>
      </section>

      <!-- Section les avis -->
      <section id="avis" class="parallax" style="background-image: url('medias/bg_remerciement.png');">
        <div class="boite_dimension__fixe_l boite_dimension__fixe_m">
          <div class="grille">
            <article class="col-l4" v-for="avi in avis" :key="avi.id">
              <p>{{ avi.texte }}
              </p>
              <h3>{{ avi.nom}}</h3>
            </article>
          </div>
        </div>
      </section>

      <!-- Section Dernière patisserie -->
      <section class="boite_dimension__fixe_l boite_dimension__fixe_m" id="last_patisserie">
        <h3>Ma dernière patisserie</h3>
        <div class="grille">
          <figure class="col-l6">
            <img src="medias/last_photo.png" alt="Gateau de mariage">
            <figcaption class="utilitaire_visibilite__none">Un joli drip cake à deux étage à base de gananche chocolat balnc</figcaption>
          </figure>
          <aside class="col-l6">
            <h4>Gateau pour un mariage</h4>
            <p>Un joli drip cake à deux étage à base de gananche chocolat balnc</p>
            <a class="btn_principal" href="#">Voir plus</a>
          </aside>
        </div>
      </section>
    </div>

  </div>
</template>

<script>
  export default {
    computed: {
      // Affichage des avis
      avis() {
        return this.$store.getters.getAvis;
      },
    }
  }
</script>
