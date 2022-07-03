<main class="container mt-5">
    <form action="" method="post" id="add-contact-form" enctype="multipart/form-data">
        <input type="hidden" name="new" value="1" />

        <div class="row">
            <div class="col-md-12">
                <div class="form-group mt-3">
                    <label for="first-name">Avatar</label>
                    <input type="file" class="form-control" name="avatar" id="avatar">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group mt-3">
                    <label for="first-name">Name</label>
                    <input type="text" class="form-control" placeholder="Mohsen" name="name" id="first-name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mt-3">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" placeholder="example@gmail.com" name="email" id="email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mt-3">
                    <label for="phone-number">Phone Number</label>
                    <input type="tel" class="form-control" placeholder="+989123456789" name="phone" id="phone-number">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success mt-3 mb-5">Add to list</button>
        <a href="../../index.php" class="btn btn-danger mt-3 mb-5">Cancel</a>
</form>