<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="project.css" type="text/css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <title></title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="yoneticiMenu">
  <a class="navbar-brand" href="#" style="font-size:20px; margin-left: 1%;">Management Performance System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav nav2">
      <li class="nav-item">
        <a href="management.php" class="nav-link" style="color:white;">Anasayfa</a>
      </li>
      <li class="nav-item">
        <a href="basvurular.php" class="nav-link" style="color:white;">Başvurular</a>
      </li>
      
      <li class="nav-item">
        <a href="index.php" class="nav-link"  style="color:white;">Çıkış Yap</a>
      </li>
      </ul>
  </div>
</nav>

<div class="row">

  <div class="col-2">
    <div id="dikey">
  <ul class="dikeyMenu">
  <li><a href="istanbul.php"><img src="https://img.icons8.com/officexs/16/000000/marker.png"/>İstanbul</a></li>

  <li><a href="ankara.php"><img src="https://img.icons8.com/officexs/16/000000/marker.png"/>Ankara</a></li>

  <li><a href="izmir.php"><img src="https://img.icons8.com/officexs/16/000000/marker.png"/>İzmir</a></li>

  <li><a href="antalya.php"><img src="https://img.icons8.com/officexs/16/000000/marker.png"/>Antalya</a></li>
  <hr style="color:white; margin-left:-33px;">
  <li><a href="yoneticiAnaliz.php"><img src="https://img.icons8.com/color/24/000000/commercial-development-management.png"/>Yönetici Analiz</a></li>
  <li><a href="firmaAnaliz.php"><img src="https://img.icons8.com/nolan/24/company.png"/>Firma Analiz</a></li>
</ul>

  </div>
  </div>
 

    
  
  <div class="col-5">
    <div>
      <canvas id="myChart1"></canvas>
    </div><br>
    <div>
     <canvas id="myChart3"></canvas>
    </div>
  </div>
  <div class="col-5">
    <div>
     <canvas id="myChart2"></canvas>
    </div><br>  
    <div class="row">
      <div>
     <canvas id="myChart4"></canvas>
    </div>
    </div>
  </div>
    
  


</div>


 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<script>
  $(document).ready(function(){
    var chartOptions = {
        scales: {
            yAxes: [{
                display: true,
                ticks: {
                beginAtZero: true,
                steps: 10,
                stepValue: 5,
                max: 100
                }
            }]
        },

    };

    
    var markalar=["Altan Altıparmakoğulları","Ali Uçaş","Gülsüm Korkmaz","Sercan Uysal"];
    var calisma=["80","60","45","85"];
    var chartdata={
    labels:markalar,
    datasets:[
    {
    label:'Karar Verme Becerileri',
    data:calisma,
    options:chartOptions,
    backgroundColor: ["#e8c3b9","#c45850","#ffdf00","#53adfc"]
    }]
    
    };
    var cnv=$("#myChart1");
    var barGraph=new Chart(cnv,{
    type:'bar',
    data:chartdata,
    });

    });  
  Chart.scaleService.updateScaleDefaults('linear', {
        ticks: {
            min: 0
        }
    });

</script>
<script>
  $(document).ready(function(){
    var chartOptions = {
        scales: {
            yAxes: [{
                display: true,
                ticks: {
                beginAtZero: true,
                steps: 10,
                stepValue: 5,
                max: 100
                }
            }]
        },

    };

    
    var markalar=["Altan Altıparmakoğulları","Ali Uçaş","Gülsüm Korkmaz","Sercan Uysal"];
    var calisma=["86","35","40","95"];
    var chartdata={
    labels:markalar,
    datasets:[
    {
    label:'Risk Yönetimi',
    data:calisma,
    options:chartOptions,
    backgroundColor: ["#e8c3b9","#c45850","#ffdf00","#53adfc"]
    }]
    
    };
    var cnv=$("#myChart2");
    var barGraph=new Chart(cnv,{
    type:'bar',
    data:chartdata,
    });

    });  
  Chart.scaleService.updateScaleDefaults('linear', {
        ticks: {
            min: 0
        }
    });
    
</script>          

<script>
  $(document).ready(function(){
    var chartOptions = {
        scales: {
            yAxes: [{
                display: true,
                ticks: {
                beginAtZero: true,
                steps: 10,
                stepValue: 5,
                max: 100
                }
            }]
        },

    };

    
    var markalar=["Altan Altıparmakoğulları","Ali Uçaş","Gülsüm Korkmaz","Sercan Uysal"];
    var calisma=["95","40","45","96"];
    var chartdata={
    labels:markalar,
    datasets:[
    {
    label:'İletişim Becerisi',
    data:calisma,
    options:chartOptions,
    backgroundColor: ["#e8c3b9","#c45850","#ffdf00","#53adfc"]
    }]
    
    };
    var cnv=$("#myChart3");
    var barGraph=new Chart(cnv,{
    type:'bar',
    data:chartdata,
    });

    });  
  Chart.scaleService.updateScaleDefaults('linear', {
        ticks: {
            min: 0
        }
    });
    
</script>          
<script>
  $(document).ready(function(){
    var chartOptions = {
        scales: {
            yAxes: [{
                display: true,
                ticks: {
                beginAtZero: true,
                steps: 10,
                stepValue: 5,
                max: 100
                }
            }]
        },

    };

    
    var markalar=["Altan Altıparmakoğulları","Ali Uçaş","Gülsüm Korkmaz","Sercan Uysal"];
    var calisma=["75","48","30","75"];
    var chartdata={
    labels:markalar,
    datasets:[
    {
    label:'Yazılım Becerisi',
    data:calisma,
    options:chartOptions,
    backgroundColor: ["#e8c3b9","#c45850","#ffdf00","#53adfc"]
    }]
    
    };
    var cnv=$("#myChart4");
    var barGraph=new Chart(cnv,{
    type:'bar',
    data:chartdata,
    });

    });  
  Chart.scaleService.updateScaleDefaults('linear', {
        ticks: {
            min: 0
        }
    });
    
</script>          
</body>
