<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Gadd NFVis ACI</title>
         <style>
            P {text-align: center}
         </style>
        <script src="amcharts/amcharts.js" type="text/javascript"></script>
        <script src="amcharts/gauge.js" type="text/javascript"></script>

        <script>
            var ACI_H = 98; // Set ACI health score value here
            var health = ACI_H; 
            var chart = AmCharts.makeChart("chartdiv", {
                type: "gauge",
                titles: [{
                    "text": "Gadd Application Health",
                    "size": 20
                }],

                axes: [{
                    startValue: 0,
                    axisThickness: 2,
                    endValue: 100,
                    valueInterval: 10,
                    bottomTextYOffset: -20,
                    bottomText: "Health Score",

                    bands: [{
                            startValue: 0,
                            endValue: 45,
                            innerRadius: "70%",
                            color: "#ea3838"
                        },

                        {
                            startValue: 45,
                            endValue: 80,
                            innerRadius: "70%",
                            color: "#ffac29"
                        },

                        {
                            startValue: 80,
                            endValue: 100,
                            innerRadius: "70%",
                            color: "#00CC00",
                        }
                    ]
                }],

                arrows: [{}]
            });

            setInterval(randomValue, 0);
            
             // set random value
            function randomValue() {
                //var health = Math.round(Math.random() * 200);
                var value = 40; // set this value from ACI
                chart.arrows[0].setValue(health);
                chart.axes[0].setBottomText("Health Score");
            }
        </script>
    </head>

    <body>
        <div id="chartdiv" style="width:800px; height:400px; margin:0 auto;"></div>
        <?php exec("python ../gadd/nvfis_app.py"); ?>
        <center><IMG SRC="images/happycomputer.png" WIDTH="120" HEIGHT="120">
        <p><strong><font size="4">Feelin' Good!</font></p></center>
    </body>

</html>
