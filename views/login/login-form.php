<form name="loginForm" class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="email"> Email / Phone </label>
        <div class="col-sm-7">
           <span class="block input-icon input-icon-right">
                <input type="text" class="form-control" placeholder="Email / Phone" name="email" ng-model="login.email" required focus/>
                <i class="ace-icon fa fa-user"></i>
            </span>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="password"> Password </label>
        <div class="col-sm-7">
           <span class="block input-icon input-icon-right">
                <input type="password" class="form-control" placeholder="Password" ng-model="login.password" required/>
                <i class="ace-icon fa fa-lock"></i>
            </span>
        </div>
    </div>
    <div class="space"></div>
     <div class="clearfix">
                                        <div class="row">
         <label class="col-sm-3 control-label no-padding-right"> </label>
        <div class="col-sm-7">
            <button type="submit" class="width-35 pull-right btn btn-sm btn-primary" ng-click="doLogin(login)" data-ng-disabled="loginForm.$invalid">
                <i class="ace-icon fa fa-key"></i>
                Login
            </button>
                                            </div>
        </div>
    </div>
        <div class="space-4"></div>
    <span class="lbl col-sm-3"> </span><div class="col-sm-7">Don't have an account? <a href="#/signup">Signup</a></div>
</form>