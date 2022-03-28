<div class="progress_section  flex-col flex-center">
    <div class="progress_warpper container ">
        <h1>تاكد عمليه الشراء</h1>
        <div class="progress_steps ">
            <div class="step active" id='step-1'>
                <div class="step-content">1</div>
                <span class="step_info"> user</span>
            </div>
            <div class="step" id='step-2'>
                <div class="step-content">2</div>
                <span class="step_info">payment </span>
            </div>
            <div class="step" id='step-3'>
                <div class="step-content">3</div>
            </div>
            <div class="step" id='step-4'>
                <div class="step-content">4</div>
            </div>
        </div>
        <div class="progress_content">
            <div class="user_info " data-progress-content='0'>
                <form class="form_content form">
                    <div class="flex-row flex-center">
                        <label class="input rounded-5">
                            <input type="phone" placeholder="  رقم الجوال">
                        </label>
                        <label class="input rounded-5">
                            <input type="number" placeholder="  رمز البلد ">
                        </label>
                    </div>
                    <label class="input rounded-5">
                        <input type="text" placeholder=" الدوله">
                    </label>
                    <label class="input rounded-5">
                        <input type="text" placeholder="  المدينة">
                    </label>
                    <label class="input rounded-5">
                        <input type="text" placeholder="  الحي">
                    </label>
                    <label class="input rounded-5">
                        <input type="text" placeholder=" الموقع ">
                    </label>
                </form>
            </div>
            <div class="payment_info hidden" data-progress-content='1'>
                <form class="form_content form">
                    <div class="flex-row flex-center">
                        <label class="input rounded-5">
                            <input type="number" placeholder="  رقم البطاقه ">
                        </label>
                    </div>
                    <label class="input rounded-5">
                        <input type="text" placeholder=" الدوله">
                    </label>
                    <label class="input rounded-5">
                        <input type="text" placeholder="  المدينة">
                    </label>
                    <label class="input rounded-5">
                        <input type="text" placeholder="  الحي">
                    </label>
                    <label class="input rounded-5">
                        <input type="text" placeholder=" الموقع ">
                    </label>
                </form>
            </div>
            <div class="confirm_info box hidden" data-progress-content='2'>
                <div class="flex-row justify_content_between border-b-1 border-gray">
                    <h3>
                        اجمال طلبك :
                    </h3>
                    <h3 class="color-red font-bold">209 ر.ي</h3>
                </div>
                <div class="flex-row justify_content_between row">
                    <h4 class="color-gray">
                        الخصم :
                    </h4>
                    <h3 class="color-green font-bold">5%</h3>
                </div>
                <div class="flex-row justify_content_between row">
                    <h4 class="color-gray">
                        توصيل :
                    </h4>
                    <h3 class="color-green font-bold">free</h3>
                </div>
                <div class="flex-row justify_content_between ">
                    <h5 class="color-red">
                        رجاء تاكد من جميع المعلومات المدخله سابقا :
                    </h5>
                </div>
            </div>
            <div class="done_progress   hidden" data-progress-content='3'>
                <div class="flex-col flex-center">
                    <h1 class="color-red font-bold animation-circule">
                        تم .
                    </h1>
                    <h5>
                        اضغظ على زر التالي لانهاء العمليه
                    </h5>
                </div>
            </div>
        </div>
        <div class="progress_btns mt-2">
            <button id='next' class="btn ">التالي</button>
            <button id='back' class="btn ">السابق</button>
        </div>
    </div>
</div>
<div id="modal" class="flex-center hidden">
    <div class="modal_warpper">
        <div class="modal_header">
            <p class="close" id='close_modal'>
                <img src='../assets/svgs/close.svg' alt="close" />
            </p>
        </div>
        <div class="modal_content">

            <div id='image-gallery' class='hidden'>
                <div class="arraws hidden">
                    <img id='left' src="../assets/svgs/left-arrow.svg" alt="">
                    <img id='right' src="../assets/svgs/right-arrow.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./js/progress.js"></script>