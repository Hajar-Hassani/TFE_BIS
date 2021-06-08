<template>
  <div class="bloc-modale">
    <div class="overlay" @click.prevent="onRealisationClick()"></div>
    <div class="modale">
      <router-link :to="{name:'patisserie.index'}" class="btn-modale btn"> X </router-link>

      <div class="grille modale_content">
        <button type="button" name="button" class="btn_previous col-l1" @click.prevent="$router.push(prevImage)">
          <img src="medias/arrow-left.png" alt="Boutton précédent">
        </button>
        <figure class="col-l5" id="image_realisation">
            <img  :src="'medias/' + patisserie.image" id="image_dimension" alt="Cake design Mini pour un anniversaire d'une petite fillle">
        </figure>
        <button type="button" name="button" class="btn_next col-l1" @click="$router.push(nextImage)">
          <img src="medias/arrow-right.png" alt="Boutton suivant">
        </button>
        <section class="col-l5 modale_details">
          <h2>{{ patisserie.nom }}</h2>
          <p>{{ patisserie.description }}</p>

          <!-- COMMENTAIRES -->
          <section class="commentaires">
            <h3>Vos Commentaires</h3>
            <!--La liste des commentaires-->
            <ul v-for="commentaire in commentaires" :key="commentaire.id">
              <li>
                <h4>{{ commentaire.pseudo }}</h4>
                <p>{{ commentaire.texte }}</p>
              </li>
            </ul>
            <!--Ajouter un nouveau commentaire-->
            <form id="add_commentaire" method="post" class="grille" @submit.prevent="createCommentaire(nouveauCommentaire)">
              <input class="col-l3 neumorphic neumorphic--pressed" id="pseudo" type="text" name="pseudo" placeholder="Pseudo" v-model="nouveauCommentaire.pseudo">
              <div class="col-l7">
                <textarea class="neumorphic neumorphic--pressed" id="message" name="commentaire" placeholder="Ecrivez un commentaire" v-model="nouveauCommentaire.texte"></textarea>
              </div>
              <input class="col-l2" id="envoyer" type="submit" value="" style="background-image: url('../medias/icon_envoyer_2_small.png');">
              <input  type="hidden" v-model="nouveauCommentaire.patisseries = patisserie.id" name="patisserieId">
            </form>
          </section>
        </section>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
      data() {
        return{
          nouveauCommentaire: {
            pseudo:'',
            texte: '',
            patisseries: '',
          },
          index : 1,
        }
      },
      methods: {
        createCommentaire(commentaire) {
          this.$store.dispatch('createCommentaire', commentaire)
          this.nouveauCommentaire = { pseudo: '', texte: '', patisseries: null }
        },
      },
      computed: {
        patisserie () {
          //Créer une méthode setActive !!!
          let id = this.$route.params.id;
          return this.$store.getters.getPatisserieById (id);
        },
        commentaires() {
          let id = this.$route.params.id;
          return this.$store.getters.getCommentairesByPatisserieId(id);
        },
        nextImage(){
          let patisseries = this.$store.getters.getPatisseries;
          if (this.index < this.patisseries.length -1) {
            this.index++
          } else{
            this.index = 0;
          }
        },
        prevImage(){
          return "" + (Number(this.$route.params.id) -1);
        }
      }
    }
</script>

<style scoped>
  .btn-modale {
    position: absolute;
    top: 4%;
    right: 3%;
  }

  .btn{
    font-weight: 500;
    color: #FFF;
    font-size: 1.5rem;
  }

  .modale_content{
    margin: 10% 0 25px;
  }

  #image_realisation{
    margin-top: 50px;
  }

  #image_dimension{
    width: 100%;
  }

  .modale_details{
    padding-top: 3%;
    margin-left: 10px;
  }

  h2, h3, h4, p{
    text-align: left;
  }

  p{
    font-size: 13px;
  }

  .modale_details > p{
    color: #FFF;
    margin: 5% 5% 0 0;
    border-bottom: 0.2px solid #A5A2A2;
    padding-bottom: 25px;
  }

  h2{
    color: #FFF;
    font-size: 18px;
    font-weight: bolder;
    border-bottom: 1px solid #FFF;
    margin-right: 5%;
    padding-bottom: 20px;
  }

  .commentaires{
    margin-top: 25px;
    text-align: left;
    margin-right: 40px;
  }

  h3{
    color: #FFF;
    font-size: 15px;
    text-transform: none;
    margin-bottom: 20px;
  }

  ul{
    padding-left: 0;
    margin-bottom: 20px;
  }

  li{
    background-color: #FBF6F4;
    border-radius: 12px;
    padding: 8px 18px;
    margin-bottom: 12px;
  }

  h4{
    color: #494848;
    font-size: 14px;
    font-weight: bold;
  }

  .commentaires p{
    margin-bottom: 0;
  }

  input, textarea, button{
    outline: 0;
  }

  #pseudo{
    padding:0 9px;
    margin-right: 25px;
    width: auto;
    height: 59px;
  }

  .neumorphic{
    box-shadow: 12px 12px 24px 0 rgba(0, 0, 0, 0.2),
                -12px -12px 24px 0 rgba(255, 255, 255, 0.5);
    border-radius: 12px;
    border: 0;
    font-size: 13px;
  }

  .neumorphic--pressed {
    box-shadow: inset 6px 6px 10px 0 rgba(0, 0, 0, 0.2),
                inset -6px -6px 10px 0 rgba(255, 255, 255, 0.5);
  }

  #message{
    margin-left: -15px;
    padding: 10px;
    width: 113%;
  }

  #envoyer{
    background-repeat:no-repeat;
    background-color: inherit;
    border: 0;
    padding: 0;
    padding-bottom: 5px;
    margin-left: 27px;
  }
</style>
