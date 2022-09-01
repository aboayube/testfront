<?php include('includes/header.php') ?>
<style>
    .post h1 {

        color: #8DBF47;
    }

    .post img {
        width: 100%;
        border-radius: 13px;
        border: 2px solid #e9f3dc;

    }

    .post .author-data {
        justify-content: space-between;
        margin-top: 11px;
    }

    .comment:not(:last-child) {
        border-bottom: 2px solid #8dbf47;
        width: 700px;
    }

    .comment img {

        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 1px solid #8dbf47;
    }

    .comment p {

        margin-right: 16px;
        padding-top: 30px;
    }


    textarea {
        width: 546px;
        height: 106px;
        border-radius: 12px !important;
        border: 2px solid #8DBF47 !important;
        box-shadow: -2px -4px 8px #eee;
    }

    .btn-calc {

        width: 242px;
        height: 41px;
        border-radius: 8px;
        background: #8DBF47;
        border: 0;
        color: white;
        margin-right: 220px;
    }

    .posts-sidebar .artical img {
        width: 148px !important;
        height: 78px;
        border: 2px solid #8DBF47 !important;
    }

    .content-sidebar {
        border-right: 2px solid gray;
    }

    .search {
        margin-top: 48px;
        border-radius: 10px;
        margin-right: 40px;
        border: 2px solid red;
        width: 340px;
    }

    .search .header {
        background: red;
        margin-top: -2px;
        color: white;
    }

    .search form {

        position: relative;
    }

    .search input[type="text"] {

        width: 273px;
        margin-right: 11px;
        margin-top: 6px;
        height: 39px;
        border-radius: 15px;
        border: 2px solid #8dbf47;
    }

    .search button {
        border: 0;
        background: transparent;
        color: green;
        position: relative;
        left: 40px;
    }

    .category-search {

        margin-right: 25px;
        font-size: 20px;
    }

    .category-check {

        margin-right: 26px;
        font-size: 17px;
        padding: 3px;
    }


    .category-check input[type="checkbox"] {
        width: 40px;
        height: 20px;
    }

    .booking {

        width: 340px;
        border: 2px solid green;
        padding: 10px;
        margin-right: 40px;
        border-radius: 13px;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .btn-constlt-calc {
        width: 153px;
        height: 41px;
        border-radius: 13px;
        background: #8DBF47;
        border: 0;
        margin-top: 20px;
        color: white;
        margin-right: 57px;
    }

    .posts-sidebar {
        width: 340px;
        border: 4px solid darkseagreen;
        padding: 12px;
        margin-right: 42px;
        border-radius: 13px;
    }


    .posts-sidebar .artical {
        padding: 7px;
    }

    .posts-sidebar .artical:not(:last-child) {
        border-bottom: 2px solid #8dbf47;

    }

    .title-posts {
        margin-top: 5px;
        margin-bottom: 5px;
        display: block;
        color: #8DBF47;
    }

    .artical a {
        color: #000;
        margin-right: 13px;
    }

    @media(max-width:700px) {
        .sidebar {
            display: none;
        }

        .comment:not(:last-child) {
            width: 373px;
            padding: 9px;
        }

        .btn-calc {
            width: 174px;
            height: 41px;
            border-radius: 8px;
            background: #8DBF47;
            border: 0;
            color: white;
            margin-right: 50px;
        }

        textarea {
            width: 346px !important;
            height: 106px;
            border-radius: 12px !important;
            border: 2px solid #8DBF47 !important;
            box-shadow: -2px -4px 8px #eee;
            margin-right: -22px;
        }
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-9 col-12 post">
            <h1 class="text-center">this is first artical</h1>
            <img src="image/posts.png">
            <div class="d-flex author-data">
                <div class="">
                    <i class="fa fa-clock"></i>
                    <span>1/9/2022</span>
                </div>
                <div class="">
                    <i class="fa fa-user"></i>
                    <span>wajeeh</span>
                </div>
            </div>
            <!-- content -->
            <div class="mt-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, asperiores nulla quam in magnam officia rerum dolore, esse reiciendis quaerat reprehenderit sapiente enim nisi eos maiores sed, magni consectetur? Pariatur.</p>
            </div>
            <!-- comments -->
            <div class="comments">
                <h4 class="text-center pt-5">تعليقات المستخدمين</h4>
                <div class="d-flex pt-3 comment">
                    <img src="image/docotor.png">
                    <p>مقال جميل جدا يتستحق اكثر من رائع استمر</p>
                </div>
                <div class="d-flex pt-3 comment">
                    <img src="image/docotor.png">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, asperiores nulla quam in</p>
                </div>
                <div class="d-flex pt-3 comment">
                    <img src="image/docotor.png">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, asperiores nulla quam in</p>
                </div>

            </div>
            <!-- add comment -->
            <div class="p-5">
                <h4 class="text-center">اضف تعليق</h4>
                <form class="mt-2">

                    <div class="mb-3 mt-4 ">
                        <textarea type="password" class="form-control input-data" placeholder="اضف تعليق"></textarea>
                    </div>
                    <button type="submit" class="btn-calc">اضف تعليق</button>

                </form>
            </div>
            <!-- related posts -->
            <div class="row ">
                <h1 class="text-center">مقالات مرتبطة</h1>
                <div class="col-md-4 col-12 mt-2 post-data">
                    <img class="img-post" src="image/posts.png">
                    <div class="content-data ">
                        <a href="#" class="text-center title-posts  h4">اخصائي عماد خالد</a>

                        <p>تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال </p>

                    </div>
                </div>
                <div class="col-md-4 col-12 mt-2 post-data">
                    <img class="img-post" src="image/posts.png">
                    <div class="content-data ">
                        <a href="#" class="text-center title-posts  h4">اخصائي عماد خالد</a>

                        <p>تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال </p>

                    </div>
                </div>
                <div class="col-md-4 col-12 mt-2 post-data">
                    <img class="img-post" src="image/posts.png">
                    <div class="content-data ">
                        <a href="#" class="text-center title-posts  h4">اخصائي عماد خالد</a>

                        <p>تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال تغذية اطفال </p>

                    </div>
                </div>
            </div>


        </div>
        <div class="col-md-3 sidebar">
            <div class=" content-sidebar">
                <div class="search">
                    <p class="text-center h5 header">بحث</p>
                    <form action="">
                        <input type="text" value="بحث" />
                        <button class="btn btn-primary"><i class="fa fa-magnifying-glass"></i></button>
                    </form>
                    <p class="mt-3 category-search">اقسامنا</p>
                    <div class="category-check">
                        <input type="checkbox" class=""><span>cat1</span>
                    </div>
                    <div class="category-check">
                        <input type="checkbox" class=""><span>cat2</span>
                    </div>
                    <div class="category-check">
                        <input type="checkbox" class=""><span>cat3</span>
                    </div>
                    <div class="category-check">
                        <input type="checkbox" class=""><span>cat4</span>
                    </div>
                </div>
                <div class="booking">
                    <h5 class="text-center">احصل علي استشارة مجانية :</h5>
                    <button class="btn-constlt-calc">احصل علي استشارة</button>
                </div>
                <div class="posts-sidebar">
                    <h1 class="text-center">اشهر مقالاتنا</h1>
                    <div class="d-flex artical">
                        <img src="image/docotor.png">
                        <a href="#">Lorem ipsum dolor sit amet </a>
                    </div>
                    <div class="d-flex artical">
                        <img src="image/docotor.png">
                        <a href="#">Lorem ipsum dolor sit amet </a>
                    </div>
                    <div class="d-flex artical">
                        <img src="image/docotor.png">
                        <a href="#">Lorem ipsum dolor sit amet </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>