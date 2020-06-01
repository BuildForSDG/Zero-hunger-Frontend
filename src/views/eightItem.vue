<template>
  <div class="container">

<v-app-bar flat color="" floating="left" >
  <v-app-bar-nav-icon router to="/"><v-icon>mdi-home</v-icon> </v-app-bar-nav-icon>
</v-app-bar>

    <v-card :loading="loading" class="mx-auto" max-width="600">
      <v-img height="250" src="../assets/images/banners/millet.jpg"></v-img>

      <v-card-actions class="d-flex float-right">
        <v-btn color="deep-purple lighten-2" text @click="reserve">Add to cart
              <i class="fa fa-shopping-cart"></i></v-btn>
      </v-card-actions>

      <v-card-title>Millet</v-card-title>

      <v-card-text>
        <v-row align="center" class="mx-0">
          <v-rating :value="4.5" color="amber" dense half-increments readonly size="14"></v-rating>

          <div class="grey--text ml-4">4.5 (413)</div>
        </v-row>

        <div class="my-4 subtitle-1">$12.95</div>

        <div>Small plates, salads & sandwiches - an intimate setting with 12 indoor seats plus patio seating.</div>
      </v-card-text>

      <v-divider class="mx-4"></v-divider>

      <v-card-title>Tonight's availability</v-card-title>

      <v-card-text>
        <v-chip-group v-model="selection" active-class="deep-purple accent-4 white--text" column>
          <v-chip>5:30PM</v-chip>

          <v-chip>7:30PM</v-chip>

          <v-chip>8:00PM</v-chip>

          <v-chip>9:00PM</v-chip>
        </v-chip-group>
      </v-card-text>

      <!-- <v-card-actions>
        <v-btn color="deep-purple purple lighten-2" text @click="reserve">Add to cart
              <i class="fa fa-shopping-cart"></i></v-btn>
      </v-card-actions> -->
    </v-card>
  </div>
</template>

<script>
export default {
  name: "EightItem",
  // data: () => ({
  //     loading: false,
  //     selection: 1,
  //   }),

    // methods: {
    //   reserve () {
    //     this.loading = false

    //     setTimeout(() => (this.loading = false), 2000)
    //   },
    // },
};
</script>>
