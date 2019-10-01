<template>
  <div id="house">
    <h5>Component 2</h5>
    <p id="roofcolor">********</p>
  </div>
</template>

<script>
import { EventBus } from "../event-bus.js";

export default {
  data() {
    return {
      clickCount: 0
    };
  },
  mounted() {
    EventBus.$on("i-got-clicked", data => {
      if (data.color == "Rood") {
        $("#roofcolor").css("color", "red");
      }
      else {
         $("#roofcolor").css("color", "grey");
      }
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
