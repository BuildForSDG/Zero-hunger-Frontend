<template>
  <nav>
    <template>
      <v-app-bar class="pt-2" app height="60" flat>
        <v-app-bar-nav-icon>
          <v-icon @click="drawer = !drawer">mdi-text</v-icon>
        </v-app-bar-nav-icon>
        <v-text-field dense clearable clear-icon append-icon="mdi-magnify"></v-text-field>
        <v-btn icon height="40" width="40" class="mx-6">
          <v-badge color="green" content="6">
            <v-icon>mdi-cart</v-icon>
          </v-badge>
        </v-btn>
      </v-app-bar>
    </template>

    <v-navigation-drawer
      v-model="drawer"
      :expand-on-hover="expandOnHover"
      app
      dark
      color="grey lighten-4" class="white--text"
      src="https://cdn.vuetifyjs.com/images/parallax/material2.jpg"
      gradient="to top right, rgba(100,115,201,.33), rgba(25,32,72,.7)"
    >
      <v-list-item>
        <v-list-item-icon>
          <v-icon size="35" color="green">mdi-weather-hurricane</v-icon>
          <v-list-item-title>
            <span class="title">Farmer's</span>Expand
          </v-list-item-title>
        </v-list-item-icon>
      </v-list-item>

      <v-list-item class="px-2 d-flex justify-content-center">
        <v-list-item-avatar size="55">
          <v-img src="https://randomuser.me/api/portraits/women/85.jpg"></v-img>
        </v-list-item-avatar>

        <v-list-item-content >
          <v-list-item-title class="title">Sandra Adams</v-list-item-title>
          <v-list-item-subtitle>sandra_a88@gmail.com</v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>

       <v-list>
        <v-list-item>
          <v-list-item-icon>
            <v-icon dense></v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title>
              <v-btn  small color="green"><v-icon dense>mdi-logout</v-icon>SignOut</v-btn>
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>

      <v-divider></v-divider>
    </v-navigation-drawer>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      drawer: true,
      expandOnHover: true,
      
    };
  }
};
</script>

<style lang="css" scoped>
</style>
