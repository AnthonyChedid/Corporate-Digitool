<template>
   <v-app >
      <v-main>
         <v-container fluid fill-height>
            <v-layout align-center justify-center>
               <v-flex xs12 sm8 md4>
                  <v-card class="elevation-12">
                     <v-toolbar dark color="primary">
                        <v-toolbar-title>Log in form</v-toolbar-title>
                     </v-toolbar>
                     <v-card-text>
                     <form ref="form" @submit.prevent="handleLogin">                            
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
                           <div class="red--text"> {{errorMessage}}</div>
                           <v-btn type="submit" class="mt-4" color="primary" value="log in">Log in</v-btn>
                           <div class="grey--text mt-4" v-on:click="$router.push('/register')">
                              <div class="grey--text mt-4">
                              don't have an account ? <strong>Register</strong>
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
      registerForm:{
         name:"",
         email: "",
         password: "",
         password_confirmation: ""
      },
      errorMessage: "",
    };
  },
  computed:{
     loggedIn() {
      return this.$store.state.auth.status.loggedIn;
     },
   },
   created() {
    if (this.loggedIn) {
      this.$router.push('/');
    }
  },
  methods: {
      handleLogin() {
        if (this.user.email && this.user.password) {
          this.$store.dispatch('auth/login', this.user).then(
            () => {this.$router.push('/').catch(() => {});},
            error => {
              if(error){
                this.errorMessage =
                (error.response && error.response.data) ||
                error.message ||
                error.toString();
               }
            }
          );
        }
   }
},
};
</script>