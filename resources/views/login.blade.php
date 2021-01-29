<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				@if(\Session::has('alert-success'))
				    <div class="alert alert-success" style="text-align: center;">
				        <div>{{Session::get('alert-success')}}</div>
				    </div>
				@endif
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-auth-small" action="/postlogin" method="POST">
								{{csrf_field()}}
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input name="email" type="email" class="form-control" id="signin-email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input name="password" type="password" class="form-control" id="signin-password" placeholder="Password">
								</div>
								<div class="row">
									<div class="col-md-6">
										<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
									</div>
									<div class="col-md-6">
										<button type="button" id="myModal" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">REGISTER</button>
									</div>
								</div>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Free Bootstrap dashboard template</h1>
							<p>by The Develovers</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form class="form-auth-small" action="/postregister" method="POST">
		{{csrf_field()}}
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Registration New Akun</h5>
	      </div>
	      <div class="modal-body">

	      	<div class="form-group">
				<label for="signin-email" class="control-label sr-only">Nama</label>
				<input name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="nama" value="{{ old('name') }}" placeholder="Nama">
				@if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
			</div>

	        <div class="form-group">
				<label for="signin-email" class="control-label sr-only">Email</label>
				<input name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="signin-email" placeholder="Email">
				@if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
			</div>

			<div class="form-group">
				<label for="signin-password" class="control-label sr-only">Password</label>
				<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                @if($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
			</div>

			<div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Password konfirmasi">
            </div>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">REGISTER</button>
	      </div>
	    </form>
    </div>
  </div>
</div>

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').trigger('focus')
	})
</script>
</body>

</html>
