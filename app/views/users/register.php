<div id="register" class="login_section flex-col hidden">
    <div class="login_warpper">
        <div class="form_header">
            <h3> أنشاء حساب</h3>
        </div>
        <form class="form_content form" action="./register" method="POST">
            <div class="flex-row justify_content_between">
                <div class="w-full  ml-1 flex-1">
                    <label class="input rounded-5 inline">
                        <input type="phone" placeholder="  رقم الجوال">
                    </label>
                </div>
                <div class="">
                    <label class="input rounded-5">
                        <input type="number" placeholder="  رمز البلد ">
                    </label>
                </div>
            </div>
            <button class="btn w-full form-btn bg-gray rounded-5 color-gray"> أرسال رمز التحقق</button>
            <label class="input rounded-5">
                <input type="text" name='fname' placeholder=" اسم الاول" required>
            </label>
            <label class="input rounded-5">
                <input type="text" name='lname' placeholder=" اسم العائله">
            </label>
            <label class="input rounded-5">
                <input type="email" name='email' placeholder="  البريد الاكتروني" required>
            </label>
            <label class="input rounded-5">
                <input type="password" name='password' placeholder=" كلمه المرور " required>
            </label>
            <label class="input rounded-5">
                <input type="password" name='cpassword' placeholder=" تأكيد المرور" required>
            </label>
            <label class="checkbox rounded-5 ">
                <input type="checkbox">
                <span class="color-gray">أوافق على <a href="#" class="color-blue">الشروط والاوحكام</a>
                </span>
            </label>
            <label class="checkbox rounded-5 ">
                <input type="checkbox">
                <span class="color-gray"> لانضمام للنشره البريديه</span>
            </label>
            <button type="submit" class="btn w-full form-btn bg-gray color-gray rounded-5">انشاء حساب </button>
        </form>
        <div class="regiter_links flex-col">
            <p class="color-gray"> ليس لديك حساب ؟ <a id='login_in_existing_account' class="color-blue" href="#">تسجيل
                    الدخول</a></p>
        </div>
    </div>
</div>