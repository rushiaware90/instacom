<?php
$attributes = array('id' => 'activate');
echo form_open('Users/activate', $attributes);
?>
<div class="col-lg-4 col-lg-offset-2">
    <div class="login-logo">
        Basic Info
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <div class="form-group has-feedback">
            <label>Your Name</label>
            <input type="text" class="form-control" name="user_name"/>
            <input type="hidden" class="form-control" name="mobile" value="<?php echo $mobile; ?>"/>

        </div>
        <div class="form-group has-feedback">
            <label>Company Name</label>
            <input type="text" class="form-control" name="company_name"/>
        </div>
        <div class="form-group has-feedback">
            <label>Industry/Sector</label>
            <select class="form-control" name="industry">
                <?php echo $industry; ?>
            </select>

        </div>
        <div class="form-group has-feedback">
            <label>Password</label>
            <input type="password" class="form-control" name="password" />

        </div>
        <div class="form-group has-feedback">
            <label>Repeat Password</label>
            <input type="password" class="form-control" name="rpassword"/>

        </div>

    </div>
</div>
<div class="col-lg-4 ">
    <div class="login-logo">
        Contact Info
    </div><!-- /.login-logo -->
    <div class="login-box-body">

        <div class="form-group has-feedback">
            <label>Address</label>
            <input type="text" class="form-control" name="address1" />

        </div>
        <div class="form-group has-feedback">
            <label>Address1</label>
            <input type="text" class="form-control" name="address2" />

        </div>

        <div class="form-group has-feedback">
            <label>Town/City</label>
            <input type="text" class="form-control" name="city"/>

        </div>
        <div class="form-group has-feedback">
            <label>State</label>
            <input type="text" class="form-control" name="state"/>

        </div>
        <div class="form-group has-feedback">
            <label>Pincode</label>
            <input type="text" class="form-control" name="pincode"/>

        </div>
        <div class="row">
            <div class="col-xs-8">    

            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Activate</button>
            </div><!-- /.col -->
        </div>
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
</form>
<script>
    $('document').ready(function () {

        $('#activate').formValidation({
            message: 'This value is not valid',
            icon: {
            },
            fields: {
                user_name: {
                    validators: {
                        notEmpty: {
                            message: 'Your Name is Required'
                        },
                    }
                },
                company_name: {
                    validators: {
                        notEmpty: {
                            message: 'Company Name is required'
                        },
                    }
                },
                password: {
                    validators: {
                        identical: {
                            field: 'rpassword',
                            message: 'The password and its Repeat are not the same'
                        }
                    }
                },
                rpassword: {
                    validators: {
                        identical: {
                            field: 'password',
                            message: 'The password and its Repeat are not the same'
                        }
                    }
                },
                pincode: {
                    validators: {
                        notEmpty: {
                            message: 'Pincode is required'
                        },
                    }
                },
            }
        });
    });
</script>
<script src="<?php echo asset_url() ?>js/formValidation.min.js" type="text/javascript"></script>
<script src="<?php echo asset_url() ?>js/bootstrap.min.js" type="text/javascript"></script>
