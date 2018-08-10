<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="/css/style.css">
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <div class="wrapper">
<!--Шапка-->
      <div class="header">
        <div class="headerContent">
          <div class="logo"><a href="/"><img src="/images/logo.png"></a></div>
          <form class="search">
            <input type="text">
            <input type="image" src="/images/button-search.png">
          </form>
        </div>
      </div>
<!--Слайдер-->
      <div class="slider">
        <div id="myCarousel" class="carousel slide">
          <div class="carousel-inner">
            <div class="item active">
              <img src="/images/slider-img.jpg" alt="">
              <div class="carousel-caption">
                <h4>Lorem ipsum dolor sit amet</h4>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
            <div class="item">
              <img src="/images/slider-img2.jpg" alt="">
              <div class="carousel-caption">
                <h4>Sed ut perspiciatis unde omnis</h4>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
            <div class="item">
              <img src="/images/slider-img3.jpg" alt="">
              <div class="carousel-caption">
                <h4>At vero eos et accusamus et iusto</h4>
                <p> Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
      </div>
<!--Контент-->
      <div class="content">
<!--Навигацiя-->
        <ul class="nav">
          <li><a href="/">Home</a></li>
          <li><a href="/index.php/about/main">About</a></li>
          <li><a href="/index.php/work/main">Work</a></li>
          <li><a href="/index.php/blog/main">Blog</a></li>
          <li><a href="/index.php/contacts/main">Contacts</a></li>
        </ul>
<!--Основна частина-->
        <div class="main">
          <h1>Contacts</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis repudiandae accusantium quae officiis voluptate saepe earum cumque! Iusto repellat minus enim voluptatibus. Optio, deleniti odit dicta minima quaerat non fugiat.</p>
          <form>
                        <div class="row">
                            <label>Text:</label>
                            <input type="text" placeholder="Input type text">
                        </div>
                        <div class="row">
                            <label>Select:</label>
                            <select>
                                <option>Option</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                        <div class="row">
                            <label><input type="checkbox">Sed ut perspiciatis unde omnis iste natus</label>
                            <label><input type="radio" name="radiobutton" value="radiobutton">Lorem ipsum dolor sit amet, consectetur</label>
                        </div>
                        <div class="row">
                            <label>Textarea:</label>
                            <textarea></textarea>
                        </div>
                        <div class="row">
                            <button type="submit">Button</button>
                        </div>
                    </form>

        </div>
      </div>
<!--Підвал-->
      <div class="footer">
        <p>&copy; Footer content <a href="http://psd-html-css.ru">Link footer</a></p>
      </div>
    </div>
<!--Подключення скриптів-->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap-transition.js"></script>
    <script src="/js/bootstrap-carousel.js"></script>
    <script src="/js/js.js"></script>
  </body>
</html>
