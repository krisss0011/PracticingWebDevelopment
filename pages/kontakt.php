<?php
ob_start();
session_start();

include_once('../tpl/header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DN2</title>
    <link rel="stylesheet" href="../css/kontakt.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
</head>
<body>
    <main>
      <div class="vsebina">
        <h1>Kontakt</h1>
        <form class="row g-3 needs-validation">
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Ime in priimek</label>
            <input type="text" class="form-control" id="validationCustom01" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">E-mail</label>
            <input type="text" class="form-control" id="validationCustom02" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Telefon</label>
            <div class="input-group has-validation">
              <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            </div>
          </div>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" required></textarea>
            <label for="floatingTextarea">Vaše sporočilo</label>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Pošlji</button>
          </div>
        </form>
      </div>
    </main>
    <?php
        include_once ("../tpl/footer.php");
      ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>