<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Add new Publisher</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form class="" action="/admin/publishers/add" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="mb-3 col-md-9">
                            <label class="form-label" for="basic-default-fullname">Full Name</label>
                            <input type="text" name='name' class="form-control" id="basic-default-fullname"
                                placeholder="John Doe" required>
                        </div>
                        <div class="col-md-3">
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
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-email">Email</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="basic-default-email" name='email' class="form-control"
                                placeholder="john.doe" aria-label="john.doe" required
                                aria-describedby="basic-default-email2">
                            <span class="input-group-text" id="basic-default-email2">@example.com</span>
                        </div>
                        <div class="form-text"> You can use letters, numbers &amp; periods </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="basic-default-phone">Phone No</label>
                            <input type="text" id="basic-default-phone" required name='phone'
                                class="form-control phone-mask" placeholder="658 799 8941">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="basic-default-phone">Fax</label>
                            <input type="text" id="basic-default-phone" required name='fax'
                                class="form-control phone-mask" placeholder="658 799 8941">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="basic-default-fullname">Country</label>
                            <input type="text" name='country' class="form-control" id="basic-default-fullname"
                                placeholder="John Doe" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="basic-default-fullname">Address</label>
                            <input type="text" name='address' class="form-control" id="basic-default-fullname"
                                placeholder="John Doe" required>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name='image' id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>