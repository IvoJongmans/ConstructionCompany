<template>
<div id="price_total">
  <h5>Totaal</h5>
  <p>{{ data.total}} </p>
</div>
</template>

<script>
import { EventBus } from "../event-bus.js";

export default {
    data() {
    return {
      data: {
          total : 0,
      }
    }
  },
  mounted() {
    var roof_cost = 0;
    var wall_cost = 0;
    EventBus.$on("update_total", data => {
        if(data.house_part == "wall") {
            console.log('De prijs van de muur is veranderd');
            wall_cost = data.price;
            console.log(wall_cost);

            this.data.total = wall_cost + roof_cost;
        }
        if(data.house_part == "roof") {
            console.log('De prijs van het dak is veranderd');
            roof_cost = data.price;
            console.log(roof_cost);

            this.data.total = wall_cost + roof_cost;
        }
    });
  },
};
</script>

<style>
    #price_total {
        grid-area: 3 / 3 / 4 / 4;
        text-align: center;
    }

</style>
