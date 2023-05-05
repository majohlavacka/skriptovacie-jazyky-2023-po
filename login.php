  
  <?php
    include('partials/header.php');
  ?>
  <main>
  
    <section class="container">
      <div class="row">
      <div class="col-100">  
          <h1>Prihlásenie</h1>
          <form action="inc/login/login.php" method="post">
            <input type="email" name="user_email" placeholder="Váš email"><br>
            <input type="password" name="user_password" placeholder="Vaše heslo"><br>
            <input type="submit" value="Prihlásiť sa" name="log_user">
          </form>
          <br>
          <p>Nemáte účet? <a href="register.php">Registrujte sa</a></p>
        </div>
      </div>
    </section>
  </main>
  <?php
    include('partials/footer.php');
  ?>