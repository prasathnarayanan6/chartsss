<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 80%;
            margin: 20px auto;
        }

        .p {
            text-align: center;
            font-size: 14px;
            padding-top: 140px;
        }
    </style>
</head>
<body>
    <div class="container">
        <center><h2>Temperature v Time</h2></center>
         <div>
            <canvas id="canvas"></canvas>
        </div>
    </div>

    <p class="p">All rights Resevered<a href="http://www.sitepoint.com/fancy-responsive-charts-with-chart-js" target="_blank">See article</a>.</p>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<script>
var dData = function() {
  return Math.round(Math.random() * 90) + 10
};

var barChartData = {
  labels: ["dD 1", "dD 2", "dD 3", "dD 4"],
  datasets: [{
    fillColor: "rgba(0,60,100,1)",
    strokeColor: "black",
    data: [dData(), dData(), dData(), dData()]
  }]
}

var index = 11;
var ctx = document.getElementById("canvas").getContext("2d");
var barChartDemo = new Chart(ctx).Line(barChartData, {
  responsive: true,
  barValueSpacing: 2
});
setInterval(function() {
  //barChartDemo.removeData();
  barChartDemo.addData([dData()], "dD " + index);
  index++;
}, 3000);

</script>

</html>