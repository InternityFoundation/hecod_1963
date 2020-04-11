$(document).ready(function() {
    
    "use strict";

            new Chart(document.getElementById("chart1"),{"type":"line",
            "data":{"labels":labelsChart1,
            "datasets":[{"label":"Body Temprature","data":dataChart1,
            "fill":false,"borderColor":"#28a745","lineTension":0.1}]},
            "options":{}});
    
    //new Chart(document.getElementById("chart1"),{"type":"line","data":{"labels":["1/1/20","2/1/20","1/1/20","3/1/20","4/1/20","5/1/20","6/1/20"],"datasets":[{"label":"Body Temprature","data":[102,101,91,95,99,93,103],"fill":false,"borderColor":"#28a745","lineTension":0.1}]},"options":{}});
    //new Chart(document.getElementById("chart1"),{"type":"line","data":{"labels":["1/1/20","2/1/20","1/1/20","3/1/20","4/1/20","5/1/20","6/1/20"],"datasets":[{"label":"Heart Rate","data":[65,59,80,106,176,155,130],"fill":false,"borderColor":"#28a745","lineTension":0.1}]},"options":{}});
    
    new Chart(document.getElementById("chart2"),{"type":"bar",
        "data":{"labels":labelsChart2,
        "datasets":[{"label":"Blood Pressure High",
        "data":datasysChart2,
        "fill":false,"backgroundColor":["rgba(255, 159, 64, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 159, 64, 0.2)"],
        "borderColor":["rgba(255, 159, 64)","rgb(255, 159, 64)",
        "rgb(255, 159, 64)","rgb(255, 159, 64)","rgb(255, 159, 64)","rgb(255, 159, 64)",
        "rgb(255, 159, 64)"],"borderWidth":1},{"label":"Blood Pressure Low",
        "data":datadisChart2,
        "fill":false,"backgroundColor":["rgba(0, 112, 224, 0.2)","rgba(0, 112, 224, 0.2)", "rgba(0, 112, 224, 0.2)","rgba(0, 112, 224, 0.2)","rgba(0, 112, 224, 0.2)","rgba(0, 112, 224, 0.2)","rgba(0, 112, 224, 0.2)"],
        "borderColor":["rgba(0, 112, 224)","rgb(0, 112, 224)","rgb(0, 112, 224)","rgb(0, 112, 224)","rgb(0, 112, 224)","rgb(0, 112, 224)","rgb(0, 112, 224)"],"borderWidth":1}]},
        "options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});
	
	
    //new Chart(document.getElementById("chart5"),{"type":"line","data":{"labels":["1/1/20","2/1/20","1/1/20","3/1/20","4/1/20","5/1/20","6/1/20"],"datasets":[{"label":"Body Temprature","data":[102,101,91,95,99,93,103],"fill":false,"borderColor":"#28a745","lineTension":0.1}]},"options":{}});
		
    new Chart(document.getElementById("chart6"),{"type":"line","data":{"labels":["1/1/20","2/1/20","1/1/20","3/1/20","4/1/20","5/1/20","6/1/20"],"datasets":[{"label":"Respiratory Rate","data":[51,49,54,43,48,47,42],"fill":false,"borderColor":"#28a745","lineTension":0.1}]},"options":{}});
    
    new Chart(document.getElementById("chart3"),{"type":"radar","data":{"labels":["Eating","Drinking","Sleeping","Designing","Coding","Cycling","Running"],"datasets":[{"label":"My First Dataset","data":[65,59,90,81,56,55,40],"fill":true,"backgroundColor":"rgba(236, 94, 105, 0.2)","borderColor":"rgb(236, 94, 105)","pointBackgroundColor":"rgb(236, 94, 105)","pointBorderColor":"#fff","pointHoverBackgroundColor":"#fff","pointHoverBorderColor":"rgb(236, 94, 105)"},{"label":"My Second Dataset","data":[28,48,40,19,96,27,100],"fill":true,"backgroundColor":"rgba(0, 112, 224, 0.2)","borderColor":"rgb(0, 112, 224)","pointBackgroundColor":"rgb(0, 112, 224)","pointBorderColor":"#fff","pointHoverBackgroundColor":"#fff","pointHoverBorderColor":"rgb(0, 112, 224)"}]},"options":{"elements":{"line":{"tension":0,"borderWidth":3}}}});
    
    new Chart(document.getElementById("chart4"),{"type":"doughnut","data":{"labels":["Red","Blue","Yellow"],"datasets":[{"label":"My First Dataset","data":[300,50,100],"backgroundColor":["rgb(236, 94, 105)","rgb(0, 112, 224)","rgb(241, 194, 5)"]}]}});
	
});
    
    