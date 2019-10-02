<template>
  <div id="price_wall_material">
    <h5>Component 6</h5>
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
    EventBus.$on("materialChange", data => {
      this.data = data;
    });
  },
  methods: {
    update_total() {
      EventBus.$emit("update_total", this.data.price);
    }
  }
};
</script>

<style>
#price_wall_material {
  grid-area: 2 / 3 / 3 / 4;
  text-align: center;
}
</style>
