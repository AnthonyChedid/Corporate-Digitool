<template>
  <div>
    <v-container
      class="spacing-playground pa-6 d-flex align-center"
      fluid
    >
    </v-container>
    <sidebar message="My Challenges" />
  </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue'
  export default {
    name: 'Home',
    data() {
    return {
      challenges:[]
    };
  },

    created: function () {
      this.challenges=this.$store.state.myValue
    },

    components: {
      Sidebar,
    },
  }
</script>
