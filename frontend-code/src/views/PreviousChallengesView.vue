<template>
  <div>
    <v-container
      class="spacing-playground pa-6 d-flex align-center"
      fluid
    >
    <new-challenge/>
    </v-container>
    <sidebar message="Previous Challenges" />
  </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue'
import NewChallenge from '../components/NewChallenge.vue'
export default {
  name: 'PreviousChallenges',
  components: {
      Sidebar,
      NewChallenge,
    },
}
</script>