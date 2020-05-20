<template>
  <v-app>
    <v-content>
      <sideNav />
      <router-view></router-view>
    </v-content>
  </v-app>
</template>

<script>
import sideNav from "@/components/sideNav";

export default {
  name: "App",

  components: {
    sideNav
  },

  data: () => ({
    //
  })
};
</script>

<style lang="css" scoped>

</style>