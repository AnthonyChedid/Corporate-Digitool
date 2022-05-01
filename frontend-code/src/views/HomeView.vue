<template>
  <div>
    <v-container
      class="pa-6 d-flex "
    >  
    <div v-for="challenge in this.$store.state.challenges.newChallenges" :key="challenge.id">
      <new-challenge-card :fileType="challenge.challenge_id[0].document_type_id.typeName" :file="challenge.challenge_id[0].challenge_document" :challenge_id="challenge.id" @clicked="challengeId=challenge.id;onClickCard();" :name="challenge.challenge_id[0].name" :type="challenge.challenge_id[0].challenge_type_id.typeName" description="a descriptuon" buttonText="Start Challenge" >
      </new-challenge-card>
      <br/>
      <challenge-dialog :challenge_id="challenge.id" @finishedChallenge="onFinishChallenge()" @clicked="onClickCard()" :dialog="toggleDialog" />
    </div>
    </v-container>
    <sidebar message="My Challenges" />
    
    
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
      tasks:[],
      challengeId:null,
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
        this.$store.dispatch('challenges/finishChallenge',this.challengeId)
        this.toggleDialog=!this.toggleDialog
        this.tasks=this.$store.state.challenges.tasks
      },
      onFinishChallenge(){
        this.toggleDialog=!this.toggleDialog
        this.tasks=this.$store.state.challenges.tasks
        
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