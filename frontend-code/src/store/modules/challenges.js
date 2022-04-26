import UserService from '../../services/user.service';
const user = JSON.parse(localStorage.getItem('user'));
const token = JSON.parse(localStorage.getItem('token'));
const initialState = {
    newChallenges:[],
    previousChallenges:[],
    tasks:[],
  }

  export const challenges = {
    namespaced: true,
    state: initialState,

    getters: {
      allNewChallenges: (state) => state.newChallenges,
      alltasks: (state) => state.tasks
    },

    actions: {
      getNewChallenges({ commit },id) {
        UserService.getNewChallenges(id).then(res=>commit('getNewChallengesSuccess', res))
      },
      getPreviousChallenges({ commit },id) {
        UserService.getPreviousChallenges(id).then(res=>commit('getPreviousChallengesSuccess', res))
      },
      getTasks({ commit },id) {
        UserService.getTasks(id).then(res=>commit('getTasksSuccess', res))
      },
      answerTask({ commit },body) {
        UserService.answerTask(body)
      },
      finishChallenge({ commit },id) {
        UserService.finishChallenge(id)
      },
    },
    mutations: {
      getNewChallengesSuccess(state, challenges) {
        state.newChallenges = challenges;
      },
      getPreviousChallengesSuccess(state, challenges) {
        state.previousChallenges = challenges;
      },
      getTasksSuccess(state, tasks) {
        state.tasks = tasks;
      },
    }
  };