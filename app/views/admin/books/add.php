<!-- Book form  -->
<?php

$title = '';
$image =  '';
$des = '';
$price = '';
$qty = '';
$pages = '';
$createdBy = '';
$cate = '';
$auth = '';
$format = '';
$publisher = '';
$action = "/admin/books/add";
if (isset($book)) {
    $action = "/admin/books/update";
    $id = $book->id;
    $title = $book->title;
    $image =  $book->image;
    $des = $book->description;
    $price = $book->price;
    $qty = $book->quantity;
    $pages = $book->pages_number;
    $format = $book->format;
    $createdBy = $book->created_by;
    $cate = $book->category_id;
    $auth = $book->author_id;
    $publisher = $book->publisher_id;
}
?>
<div class="card mb-4">
    <h5 class="card-header">Add new book</h5>


    <form class="card-body" method="POST" action=<?php echo $action ?> enctype="multipart/form-data">

        <?php
        if (isset($book)) {
        ?>
        <input type="hidden" value='<?php echo $id ?>' name="id" />
        <input type="hidden" value='<?php echo $image ?>' name="image" />
        <?php } ?>
        <div class="input-group">
            <input type="file" class="form-control" name='bookImage' value='<?php echo $image ?>' id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <div class="row g-3">
            <div class="col-md-12">
                <label class="form-label" for="multicol-username">Title</label>
                <input type="text" id="multicol-username" value='<?php echo $title ?>' name='title' class="form-control"
                    placeholder="Tech" required />
            </div>
            <div class="col-md-12">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name='des' value='<?php echo $des ?>' id="exampleFormControlTextarea1"
                    rows="3"></textarea>
            </div>
            <div class="row g-3 ">
                <div class="mb-3 col-md-6">
                    <label for="defaultSelect" class="form-label">Category</label>
                    <select id="defaultSelect" value='<?php echo $cate ?>' class="form-select" name='category'>
                        <?php foreach ($data['categories'] as $category) {
                            echo "<option value='$category->id'>" . $category->name . "</option>";
                        } ?> </select>
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
                    <input type="text" id="multicol-username" name='price' value='<?php echo $price ?>'
                        class="form-control" placeholder="Tech" />
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Quentity</label>
                    <input type="number" id="multicol-username" value=<?php echo $qty ?> name=' qty'
                        class="form-control" placeholder="Tech" />
                </div>
            </div>
            <div class="row g-3 ">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Format</label>
                    <input type="text" id="multicol-username" name='format' value='<?php echo $format ?>'
                        class="form-control" placeholder="Tech" />
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">page number</label>
                    <input type="number" id="multicol-username" name='pageNumber' value=<?php echo $pages ?>
                        class="form-control" placeholder="Tech" />
                </div>
            </div>
            <div class="row g-3 ">
                <div class="mb-3 col-md-6">
                    <label for="defaultSelect" class="form-label">Author</label>
                    <select id="defaultSelect" class="form-select" name='author' value='<?php echo $auth ?>'>
                        <?php foreach ($data['authors'] as $author) {
                            echo "<option value='$author->id'>" . $author->name . "</option>";
                        } ?>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="defaultSelect" class="form-label">Publishor</label>
                    <select id="defaultSelect" class="form-select" name="publisher" value='<?php echo $publisher ?>'>
                        <?php foreach ($data['publishers'] as $publisher) {
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