<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <?php include "./bootstrap.php" ?>
  <style>
    body {
      background-color: #f4f4f4;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .signup-container {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 30px;
      max-width: 500px;
      width: 100%;
    }

    .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="signup-container">
          <h2 class="text-center mb-4">Create an Account</h2>
          <form action="./getuser.php" method="PSOT">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" id="firstName" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" required>
            </div>

            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="termsCheck" required>
              <label class="form-check-label" for="termsCheck">
                I agree to the Terms and Conditions
              </label>
            </div>

            <button type="submit" class="btn btn-primary w-100">Sign Up</button>

            <div class="text-center mt-3">
              <p class="small">Already have an account? <a href="#" class="text-primary">Log in</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>