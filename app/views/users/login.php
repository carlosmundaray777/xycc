<?php require APP . 'views/inc/header.php'; ?>
<div class="row">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
      <h2>Login</h2>
      <p>Log into your account</p>
      <form action="<?php echo ROOT . 'users/login'; ?>" method="post">
        <div class="form-group">
          <label for="name">Email: <sup>*</sup></label>
          <input type="text" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
          <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
        </div>
        <div class="form-group">
          <label for="name">Password: <sup>*</sup></label>
          <input type="text" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
          <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
        </div>
        <div class="row">
          <div class="col">
            <input type="submit" class="btn btn-success btn-block" value="Login">
          </div>
          <div class="col">
            <a href="<?php echo ROOT . 'users/register'; ?>" class="btn btn-light btn-block">Need an account? Register</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require APP . 'views/inc/footer.php'; ?>
