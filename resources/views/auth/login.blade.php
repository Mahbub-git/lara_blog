<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>login</title>
  <link href="{{ asset('/')}}/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<style>
	.justify-content-center {
    margin-top: 100px;
}
</style>
<body style="background-image:url('{{ asset('/')}}/admin/img/background.jpeg') ">
 <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6" >
				<img style ="margin-top:30px;" src="{{ asset('/')}}/admin/img/1.png">
			  </div>
              <div class="col-lg-6">
                <div class="p-5">
                 <form method="POST" action="{{ route('login') }}" class="user">
                        @csrf
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="email"  placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user"  placeholder="Password">
                    </div>
                    <button  class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
