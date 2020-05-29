<div class="col-6">
    <div class="card text-center">
      <canvas id="chart6"></canvas>
      <script>
        var ctx = document.getElementById('chart6').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'polarArea',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: 'white',
                    data: [50, 35, 30, 37, 45, 30, 45]
                }]
            },

            // Configuration options go here
            options: {}
        });
      </script>
      <h2 class="card-header mt-5">Polar Area</h2>
    </div>
</div>