<template>
  <v-app id="inspire">
    <v-navigation-drawer app v-model="drawer">
      <v-list-item>
        <v-list-item-content>
          <v-list-item-title class="text-h6">
            Corporate Digitool
          </v-list-item-title>
           
        </v-list-item-content>
        <button class="btn btn-danger" @click="logout">Logout</button>
      </v-list-item>

      <v-divider></v-divider>

      <v-list
        dense
        nav
      >
        <v-list-item
          v-for="item in items"
          :key="item.title"
          :to="item.to"
          link
        >
          <v-list-item-icon>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar app>
      <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

      <v-toolbar-title>Corporate Digitool</v-toolbar-title>
    </v-app-bar>

    <v-main>
      <router-view></router-view>
    </v-main>
  </v-app>
</template>

<script>
import axios from 'axios'
  export default {
    data: () => ({ drawer: null ,
    
        items: [
          { title: 'My Challenges', icon: 'mdi-view-dashboard', to:'/' },
          { title: 'Completed Challenges', icon: 'mdi-image' ,to:'/about'},
        ],
        right: null,
        
      }),

    mounted(){
      let BaseApi = axios.create({
      baseURL: "http://localhost:8000/api"
        });
      let token=localStorage.getItem('token')
      BaseApi.defaults.headers.common['Authorization'] = `Bearer ${token}`
    },  
    
    methods: {
      logout(){
          axios.post('http://localhost:8000/api/logout',{}).then((response) => {
              localStorage.removeItem('token')
              this.$router.push('/register')
          }).catch((errors) => {
              console.log(errors)
          })
      }
    }  
  }
</script>