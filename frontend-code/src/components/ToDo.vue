<template>
  <div>
      <h3> Todo</h3>
      <div class="todo">
          <div v-for="todo in alltodos" :key="todo.id" class="todo">{{ todo.title }} 
            <v-btn
                class="ma-2"
                dark
                @click="deleteTodo(todo.id)"
               >
                <v-icon
                dark
                left
                >
                mdi-minus-circle
                </v-icon>Cancel
            </v-btn>
            </div>
          <add-to-do/>
      </div>   
  </div>    
</template>

<script>
import { mapGetters, mapActions } from 'vuex';
import AddToDo from './AddToDo.vue';

export default {
  components: { AddToDo },
    name: "ToDos",
    methods:{
        ...mapActions(['fetchTodos','deleteTodo']),
    },
    computed: mapGetters(['alltodos']),
    created(){
        this.fetchTodos();
    }
};

</script>

<style>

</style>