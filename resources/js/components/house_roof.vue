<template>
  <div id="house_roof" v-bind:style="{ 'background-color': this.data.color_code }">

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
    EventBus.$on("colorChange", data => {
      this.data = data;
    });
  }
};
</script>

<style>
#house_roof {
  grid-area: 1 / 2 / 2 / 3;
  text-align: center;
}
</style>
