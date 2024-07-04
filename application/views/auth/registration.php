    <div class="container">

      <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="name" name="name"
                      placeholder="Full name" value="<?= set_value('name')?>">
                    <?= form_error('name',' <small class="text-danger pl-3">','</small> ')?>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="email" name="email"
                      placeholder="Email Address" value="<?= set_value('email')?>">
                    <?= form_error('email',' <small class="text-danger pl-3">','</small> ')?>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" id="password1" name="password1"
                        placeholder="Password">
                      <?= form_error('password1',' <small class="text-danger pl-3">','</small> ')?>
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="password2" name="password2"
                        placeholder="Repeat Password">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Register Account
                  </button>

                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="forgot-password.html">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


    <style>
body {
  background-color: #f8f9fc;
  /* Warna latar belakang */
}

.card {
  border-radius: 10px;
}

.btn-primary {
  background-color: #4e73df;
  /* Warna latar belakang tombol */
  border-color: #4e73df;
  /* Warna border tombol */
}

.btn-primary:hover {
  background-color: #2e59d9;
  /* Warna latar belakang tombol saat di-hover */
  border-color: #2653d4;
  /* Warna border tombol saat di-hover */
}

.text-gray-900 {
  color: #343a40;
  /* Warna teks */
}

.form-control-user {
  border-radius: 20px;
  /* Radius sudut input form */
}

.form-control-user:focus {
  border-color: #4e73df;
  /* Warna border input form saat fokus */
  box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
  /* Efek bayangan saat fokus */
}

.small {
  color: #6e707e;
  /* Warna teks kecil */
}

.small:hover {
  color: #4e73df;
  /* Warna teks kecil saat di-hover */
}
    </style>