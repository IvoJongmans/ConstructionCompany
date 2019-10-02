<template>
<div id="price_total">
  <h5>Totaal</h5>
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

    });
  }
};
</script>

<style>
    #price_total {
        grid-area: 2 / 3 / 3 / 4;
        text-align: center;
    }

</style>
