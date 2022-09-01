<?php include('includes/header.php') ?>

<style>
    .image-login img {
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

        width: 157px;
        height: 41px;
        border-radius: 8px;
        background: #8DBF47;
        border: 0;
        margin-top: 20px;
        color: white;
    }

    .a-calc {
        width: 167px;
        background: #8DBF47;
        padding: 7px;
        border-radius: 10px;
        color: #fff;
    }

    .auth-calc {
        color: #000;
        margin: 4px;
        margin-bottom: 20px;
    }


    @media(max-width:700px) {
        .login-div {
            order: 2;
        }

        .image-login {
            order: 1;
        }

        .image-login img {
            width: 300px;
            height: 300px;
            margin-right: 10px;
        }

        .input-data {
            width: 361px;
        }

    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-12 login-div">

            <h1 class="text-center mt-5">تسجيل الدخول</h1>
            <form class="mt-5">
                <div class="mb-3">
                    <input type="text" class="form-control input-data" placeholder="اسم المستخدم">
                </div>
                <div class="mb-3 mt-5">
                    <input type="password" class="form-control input-data" placeholder="كلمة السر">
                </div>
                <div class="mb-3 mt-3 pt-4 checkbox">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">تذكرني</label>
                </div>
                <button type="submit" class="btn-calc">دخول</button>

                <a href="register.html" class="a-calc">تسجيل مستخدم جديد</a>
            </form>


            <div class="mt-5 text-center">
                <div class="d-flex justify-content-center">
                    <a href="" class="auth-calc">استعادة كلمة السر</a>|
                    <a href="" class="auth-calc">حذف الحساب</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 image-login">
            <img src="image/login.png">
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>