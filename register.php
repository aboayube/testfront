<?php include('includes/header.php') ?>
<style>
    .form-step {
        display: none;
        transform-origin: top;
        animation: animate .5s;
        transition: animate .3s;
    }

    .from-step-active {
        display: block;
    }

    @keyframes animate {
        from {
            transform: scale(1, 0);
            opacity: 0;
        }

        to {
            transform: scale(1, 1);
            opacity: 1;
        }
    }

    .input-calc-full {
        width: 406px;
        background: #E6F1D8;
        border-radius: 16px;
        border: none;
        height: 41px;
        padding-right: 14px;
        outline: none;

    }

    .input-calc {

        width: 206px;
        background: #E6F1D8;
        border-radius: 16px;
        border: none;
        height: 41px;
        padding-right: 14px;
        outline: none;
    }

    .police {
        justify-content: space-around;
        margin-top: 5px;

    }

    .police input {
        width: 30px;
        height: 60px
    }

    .police span {
        margin-top: 17px;
        font-size: 20px;
    }

    .btn-calc {

        width: 277px;
        height: 41px;
        border-radius: 8px;
        background: #8DBF47;
        border: 0;
        color: white;
    }

    .btn-calc:hover,
    .btn-calc:focus {
        border: 2px solid #8DBF47 !important;
        color: #8DBF47;

    }

    @media(max-width:700px) {
        .input-calc-full {
            width: 305px;
        }

        .content-register {
            order: 2;
        }

        .image-register {
            order: 1;
        }

        .input-calc {
            width: 295px;
        }
    }
</style>

<div class="container login text-center">
    <div class="row">
        <div class="col-md-6 mt-5 pt-5 content-register">
            <h1 class="text-center "> تسجيل حساب جديد</h1>
            <form action="includes/header.php" method="POST">
                <div class="row mt-5">
                    <div class="form-step from-step-active">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">الاسم</label>
                            <div class="col-sm-10">
                                <input type="text" class="input-calc-full" id="staticEmail" value="email@example.com">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">ايميل</label>
                            <div class="col-sm-10">
                                <input type="text" class="input-calc-full" id="staticEmail" value="email@example.com">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">كلمة السر</label>
                            <div class="col-sm-10">
                                <input type="text" class="input-calc-full" id="staticEmail" value="email@example.com">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">رقم الجوال</label>
                            <div class="col-sm-10">
                                <input type="text" class="input-calc-full" id="staticEmail" value="email@example.com">
                            </div>
                        </div>

                    </div>
                    <div class="form-step">

                        <div class="row">
                            <div class="col-md-4  col-12 mt-2 ">
                                <input type="text" id="" class="input-calc" placeholder="ادخل وزنك">

                            </div>
                            <div class="col-md-4 mt-2 ">
                                <input type="text" id="" class="input-calc" placeholder="ادخل عمر">

                            </div>

                            <div class="col-md-4 mt-2 ">
                                <input type="text" id="" class="input-calc" placeholder="ادخل طول">

                            </div>
                            <div class="col-md-4 mt-4">
                                <select class="input-calc">
                                    <option value="">الجنس</option>
                                    <option value="">1</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                </select>
                            </div>
                            <div class="col-md-4 mt-4">
                                <select class="input-calc">
                                    <option value="">نشاط</option>
                                    <option value="">1</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-4 police d-flex ">
                                <input type="checkbox" name="check">
                                <span> أوافق على جميع شروط<a href="">Fit Free</a></span>
                            </div>

                            <div class="col-md-12">
                                <input type="submit" value="submit" class="btn-calc">
                            </div>
            </form>

        </div>
    </div>

</div>
</div>
<div class="col-md-6 image-register">
    <img src="image/register.png" width="100%">

</div>
</div>
<div class="mt-5 d-flex gap-2 m-4 p-5">
    <button class="btn btn-calc  btn-prev">Prev</button>
    <button class="btn btn-calc btn-next">next</button>
</div>
</div>



<?php include('includes/footer.php') ?>

<script src="js/regiser.js"></script>