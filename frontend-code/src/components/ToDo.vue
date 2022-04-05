<template>
  <div>
      <h3> Todo</h3>
      <div class="todo">
        <v-btn
                class="ma-2"
                dark
                @click="logOut()"
        >
        <v-icon
                dark
                left
                >
                mdi-minus-circle
        </v-icon>Logout
        </v-btn>

      </div>   
  </div>    
</template>

<script>
export default {
    name: "ToDos",
    methods: {
    logOut() {
      this.$store.dispatch('auth/logout');
      this.$router.push('/login');
    },
 }
}

</script>

<style>

</style>