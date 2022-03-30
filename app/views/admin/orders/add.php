<!-- Book form  -->
<div class="card mb-4">
    <h5 class="card-header">Add new Orders</h5>


    <form class="card-body" method="POST" action="/admin/books/add" enctype="multipart/form-data">
        <div class="input-group">
            <input type="file" class="form-control" name='bookImage' id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <div class="row g-3">
            <div class="col-md-12">
                <label class="form-label" for="multicol-username">Title</label>
                <input type="text" id="multicol-username" name='title' class="form-control" placeholder="Tech" />
            </div>
            <div class="col-md-12">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name='des' id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="row g-3 ">
                <div class="mb-3 col-md-6">
                    <label for="defaultSelect" class="form-label">Category</label>
                    <select id="defaultSelect" class="form-select" name=' category'>
                        <?php foreach ($categories as $category) {
                            echo "<option value='$category->id'>" . $category->name . "</option>";
                        } ?>

                    </select>
                </div>
                <div class="col-md-6">
                    <label class="switch mt-4">
                        <input type="checkbox" class="switch-input is-valid" name='isActive' checked />
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                        <span class="switch-label">Valid</span>
                    </label>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Price</label>
                    <input type="text" id="multicol-username" name='price' class="form-control" placeholder="Tech" />
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Quentity</label>
                    <input type="number" id="multicol-username" name='qty' class="form-control" placeholder="Tech" />
                </div>
            </div>
            <div class="row g-3 ">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Format</label>
                    <input type="text" id="multicol-username" name='format' class="form-control" placeholder="Tech" />
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">page number</label>
                    <input type="number" id="multicol-username" name='pageNumber' class="form-control"
                        placeholder="Tech" />
                </div>
            </div>
            <div class="row g-3 ">
                <div class="mb-3 col-md-6">
                    <label for="defaultSelect" class="form-label">Author</label>
                    <select id="defaultSelect" class="form-select" name='author'>
                        <?php foreach ($authors as $author) {
                            echo "<option value='$author->id'>" . $author->name . "</option>";
                        } ?>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="defaultSelect" class="form-label">Publishor</label>
                    <select id="defaultSelect" class="form-select" name="publisher">
                        <?php foreach ($publishers as $publisher) {
                            echo "<option value='$publisher->id'>" . $publisher->name . "</option>";
                        } ?>
                    </select>
                </div>
            </div>

        </div>

        <div class="pt-4">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary">Cancel</button>
        </div>
    </form>
</div>