@extends('layout.front-form-layout')

@section('content')


	<div class="listing-objects has-bg-image" data-bg-color="f5f5f5">
    <div class="container">
        <div class="row" style="">
            <div class="col-md-8" style="margin:0 auto;  float:none;">
                <h2> Login</h2>
                <form class="form login">
                    <div class="row pt30">
                        <?php if(!empty($err_msg)){echo $err_msg;} ?>
                        
                        <div class="col-sm-7">
                             <label>Email Address</label>
                          <input name="email" type="email" placeholder="Email" class="form-control" required>
                        </div>
                        <div class="col-sm-7">
                            <label>Password</label>
                          <input name="password" type="password" placeholder="Password" class="form-control" required>
                        </div>
                        <div class="col-sm-12">
                            <button  class="btn mb20 btn-small btn-transparent-primary"><i class="fa fa-user"></i>Login</button>
                        </div>    

                    </div>
                 </form>
            </div>
        </div>
    </div>
    <br><br><br><br>
</div>

	 
@stop