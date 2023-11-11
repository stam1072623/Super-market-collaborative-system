<?php
          include "database_connection.php";
      // Select the number of registrations for each date
      $sql = "SELECT AVG(price),category_id,date FROM price GROUP BY date,category_id";
      $result = mysqli_query($conn, $sql);
      
      
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $priceArray[] = $row["AVG(price)"];
            $dateArray[] = $row["date"];
            
        }

        
    }
    $t = 0;

    while($t < count($dateArray))
    {
      $datesarray[]=$dateArray[$t];
      $t=$t+5;
    }

    $i = 0;

        while($i < count($priceArray))
        {
          $katoikidiaarray[]=$priceArray[$i];
          $i=$i+5;
        }
        
    $z = 1;

        while($z < count($priceArray))
        {
          $vrefarray[]=$priceArray[$z];
          $z=$z+5;
        }

     $j = 2;

        while($j < count($priceArray))
        {
          $potarray[]=$priceArray[$j];
          $j=$j+5;
        }

    $x = 3;

        while($x < count($priceArray))
        {
          $katharray[]=$priceArray[$x];
          $x=$x+5;
        }

    $y = 4;

        while($y < count($priceArray))
        {
          $trofarray[]=$priceArray[$y];
          $y=$y+5;
        }
    
    ?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ΓΡΑΦΗΜΑΤΑ</title>
    <style>
        /* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
  background-color: #1a73e8;
  color: white;
}
.chartBox {
        width: 1000px;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(54, 162, 235, 1);
        background: white;
        
      }
      .chartCard {
        width: 100vw;
        height: calc(100vh - 40px);
        background: rgba(54, 162, 235, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .myDIV{
        background: rgba(54, 162, 235, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
      }

      
     </style>
    </head>
<body>

<div class=myDIV id="myDIV">
  <button class="btn active" onclick="changeData(0)">Για κατοικίδια</button>
  <button class="btn" onclick="changeData(1)">Βρεφικά είδη</button>
  <button class="btn" onclick="changeData(2)">Ποτά - Αναψυκτικά</button>
  <button class="btn" onclick="changeData(3)">Καθαριότητα</button>
  <button class="btn" onclick="changeData(4)">Τρόφιμα</button>
</div>
<div class="chartCard">
<div class="chartBox">
<canvas id="chart-0"></canvas>
</div>
</div>
<hr>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
</body>
</html>

<script>

var dateArrayJS = <?php echo json_encode($datesarray); ?>;
var katoikidiaArrayJS = <?php echo json_encode($katoikidiaarray); ?>;
var vrefArrayJS = <?php echo json_encode($vrefarray); ?>;
var potaArrayJS = <?php echo json_encode($potarray); ?>;
var kathArrayJS = <?php echo json_encode($katharray); ?>;
var trofArrayJS = <?php echo json_encode($trofarray); ?>;


var dataObjects = [
  {
    label: "Για κατοικίδια",
    data: katoikidiaArrayJS
  },
  {
    label: "Βρεφικά Είδη",
    data: vrefArrayJS
  },
  {
    label: "Ποτά - Αναψυκτικά",
    data: potaArrayJS
  },
  {
    label: "Καθαριότητα",
    data: kathArrayJS
  },
  {
    label: "Τρόφιμα",
    data: trofArrayJS
  }
]

/* data */
var data = {
  labels: dateArrayJS,
  datasets: [  {
    label:  dataObjects[0].label,
    data: dataObjects[0].data,
    /* global setting */
    backgroundColor: 
      'rgba(255, 99, 132, 1)',
      
    
    borderColor: 
      'black',
      
    
    borderWidth: 1
  }]
};

var options = {
  legend: {
    display: true,
    fillStyle: "red",
    
    labels: {
      boxWidth: 0,
      fontSize: 24,
      fontColor: "black",
    }
  },
  scales: {
    xAxes: [{
      stacked: false,
      scaleLabel: {
        display: true,
        labelString: 'Ημερομηία'
      },
    }],
    yAxes: [{
      stacked: true,
      scaleLabel: {
        display: true,
        labelString: 'Μέση Τιμή'
      },
      ticks: {
        suggestedMin: 0,
        suggestedMax: 10
      }
    }]
  },/*end scales */
  plugins: {
    // datalabels plugin
    /*https://chartjs-plugin-datalabels.netlify.com*/
    datalabels: {
      
      color: 'black',
      font:{
        size: 0
      }
    }
  }
};

var chart = new Chart('chart-0', {
  plugins: [ChartDataLabels], /*https://chartjs-plugin-datalabels.netlify.com*/
  type: 'bar',
  data: data,
  options: options
});

function changeData(index) {
  chart.data.datasets.forEach(function(dataset) {
    dataset.label = dataObjects[index].label;
    dataset.data = dataObjects[index].data;
    //dataset.backgroundColor = dataObjects[index].backgroundColor;
  });
  chart.update();
}

/* add active class on click */
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>