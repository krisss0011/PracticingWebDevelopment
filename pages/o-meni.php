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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <link rel="stylesheet" href="../css/app.css">
  </head>
<body>
    <main>
        <h1>O meni</h1>
      <div class="first">
          <p>Kristijan Krošelj</p>
          <p>Vpisna številka: 35200035</p>
      </div>
      <div class="slika1">
          <img src="../images/kepa2.jpg" alt="broken image" width="350" height="500">
      </div>
      <div class="second">
          <p class="lead">Hello, I'm Kris, how y'all doing? adipisicing elit. Cupiditate dolorem ut reprehenderit eveniet nesciunt, dolor fuga accusamus earum inventore eius dolores ipsam quos rem animi. Minus illo odio quo asperiores.
          Officia neque dolorem aliquid soluta culpa ut rem quidem, debitis alias iusto ipsum dicta reprehenderit autem odit, fugit saepe minus deserunt aperiam, corrupti cum. Corrupti quasi quo minima distinctio harum?</p>
          <p class="lead">Yes, I like to climb mountains and those photos are taken by me. Cupiditate dolorem ut reprehenderit eveniet nesciunt, dolor fuga accusamus earum inventore eius dolores ipsam quos rem animi. Minus illo odio quo asperiores.
          Officia neque dolorem aliquid soluta culpa ut rem quidem, debitis alias iusto ipsum dicta reprehenderit autem odit, fugit saepe minus deserunt aperiam, corrupti cum. Corrupti quasi quo minima distinctio harum?</p>
          <p class="lead">I'm also a motorcycle rider. Currently on 2018 Yamaha MT09. Cupiditate dolorem ut reprehenderit eveniet nesciunt, dolor fuga accusamus earum inventore eius dolores ipsam quos rem animi. Minus illo odio quo asperiores.
          Officia neque dolorem aliquid soluta culpa ut rem quidem, debitis alias iusto ipsum dicta reprehenderit autem odit, fugit saepe minus deserunt aperiam, corrupti cum. Corrupti quasi quo minima distinctio harum?</p>
          <p class="lead">Starting out fresh with all of this... so this is going to be interesting. Cupiditate dolorem ut, dolor fuga accusamus earum inventore eius dolores ipsam quos rem animi. Minus illo odio quo asperiores.
          Officia neque dolorem aliquid soluta culpa ut rem quidem, debitis alias iusto ipsum dicta reprehenderit autem odit, fugit saepe minus deserunt aperiam, corrupti cum. Corrupti quasi quo minima distinctio harum?</p>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolorem ut reprehenderit eveniet nesciunt, dolor fuga accusamus earum inventore eius dolores ipsam quos rem animi. Minus illo odio quo asperiores.
          Officia neque dolorem aliquid soluta culpa ut rem quidem, debitis alias iusto ipsum dicta reprehenderit autem odit, fugit saepe minus deserunt aperiam, corrupti cum. Corrupti quasi quo minima distinctio harum?</p>
      </div>
      <div class="povezave">      
              <ul class="list-group">
                <h2>Najljubše povezave:</h2>
                <li class="list-group-item"><a href="https://www.iglusport.si/" target="_blank">iglusport.si</a></li>
                <li class="list-group-item"><a href="https://www.24ur.com/" target="_blank">24ur.com</a></li>
                <li class="list-group-item"><a href="https://www.reddit.com/" target="_blank">reddit.com</a></li>
                <li class="list-group-item"><a href="https://vreme.arso.gov.si/plazovi" target="_blank">Arso - plazovi</a></li>
                <li class="list-group-item"><a href="https://www.hribi.net/" target="_blank">hribi.net</a></li>
              </ul>
              <ul class="list-group">
                <h2>Najljubši filmi</h2>
                <li class="list-group-item">14 peaks</li>
                <li class="list-group-item">Everest</li>
                <li class="list-group-item">Nanga Parbat</li>
                <li class="list-group-item">Who am I</li>
                <li class="list-group-item">Joker</li>
              </ul>
      </div>
      <div>
          <h2 class="tabela"></h2>
          <table class="table" id="specialTable">
              <tr>
                  <th>Fav mountains</th>
                  <th>Fav motorcycles</th>
                  <th>Biggest goals</th>
                  <th>Fav bands/singers</th>
                  <th>Welcome</th>
              </tr>
              <tr>
                  <td>Jalovec</td>
                  <td>Streetfighter</td>
                  <td>TOP SECRET</td>
                  <td>Green Day</td>
                  <td>To</td>
              </tr>
              <tr>
                  <td>Škrlatica</td>
                  <td>Panigale v4s</td>
                  <td>TOP SECRET</td>
                  <td>All Am Rejects</td>
                  <td>The</td>
              </tr>
              <tr>
                  <td>Špik</td>
                  <td>S1000RR</td>
                  <td>TOP SECRET</td>
                  <td>Eminem</td>
                  <td>Black</td>
              </tr>
              <tr>
                  <td>Triglav</td>
                  <td>H2</td>
                  <td>TOP SECRET</td>
                  <td>Arch Enemy</td>
                  <td>Parade</td>
              </tr>
          </table>
    </main>
    <?php
        include_once ("../tpl/footer.php");
      ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>