<template >
    <v-tab-item v-observe-visibility="visibilityChanged">
        <v-card flat>
        <v-card-text>Description: {{description}}</v-card-text>
        <v-text-field
            v-model="answer"
            label="Answer"
            placeholder="Answer"
            required
            :disabled="formDisabled"
            v-if="research"
        ></v-text-field>
        <br/>
        <input type="file" id="input_dom_element" label="File input" :disabled="formDisabled"
          v-if="!research" @change="previewFiles">
        <br/><br/><br/>
          <v-btn
            depressed
            color="primary"
            :disabled="formDisabled"
            v-on:click="maybeSubmitAnswer()"
            >
            Submit Answer
            </v-btn>
            <br/><br/><br/>  
            <successful-answer-snack v-show="showSnack"/>
        </v-card>
      <template>
        <v-row justify="center">
          <v-dialog
            v-model="dialog"
            persistent
            max-width="290"
          >
            <v-card>
              <v-card-title class="text-h5">
                Submit Answer
              </v-card-title>
              <v-card-text>Are you sure you want to submit the answer for this task</v-card-text>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn
                  color="green darken-1"
                  text
                  @click="dialog = false"
                >
                  Cancel
                </v-btn>
                <v-btn
                  color="green darken-1"
                  text
                  @click="submitAnswer()"
                >
                  Submit
                </v-btn>
              </v-card-actions>
            </v-card>
          </v-dialog>
        </v-row>
      </template>  
    </v-tab-item>
</template>

<script>
import SuccessfulAnswerSnack from './SuccessfulAnswerSnack.vue'
import VueObserveVisibility from 'vue-observe-visibility'
import Vue from 'vue'
import * as XLSX from 'xlsx/xlsx.mjs';
import * as Lodash from 'lodash';

Vue.use(VueObserveVisibility)
export default {
  
    data () {
      return {
        answer:null,
        formDisabled:false,
        showSnack:false,
        body:null,
        currTime:null,
        files:[],
        creation:false,
        research:false,
        previousTime:0,
        dialog: false,

      }
    },
    props:['description','correctAnswer','id','challengeType','taskName','competenceId','resultDocument','adr'],
    created() {
      this.currTime=new Date();
      if(this.challengeType=="Creation"){
        this.creation=true
        this.research=false
      }else{
        this.creation=false
        this.research=true
      }
    },

    methods:{
      previewFiles(event) {
        this.files=event.target.files
      },

      visibilityChanged (isVisible, entry) {
        this.currTime=new Date();
      },

      maybeSubmitAnswer(){
        this.dialog=true;
      },

      dataURLtoFile(dataurl, filename) {
        var arr = dataurl.split(','),
            mime = arr[0].match(/:(.*?);/)[1],
            bstr = atob(arr[1]), 
            n = bstr.length, 
            u8arr = new Uint8Array(n);
            
        while(n--){
            u8arr[n] = bstr.charCodeAt(n);
        }
        
        return new File([u8arr], filename, {type:mime});
      },

      submitAnswer(){
        this.dialog=false;
        console.log(this.files)
        var d = new Date();
        var dif = d.getTime() - this.currTime.getTime();
        var Seconds_from_T1_to_T2 = dif / 1000;
        var Seconds_Between_Dates = Math.abs(Seconds_from_T1_to_T2)-this.previousTime;
        this.currTime=new Date(d);
        this.previousTime=Seconds_Between_Dates

        if(this.challengeType == "Research"){
          if(this.answer == this.correctAnswer){
            this.body={
              id:this.id,
              score : 1,
              time:Seconds_Between_Dates,
              type:this.challengeType,
              taskName:this.taskName,
              file:this.files,
              fileType:this.files.type,
              competenceId:this.competenceId,
              userId: JSON.parse(localStorage.getItem('user')).id  
            }
          }
          else{
            this.body={
              id:this.id,
              score : 0,
              time:Seconds_Between_Dates,
              type:this.challengeType,
              taskName:this.taskName,
              file:this.files,
              fileType:this.files.type,
              competenceId:this.competenceId,
              userId: JSON.parse(localStorage.getItem('user')).id 
            }
          }
          this.$store.dispatch('challenges/answerTask',this.body).then(()=>{        
            this.formDisabled=true
            this.showSnack=true})
        }
        if(this.challengeType == "Creation"){

          var file = this.dataURLtoFile('data:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;base64,'+this.resultDocument,'result.xlsx');
          file.arrayBuffer().then((res1)=>{ 
            var wb = XLSX.read(res1);
            var target = wb.Sheets.Sheet1
              this.files[0].arrayBuffer().then((res2)=>{ 
                var wb = XLSX.read(res2);
                var uploaded = wb.Sheets.Sheet1;
                console.log(uploaded);
                if(Lodash.isEqual(uploaded,target)){
                  this.body={
                  id:this.id,
                  score : 1,
                  time:Seconds_Between_Dates,
                  type:this.challengeType,
                  taskName:this.taskName,
                  file:this.files,
                  fileType:this.files.type,
                  competenceId:this.competenceId,
                  userId: JSON.parse(localStorage.getItem('user')).id  
                }
                this.$store.dispatch('challenges/answerTask',this.body).then(()=>{        
                this.formDisabled=true
                this.showSnack=true})  
                }else{
                  this.body={
                  id:this.id,
                  score : 0,
                  time:Seconds_Between_Dates,
                  type:this.challengeType,
                  taskName:this.taskName,
                  file:this.files,
                  fileType:this.files.type,
                  competenceId:this.competenceId,
                  userId: JSON.parse(localStorage.getItem('user')).id  
                }
                this.$store.dispatch('challenges/answerTask',this.body).then(()=>{        
                this.formDisabled=true
                this.showSnack=true})
                }
               
              }).catch((err)=>{
                  this.body={
                  id:this.id,
                  score : 0,
                  time:Seconds_Between_Dates,
                  type:this.challengeType,
                  taskName:this.taskName,
                  file:this.files,
                  fileType:this.files.type,
                  competenceId:this.competenceId,
                  userId: JSON.parse(localStorage.getItem('user')).id  
                }
                this.$store.dispatch('challenges/answerTask',this.body).then(()=>{        
                  this.formDisabled=true
                  this.showSnack=true})                
              })
          }).catch((err)=>{
                  this.body={
                  id:this.id,
                  score : 0,
                  time:Seconds_Between_Dates,
                  type:this.challengeType,
                  taskName:this.taskName,
                  file:this.files,
                  fileType:this.files.type,
                  competenceId:this.competenceId,
                  userId: JSON.parse(localStorage.getItem('user')).id  
                }
                this.$store.dispatch('challenges/answerTask',this.body).then(()=>{        
                  this.formDisabled=true
                  this.showSnack=true})                
              })


        }
        this.$emit('clicked');
      },
    },

    components:{
      SuccessfulAnswerSnack,
    }
  }
</script>

<style scoped>
template{
  top: 0;
  left: 0;
  height: 3000px;
}
</style>

