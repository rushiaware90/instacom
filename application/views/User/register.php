<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Instacom</b>Messanger</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <?php
        if (isset($error)) {
            echo "<h4>" . $error . "</h4>";
        }
        ?>
        <p class="login-box-msg">Register Here</p>
        <?php echo form_open('Users/register'); ?>
        <div class="form-group has-feedback">
            <input type="text" class="form-control" name="mobile" placeholder="Enter Your Mobile Number" maxlength="10" minlength="10"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">    

            </div><!-- /.col -->
            <div class="col-xs-4">
                <input type="submit" class="btn btn-primary btn-block btn-flat" value="Register"/>
            </div><!-- /.col -->
        </div>
        </form>

        <a href="<?php echo site_url('Users/login'); ?>" class="text-center">Sign In</a>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->