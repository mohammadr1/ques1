'use strict'



var data = {
    labels: ['L', 'M', 'M', 'J', 'V'],
    series: [
      [8, 3, 5, 2, 0]
    ]
  };
  
  var options = {
      showPoint: false,
      lineSmooth: false,
      showArea: true,
      fullWidth: true,
      axisX: {
      showGrid: false,
    },
      axisY: {
      showGrid: false,
          offset: 12
    }
  };
  new Chartist.Line('.ct-inscrits', data, options);
  new Chartist.Pie('.ct-online', {
      labels: ['En ligne','Hors ligne'],
      series: [3, 2]
    });
  var options = {
      showPoint: false,
      lineSmooth: false,
      fullWidth: true,
      showArea: true,
      axisX: {
      showGrid: false,
    },
      axisY: {
      showGrid: false,
          offset: 20
    }
  };
  new Chartist.Line('.ct-posts', {
      labels: ['L', 'M', 'M', 'J', 'V', 'S', 'D'],
      series:[
          [300, 430, 530, 480, 560, 620, 740]
      ]
  }, options);