<template>
  <v-row justify="center">
    <v-dialog
      v-model="dialog"
      fullscreen
      hide-overlay
      transition="dialog-bottom-transition"
    >
      
      <v-card>
        <v-toolbar
          dark
          color="primary"
        >
          <!-- <v-btn
            icon
            dark
            @click="onClickButton()"
          >
            <v-icon>mdi-close</v-icon>
          </v-btn> -->
          <v-tabs v-model="tab">
            <v-tab v-for="task in this.$store.state.challenges.tasks" :key="task.id">{{task.task_id[0].taskName}}</v-tab>
          </v-tabs>
            
          <v-spacer></v-spacer>
          <v-toolbar-items>
            <v-btn
              dark
              text
              @click="onFinishButton()" 
            >
              FINISH CHALLENGE
            </v-btn>
          </v-toolbar-items>
        </v-toolbar>
        <v-list
          three-line
          subheader
        >
          <v-list-item>
            <v-list-item-content>
             <v-tabs-items v-model="tab">
                <task-card
                  v-for="task in this.$store.state.challenges.tasks"
                  :key="task.id"
                  :description="task.task_id[0].description"
                  :id="task.id"
                  :correctAnswer="task.task_id[0].result"
                  :challengeType="task.task_id[0].challenge_id.challenge_type_id.typeName"
                  :taskName="task.task_id[0].taskName"
                  :competenceId="task.task_id[0].competence_id.id"
                  :resultDocument="task.task_id[0].result_document"
                >
                </task-card>
              </v-tabs-items>
            </v-list-item-content>
          </v-list-item>
          
        </v-list>
        <v-divider></v-divider>
        
      </v-card>
 
    </v-dialog>
  </v-row>
</template>

<script>
  import TaskCard from './TaskCard.vue'
  export default {
    data () {
      return {
        tab: null,
        notifications: false,
        sound: true,
        widgets: false,
      }
    },
    methods:{
        onClickButton (event) {
            this.$emit('clicked');
        },

        onFinishButton(){
          this.$emit('finishedChallenge');
        }
        
    },
      

    props:['dialog','challenge_id','tasks'],

    components:{
      TaskCard,
    }
  }
</script>