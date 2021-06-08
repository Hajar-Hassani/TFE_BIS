<template>
  <div>
    <!-- Section Contactez-nous -->
    <section id="contact" class="parallax" style="background-image: url('medias/background_contact.jpg');">
      <div class="bg_opacity">
        <div class="boite_dimension__fixe_l boite_dimension__fixe_m">
          <h2 class="title">Contactez-nous</h2>
          <p>Besoin d'un gateau pour un anniversaire ? Pour un mariage ou une baby shower ?
            Ou tout simplement pour  son propre plaisir ? Je suis la pour satisfaire votre demande !
            N'hésitez pas à me contactez pour toute commande ou pour plus d'informations.</p>
          <button v-on:click="openModal" type="button" name="button" class="btn_principal">Contactez-nous</button>
        </div>
      </div>
    </section>
    <contact-show-component v-bind:show="show" v-bind:openModal="openModal" v-bind:closeModal="closeModal"></contact-show-component>
  </div>
</template>

<script>
  export default {
    data () {
      return {
        show: false,
      }
    },
    methods: {
      openModal() {
        this.show = true;
      },
      closeModal() {
        this.show = false;
      }
    }
  }
</script>
