let actions = {
    setPatisseries ({commit}) {
      //Transaction AJAX
      return axios.get('api/patisseries')
                  .then(reponsePHP => (commit('SET_PATISSERIES', reponsePHP.data)))
                  .catch(err => {console.log(err)})
             axios.get('api/categories')
                  .then(reponsePHP => (commit('SET_CATEGORIES', reponsePHP.data)))
    },
    setCategories ({commit}) {
      axios.get('api/categories')
           .then(reponsePHP => (commit('SET_CATEGORIES', reponsePHP.data)));
    },
    setCommentaires ({commit}) {
      //Transaction AJAX
      axios.get('api/commentaires')
           .then(reponsePHP => (commit('SET_COMMENTAIRES', reponsePHP.data)));
    },
    createCommentaire ({commit}, commentaire) {
      axios.post('api/commentaires', commentaire)
           .then(res => (commit('CREATE_COMMENTAIRE', res.data)))
           .catch(err => {
             console.log(err.response)
           });
    },
    setAvis ({commit}) {
      axios.get('api/avis')
           .then(reponsePHP => (commit('SET_AVIS', reponsePHP.data)));
    }
  };

export default actions;
