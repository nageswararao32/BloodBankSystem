<!DOCTYPE html>
<html lang="en">

<head>



    
</head>

<body>
     <!-- HTML content -->
     <div class="container">
     <canvas id="myChart" width="60" height="20"></canvas>
</div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
     <script src="script.js"></script>
     
     <script>
        var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['7-8-22', '6-8-22', '5-8-22', '4-8-22', '3-8-22', '2-8-22'],
        datasets: [{
            label: 'UserDetails',
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
            text: 'New User Details',
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
