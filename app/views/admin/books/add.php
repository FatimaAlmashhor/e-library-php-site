<!-- Multi Column with Form Separator -->
<div class="card mb-4">
    <h5 class="card-header">Add new book</h5>


    <form class="card-body">
        <div class="input-group">
            <input type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <div class="row g-3">
            <div class="col-md-12">
                <label class="form-label" for="multicol-username">Title</label>
                <input type="text" id="multicol-username" class="form-control" placeholder="Tech" />
            </div>
            <div class="col-md-12">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="row g-3 ">
                <div class="mb-3 col-md-6">
                    <label for="defaultSelect" class="form-label">Category</label>
                    <select id="defaultSelect" class="form-select">
                        <option>Default select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="switch mt-4">
                        <input type="checkbox" class="switch-input is-valid" checked />
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
                    <input type="text" id="multicol-username" class="form-control" placeholder="Tech" />
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Quentity</label>
                    <input type="number" id="multicol-username" class="form-control" placeholder="Tech" />
                </div>
            </div>
            <div class="row g-3 ">
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Format</label>
                    <input type="text" id="multicol-username" class="form-control" placeholder="Tech" />
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">page number</label>
                    <input type="number" id="multicol-username" class="form-control" placeholder="Tech" />
                </div>
            </div>
            <div class="row g-3 ">
                <div class="mb-3 col-md-6">
                    <label for="defaultSelect" class="form-label">Author</label>
                    <select id="defaultSelect" class="form-select">
                        <option>Default select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="defaultSelect" class="form-label">Publishor</label>
                    <select id="defaultSelect" class="form-select">
                        <option>Default select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
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