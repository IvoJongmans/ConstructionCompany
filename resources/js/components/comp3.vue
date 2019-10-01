<template>
<div id="price">
  <h5>Component 3</h5>
  <p id="rooftiles_price">Geen dakpannen geselecteerd</p>
</div>
</template>

<script>
import { EventBus } from "../event-bus.js";

export default {
    data() {
    return {
      data: {
          Rood: '20,-',
          Grijs: '50,-'
      }
    }
  },
  mounted() {
    EventBus.$on("i-got-clicked", data => {
      if (data.color == "Rood") {
          $('#rooftiles_price').text(`Prijs: ${this.data.Rood}`);
      }
      else {
          $('#rooftiles_price').text(`Prijs: ${this.data.Grijs}`);
      }
    });
  }
};
</script>

<style>
    #price {
        grid-area: 1 / 3 / 2 / 4;
        text-align: center;
    }

</style>
