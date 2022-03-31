<template>
  <div>
      <h3>add to do</h3>
      <form @submit="onSubmit">
         <input type="text" v-model="title" placeholder="Add todo...">
         <input type="submit" value="Submit">
      </form>
  </div>
</template>

<script>
import {mapActions} from 'vuex'

export default {
    name:"AddTodo",
    data(){
        return {
            title:''
        }
    },
    methods:{
        ...mapActions(['addTodo']),
        onSubmit(e){
            e.preventDefault();
            this.addTodo(this.title);
        }
    }
}
</script>

<style>

</style>