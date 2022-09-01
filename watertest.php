<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit Free</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/test.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400&family=Libre+Baskerville:wght@400;700&family=Nova+Square&display=swap" rel="stylesheet">
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <style>
    @media (max-width: 600px) {
      .content-form .row {margin-right:-10px;width:100%;gap:20px;text-align:center;
    justify-content: center;}
    .content-form .input-calc{
      width: 210px;
    }.content-form .btn-calc{
      width: 210px;

    }
    }
  </style>
</head>
<body >
  <div class="water-calc">
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand animate__animated animate__pulse animate__infinite" href="#"><img src="image/logo.png" width="100px" height="100px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav  mb-2 mb-lg-0">
            <li class="nav-item ">
                <a class="nav-link " href="#">استشارات
                  تغذية اونلاين</a>
              </li>
                 <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">مطبخ
                Fit Free</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                اقسام
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                حاسبات القيم 
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">تواصل معنا
                   </a>
              </li>
            <li class="nav-item">
              <a class="nav-link ">اشتراك معنا</a>
            </li>
          </ul>
        </div>
        <form class="d-flex d-none d-lg-block " role="search">
            <button class="btn btn-custom-register" type="submit">مشترك جديد</button>
            <button class="btn btn-custom-login" type="submit">تسجيل الدخول</button>
          </form>
      </div>
    </nav>
    <h1 class="text-center p-5 mt-5 title-page">حاسبة  المياه</h1>
  </div>
<ul class="list-inline predcamp predcamp-normal-width">
  <li><a href="" class="predcamp-color"> الرئيسية</a></li> <span> / </span>
  <li><a href="" class="predcamp-color"> حاسبة مياة </a></li>
</ul>

<div class="content-form">
  <img src="image/asad.png">
  <h1>حساب معدل استهلاك المياه </h1>
  <span class="mb-4">لحساب قيمة معدل استهلاكك للمياه بشكل يومي الرجاء إدخال الوزن الخاص بك</span>
  <div class="">
    <form>
      <div class="row">
      <div class="col-auto ">       
         <input type="text" id="" class="input-calc" placeholder="ادخل وزنك">

      </div>
      <div class="col-auto">
     
    <button class="btn-calc" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">submit</button> 
      </div>
    </form>
  </div>
</div>

<div class="">p</div>
<div class="">p</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 162%;">
      <div class="modal-header" style="border-bottom: none;">
        <h5 style=" color: #8DBF47;font-size: 20px;">قيمة  السعرات التي تحتاجها
 </h5>
        <button type="button" style="
        border: 0;
        background: transparent;
        font-size: 31px;
        color: #8DBF47;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <div class="container">
          <div class="d-flex" style="">
     <img src="image/Group 16096.png" width="250px" >
          <div class="">
<p style="font-size:23px">حاسبة السعرات </p>
<span style="font-size:33px; color: #8DBF47;">20 لتر</span>
</div>
</div></div>
          
      </div>
    </div>
  </div>
</div>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/all.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script src="js/owl.carousel.min.js"></script>
      
      <script src="js/main.js"></script>
  </body>
  </html>