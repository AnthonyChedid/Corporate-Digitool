<template>
  <div>
    <v-container
      class="spacing-playground pa-6 d-flex align-center"
      fluid
    >
    <new-challenge/>
    </v-container>
    <Nav/>
  </div>
</template>

<script>
import Nav from '../components/Nav.vue'
import NewChallenge from '../components/NewChallenge.vue'
  export default {
    name: 'Home',

    components: {
      Nav,
      NewChallenge,
    },
  }
</script>
