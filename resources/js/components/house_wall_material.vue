<template>

  <div v-if="data" id="house_wall_material" v-bind:style="{ backgroundImage: 'url(/images/' + data.image_url + ')' }">
    <h5>Component 5</h5>
  </div>

  <div v-else id="house_wall_material">
    <h5>Component 5</h5>
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
      console.log(this.data.material_code);
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
