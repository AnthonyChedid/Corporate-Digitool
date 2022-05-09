<template>
  <div>
  <v-card
    class="mx-auto"
    max-width="344"
    outlined
    style="color:black"
    height="275"
  >
  <v-img
      :src="this.image"
      height="150px"
    ></v-img>

    <v-card-title>
      {{name}}
    </v-card-title>

    <v-card-actions>
      <v-btn
        rounded
        @click="onClickButton()"
      >
        Start Challenge
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
          show: false,
          image:null
        }
      },
  props:['name','type','description','buttonText','challenge_id','file','fileType'],
  watch: {
    challenge_id: function(newVal) { 
        this.chall_id = newVal
    }
  },

  created() {
      if(this.fileType == "excel"){
        this.image="excel_img.jpg"
      }
      if(this.fileType == "word"){
        this.image="word.jpg"
      }
      if(this.fileType == "powerpoint"){
        this.image="powerpoint.jpg"
      }
    },
  
  methods:{
    onClickButton (event) {
          this.$store.dispatch('challenges/getTasks', this.challenge_id).then(
              () => {
                this.$emit('clicked');
                var a = document.createElement("a"); //Create <a>
               // a.href = "data:image/png;base64," + this.file; //Image Base64 Goes here
               if(this.type == "Research"){
                if(this.fileType == "excel"){
                    a.href = "data:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;base64," + this.file;
                    a.download = "corporate_digitool.xlsx"; //File name Here
                }
                if(this.fileType == "pdf"){
                  
                  a.href="data:application/pdf;base64,"+this.file;
                  a.download="corporate_digitool.pdf"
                }
                if(this.fileType == "powerpoint"){
                  
                  a.href="application/vnd.openxmlformats-officedocument.presentationml.presentation;base64,"+this.file;
                  a.download="corporate_digitool.pptx"
                }
                if(this.fileType == "word"){
                  
                  a.href="application/vnd.openxmlformats-officedocument.wordprocessingml.document;base64,"+this.file[0];
                  a.download="corporate_digitool.docx"
                }               
                  a.click(); //Downloaded file
               }
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