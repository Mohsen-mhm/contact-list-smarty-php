<main class="container mt-5">
    <form action="" method="post" id="edit-contact-form" enctype="multipart/form-data">
        <input type="hidden" name="new" value="1" />
        <input name="id" type="hidden" value="{$id}" />

        <div class="row">
            <div class="col-md-12 d-flex justify-content-evenly align-items-center">
                <div class="w-50 d-flex justify-content-evenly align-items-center">
                    <img src="{$image_src}" alt="" class="w-25 rounded-circle">
                </div>
            </div>
        </div>
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
                    <input type="text" class="form-control" placeholder="Enter name" name="name" id="first-name"
                        value="{$name}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mt-3">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email" id="email"
                        value="{$email}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mt-3">
                    <label for="phone-number">Phone Number</label>
                    <input type="tel" class="form-control" placeholder="Enter phone number" name="phone"
                        id="phone-number" value="{$phone}">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success mt-3 mb-5">Accept changes</button>
        <a href="../../index.php" class="btn btn-danger mt-3 mb-5">Cancel</a>
</form>