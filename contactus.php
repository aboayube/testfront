<?php include('includes/header.php') ?>

<style>
    .image-contact img {
        width: 700px;
        height: 500px
    }

    .input-data {
        width: 539px;
        height: 54px;
        border: 0;
        border: 2px solid #8DBF47;
        box-shadow: -2px -4px 8px #eee;
        border-radius: 21px;
    }

    .btn-calc {

        width: 317px;
        height: 41px;
        border-radius: 8px;
        background: #8DBF47;
        border: 0;
        margin-top: 20px;
        color: white;
    }

    .textarea-data {
        width: 546px;
        height: 106px;
        border-radius: 12px;
        border: 2px solid #8DBF47;
        box-shadow: -2px -4px 8px #eee;
    }


    @media(max-width:700px) {
        .image-contact {
            order: 1;
        }

        .image-contact img {

            width: 371px;
            height: 388px;
        }

        .form-contact {
            order: 2;
        }

        .input-data,
        .textarea-data {
            width: 339px;
        }

    }
</style>

<div class="container p-5">
    <div class="row">
        <div class="col-md-6 col-12 form-contact">
            <h1 class="text-center mt-5"> طلب تواصل مع ادارة</h1>
            <p class="text-center">لطلب التواصل مع ادارة يرجي ادخال بيناتاتك وقريبا سوف يتم التواصل معطك</p>
            <form class="mt-5">
                <div class="mb-3">
                    <input type="text" class="form-control input-data" placeholder="اسم  ">
                </div>
                <div class="mb-3 mt-5">
                    <input type="text" class="form-control input-data" placeholder=" ايميل">
                </div>
                <div class="mb-3 mt-5">
                    <input type="text" class="form-control input-data" placeholder=" رقم الجوال">
                </div>
                <div class="mb-3 mt-5">
                    <textarea class="form-control textarea-data" row="10" cols="49" placeholder=" رسالة "></textarea>
                </div>

                <button type="submit" class="btn-calc">ارسال</button>
            </form>

        </div>
        <div class="col-md-6  col-12  image-contact">
            <img src="image/Group 16112.png">
        </div>
    </div>
</div>
</div>
<?php include('includes/footer.php') ?>