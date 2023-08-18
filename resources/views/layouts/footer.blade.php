<footer class="mt-5 row gx-0 justify-content-between" dir="rtl">
    <div class="col-md-1">
        <img src="{{ asset('img/logo.svg') }}" width="250px" height="100px" alt="">
    </div>
    <div class="col-auto">
        <ul>
            <li class="head lineFont-15 smbold mb-2">الرئيسية</li>
            <li>
                <a href="" class="d-block lineFont-15 mb-1"> المهام المتاحة </a>
            </li>
            <li>
                <a href="" class="d-block lineFont-15 mb-1"> إنشاء مهمة </a>
            </li>
            <li>
                <a href="" class="d-block lineFont-15 mb-1"> تواصل معنا </a>
            </li>
        </ul>
    </div>
    <div class="col-auto">
        <ul>
            <li class="head lineFont-15 smbold mb-2">من نحن</li>
            <li>
                <a href="" class="d-block lineFont-15 mb-1"> الاسئلة الشائعة </a>
            </li>
            <li>
                <a href="" class="d-block lineFont-15 mb-1"> شروط الاستخدام </a>
            </li>
            <li>
                <a href="" class="d-block lineFont-15 mb-1"> سياسة االخصوصية</a>
            </li>


        </ul>
    </div>
    <div class="col-auto" >
        <ul>
            <li>
                <a href="" class="d-block lineFont-15 mb-1 icons" >
                    <h4>Contact with US </h4>
                    <i class="p-1 fa fa-facebook-square" style="font-size:36px;" aria-hidden="true"></i>
                    <i class="p-1 fa fa-twitter" style="font-size:36px" aria-hidden="true"></i>
                    <i class="p-1 fa fa-youtube-play" style="font-size:36px;color:red" aria-hidden="true"></i>
                    <i class="p-1 fa fa-linkedin-square" style="font-size:36px" aria-hidden="true"></i>

                </a>
            </li>
            <li>
                <a href="" class="d-block lineFont-15 mb-1"> info@arabworkers.com </a>
            </li>
            <li>
                <a href="" class="d-block lineFont-15 mb-1"> info@arabworkers.com </a>
            </li>
            <li>
                <a href="" class="d-block lineFont-15 mb-1"> info@arabworkers.com </a>
            </li>
        </ul>
    </div>

    <div class="col-auto">
        <form class="input-group pe-2 d-flex align-items-center col row gx-0">
            {{-- <p class="subscribe mb-1 lineFont-15 mb-3 col-12">Subscribe Now</p> --}}
            <label for="TextEmail" style="color:grey; text-align: right;" >Subscribe to the newsletter</label>
            <input required type="email" id="TextEmail" class="form-control subscribe-input h-100 rounded py-2 col-10"
                placeholder="البريد الالكتروني" aria-label="" aria-describedby="basic-addon1" />
            <div class="input-group-prepend col-auto">
                <button class="btn btn-info border-0 text-white h-100 ashtrek text-center lineFont-19 regular"
                    id="EmailSend1" type="button">
                    إرسال
                </button>
            </div>
        </form>
    </div>
    <hr>
    <p class="text-center">عرب وركرز - منصة عربية رسمية مسجلة في وزارة الإستثمار المصرية - جميع الحقوق محفوظة. © 2020 -
        2023 </p>
</footer>
<style>
    a{
        text-decoration: none;
    }
    a:not(.icons){
        color: grey;
    }
    </style>
