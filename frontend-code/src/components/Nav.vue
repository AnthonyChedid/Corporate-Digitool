<template>
  <v-app id="inspire">
    <v-navigation-drawer app v-model="drawer">
      <v-list-item>
        <v-list-item-content>
          <v-list-item-title class="text-h6">
            Corporate Digitool
          </v-list-item-title>
        </v-list-item-content>
        
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
      <v-spacer></v-spacer>
      <profile-menu/>
      
    </v-app-bar>
  </v-app>
</template>

<script>
import ProfileMenu from './ProfileMenu.vue'
  export default {
    data: () => ({ drawer: null ,
    
        items: [
          { title: 'My Challenges', icon: 'mdi-view-dashboard', to:'/' },
          { title: 'Completed Challenges', icon: 'mdi-image' ,to:'/about'},
        ],
        right: null,
        
      }),
    
    methods: {
    },
    components:{
      ProfileMenu,
    }
  }
</script>