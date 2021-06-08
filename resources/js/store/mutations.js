let mutations = {
    // LES PATISSERIES
    SET_PATISSERIES (state, data) {
      state.patisseries = data.map(el => {
        //console.log(el);
        el['isActive'] = false
        return el;
      });
    },

    // LES CATEGORIES
    SET_CATEGORIES (state, data) {
      state.categories = data;
    },

    // LES COMMENTAIRES
    SET_COMMENTAIRES (state, data) {
      state.commentaires = data;
    },
    CREATE_COMMENTAIRE (state, commentaire) {
      state.commentaires.unshift(commentaire)
    },

    //LES AVIS
    SET_AVIS (state, data){
      state.avis = data;
    }
  };

  export default mutations;
