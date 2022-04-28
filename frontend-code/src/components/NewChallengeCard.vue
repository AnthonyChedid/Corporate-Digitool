<template>
  <div>
  <v-card
    class="mx-auto"
    max-width="344"
    outlined
  >
    <v-list-item three-line>
      <v-list-item-content>
        <div class="text-overline mb-4">
          Name: {{name}}
        </div>
        <v-list-item-title class="text-h5 mb-1">
          Type: {{type}}
        </v-list-item-title>
        <v-list-item-subtitle>{{description}}</v-list-item-subtitle>
      </v-list-item-content>

      <v-list-item-avatar
        tile
        size="80"
        color="grey"
      ></v-list-item-avatar>
    </v-list-item>

    <v-card-actions>
      <v-btn
        outlined
        rounded
        text
        @click="onClickButton()"
      >
        {{buttonText}}
      </v-btn>
    </v-card-actions>
    
  </v-card>
  </div>
</template>

<script>
import ChallengeDialog from '../components/ChallengeDialog.vue'
export default {
  data () {
        return {
          toggleDialog:false,
          chall_id:0,
        }
      },
  props:['name','type','description','buttonText','challenge_id'],
  watch: {
    challenge_id: function(newVal) { 
        this.chall_id = newVal
    }
  },
  
  methods:{
    onClickButton (event) {
          this.$store.dispatch('challenges/getTasks', this.challenge_id).then(
              () => {
                this.$emit('clicked');
              },
              error => {
                if(error){
                  this.setLoad=false
                  this.errorMessage =
                  (error.response && error.response.data) ||
                  error.message ||
                  error.toString();
                }
              }
            );
     }
  },
  components:{
    ChallengeDialog,
  },
}

</script>

<style>

</style>