<?php include('includes/header.php') ?>
<style>
    .image-docotor {
        width: 394px;
        height: 451px;
        border: 2px solid #8dbf47;
        border-radius: 15px;
    }

    .static-header-data {
        justify-content: space-between;
    }

    .static-data {
        justify-content: space-around;
    }

    .intro-docotor {
        margin-right: 8px;
    }

    .spical-doctor {
        margin-top: 13px;
    }

    h1 {
        color: #8dbf47
    }

    .booking-date {
        border-top: 2px solid #8dbf47b8;
        margin-top: 26px;
        padding-top: 16px;
        border-bottom: 2px solid #8dbf47b8;
        padding-bottom: 20px;
        margin-bottom: 20px;
    }

    .input-calc {
        margin-right: 7px;
        background: #E6F1D8;
        border-radius: 12px;
        border: none;
        width: 324px;
        height: 41px;
        padding-right: 14px;
        outline: none;
        margin-top: 15px;
    }

    textarea {
        margin-right: 7px;
        width: 325px;
        background: #E6F1D8;
        border-radius: 12px;
        border: none;
        height: 99px;
        padding-right: 14px;
        outline: none;
        margin-top: 15px;
    }

    .btn-calc {
        width: 143px;
        height: 41px;
        border-radius: 8px;
        background: #8DBF47;
        border: 0;
        color: white;
        margin-right: 50px;
        top: 102px;
    }

    .comment {
        width: 836px;
    }

    .comment {
        margin-top: 15px;
        margin-bottom: 15px;
        padding-bottom: 10px;
    }

    .comment:not(:last-child) {

        border-bottom: 2px solid #8dbf47;
    }

    .comment img {
        width: 140px;
        height: 150px;
        border: 2px solid #8dbf47;
        border-radius: 13px;
    }

    .comment-details {
        width: 636px;
    }

    .comment .data {
        padding: 10px;
        margin-right: 10px;
    }

    .comment .data .checked {
        color: orange
    }

    @media(max-width:700px) {

        .image-docotor {
            width: 387px;
            order: 1;
        }

        .docotor-data {
            order: 2
        }



        .static-header-data h1 {
            font-size: 20px;
            font-weight: bold;
        }

        .spical-doctor {
            margin-right: 4px;
            font-size: 16px
        }

        .static-data {
            margin-top: -8px;
            justify-content: space-between;
        }

        .input-calc,
        textarea {
            width: 354px;
            margin-right: 16px;
        }


        .btn-calc {
            width: 133px;
            height: 35px;
            margin-top: 20px;
            margin-right: 30%;
        }


        .comment {
            margin-top: 15px;
            margin-bottom: 15px;
            padding-bottom: 10px;
            gap: 20px;
            width: 100%;
        }

        .comment-details {
            width: 170px;
        }

        .comment:not(:last-child) {

            border-bottom: 2px solid #8dbf47;
        }

        .comment img {
            width: 140px;
            height: 150px;
            border: 2px solid #8dbf47;
            border-radius: 13px;
        }
    }
</style>


<div class="container pt-5">
    <div class="row">

        <div class="col-md-8 docotor-data">

            <div class="header-data">
                <div class="d-flex p-2 static-header-data">
                    <h1>وجيه ايوب شعيب شيخ العيد</h1>
                    <p class="spical-doctor">(اخصائي تغذية اطفال)</p>
                </div>
                <div class="d-flex p-2 static-data">
                    <p>عدد استشارات :<span>20</span></p>
                    <p>عدد مقالات :<span>20</span></p>
                </div>
                <p class="intro-docotor">اخصائي تغذية لدي خبرة مدتها اخصائي تغذية لدي خبرة مدتهااخصائي تغذية لدي خبرة مدتهااخصائي تغذية لدي خبرة مدتهااخصائي تغذية لدي خبرة مدتهااخصائي تغذية لدي خبرة مدتهااخصائي تغذية لدي خبرة مدتها</p>
            </div>
            <div class="booking-date ">
                <h5 class="text-center h3">حجز موعد</h5>
                <form action="" class="register-date">
                    <select name="" id="" class="input-calc">
                        <option value="">اختر يوم مناسب</option>
                        <option value="">سبت</option>
                        <option value="">احد</option>
                        <option value="">اثنين</option>
                        <option value="">ثلاثاء</option>
                    </select>
                    <select name="" id="" class="input-calc">
                        <option value="">اختار ساعة مناسبة</option>
                        <option value="">1-2</option>
                        <option value="">2-3</option>
                        <option value="">3-4</option>
                        <option value="">4-5</option>
                        <option value="">5-6</option>
                    </select>
                    <textarea name="" id="" placeholder="ملاحظات" rows="10" cols="40"></textarea>
                    <button class="btn-calc">حجز</button>
                </form>
            </div>

        </div>
        <div class="col-md-4">
            <img src="image/docotor2.jfif" class="image-docotor">
        </div>
    </div>
</div>
<!-- users comments -->
<div class="container">
    <div class="comments ">
        <h5 class="h3 title-comments">تعليقات المستخدمين</h5>
        <div class="d-flex comment">
            <img src="image/docotor2.jfif">
            <div class="data">
                <h5>احمد عصام</h5>
                <i class="fa-solid fa-star checked mt-2"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <p class="mt-2 comment-details ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, autem quibusdam libero id a cupiditate eaque mollitia, voluptatibus numquam dolor facilis rem recusandae maiores illum quo iste provident error esse.</p>
            </div>
        </div>
        <div class="d-flex comment">
            <img src="image/docotor2.jfif">
            <div class="data">
                <h5>احمد عصام</h5>
                <i class="fa-solid fa-star checked mt-2"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <p class="mt-2 comment-details ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, autem quibusdam libero id a cupiditate eaque mollitia, voluptatibus numquam dolor facilis rem recusandae maiores illum quo iste provident error esse.</p>
            </div>
        </div>
        <div class="d-flex comment">
            <img src="image/docotor2.jfif">
            <div class="data">
                <h5>احمد عصام</h5>
                <i class="fa-solid fa-star checked mt-2"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <p class="mt-2 comment-details ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, autem quibusdam libero id a cupiditate eaque mollitia, voluptatibus numquam dolor facilis rem recusandae maiores illum quo iste provident error esse.</p>
            </div>
        </div>
        <div class="d-flex comment">
            <img src="image/docotor2.jfif">
            <div class="data">
                <h5>احمد عصام</h5>
                <i class="fa-solid fa-star checked mt-2"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <p class="mt-2 comment-details ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, autem quibusdam libero id a cupiditate eaque mollitia, voluptatibus numquam dolor facilis rem recusandae maiores illum quo iste provident error esse.</p>
            </div>
        </div>
        <div class="d-flex comment">
            <img src="image/docotor2.jfif">
            <div class="data">
                <h5>احمد عصام</h5>
                <i class="fa-solid fa-star checked mt-2"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <p class="mt-2 comment-details ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, autem quibusdam libero id a cupiditate eaque mollitia, voluptatibus numquam dolor facilis rem recusandae maiores illum quo iste provident error esse.</p>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>