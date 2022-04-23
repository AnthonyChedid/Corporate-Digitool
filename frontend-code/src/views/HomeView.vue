<template>
  <div>
    <v-container
      class="pa-6 d-flex "
    >  
    <div v-for="challenge in challenges" :key="challenge.id">
      <new-challenge-card :challenge_id="challenge.id" @clicked="onClickCard()" :name="challenge.challenge_id[0].name" :type="challenge.challenge_id[0].type" description="a descriptuon" buttonText="Start Challenge" >
      </new-challenge-card>
    </div>
    </v-container>
    <sidebar message="My Challenges" />
    <challenge-dialog @clicked="onClickCard()" :dialog="toggleDialog" />
    
  </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue'
import NewChallengeCard from '../components/NewChallengeCard.vue'
import ChallengeDialog from '../components/ChallengeDialog.vue'
  export default {
    name: 'Home',
    data() {
    return {
      challenges:[],
      toggleDialog:false,
      tasks:[]
    };
  },

    created: function () {
      this.$store.dispatch('challenges/getNewChallenges', JSON.parse(localStorage.getItem('user')).id).then(
                  ()=>{this.challenges=this.$store.state.challenges.newChallenges},
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
      NewChallengeCard,
      ChallengeDialog
    },
  }
</script>

<style scoped>

</style>