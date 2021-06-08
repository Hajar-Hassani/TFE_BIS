<template>
  <div class="bloc-modale" v-if="show" aria-hidden="true" role="dialog" id="modal-contact">
    <div class="overlay" v-on:click="closeModal"></div>
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-5">
        <h2 class="title text-center">Contactez-Nous</h2>
	      <hr>
        <div class="row px-5 pt-3 pb-5">
          <form action="index.html" method="post" novalidate="novalidate" @submit.prevent="submit">
            <div class="mb-2">
              <input class="form-control" type="text" name="nom" v-model="form.nom" placeholder="Nom, Prénom">
               <div v-if="errors && errors.nom" class="text-danger">{{ errors.nom[0] }}</div>
            </div>
            <div class="mb-2">
              <input class="form-control" type="text" name="email" v-model="form.email" placeholder="Email">
              <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
            </div>
            <div class="mb-2">
              <input class="form-control" type="text" name="telephone" v-model="form.telephone" placeholder="Téléphone">
              <div v-if="errors && errors.telephone" class="text-danger">{{ errors.telephone[0] }}</div>
            </div>
            <div class="mb-2">
              <textarea class="form-control" name="message" v-model="form.message" rows="5" cols="80" placeholder="Message"></textarea>
              <div v-if="errors && errors.message" class="text-danger">{{ errors.message[0] }}</div>
            </div>
            <div class="mb-2 pt-2 justify-content-right">
              <div class="text-center text-sm-left">
                <button type="submit" class="btn_principal btn primary-btn text-uppercase">Contactez-nous</button>
              </div>
            </div>
            <div v-if="success" class="alert alert-success mt-3">
                Message envoyé!
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['show', 'openModal', 'closeModal'],
    data() {
      return{
        form: {
          nom:'',
          email:'',
          telephone:'',
          message: '',
        },
        errors: {},
        success: false,
        loaded: true,
      }
    },
    methods: {
      submit (){
        if (this.loaded) {
          this.loaded = false;
          this.success = false;
          this.errors = {};
          axios.post('api/contacts', {
            nom: this.form.nom,
            email: this.form.email,
            telephone: this.form.telephone,
            message: this.form.message,
          }).then(res => {
            this.form = { nom:'', email:'', telephone:'', message: '' };
            this.loaded = true;
            this.success = true;
          }).catch(error => {
            this.loaded = true;
            if (error.response.status === 422) {
              this.errors = error.response.data.errors || {};
            }
          });
        }
      }
    },
  }
</script>

<style scoped>
  hr{
    border-width: 1px;
    border-color: #F96982;
    margin-left: 160px;
    margin-right: 160px;
  }
</style>
