//[chartjs Javascript]



$(function () {

  'use strict';
	
//----chart1
    //Get the context of the Chart canvas element we want to select
    var dasChartjs = document.getElementById("chartjs1").getContext("2d");
    // Create Linear Gradient
    var blue_trans_gradient = dasChartjs.createLinearGradient(255, 35, 31, 255);
    blue_trans_gradient.addColorStop(0, 'rgba(255,35,31,.2)');
    blue_trans_gradient.addColorStop(1, 'rgba(255,255,255,0)');
    // Chart Options
    var DASStats = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(247, 147, 26,0.8)",
        legend: {
            display: false,
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 85
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 30,
            text: '52%'
        }
    };

    // Chart Data
    var DASMonthData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            label: "abc",
            data: [20, 18, 35, 60, 38, 40, 70],
            backgroundColor: blue_trans_gradient,
            borderColor: "#f18f65",
            borderWidth: 1.5,
            strokeColor : "#f18f65",
            pointRadius: 0,
        }]
    };

    var DASCardconfig = {
        type: 'line',

        // Chart Options
        options : DASStats,

        // Chart Data
        data : DASMonthData
    };

    // Create the chart
    var DASAreaChart = new Chart(dasChartjs, DASCardconfig);
	
	
	//----chart2
    //Get the context of the Chart canvas element we want to select
    var dasChartjs = document.getElementById("chartjs2").getContext("2d");
    // Create Linear Gradient
    var blue_trans_gradient = dasChartjs.createLinearGradient(241, 143, 101, 255);
    blue_trans_gradient.addColorStop(0, 'rgba(241, 143, 101,.2)');
    blue_trans_gradient.addColorStop(1, 'rgba(255,255,255,0)');
    // Chart Options
    var DASStats = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(131, 131, 131,0.8)",
        legend: {
            display: false,
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 85
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 30,
            text: '52%'
        }
    };

    // Chart Data
    var DASMonthData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            label: "abc",
            data: [40, 30, 60, 40, 45, 30, 60],
            backgroundColor: blue_trans_gradient,
            borderColor: "#F18F65",
            borderWidth: 1.5,
            strokeColor : "#F18F65",
            pointRadius: 0,
        }]
    };

    var DASCardconfig = {
        type: 'line',
        // Chart Options
        options : DASStats,
        // Chart Data
        data : DASMonthData
    };

    // Create the chart
    var DASAreaChart = new Chart(dasChartjs, DASCardconfig);

    //----chart3
    //Get the context of the Chart canvas element we want to select
    var dasChartjs = document.getElementById("chartjs3").getContext("2d");
    // Create Linear Gradient
    var blue_trans_gradient = dasChartjs.createLinearGradient(241, 143, 101, 255);
    blue_trans_gradient.addColorStop(0, 'rgba(241, 143, 101,.2)');
    blue_trans_gradient.addColorStop(1, 'rgba(255,255,255,0)');
    // Chart Options
    var DASStats = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(73, 152, 6,0.8)",
        legend: {
            display: false,
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 85
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 30,
            text: '52%'
        }
    };

    // Chart Data
    var DASMonthData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            label: "abc",
            data: [70, 20, 35, 60, 20, 40, 30],
            backgroundColor: blue_trans_gradient,
            borderColor: "#F18F65",
            borderWidth: 1.5,
            strokeColor : "#F18F65",
            pointRadius: 0,
        }]
    };

    var DASCardconfig = {
        type: 'line',

        // Chart Options
        options : DASStats,

        // Chart Data
        data : DASMonthData
    };

    // Create the chart
    var DASAreaChart = new Chart(dasChartjs, DASCardconfig);
	
	
	 //----chart4
    //Get the context of the Chart canvas element we want to select
    var dasChartjs = document.getElementById("chartjs4").getContext("2d");
    // Create Linear Gradient
    var blue_trans_gradient = dasChartjs.createLinearGradient(241, 143, 101, 255);
    blue_trans_gradient.addColorStop(0, 'rgba(241, 143, 101,.2)');
    blue_trans_gradient.addColorStop(1, 'rgba(255,255,255,0)');
    // Chart Options
    var DASStats = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(28, 117, 188,0.8)",
        legend: {
            display: false,
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 85
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 30,
            text: '52%'
        }
    };

    // Chart Data
    var DASMonthData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            label: "abc",
            data: [20, 50, 65, 30, 24, 60, 40],
            backgroundColor: blue_trans_gradient,
            borderColor: "#F18F65",
            borderWidth: 1.5,
            strokeColor : "#F18F65",
            pointRadius: 0,
        }]
    };

    var DASCardconfig = {
        type: 'line',

        // Chart Options
        options : DASStats,

        // Chart Data
        data : DASMonthData
    };

    // Create the chart
    var DASAreaChart = new Chart(dasChartjs, DASCardconfig);
	
	
