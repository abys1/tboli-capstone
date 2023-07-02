<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <table class="table table-striped">
        <tbody>
            <tr>
                <td colspan="1">
                    <form class="well form-horizontal">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">First Name</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span><input id="fullName"
                                            name="fullName" placeholder="Full Name" class="form-control" required="true"
                                            value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Last Name</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span><input id="fullName"
                                            name="fullName" placeholder="Full Name" class="form-control" required="true"
                                            value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Gender</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-venus-mars"></i>
                                        </span>
                                        <select id="gender" name="gender" class="form-control" required="true">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone Number</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber"
                                            name="phoneNumber" placeholder="Phone Number" class="form-control"
                                            required="true" value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
    <label class="col-md-4 control-label">Upload Valid ID</label>
    <div class="col-md-8 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="fa fa-file-upload"></i>
            </span>
            <input id="validID" name="validID" type="file" accept="image/*" class="form-control" required="true">
        </div>
    </div>
</div>


                        </fieldset>
                    </form>
                </td>
                <td colspan="1">
                    <form class="well form-horizontal">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Middle Name</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span><input id="fullName"
                                            name="fullName" placeholder="Full Name" class="form-control" required="true"
                                            value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Birthday</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                        <input id="birthday" name="birthday" placeholder="Select Birthday"
                                            class="form-control" required="true" type="date">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Email Address</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-envelope"></i></span><input id="email"
                                            name="email" placeholder="Email" class="form-control" required="true"
                                            value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Full address (street, barangay, city)</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-home"></i></span><input id="address"
                                            name="address" placeholder="address" class="form-control" required="true"
                                            value="" type="text"></div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <div class="form-group text-center">
    <div class="col-md-12">
        <button type="button" class="btn btn-primary">Add Teacher</button>
    </div>
</div>

                </td>
            </tr>
        </tbody>
    </table>
</div>