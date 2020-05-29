<div class="col-6">
    <div class="card text-center">
      <canvas id="chart8"></canvas>
      <script>
        var ctx = document.getElementById('chart8').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'scatter',

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
                    data: [{
                        x: 5,
                        y: 25,
                    },
                    {
                        x: 15,
                        y: 45,
                    },
                    {
                        x: 30,
                        y: 50,
                    },
                    {
                        x: 40,
                        y: 10,
                    },
                    {
                        x: 50,
                        y: 20,
                    },
                    {
                        x: 15,
                        y: 25,
                    },
                    {
                        x: 25,
                        y: 35,
                    },
                    ]
                }]
            },

            // Configuration options go here
            options: {}
        });
      </script>
      <h2 class="card-header mt-5">Scatter Chart</h2>
    </div>
</div>