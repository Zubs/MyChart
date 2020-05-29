<div class="col-6">
    <div class="card text-center">
      <canvas id="chart7"></canvas>
      <script>
        var ctx = document.getElementById('chart7').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bubble',

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
                        r: 20,
                    },
                    {
                        x: 15,
                        y: 45,
                        r: 20,
                    },
                    {
                        x: 30,
                        y: 50,
                        r: 20,
                    },
                    {
                        x: 40,
                        y: 10,
                        r: 20,
                    },
                    {
                        x: 50,
                        y: 20,
                        r: 20,
                    },
                    {
                        x: 15,
                        y: 25,
                        r: 20,
                    },
                    {
                        x: 25,
                        y: 35,
                        r: 20,
                    },
                    ]
                }]
            },

            // Configuration options go here
            options: {}
        });
      </script>
      <h2 class="card-header mt-5">Bubble Chart</h2>
    </div>
</div>