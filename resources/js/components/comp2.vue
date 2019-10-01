<template>
<div>
  <h5>Component 2</h5>
  <p>CLICKS ON COMP 1: {{clickCount}} </p>
</div>
</template>

<script>
import { EventBus } from "../event-bus.js";

export default {
    data() {
    return {
      clickCount: 0
    }
  },
  mounted() {
    console.log("Component 2 mounted.");
    console.log(this.clicks);
    EventBus.$on("i-got-clicked", clickCount => {
      this.clickCount = clickCount;
    });
  }

  //         mounted() {
  //            EventBus.$on('i-got-clicked', clickCount => {
  //   console.log(`Oh, that's nice. It's gotten ${clickCount} clicks! :)`)
  // });
  //         },
};
</script>
