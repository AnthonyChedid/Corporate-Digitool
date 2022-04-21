import UserService from '../../services/user.service';
const user = JSON.parse(localStorage.getItem('user'));
const token = JSON.parse(localStorage.getItem('token'));
const initialState = {
    newChallenges:[],
    oldChallenges:[]
}

  export const challenges = {
    namespaced: true,
    state: initialState,

    getters: {
      allNewChallenges: (state) => state.newChallenges
    },

    actions: {
      getNewChallenges({ commit },id) {
        UserService.getNewChallenges(id).then(res=>commit('getNewChallengesSuccess', res))
        
       },
    },
    mutations: {
      getNewChallengesSuccess(state, challenges) {
        console.log(challenges+"mutations");
        state.newChallenges = challenges;
      }
    }
  };