<div class="col-6">
    <div class="card text-center">
      <canvas id="chart2"></canvas>
      <script>
        var ctx = document.getElementById('chart2').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [50, 35, 30, 37, 45, 30, 45]
                }]
            },

            // Configuration options go here
            options: {}
        });
      </script>
      <h2 class="card-header mt-5">Line Chart</h2>
    </div>
</div>