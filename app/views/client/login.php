<div id='login' class="login_section flex-col hidden">
    <div class="login_warpper">
        <div class="form_header">
            <h3>تسجيل الدخول</h3>
        </div>
        <form class="form_content form" action="./login" method="post">
            <label class="input rounded-5">
                <input type="text" placeholder="الايميل او رقم الجوال">
            </label>
            <label class="input rounded-5">
                <div class="flex-row ">
                    <input type="text" placeholder="كلمه المرور">
                    <span class="forgot color-blue">نسيت</span>
                </div>
            </label>
            <button type="submit" class="btn w-full form-btn bg-red color-white rounded-5">تسجيل الدخول</button>
        </form>
        <div class="regiter_links flex-col">
            <button id='create_account' class="color-gray"> ليس لديك حساب ؟</button>
            <button class="btn  bg-white rounded-5 color-gray mt-1">أنشاء حساب جديد</button>
        </div>
    </div>
</div>