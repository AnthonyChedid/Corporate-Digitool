<template>
  <div class="text-center">
    <v-menu offset-y>
      <template v-slot:activator="{ on, attrs }">
        <v-btn
            icon
            v-bind="attrs"
            v-on="on"
        >
            <v-icon>mdi-dots-vertical</v-icon>
        </v-btn>
      </template>
      <v-list>
        <v-list-item
          v-for="(item, index) in items"
          :key="index"
        >
          <v-list-item-title> <v-btn @click="profile(item.title)">{{ item.title }}</v-btn></v-list-item-title>
        </v-list-item>
      </v-list>
    </v-menu>
  </div>
</template>

<script>
  export default {
    data: () => ({
      items: [
        { title: 'Profile' },
        { title: 'Log out' }
      ],
    }),
    methods:{
        profile(message){
            if(message==="Log out"){
                this.$store.dispatch('auth/logout');
                this.$router.push('/login');
            }
        }
    }
  }
  
</script>