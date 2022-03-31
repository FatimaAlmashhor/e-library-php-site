<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4">
        <h5 class="card-header">Add new Payment</h5>
        <form class="card-body" method="POST" action="/admin/payments/add" enctype="multipart/form-data">
            <div class="input-group">
                <input type="file" class="form-control" name='image' id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            <div class="row g-3">
                <div class="col-md-9">
                    <label class="form-label" for="multicol-username">Name</label>
                    <input type="text" id="multicol-username" name='name' class="form-control" placeholder="Tech" />
                </div>
                <div class="col-md-3 mt-5">
                    <label class="switch">
                        <input type="checkbox" class="switch-input is-valid" checked />
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                        <span class="switch-label">Valid</span>
                    </label>
                </div>
            </div>

            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
        </form>
    </div>
</div>