<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

   <style>
      html,
      body {
         height: 100%;
      }

      .form-signin {
         max-width: 330px;
         padding: 1rem;
      }

      .form-signin .form-floating:focus-within {
         z-index: 2;
      }

      .form-signin input[type="text"] {
         margin-bottom: -1px;
         border-bottom-right-radius: 0;
         border-bottom-left-radius: 0;
      }

      .form-signin input[type="password"] {
         margin-bottom: 10px;
         border-top-left-radius: 0;
         border-top-right-radius: 0;
      }
   </style>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
   <main class="form-signin w-100 m-auto">
      <form action="" method="post">
         <img class="mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap Logo" width="72" height="57">
         <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

         <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username" required>
            <label for="floatingInput">Username</label>
         </div>
         <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
         </div>

         <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
               Remember me
            </label>
         </div>
         <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
         <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
      </form>

      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         $username = htmlspecialchars($_POST['username']);
         $password = htmlspecialchars($_POST['password']);

         // Dummy credentials for demonstration
         $valid_username = 'riza';
         $valid_password = 'parallel';

         if ($username === $valid_username && $password === $valid_password) {
            echo '<script>window.location.href="https://playlistferdian.vercel.app";</script>';
         } else {
            echo '<p class="text-center text-danger">Invalid username or password.</p>';
         }
      }
      ?>
   </main>
</body>

</html>
