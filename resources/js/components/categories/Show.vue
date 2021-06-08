<template>
  <div>
    <!-- Section Mes patisseries-->
    <header id="bg_header_patisserie"></header>

    <section id="patisserie">
      <!-- Les catégories-->
      <div class="shadow">
        <div class="boite_dimension__fixe_l boite_dimension__fixe_m">
          <ul class="grille filter">
            <li class="col-l2" v-for="categorie in categories" :key="categorie.id">
              <router-link v-if="categorie.id === 1" :to="{name: 'patisserie.index'}">
                {{ categorie.nom }}
              </router-link>
              <router-link v-else :to="{name: 'categories.show', params: { id: categorie.id }}">
                {{ categorie.nom }}
              </router-link>
            </li>
          </ul>
        </div>
      </div>

      <!--La liste de mes patisseries-->
      <div class="boite_dimension__fixe_l boite_dimension__fixe_m">
        <div class="grille">
          <article class="col-l3" v-for="patisserie in patisseries" :key="patisserie.id">
            <router-link :to="{name: 'patisseries.show', params: {id: patisserie.id}}">
              <figure class="hover">
                  <img :src="'medias/' + patisserie.image" alt=""/>
                  <figcaption>
                    <h3>{{ patisserie.nom }}</h3>
                  </figcaption>
              </figure>
            </router-link>
          </article>
        </div>
      </div>
    </section>
    <router-view></router-view>
  </div>
</template>

<script>
  export default {
    computed: {
      // Affichage des catégories
      categories() {
        return this.$store.getters.getCategories;
      },
      patisseries() {
        let id = this.$route.params.id;
        return this.$store.getters.getPatisseriesByCategorieId(id);
      }
    }
  }
</script>
