<template>

  <div v-if="data" id="house_wall_material" v-bind:style="{ backgroundImage: 'url(/images/' + data.image_url + ')' }">

  </div>

  <div v-else id="house_wall_material">

  </div>

</template>

<script>
import { EventBus } from "../event-bus.js";

export default {
  data() {
    return {
      data: null,
    };
  },
  mounted() {
    EventBus.$on("materialChange", data => {
      this.data = data;
    });
  }
};
</script>

<style>
#house_wall_material {
  grid-area: 2 / 2 / 3 / 3;
  text-align: center;
}
</style>
