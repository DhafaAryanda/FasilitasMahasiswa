<div id="monthlyIncomeChart"></div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
  Highcharts.chart('monthlyIncomeChart', {
    chart: {
      type: 'column'
    },
    title: {
      text: 'Monthly Income'
    },
    xAxis: {
      categories: {!! json_encode($monthlyIncome->pluck('year_month')) !!}
    },
    yAxis: {
      title: {
        text: 'Total Income'
      }
    },
    series: [{
      name: 'Income',
      data: {!! json_encode($monthlyIncome->pluck('total_income')) !!}
    }]
  });
</script>
