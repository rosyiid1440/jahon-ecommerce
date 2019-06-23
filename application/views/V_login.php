<div class="row">
    <div class="col-4"></div>
    <div class="col-4 mt-5">
        <div class="card">
            <div class="card-body">
                <form method="post" action="<?=base_url();?>Login/cekLogin">
                    <h4 class="text-center mb-4">Login</h4>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address / Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>