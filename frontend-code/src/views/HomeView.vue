<template>
  <div>
    
    <v-container
      class="pa-6 d-flex "

    >  
    <v-row>
    <v-col cols="4" v-for="challenge in this.$store.state.challenges.newChallenges" :key="challenge.id">
      <new-challenge-card :fileType="challenge.challenge_id[0].document_type_id.typeName ? challenge.challenge_id[0].document_type_id.typeName : '' " :file="challenge.challenge_id[0].challenge_document" :challenge_id="challenge.id" @clicked="challengeId=challenge.id;onClickCard();" :name="challenge.challenge_id[0].name" :type="challenge.challenge_id[0].challenge_type_id.typeName" description="a descriptuon" buttonText="Start Challenge" >
      </new-challenge-card>
      <br/>
    </v-col>
    </v-row>
    <challenge-dialog :challenge_id="challengeId" @finishedChallenge="onFinishChallenge()" @clicked="onClickCard()" :dialog="toggleDialog" />
    </v-container>
    
    <sidebar message="My Challenges" />
    <loading :load="true"/>
    
    
  </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue'
import NewChallengeCard from '../components/NewChallengeCard.vue'
import ChallengeDialog from '../components/ChallengeDialog.vue'
import Loading from '../components/Loading.vue';
  export default {
    name: 'Home',
    data() {
    return {
      challenges:[],
      toggleDialog:false,
      tasks:[],
      challengeId:null,
      setLoad:false
    };
  },

    created: function () {
      this.setLoad=true
      this.$store.dispatch('challenges/getNewChallenges', JSON.parse(localStorage.getItem('user')).id).then(
                  ()=>{
                    this.challenges=this.$store.state.challenges.newChallenges
                    this.setLoad=false
                  },
                  error=>{console.log("error: "+error)}
               ); 
      
    },
    methods:{
      onClickCard(value){
        this.$store.dispatch('challenges/finishChallenge',this.challengeId)
        this.toggleDialog=!this.toggleDialog
      },
      onFinishChallenge(){
        this.toggleDialog=!this.toggleDialog
        this.$store.dispatch('challenges/finishChallenge',this.challengeId).then(()=>{
            this.$store.dispatch('challenges/getNewChallenges', JSON.parse(localStorage.getItem('user')).id)
            this.$store.dispatch('challenges/getPreviousChallenges', JSON.parse(localStorage.getItem('user')).id)
          }).catch((err)=>{console.log(err)})
      }
    },

    components: {
      Sidebar,
      NewChallengeCard,
      ChallengeDialog,
      Loading,
    },
  }
</script>

<style scoped>

</style>