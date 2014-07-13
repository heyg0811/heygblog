$(window).load(function(){
  var graph_data = [];
  var area_data = [];
  // Easy pie charts
  $('.chart').easyPieChart({animate: 1000});

  $.ajax({
    type: "POST",
    url: "/ajax/getgraph",
    dataType:"json",
    data: {"dataFilter": "w"},
    success: function(data, dataType){
      $("#hero-graph").children("").remove();
      graph_data = [];
      for(var i=0;i<data.length;i++){
        graph_data.push({"period":data[i].date, "visits":data[i].count});
      }
      Morris.Line({
        element: 'hero-graph',
        data: graph_data,
        xkey: 'period',
        xLabels: "week",
        ykeys: ['visits'],
        labels: ['Visits']
      });
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
      alert("eeee");
    }
  });


  $.ajax({
    type: "POST",
    url: "/ajax/getarea",
    dataType:"json",
    data: {"dataFilter": "w"},
    success: function(data, dataType){
      $("#hero-area").children("").remove();
      area_data = [];
      for(var i=0;i<data.length;i++){
        area_data.push({"period":data[i].date, "pc":data[i].pc_count, "ios":data[i].ios_count, "android":data[i].android_count});
      }
        // Morris Area Chart
        Morris.Area({
          element: 'hero-area',
          data: area_data,
          xkey: 'period',
          ykeys: ['pc', 'ios', 'android'],
          labels: ['PC', 'iOS', 'Android'],
          lineWidth: 2,
          hideHover: 'auto',
          lineColors: ["#81d5d9", "#a6e182", "#67bdf8"]
        });
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert("eeee");
      }
    });

  $("#gb > span").click(function(){
    $.ajax({
      type: "POST",
      url: "/ajax/getgraph",
      dataType:"json",
      data: {"dataFilter": $(this).attr("data-filter")},
      success: function(data, dataType){
        $("#hero-graph").children("").remove();
        graph_data = [];
        for(var i=0;i<data.length;i++){
          graph_data.push({"period":data[i].date, "visits":data[i].count});
        }
        Morris.Line({
          element: 'hero-graph',
          data: graph_data,
          xkey: 'period',
          xLabels: "week",
          ykeys: ['visits'],
          labels: ['Visits']
        });
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert("eeee");
      }
    });
  });
  $("#sb > span").click(function(){
    $.ajax({
      type: "POST",
      url: "/ajax/getarea",
      dataType:"json",
      data: {"dataFilter": $(this).attr("data-filter")},
      success: function(data, dataType){
        $("#hero-area").children("").remove();
        area_data = [];
        for(var i=0;i<data.length;i++){
          area_data.push({"period":data[i].date, "pc":data[i].pc_count, "ios":data[i].ios_count, "android":data[i].android_count});
        }
        // Morris Area Chart
        Morris.Area({
          element: 'hero-area',
          data: area_data,
          xkey: 'period',
          ykeys: ['pc', 'ios', 'android'],
          labels: ['PC', 'iOS', 'Android'],
          lineWidth: 2,
          hideHover: 'auto',
          lineColors: ["#81d5d9", "#a6e182", "#67bdf8"]
        });
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert("eeee");
      }
    });
  });

});
