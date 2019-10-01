<template>
  <div id="options">
    <h5>Component 1</h5>
    <select v-model="data.color" @change="emitGlobalClickEvent">
      <option>Rood</option>
      <option>Grijs</option>
    </select>
    <span>Selected: {{ data.selected }}</span>
  </div>
</template>

<script>
import { EventBus } from "../event-bus.js";

export default {
  data() {
    return {
      data: {
          color: ''
      }
    }
  },

  methods: {
    emitGlobalClickEvent() {
      this.data.clickCount++;
      // Send the event on a channel (i-got-clicked) with a payload (the click count.)
      EventBus.$emit("i-got-clicked", this.data);
    }
  }
};
</script>

<style>
#options {
  grid-area: 1 / 1 / 2 / 2;
  text-align: center;
}
</style>
