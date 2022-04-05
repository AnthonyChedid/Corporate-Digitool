import Vuex from 'vuex'
import Vue from 'vue'
import Todos from './modules/todos'
import {auth} from './modules/auth'
//import createPersistedState from "vuex-persistedstate";

Vue.use(Vuex);

export default new Vuex.Store({
    modules:{
        Todos,
        auth
    },
    //plugins: [createPersistedState()]
});