<?php


include_once('header.php');


?>


<div class="signup">
     <form action="register.php" class="form-sigin" method="post"></form>
     <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

     <label for="inputEmail" class="sr-only">Name</label>
<input type="text" id="inputEmail" class="form-control" placeholder="Name" name="name" required>


<label for="inputEmail" class="sr-only">Surname</label>
<input type="text" id="inputEmail" class="form-control" placeholder="Surname" name="surname" required>

<label for="inputEmail" class="sr-only">Username</label>
<input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required>


<label for="inputEmail" class="sr-only">Name</label>
<input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required>
<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">sign in</button>


<small>You dont have an account?<a href="signup.php"> log in</a></small>
<p class="mt-5 mb-3 text-muted">digital school &copy; 2024</p>


</div>

<?php include('footer.php') ?>