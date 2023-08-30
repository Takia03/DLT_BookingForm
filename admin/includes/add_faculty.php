<!-- <form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <input class="form-control bg-light border-1 small" type="text" name="user_firstname" placeholder="First Name">
    </div>

    <div class="form-group">
        <input class="form-control bg-light border-1 small" type="text" name="user_lastname" placeholder="Last Name">
    </div>

    <div class="form-group">
        <input class="form-control bg-light border-1 small" type="text" name="user_dept" placeholder="Department">
    </div>

     <div class="form-group">
        <select class="form-control bg-light border-1 small" type="text" name="user_role">
            <option value="none">Select Designation</option>
            <option value="admin">Professor</option>
            <option value="subscriber">Associate Professor</option>
            <option value="subscriber">Assistant Professor</option>
            <option value="subscriber">Lecture</option>
        </select>
    </div>

    <div class="form-group">
        <input class="form-control bg-light border-1 small" type="email" name="user_email" placeholder="Email">
    </div>

    <div class="form-group">
        <i class="fas fa-fw fa-upload"></i>
        <input class="inputfile" id="file" type="file" name="user_image">
    </div>

    <div class="form-group">
        <input class="btn btn-success" type="submit" name="create_user" value="Add User">
    </div>

</form> -->
<div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 offset-lg-2">
                <div class="card">
                <form class="requires-validation" action="process/facultyadd.php" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 mt-5 mb-2">
                                <h4>Add New Faculty</h4>
                            </div>
                            <div class="col-md-6 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="fname" name="firstname" required>
                                    <label for="floatingInput">First Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="lname" name="lastname" required>
                                    <label for="floatingInput">Last Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-12 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="lname" name="email" required>
                                    <label for="floatingInput">Email Address <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="dept" name="dept" required>
                                    <label for="floatingInput">Department <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mt-1">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="lname" name="designation" required>
                                    <label for="floatingInput">Designation <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-12  mb-3">
                                <select class="form-select mt-3" style="height: 60px;" name="role" required>
                                    <option selected disabled value="">Role <span class="text-danger">*</span></option>
                                    <option value="admin">Admin</option>
                                    <option value="head">Head</option>
                                    <option value="faculty">Faculty Member</option>
                                    <option value="AdminStuff">Administrative Stuff</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary sh-search" style="width: 100%;">Add Faculty</button>
                            </div> 
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>


<style>
    .card{
        margin-top: 20px;
        margin-bottom: 20px;
        min-height: 65vh;
        border: 1px solid #e6e6e6;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0 5px 10px rgba(0,0,0,.4);
    }
</style>