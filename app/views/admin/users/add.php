<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Add User</h5> <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form class="" action="/admin/users/add" method="post">
                    <div class="row">
                        <div class="mb-3 col-md-5">
                            <label class="form-label" for="basic-default-fullname">First Name</label>
                            <input type="text" name='fname' class="form-control" id="basic-default-fullname"
                                placeholder="John Doe" required>
                        </div>
                        <div class="mb-3 col-md-5">
                            <label class="form-label" for="basic-default-fullname">Last Name</label>
                            <input type="text" name='lname' class="form-control" id="basic-default-fullname"
                                placeholder="John Doe" required>
                        </div>
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

                    </div>

                    <!-- email section -->
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

                    <!--password section  -->
                    <div class="row">
                        <div class="form-password-toggle mb-3 col-md-6">
                            <label class="form-label" for="multicol-password">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="multicol-password" name='password' class="form-control"
                                    placeholder="············" aria-describedby="multicol-password2">
                                <span class="input-group-text cursor-pointer" id="multicol-password2"><i
                                        class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <div class="form-password-toggle mb-3 col-md-6">
                            <label class="form-label" for="multicol-password">Confirm Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="multicol-password" name='cpassword' class="form-control"
                                    placeholder="············" aria-describedby="multicol-password2">
                                <span class="input-group-text cursor-pointer" id="multicol-password2"><i
                                        class="bx bx-hide"></i></span>
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>