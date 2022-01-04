<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- CHAVE RECAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- FORM -->

<div class="col-2 text-center">
<form class="row g-3" action="cadastro.php" method="post">
  <div class="g-recaptcha" data-sitekey="6LcJXe8dAAAAAJ1z06ihv5xSncPtyl9FtctG6NDc"></div>
    <input type="password" name="email" id="email">
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">Login</button>
    </div>
</form>
</div>
