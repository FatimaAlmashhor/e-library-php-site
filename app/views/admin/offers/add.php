<!-- Book form  -->
<div class="card mb-4 row flex">
    <h5 class="card-header col-md-10">Add new Offer</h5>
    <div class="col-md-2">
        <label class="switch mt-4">
            <input type="checkbox" class="switch-input is-valid" name='isActive' checked />
            <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
            </span>
            <span class="switch-label">Valid</span>
        </label>
    </div>

    <form class="card-body" method="POST" action="/admin/offers/add" enctype="multipart/form-data">
        <!--  -->
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label" for="multicol-username">Title</label>
                <input type="text" id="multicol-username" name='title' class="form-control" placeholder="Tech" />
            </div>
            <div class="col-md-6">
                <label class="form-label" for="multicol-username">Discount</label>
                <input type="text" id="multicol-username" name='discount' class="form-control" placeholder="Tech" />
            </div>

        </div>
        <div class="row g-3">

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="discountType" id="books" value="books"
                    onclick="showBooks();" />
                <label class="form-check-label" for="books">حسب الكتاب</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="discountType" id="cates" value="categories"
                    onclick="showCategories()" />
                <label class="form-check-label" for="cates">حسب القسم</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="discountType" id="discountType" value="all"
                    onclick="hideAll()" />
                <label class="form-check-label" for="discountType">الكل</label>
            </div>

        </div>
        <!-- drop downs -->
        <div class="row">
            <div class="col-md-12 mb-4 " style="display: none;" id='categoriesDropdown'>
                <label for="select2Success" class="form-label">Categories</label>
                <div class="select2-success">
                    <select id="select2Success" name='categories[]' class="select2 form-select" multiple>
                        <?php
                        if (isset($categories)) {
                            foreach ($categories as $category) {
                                echo "<option value='$category->id'  >" . $category->name . "</option>";
                            }
                        }
                        ?>

                    </select>
                </div>
            </div>
            <div class="col-md-12 mb-4 " style="display: none;" id='booksDropdown'>
                <label for="select2Info" class="form-label">Books</label>
                <div class="select2-info">
                    <select id="select2Info" name='books[]' value='booksSelected[]' class="select2 form-select"
                        multiple>
                        <?php
                        if (isset($books)) {
                            foreach ($books as $book) {
                                echo "<option value='$book->id'  >" . $book->title . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>

        </div>
        <!--  -->
        <div class="row g-3 ">
            <div class="col-md-6 col-12 mb-md-0 mb-4">
                <label for="bs-datepicker-autoclose" class="form-label">Start day</label>
                <input type="date" id="bs-datepicker-autoclose" name='startDay' placeholder="MM/DD/YYYY"
                    class="form-control">
            </div>
            <div class="col-md-6 col-12 mb-md-0 mb-4">
                <label for="bs-datepicker-autoclose" class="form-label">End day</label>
                <input type="date" id="bs-datepicker-autoclose" name="endDay" placeholder="MM/DD/YYYY"
                    class="form-control">
            </div>
        </div>




</div>

<div class="pt-4">
    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
    <button type="reset" class="btn btn-label-secondary">Cancel</button>
</div>
</form>
</div>

<script src="/adminAssests/vendor/libs/select2/select2.js"></script>
<script src="/adminAssests/vendor/libs/tagify/tagify.js"></script>
<script src="/adminAssests/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
<script src="/adminAssests/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="/adminAssests/vendor/libs/bloodhound/bloodhound.js"></script>
<!-- Page JS -->
<script src="/adminAssests/js/forms-selects.js"></script>
<script src="/adminAssests/js/forms-tagify.js"></script>
<script src="/adminAssests/js/forms-typeahead.js"></script>
<script>
const select = (element) => document.querySelector(element);

function showBooks() {
    console.log('books clicked');
    select('#booksDropdown').style.display = 'block';
    select('#categoriesDropdown').style.display = 'none';
}

function showCategories() {
    select('#booksDropdown').style.display = 'none';
    select('#categoriesDropdown').style.display = 'block';
}

function hidAll() {
    select('#booksDropdown').style.display = 'none';
    select('#categoriesDropdown').style.display = 'none';
}
</script>