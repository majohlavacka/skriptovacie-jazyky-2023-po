  
  <?php
    include('partials/header.php');
  ?>
  <main>
    <section class="container">
      <h1>Registrácia</h1>
      <div class="row">
        <div class="col-100">
        <form action="inc/register/insert.php" method="post">
            <input type="text" name="user_name" placeholder="Vaše meno" require><br>
            <input type="email" name="user_email" placeholder="Váš email"><br>
            <input type="password" name="user_password" placeholder="Vaše heslo"><br>
            <input type="submit" value="Zaregistrovať" name="add_user">
        </form><br>
        <p>Už máte účet? <a href="login.php">Prihláste sa</a></p>
        </div>
      </div>
    </section>
  </main>
  <?php
    include('partials/footer.php');
  ?>