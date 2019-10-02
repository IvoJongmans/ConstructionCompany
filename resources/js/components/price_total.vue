<template>
<div id="price_total">
  <h5>Totaal</h5>
  <p>{{ data.total}} </p>
</div>
</template>

<script>
import { EventBus } from "../event-bus.js";

export default {
    data() {
    return {
      data: {
          total : 0,
      }
    }
  },
  mounted() {
    EventBus.$on("update_total", data => {
      this.data.total += data;
    });
  },
};
</script>

<style>
    #price_total {
        grid-area: 2 / 3 / 3 / 4;
        text-align: center;
    }

</style>
