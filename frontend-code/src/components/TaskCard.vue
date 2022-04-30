<template>
    <v-tab-item>
        <v-card flat>
        <v-card-text>Description: {{description}}</v-card-text>
        <v-text-field
            v-model="answer"
            label="Answer"
            placeholder="Answer"
            required
            :disabled="formDisabled"
          ></v-text-field>

          <v-btn
            depressed
            color="primary"
            :disabled="formDisabled"
            v-on:click="submitAnswer()"
            >
            Submit Answers
            </v-btn>
            <successful-answer-snack v-show="showSnack"/>
        </v-card>
    </v-tab-item>
    
</template>

<script>
import SuccessfulAnswerSnack from './SuccessfulAnswerSnack.vue'
export default {
  
    data () {
      return {
        answer:null,
        formDisabled:false,
        showSnack:false,
        body:null,
        startTime:null,
        currTime:null
      }
    },
    props:['description','correctAnswer','id'],
    mounted() {
      this.currTime=new Date();
    },

    methods:{
      submitAnswer(){
        var d = new Date();
        var dif = d.getTime() - this.currTime.getTime();
        var Seconds_from_T1_to_T2 = dif / 1000;
        var Seconds_Between_Dates = Math.abs(Seconds_from_T1_to_T2);
        this.currTime=d
        if(this.answer == this.correctAnswer){
          this.body={
            id:this.id,
            score : 1,
            time:Seconds_Between_Dates
          }
        }
        else{
          this.body={
            id:this.id,
            score : 0,
            time:Seconds_Between_Dates
          }
        }
        this.$store.dispatch('challenges/answerTask',this.body).then(()=>{
          this.formDisabled=true
          this.showSnack=true
          })
        
      },
    },

    components:{
      SuccessfulAnswerSnack,
    }
  }
</script>
