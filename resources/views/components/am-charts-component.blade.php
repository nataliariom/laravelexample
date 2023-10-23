
<template>
  <div>
    <div :id="chartId" style="width: 100%; height: 400px;"></div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      chartId: 'chartdiv',
    };
  },
  mounted() {
    am4core.ready(() => {
      var chart = am4core.create(this.chartId, am4charts.XYChart);
      // Configura tu gráfico aquí
    });
  },
};
</script>
