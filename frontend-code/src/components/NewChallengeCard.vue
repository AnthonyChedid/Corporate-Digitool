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
          {{name}}
        </div>
        <v-list-item-title class="text-h5 mb-1">
          {{type}}
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
        }
      },
  props:['name','type','description','buttonText'],
  methods:{
    onClickButton (event) {
         this.$emit('clicked');
     }
  },
  components:{
    ChallengeDialog,
  }
}

</script>

<style>

</style>