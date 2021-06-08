let getters = {
  //LES PATISSERIES
    getPatisseries (state) {
      return state.patisseries;
    },
    getPatisserieById (state) {
      return function (id) {
        return state.patisseries.find(patisserie => patisserie.id == id)
      }
    },

  //LES CATEGORIES
    getCategories (state) {
      return state.categories;
    },
    getPatisseriesByCategorieId (state) {
      return function (id) {
        return state.patisseries.filter(patisseries => patisseries.categories.id == id)
      }
    },

  //LES COMMENTAIRES
    getCommentaires (state) {
      return state.commentaires;
    },
    getCommentairesByPatisserieId (state) {
      return function (id) {
        return state.commentaires.filter(commentaires => commentaires.patisseries == id)
      }
    },

    //LES AVIS
    getAvis (state) {
      return state.avis;
    },
  };

  export default getters;
