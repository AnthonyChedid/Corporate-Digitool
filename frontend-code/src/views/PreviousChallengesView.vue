<template>
  <div>
    <v-container
      class="spacing-playground pa-6 d-flex align-center"
      fluid
    >
    <div v-for="challenge in challenges" :key="challenge.id">
      <result-challenge-card :challenge_id="challenge.id" @clicked="onClickCard()" :name="challenge.challenge_id[0].name" :type="challenge.challenge_id[0].type" description="a edscriptuon"/>
      
    </div>
    
    </v-container>
    <sidebar message="Previous Challenges" />
    <result-dialog @clicked="onClickCard()" :dialog="toggleDialog"/>
  </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue'
import ResultDialog from '../components/ResultDialog.vue'
import ResultChallengeCard from '../components/ResultChallengeCard.vue'
export default {
  name: 'PreviousChallenges',
  data() {
    return {
      challenges:[],
      toggleDialog:false,
    };
  },
      created: function () {
        this.$store.dispatch('challenges/getPreviousChallenges', JSON.parse(localStorage.getItem('user')).id).then(
                ()=>{this.challenges=this.$store.state.challenges.previousChallenges},
                error=>{console.log("error: "+error)}
              ); 
      
    },

    methods:{
      onClickCard(value){
        this.toggleDialog=!this.toggleDialog
        this.tasks=this.$store.state.challenges.tasks
        console.log(this.tasks)
      }
    },
  components: {
      Sidebar,
      ResultDialog,
      ResultChallengeCard
    },
}
</script>