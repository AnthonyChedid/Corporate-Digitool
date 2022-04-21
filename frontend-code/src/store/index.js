import Vuex from 'vuex'
import Vue from 'vue'
import Todos from './modules/todos'
import {auth} from './modules/auth'
import {challenges} from './modules/challenges'
//import createPersistedState from "vuex-persistedstate";

Vue.use(Vuex);

export default new Vuex.Store({
    modules:{
        Todos,
        auth,
        challenges
    },
    //plugins: [createPersistedState()]
});