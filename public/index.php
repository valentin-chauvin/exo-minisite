<!doctype html>
<html lang="en">
    <head>
        <?php include 'partials/meta.php';  ?>
        <title>Exercice Minisite</title>
    </head>
    <body>
      <div class="wrapper">
        <header class="page-head">
          <div class="container">
            <img src="../assets/images/logo.jpg" alt="Logo" width="250" />
          </div>
          <nav class="menu">
            <ul>
              <li>
                <a href="#" title="">Skills</a>
              </li>
              <li>
                <a href="#" title="">About</a>
              </li>
            </ul>
          </nav>
        </header>

        <section class="slider">
          <div class="container">
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <h1>Slide 1</h1>
                  <p>Contenu</p>
                </li>
                <li>
                  <h1>Slide 2</h1>
                  <p>Contenu</p>
                </li>
                <li>
                  <h1>Slide 3</h1>
                  <p>Contenu</p>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <div class="projets">
          <div class="container">
            <ul>
              <li><a href="#" title=""></a></li>
              <li><a href="#" title=""></a></li>
              <li><a href="#" title=""></a></li>
            </ul>
          </div>
        </div>
      </div>

      <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
          $('.flexslider').flexslider();
        });
      </script>

    </body>
</html>
