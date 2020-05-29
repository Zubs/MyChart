<div class="col-6">
    <div class="card text-center">
      <canvas id="chart4"></canvas>
      <script>
        var ctx = document.getElementById('chart4').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'radar',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [
                {
                    label: 'My First dataset',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(50, 10, 200)',
                    data: [50, 40, 45, 42, 50, 30, 45]
                },
                {
                    label: 'My Second dataset',
                    backgroundColor: 'rgb(99, 132, 255)',
                    borderColor: 'rgb(200, 10, 50)',
                    data: [55, 50, 45, 50, 40, 60, 45]
                }]
            },

            // Configuration options go here
            options: {}
        });
      </script>
      <h2 class="card-header mt-5">Radar</h2>
    </div>
</div>