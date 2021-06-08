import Vue    from 'vue'
import Router from 'vue-router'

// Chargement des composants des différentes routes
import AccueilIndex     from './components/accueil/Index'
import PatisseriesIndex from './components/patisseries/Index'
import PatisseriesShow  from './components/patisseries/Show'
import CategoriesShow from './components/categories/Show'
import NotFound from './components/NotFound'

// Création du routing
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'accueil.index',
      component: AccueilIndex,
      meta: {
        title: 'SweetCake - Home',
      },
    },
    {
      path: '/patisseries',
      name: 'patisserie.index',
      component: PatisseriesIndex,
      children: [
        {
          path: ':id',
          name: 'patisseries.show',
          component: PatisseriesShow,
          meta: {
            title: 'Patisseries',
          }
        }
      ],
      meta: {
        title: 'Patisseries',
      },
    },
    {
      path: '/patisseries/categories/:id',
      name: 'categories.show',
      component: CategoriesShow,
      children: [
        {
          path: ':id',
          name: 'categories.patisseries',
          component: PatisseriesShow,
          meta: {
            title: 'Patisseries',
          }
        }
      ],
      meta: {
        title: 'Patisseries/Categories',
      },
    },
    {
      path: '/:pathMatch(.*)',
      name: 'NotFound',
      component: NotFound,
      meta: {
        title: '404 Not Found',
      },
    },
  ]
})
