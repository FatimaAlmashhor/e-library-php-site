<!-- Multi Column with Form Separator -->
<div class="card mb-4">
    <h5 class="card-header">Add new cities</h5>
    <form class="card-body">
        <div class="row g-3">
            <div class="col-md-9">
                <label class="form-label" for="multicol-username">Name</label>
                <input type="text" id="multicol-username" class="form-control" placeholder="Tech" />
            </div>
            <div class="col-md-3">
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