<template>
  <div @click="emitGlobalClickEvent()">

      <h5>Component 1</h5>
      <p>CLICK ME AND SEE WHAT HAPPENS!</p>
      <p>CLICKS: {{clickCount}}</p>

  </div>
</template>

<script>
// Import the EventBus we just created.
import {EventBus} from '../event-bus.js';

export default {
  data() {
    return {
      clickCount: 0
    }
  },

  methods: {
    emitGlobalClickEvent() {
      this.clickCount++;
      // Send the event on a channel (i-got-clicked) with a payload (the click count.)
      EventBus.$emit('i-got-clicked', this.clickCount);
    }
  }
}
</script>
