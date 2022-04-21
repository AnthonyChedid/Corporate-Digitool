<template>
  <div>
    <v-container
      class="spacing-playground pa-6 d-flex align-center"
      fluid
    >
    
    <iframe src="https://onedrive.live.com/embed?cid=27E643F3366B3776&resid=27E643F3366B3776%211677&authkey=AKqK-DJHYryg0Xw&em=2" width="1000" height="1000" frameborder="0" scrolling="no"></iframe>
    </v-container>
    <sidebar message="Previous Challenges" />
  </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue'
//import NewChallenge from '../components/ChallengeCard.vue'
export default {
  name: 'PreviousChallenges',
  components: {
      Sidebar,
  //    NewChallenge,
    },
}
</script>