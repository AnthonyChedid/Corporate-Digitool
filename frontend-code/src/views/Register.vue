<template>
   <v-app >
      <v-main>
         <v-container fluid fill-height>
            <v-layout align-center justify-center>
               <v-flex xs12 sm8 md4>
                  <v-card class="elevation-12">
                     <v-toolbar dark color="primary">
                        <v-toolbar-title>Register form</v-toolbar-title>
                     </v-toolbar>
                     <v-card-text>
                     <form ref="form" @submit.prevent="handleRegister">
                            <v-text-field
                              v-model="user.name"
                              name="name"
                              label="Name"
                              type="name"
                              placeholder="name"
                              required
                           ></v-text-field>
                            
                            <v-text-field
                              v-model="user.email"
                              name="email"
                              label="Email"
                              type="email"
                              placeholder="email"
                              required
                           ></v-text-field>
                           
                            <v-text-field
                              v-model="user.password"
                              name="password"
                              label="Password"
                              type="password"
                              placeholder="password"
                              required
                           ></v-text-field>

                           <v-text-field
                              v-model="user.password_confirmation"
                              name="confirmPassword"
                              label="Confirm Password"
                              type="password"
                              placeholder="cocnfirm password"
                              required
                           ></v-text-field>
                           <div class="red--text"> {{errorMessage}}</div>
                           <v-btn type="submit" class="mt-4" color="primary" value="register">Register</v-btn>
                           <div class="grey--text mt-4" v-on:click="$router.push('/login')">
                              <div class="grey--text mt-4">
                              Already have an account ? <strong>Log in</strong>
                           </div>
                           </div>
                      </form>
                     </v-card-text>
                  </v-card>
                
               </v-flex>
            </v-layout>
         </v-container>
      </v-main>
   </v-app>
</template>

<script>
import User from '../models/user';
export default {
  name: "login",
  data() {
    return {
      user: new User('', '','',''), 
      submitted: false,
      successful: false,
      errorMessage: "",
    };
  },
  computed:{
     loggedIn() {
      return this.$store.state.auth.status.loggedIn;
     },
   },
  methods: {
      handleRegister() {
      this.errorMessage = '';
      this.submitted = true;
      console.log(this.$validator);
      this.$store.dispatch('auth/register', this.user).then(
         ()=>{this.$router.push('/').catch(() => {});},
      data => {
         this.errorMessage = data.message;
         this.successful = true;
      },
      error => {
         this.errorMessage =
            (error.response && error.response.data) ||
            error.message ||
            error.toString();
         this.successful = false;
      }
      );
   }
},
};
</script>