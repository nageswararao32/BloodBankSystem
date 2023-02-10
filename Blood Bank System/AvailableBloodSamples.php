<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Blood Samples</title>
</head>
<body>

<div class="container">
     <canvas id="myChart" width="50" height="20"></canvas>
</div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
     <script src="script.js"></script>
     
     <script>
        var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['A+', 'B+', 'AB-', 'A-', 'B-', 'A-'],
        datasets: [{
            label: 'Availability of Blood Samples',
            data: [130, 120, 110, 100, 90, 80],
            backgroundColor: [
                'rgba(100, 27, 96, 0.6)',
                'rgba(3, 100, 100, 0.6)',
                'rgba(100, 100, 0, 0.6)',
                'rgba(29, 100, 100, 0.6)',
                'rgba(100, 39, 100, 0.6)',
                'rgba(84, 100, 100, 0.6)'
            ],
            borderColor: [
                'rgba(100, 27, 96, 1)',
                'rgba(3, 100, 100, 1)',
                'rgba(100, 100, 0, 1)',
                'rgba(29, 100, 100, 1)',
                'rgba(100, 39, 100, 1)',
                'rgba(84, 100, 100, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            text: 'Available Blood Samples',
            position: 'top',
            fontSize: 16,
            padding: 20
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 50
                }
            }]
        }
    }
});
     </script>




    
</body>
</html>