//----chart5
    //Get the context of the Chart canvas element we want to select
    var dasChartjs = document.getElementById("chartjs5").getContext("2d");
    // Create Linear Gradient
    var blue_trans_gradient = dasChartjs.createLinearGradient(255, 35, 31, 255);
    blue_trans_gradient.addColorStop(0, 'rgba(255,35,31,.2)');
    blue_trans_gradient.addColorStop(1, 'rgba(255,255,255,0)');
    // Chart Options
    var DASStats = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(247, 147, 26,0.8)",
        legend: {
            display: false,
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 85
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 30,
            text: '52%'
        }
    };

    // Chart Data
    var DASMonthData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            label: "abc",
            data: [20, 18, 35, 60, 38, 40, 70],
            backgroundColor: blue_trans_gradient,
            borderColor: "#f18f65",
            borderWidth: 1.5,
            strokeColor : "#f18f65",
            pointRadius: 0,
        }]
    };

    var DASCardconfig = {
        type: 'line',

        // Chart Options
        options : DASStats,

        // Chart Data
        data : DASMonthData
    };

    // Create the chart
    var DASAreaChart = new Chart(dasChartjs, DASCardconfig);
	
	
	//----chart6
    //Get the context of the Chart canvas element we want to select
    var dasChartjs = document.getElementById("chartjs6").getContext("2d");
    // Create Linear Gradient
    var blue_trans_gradient = dasChartjs.createLinearGradient(241, 143, 101, 255);
    blue_trans_gradient.addColorStop(0, 'rgba(241, 143, 101,.2)');
    blue_trans_gradient.addColorStop(1, 'rgba(255,255,255,0)');
    // Chart Options
    var DASStats = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(131, 131, 131,0.8)",
        legend: {
            display: false,
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 85
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 30,
            text: '52%'
        }
    };

    // Chart Data
    var DASMonthData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            label: "abc",
            data: [40, 30, 60, 40, 45, 30, 60],
            backgroundColor: blue_trans_gradient,
            borderColor: "#F18F65",
            borderWidth: 1.5,
            strokeColor : "#F18F65",
            pointRadius: 0,
        }]
    };

    var DASCardconfig = {
        type: 'line',
        // Chart Options
        options : DASStats,
        // Chart Data
        data : DASMonthData
    };

    // Create the chart
    var DASAreaChart = new Chart(dasChartjs, DASCardconfig);

    //----chart7
    //Get the context of the Chart canvas element we want to select
    var dasChartjs = document.getElementById("chartjs7").getContext("2d");
    // Create Linear Gradient
    var blue_trans_gradient = dasChartjs.createLinearGradient(241, 143, 101, 255);
    blue_trans_gradient.addColorStop(0, 'rgba(241, 143, 101,.2)');
    blue_trans_gradient.addColorStop(1, 'rgba(255,255,255,0)');
    // Chart Options
    var DASStats = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(73, 152, 6,0.8)",
        legend: {
            display: false,
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 85
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 30,
            text: '52%'
        }
    };

    // Chart Data
    var DASMonthData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            label: "abc",
            data: [70, 20, 35, 60, 20, 40, 30],
            backgroundColor: blue_trans_gradient,
            borderColor: "#F18F65",
            borderWidth: 1.5,
            strokeColor : "#F18F65",
            pointRadius: 0,
        }]
    };

    var DASCardconfig = {
        type: 'line',

        // Chart Options
        options : DASStats,

        // Chart Data
        data : DASMonthData
    };

    // Create the chart
    var DASAreaChart = new Chart(dasChartjs, DASCardconfig);
	
	
	 //----chart8
    //Get the context of the Chart canvas element we want to select
    var dasChartjs = document.getElementById("chartjs8").getContext("2d");
    // Create Linear Gradient
    var blue_trans_gradient = dasChartjs.createLinearGradient(241, 143, 101, 255);
    blue_trans_gradient.addColorStop(0, 'rgba(241, 143, 101,.2)');
    blue_trans_gradient.addColorStop(1, 'rgba(255,255,255,0)');
    // Chart Options
    var DASStats = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(28, 117, 188,0.8)",
        legend: {
            display: false,
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 85
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 30,
            text: '52%'
        }
    };

    // Chart Data
    var DASMonthData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            label: "abc",
            data: [20, 50, 65, 30, 24, 60, 40],
            backgroundColor: blue_trans_gradient,
            borderColor: "#F18F65",
            borderWidth: 1.5,
            strokeColor : "#F18F65",
            pointRadius: 0,
        }]
    };

    var DASCardconfig = {
        type: 'line',

        // Chart Options
        options : DASStats,

        // Chart Data
        data : DASMonthData
    };

    // Create the chart
    var DASAreaChart = new Chart(dasChartjs, DASCardconfig);
	
}); // End of use strict
