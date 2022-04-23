<template>
    <v-tab-item>
        <v-card flat>
        <v-card-text>Description: {{description}}</v-card-text>
        <v-text-field
            v-model="answer"
            :error-messages="errorMessages"
            label="Answer"
            placeholder="Answer"
            required
          ></v-text-field>

          <v-btn
            depressed
            color="primary"
            >
            Submit Answer
            </v-btn>
        </v-card>
    </v-tab-item>
</template>

<script>
export default {
    data () {
      return {
        answer:null,
      }
    },
    props:['description']
}
</script>
