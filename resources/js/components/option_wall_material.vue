<template>
  <div id="option_wall_material">
    <h5>Component 4</h5>
    <select v-model="data.material" @change="emitMaterialChange">
      <option>Baksteen</option>
      <option>Hout</option>
    </select>
  </div>
</template>

<script>
import { EventBus } from "../event-bus.js";

export default {
  data() {
    return {
      data: {
          material: ''
      }
    }
  },

  methods: {
    emitMaterialChange() {
      // Send the event on a channel (i-got-clicked) with a payload (the click count.)
      EventBus.$emit("materialChange", this.data);
    }
  }
};
</script>

<style>
#option_wall_material {
  grid-area: 2 / 1 / 3 / 2;
  text-align: center;
}
</style>
