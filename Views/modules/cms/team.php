<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Team</h1>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <form class="form-css" action="">
                        <p class="mt-4 form-p">TEAM INFORMATION</p>
                        <div class="bottom-px px-lg-4 px-0 mt-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="odyssey">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Job Title</label>
                                    <input type="text" class="form-control" placeholder="odyssey">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label class="">Choose Image</label>
                                    <input type="file" name="files" required>
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" placeholder="instagram@">
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" placeholder="twitter@">
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" placeholder="facebook@">
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <label class="form-label">Linkedin</label>
                                    <input type="text" class="form-control" placeholder="linkedin@">
                                </div>
                                <div class="col-lg-12 mb-5">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control textarea-editor" rows="3"
                                        placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eligendi nesciunt amet earum perspiciatis, blanditiis consequatur exercitationem sunt, quis laborum libero explicabo tenetur at aperiam, recusandae incidunt voluptates sint laudantium."></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn button-main btn-active mt-3 float-right">ADD TEAM</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Table Team</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Job Title</th>
                                <th>Img</th>
                                <th>Instagram</th>
                                <th>Twitter</th>
                                <th>Facebook</th>
                                <th>Linkedin</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>bregor axhimusa</td>
                                <td>CEO/ FOUNDER</td>
                                <td>
                                    <img src="Views/assets/img/undraw_profile.svg" class="img-thumbnail" alt=""
                                        width="40px">
                                </td>
                                <td>Instagram</td>
                                <td>Twitter</td>
                                <td>Facebook</td>
                                <td>Linkedin</td>
                                <td>
                                    <div class="f-focus d-flex">
                                        <button class="btn f-focus" data-toggle="modal" data-target="#edit-clients">
                                            <img src="Views/assets/img/edit-blue.svg" width="20px" height="20px" alt="">
                                        </button>
                                        <button class="btn f-focus">
                                            <img src="Views/assets/img/x.svg" width="23px" height="23px" alt="">
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Clients Modal-->
<div class="modal fade" id="edit-clients" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">EDIT TEAM</h6>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-css" action="">
                    <p class="mt-4 form-p">TEAM INFORMATION</p>
                    <div class="bottom-px px-lg-4 px-0 mt-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="odyssey">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Job Title</label>
                                <input type="text" class="form-control" placeholder="odyssey">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="">Choose Image</label>
                                <input type="file" name="files" required>
                            </div>
                            <div class="col-lg-3">
                                <label class="form-label">Instagram</label>
                                <input type="text" class="form-control" placeholder="instagram@">
                            </div>
                            <div class="col-lg-3">
                                <label class="form-label">Twitter</label>
                                <input type="text" class="form-control" placeholder="twitter@">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Facebook</label>
                                <input type="text" class="form-control" placeholder="facebook@">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Linkedin</label>
                                <input type="text" class="form-control" placeholder="linkedin@">
                            </div>
                            <div class="col-lg-12 mb-5">
                                <label class="form-label">Description</label>
                                <textarea class="form-control textarea-editor" rows="3"
                                    placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi eligendi nesciunt amet earum perspiciatis, blanditiis consequatur exercitationem sunt, quis laborum libero explicabo tenetur at aperiam, recusandae incidunt voluptates sint laudantium."></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn button-main btn-close" type="button" data-dismiss="modal">CANCEL</button>
                <a class="btn button-main btn-active" href="login">EDIT TEAM</a>
            </div>
        </div>
    </div>
</div>