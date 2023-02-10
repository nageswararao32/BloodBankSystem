<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
    </head>
    <body>                
  
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #3B3131;">
    
    <a class="navbar-brand ml-5" href="./index.php">
</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    <ul class="nav justify>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="SignUp.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="AddUsers.php">Add Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="Graph.php">View Graph</a>
  </li>
</ul>


    
    <div class="user-cart">  
        
          <a href="" style="text-decoration:none;">
            <i class="fa fa-user mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
         </a>
    </div>  
</nav>

<div class="sidebar" id="mySidebar">
<div class="side-header">
   
    <h5 style="margin-top:10px;">Hello, Admin!</h5>
</div>



<div>
<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"></a>
    <a href="#" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="#View Users" onclick="showOrders()"><i class="fa fa-list"></i> View Users</a>
</div>
 

<!-- HTML content -->
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
        labels: ['10-11-23', '10-10-23', '3-3-23', '1-2-23', '10-2-23', '2-2-23'],
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



       
 