<template>
  <div>
    <v-container
      class="spacing-playground pa-6 d-flex align-center"
      fluid
    >
    <div v-for="challenge in challenges" :key="challenge.id">
      <challenge-card :name="challenge.challenge_id[0].name" :type="challenge.challenge_id[0].type" description="a edscriptuon"/>
    </div>
    </v-container>
    <sidebar message="My Challenges" />
  </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue'
import ChallengeCard from '../components/ChallengeCard.vue'
  export default {
    name: 'Home',
    data() {
    return {
      challenges:[]
    };
  },

    created: function () {
      this.$store.dispatch('challenges/getNewChallenges', JSON.parse(localStorage.getItem('user')).id).then(
                  ()=>{this.challenges=this.$store.state.challenges.newChallenges},
                  error=>{console.log("error: "+error)}
               ); 
      
    },

    components: {
      Sidebar,
      ChallengeCard
    },
  }
</script>
