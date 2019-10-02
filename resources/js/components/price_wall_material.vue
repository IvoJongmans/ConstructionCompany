<template>
  <div id="price_wall_material">
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
  },
  watch: {
      data: function update_total() {

          EventBus.$emit("update_total", this.data);
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
