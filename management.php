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
  <li><a href="firmaAnaliz.php"><img src="https://img.icons8.com/nolan/20/company.png"/>Firma Analiz</a></li>
</ul>

  
</div>
  </div>



<div class="col-9" style="margin-top:2%;">
  
  <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                   

                 
                    <div class="main-body">
                        <div class="page-wrapper">
                           
                            <div class="row">
                                
                                <div class="col-md-6 col-xl-4">
                                    <div class="card daily-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Yönetici Sayısı</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>4</h3>
                                                </div>

                                                
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-xl-4">
                                    <div class="card Monthly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Firma Sayısı</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-down text-c-red f-30 m-r-10"></i>4</h3>
                                                </div>
                                                
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme2" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12 col-xl-4">
                                    <div class="card yearly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Yıllık Toplam Net Kar(2020)</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>2.300.000₺</h3>
                                                </div>
                                               
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top:3%;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6333063.713731844!2d30.898830281520414!3d39.19026183295098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd862a762cacd%3A0x628cbba1a59ce8fe!2zxLB6bWly!5e0!3m2!1str!2str!4v1611506890724!5m2!1str!2str" width="1400" height="700" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

</div>

 </div>



</body>
</html>


