<template>
  <div>
    <v-container
      class="spacing-playground pa-6 d-flex align-center"
      fluid
    >
    <div v-for="challenge in challenges" :key="challenge.id">
      <new-challenge-card :name="challenge.challenge_id[0].name" :type="challenge.challenge_id[0].type" description="a edscriptuon" buttonText="View results"/>
    </div>
    
    </v-container>
    <sidebar message="Previous Challenges" />
  </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue'
import NewChallengeCard from '../components/NewChallengeCard.vue'
export default {
  name: 'PreviousChallenges',
  data() {
    return {
      challenges:[]
    };
  },
      created: function () {
        this.$store.dispatch('challenges/getPreviousChallenges', JSON.parse(localStorage.getItem('user')).id).then(
                ()=>{this.challenges=this.$store.state.challenges.previousChallenges},
                error=>{console.log("error: "+error)}
              ); 
      
    },
  components: {
      Sidebar,
      NewChallengeCard
    },
}
</script>