import axios from 'axios';

const state = {
    Todos: []
};

const getters = {
    alltodos: (state) => state.Todos
};

const actions={
    async fetchTodos({commit}){
        const response =await axios.get('https://jsonplaceholder.typicode.com/todos');
        commit('setTodos',response.data);
    },
    async addTodo({commit},title){
        const response = await axios.post('https://jsonplaceholder.typicode.com/todos',{title,completed:false});
        commit('newTodo',response.data)
    },
    async deleteTodo({commit},id){
        // remove from backend
        await axios.delete(`https://jsonplaceholder.typicode.com/todos/${id}`)
        .then(res => {
            console.log(res)
        })
        .catch(err => {
            console.error(err); 
        })

        commit('removeTodo',id);
    }
}

const mutations = {
    setTodos: (state, Todos) => (state.Todos=Todos),
    newTodo: (state,Todos) => state.Todos.unshift(Todos),
    // remove from ui
    removeTodo:(state,id) => state.Todos = state.Todos.filter(Todos=>Todos.id !==id)

}

export default {
    state,
    getters,
    actions,
    mutations
};