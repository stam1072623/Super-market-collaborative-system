

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Γραφήματα</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      .chartMenu {
        width: 100vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(54, 162, 235, 1);
      }
      .chartMenu p {
        padding: 10px;
        font-size: 20px;
      }
      .chartCard {
        width: 100vw;
        height: calc(100vh - 40px);
        background: rgba(54, 162, 235, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .chartBox {
        width: 700px;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(54, 162, 235, 1);
        background: white;
      }
    </style>
  </head>
  <body>
    <div class="chartMenu">
      <p>Γραφήματα</p>
    </div>
    <div class="chartCard">
      <div class="chartBox">
        <input type="date" onchange="startDateFilter(this)" 
            value="2023-01-08" min="2023-01-08" max="2023-09-30">
       <input type="date" onchange="endDateFilter(this)" 
            value="2023-01-08" min="2023-01-08" max="2023-09-30">
        <canvas id="myChart"></canvas>
      </div>
    </div>

    <?php
       
      include "database_connection.php";

       
      // Select the number of registrations for each date
      $sql = "SELECT offerdate, COUNT(*) FROM offer GROUP BY offerdate";
      $result = mysqli_query($conn, $sql);
      
      
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $dateArray[] = $row["offerdate"];
            $countArray[] = $row["COUNT(*)"];
        }
    }
    
    
    ?>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
    <script>
        const dateArrayJS = <?php echo json_encode($dateArray); ?>;
        //console.log(dateArrayJS)

        const dateChartJS = dateArrayJS.map((day,index) => {
            let dayjs = new Date(day);
            
            return dayjs.setHours(0, 0, 0, 0);
        });
        console.log(dateChartJS)

    // setup 
    const data = {
      labels: dateChartJS,
      datasets: [{
        label: 'offers',
        data: <?php echo json_encode($countArray); ?>,
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          
        ],
        borderWidth: 1
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
          x: { 
            min: '2023-01-08',
            max: '2023-30-09',
            type: 'time',
            time:{
                unit: 'day'
            }},
          y: {
            beginAtZero: true
          }
        }
      }
    };

    
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    function startDateFilter(date){
      const startDate = new Date(date.value);
      myChart.config.options.scales.x.min = startDate.setHours(0, 0, 0, 0);
      myChart.update();
    }

    function endDateFilter(date){
      const endDate = new Date(date.value);
      myChart.config.options.scales.x.max = endDate.setHours(0, 0, 0, 0);
      myChart.update();
    }


    </script>

  </body>
</html>