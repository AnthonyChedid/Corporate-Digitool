<template>
    <v-tab-item>
        <v-card flat>
        <v-card-text>Description: {{description}}</v-card-text>
        <v-card-text>Competence tested: {{competence}}</v-card-text>
        <v-card-text>Completion time: {{time}} seconds</v-card-text>
        <v-card-text>Score: {{score}}/1</v-card-text>
        </v-card>
    </v-tab-item>
    
</template>

<script>
export default {
  
    data () {
      return {
        answer:null,
        formDisabled:false,
        showSnack:false,
        body:null
      }
    },
    props:['description','competence','score','time'],

    methods:{
    },

    components:{
      
    }
}
</script>
