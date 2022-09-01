<?php include('includes/header.php') ?>

<style>
    .calc {

        background-image: url('image/watercalc.png');
        height: 654px;
        background-size: 122% 760px;
        background-repeat: no-repeat;
        margin-top: -163px;
        margin-left: -12px;
        text-align: left;
        padding-top: 256px;
        padding-left: 209px;
        color: white;

    }

    .predcamp {
        margin-right: 80px;
        padding-bottom: 22px;
        background: #8DBF47;
        width: 456px;
        border-radius: 20px;
        height: 60px;
        font-size: 35px;
        color: white;
        text-align: center;
    }

    .predcamp a {
        color: white;

    }

    .body-content {
        gap: 1px;
        margin-top: -42px;
    }

    form .row {
        border: 2px solid #8DBF47;
        width: 820px;
        margin-top: 22px;
        padding: 18px;
        margin-bottom: 70px;
        border-radius: 68px;
        box-shadow: 1px 0px 8px #cbe2ac;
    }

    form .row .input-calc {
        width: 216px;
        background: #E6F1D8;
        border-radius: 12px;
        border: none;
        height: 41px;
        padding-right: 14px;
        outline: none;
        margin-top: 15px;
    }

    form .row .btn-calc {
        width: 317px;
        height: 41px;
        border-radius: 8px;
        background: #8DBF47;
        border: 0;
        margin-top: 20px;
        color: white;
    }

    .modal-data p {
        font-size: 23px
    }

    .modal-data span {
        font-size: 60px;
        margin-right: 109px;
        color: #8DBF47;
        margin-top: 59px !important;
        padding-top: 53px !important;
        font-weight: 500 !important;
    }

    .modal-image {
        width: 251px;
    }

    .modal-content {
        width: 162%;
    }

    .desktop-modal-header {
        color: #8DBF47;
        font-size: 20px;
    }

    .moible-modal-header {
        display: none;
        color: #8DBF47;
        font-size: 20px;
    }


    @media(max-width:700px) {

        .desktop-modal-header,
        .modal-data p {
            display: none;

        }

        .calc {
            width: 100% !important;
            background-repeat: no-repeat;
            margin-top: -163px;
            text-align: left;
            padding-top: 240px;
            padding-left: 50px;
            color: #abee39;
        }

        .body-content {
            flex-direction: column;
            gap: 26px;
        }

        .predcamp {
            margin-right: 5px !important;
            width: 338px;
            font-size: 24px;
            padding-top: 10px;
        }

        form .row {
            width: 400px;
            margin: auto;
        }

        form .row .input-calc {
            width: 335px;
            margin-top: 6px;

        }

        form .row .btn-calc {
            width: 329px;
            margin-top: 21px;
        }

        .modal-content {
            width: 100%;
            margin-top: 151px;
        }

        .moible-modal-header {
            display: inline-block;
        }

        .modal-image {
            width: 180px;
        }

        .modal-data span {
            margin-right: 0 !important;
            font-size: 50px;
        }
    }
</style>
<div class="calc">
    <h1>احسب نسبة
        طعامك الصحي</h1>
</div>
<div class="d-flex body-content">
    <div class=" predcamp">
        <a href="index.php" class="predcamp-color"> الرئيسية</a> <span> / </span>
        <a href="calc.php" class="predcamp-color">حساب سعرات تم حرقها </a>
    </div>


    <div class="content">
        <div class="text-center">
            <img src="image/asad.png" alt="">
            <h1>حساب سعرات الحرارية تم حرقها </h1>
            <p>هذا هي صفحةحساب سعرات الحرارية تم حرقها </p>
            <div class="">
                <form>
                    <div class="row">
                        <div class="col-md-4 col-12 ">
                            <input type="text" id="" class="input-calc" placeholder="ادخل وزنك">

                        </div>
                        <div class="col-md-4 col-12 "><select class="input-calc">
                                <option value="">نشاط</option>
                                <option value="">1</option>
                                <option value="">3</option>
                                <option value="">4</option>
                            </select>


                        </div>
                        <div class="col-md-4 col-12 "><select class="input-calc">
                                <option value="">وقت المستغرق</option>
                                <option value="">1</option>
                                <option value="">3</option>
                                <option value="">4</option>
                            </select>


                        </div>
                        <div class="col-md-12 ol-12">


                            <button class="btn-calc" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">حساب</button>
                        </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: none;">
                <h5 class="desktop-modal-header"> حساب سعرات الحرارية تم حرقها
                </h5>


                <h6 class="moible-modal-header"> حساب سعرات الحرارية تم حرقها :</h6>
                <button style="
    border: 0;
    background: transparent;color:#8DBF47" type="button" data-bs-dismiss="modal"> <span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body ">
                <div class="container">
                    <div class="d-flex justify-content-around">
                        <img src="image/Group 16096.png" class="modal-image">
                        <div class="modal-data">
                            <p> حساب سعرات الحرارية تم حرقها </p>
                            <span>20 </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>