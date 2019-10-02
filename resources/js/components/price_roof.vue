<template>
  <div id="price">
    <h5>Prijs:</h5>
    <p v-if="data" @change="update_total">{{ data.price }}</p>
  </div>
</template>

<script>
import { EventBus } from "../event-bus.js";

export default {
  data() {
    return {
      data: null
    };
  },
  mounted() {
    EventBus.$on("colorChange", data => {
      this.data = data;
    });
  },
  methods: {
    update_total() {
      EventBus.$emit("update_total", this.data.price);
    }
  },
  watch: {
      data: function update_total() {

          EventBus.$emit("update_total", this.data);
      }
  }
};
</script>

<style>
#price {
  grid-area: 1 / 3 / 2 / 4;
  text-align: center;
}
</style>
