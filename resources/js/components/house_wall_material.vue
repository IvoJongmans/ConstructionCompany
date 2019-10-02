<template>
  <div id="house_wall_material" v-bind:style="{ 'background-color': this.data.color_code }">
    <h5>Component 5</h5>
  </div>
</template>

<script>
import { EventBus } from "../event-bus.js";

export default {
  data() {
    return {
      data: {}
    };
  },
  mounted() {
    EventBus.$on("materialChange", data => {
      this.data = data;
    });
  }
};
</script>

<style>
#house_wall_material {
  grid-area: 2 / 2 / 3 / 3;
  text-align: center;
}
</style>
