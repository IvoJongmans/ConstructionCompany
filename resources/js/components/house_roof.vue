<template>
  <div id="house" v-bind:style="{ 'background-color': this.data.color_code }">
    <h5>Component 2</h5>
  </div>
</template>

<script>
import { EventBus } from "../event-bus.js";

export default {
  data() {
    return {
      data: {

      }
    }
  },
  mounted() {
    EventBus.$on("colorChange", data => {
        this.data = data;
    });
  }
};
</script>

<style>
#house {
  grid-area: 1 / 2 / 2 / 3;
  text-align: center;
}
</style>
