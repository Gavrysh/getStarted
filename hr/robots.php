<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php
    if(!isset($_REQUEST['doGo'])) { ?>
  <form class="input-form" action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
    <label><h3>URL</h3><input class="url-input" type="text" name="url"></label><br>
    <input class="btn-form" type="submit" name="doGo" value="Go...">
  </form>
  <?php
    } else {
      if(isset($_POST['url'])) {
        preg_match('#^((http://|https://|www\.)?[\w\d\.-]+)(/)?(robots.txt)?$#ui', htmlspecialchars($_POST['url']), $mtch);
        $url = $mtch[1].'/robots.txt';
        $headers = get_headers($url);
        if(preg_match('#200#ui', $headers[0], $matches)) {
            if($matches[0] == '200') {
              //Наличие файла robots.txt
              $f_exist = 'Файл robots.txt присутствует';
              $f_exist_recom = 'Доработки не требуются';
              $f_exist_status = true;
              //Код овета сервера
              $f_code = 'Файл robots.txt отдаёт код ответа сервера 200';
              $f_code_recom = 'Доработки не требуются';
              $f_code_status = true;
              //Проверка размера файла robots.txt
              foreach ($headers as $value) {
                  if(preg_match('#Content-Length:#ui', $value, $matches)) {
                      preg_match('#\d+#ui', $value, $matches);
                      $f_lenght = $matches[0];
                  }
              }
              if($f_lenght < 32000) {
                  $f_lenght = 'Размер файла robots.txt составляет '.$f_lenght*0.001.' Kb, что находится в пределах допустимой нормы';
                  $f_lenght_recom = 'Доработки не требуются';
                  $f_length_status = true;
              } else {
                  $f_lenght = 'Размера файла robots.txt составляет '.$f_lenght*0.001.' Kb, что превышает допустимую норму';
                  $f_lenght_recom = 'Программист: Максимально допустимый размер файла robots.txt составляем 32 Kб. Необходимо отредактировть файл robots.txt таким образом, чтобы его размер не превышал 32 Кб';
                  $f_length_status = false;
              }
              //Проверка указания директивы Host
              $f_content = file_get_contents($url);
              if(preg_match_all('#Host:#ui', $f_content, $matches)) {
                  $f_host_enable = 'Директива Host указана';
                  $f_host_enable_recom = 'Доработки не требуются';
                  $f_host_enable_status = true;
                  //Проверка количества директив Host
                  if(count($matches[0]) == 1) {
                      $f_host_count = 'В файле прописана 1 директива Host';
                      $f_host_count_recom = 'Доработки не требуются';
                      $f_host_count_status = true;
                  } elseif(count($matches[0]) > 1) {
                      $f_host_count = 'В файле прописано несколько директив Host';
                      $f_host_count_recom = 'Программист: Директива Host должна быть указана в файле толоко 1 раз. Необходимо удалить все дополнительные директивы Host и оставить только 1, корректную и соответствующую основному зеркалу сайта';
                      $f_host_count_status = false;
                  }
              } else {
                  $f_host_enable = 'В файле robots.txt не указана директива Host';
                  $f_host_enable_recom = 'Программист: Для того, чтобы поисковые системы знали, какая версия сайта является основных зеркалом, необходимо прописать адрес основного зеркала в директиве Host. В данный момент это не прописано. Необходимо добавить в файл robots.txt директиву Host. Директива Host задётся в файле 1 раз, после всех правил.';
                  $f_host_enable_status = false;
              }
              //Проверка указания директивы Sitemap
              if(preg_match('#Sitemap:#ui', $f_content, $matches)) {
                  $f_sitemap_enable = 'Директива Sitemap указана';
                  $f_sitemap_enable_recom = 'Доработки не требуются';
                  $f_sitemap_enable_status = true;
              } else {
                  $f_sitemap_enable = 'В файле robots.txt не указана директива Sitemap';
                  $f_sitemap_enable_recom = 'Программист: Добавить в файл robots.txt директиву Sitemap';
                  $f_sitemap_enable_status = false;
              }
            }
        } else {
            //Отсутствие файла robots.txt
            $f_exist = 'Файл robots.txt отсутствует';
            $f_exist_recom = 'Программист: Создать файл robots.txt и разместить его на сайте.';
            $f_exist_status = false;
            //Код овета сервера не 200
            $f_code = 'При обращении к файлу robots.txt сервер возвращает код ответа (указать код)';
            $f_code_recom = 'Программист: Файл robots.txt должны отдавать код ответа 200, иначе файл не будет обрабатываться. Необходимо настроить сайт таким образом, чтобы при обращении к файлу robots.txt сервер возвращает код ответа 200';
            $f_code_status = false;
        }
      }
    }
  ?>
  <?php if(@$f_exist_status) { ?>
    <table class="result">
      <tr>
        <th>№</th>
        <th>Название проверки</th>
        <th colspan="2">Статус</th>
        <th>Текущее состояние</th>
      </tr>
      <tr>
        <td rowspan="2">1</td>
        <td rowspan="2">Проверка наличия файла robots.txt</td>
        <td class="status" <?php if(@$f_exist_status) { echo 'style="background-color: #93C47D"'; } ?> rowspan="2"><?php if(@$f_exist_status) { echo 'Ok'; } else { echo 'Ошибка'; } ?></td>
        <td>Состояние</td>
        <td><?=@$f_exist?></td>
      </tr>
      <tr>
        <td>Рекомендации</td>
        <td><?=@$f_exist_recom?></td>
      </tr>
      <tr>
        <td rowspan="2">2</td>
        <td rowspan="2">Проверка указания директивы Host</td>
        <td class="status" <?php if(@$f_code_status) { echo 'style="background-color: #93C47D"'; } ?> rowspan="2"><?php if(@$f_code_status) { echo 'Ok'; } else { echo 'Ошибка'; } ?></td>
        <td>Состояние</td>
        <td><?=@$f_code?></td>
      </tr>
      <tr>
        <td>Рекомендации</td>
        <td><?=@$f_code_recom?></td>
      </tr>
      <tr>
        <td rowspan="2">3</td>
        <td rowspan="2">Проверка размера файла robots.txt</td>
        <td class="status" <?php if(@$f_length_status) { echo 'style="background-color: #93C47D"'; } ?> rowspan="2"><?php if(@$f_length_status) { echo 'Ok'; } else { echo 'Ошибка'; } ?></td>
        <td>Состояние</td>
        <td><?=@$f_lenght?></td>
      </tr>
      <tr>
        <td>Рекомендации</td>
        <td><?=@$f_lenght_recom?></td>
      </tr>
      <tr>
        <td rowspan="2">4</td>
        <td rowspan="2">Проверка указания директивы Host</td>
        <td class="status" <?php if(@$f_host_enable_status) { echo 'style="background-color: #93C47D"'; } ?> rowspan="2"><?php if(@$f_host_enable_status) { echo 'Ok'; } else { echo 'Ошибка'; } ?></td>
        <td>Состояние</td>
        <td><?=@$f_host_enable?></td>
      </tr>
      <tr>
        <td>Рекомендации</td>
        <td><?=@$f_host_enable_recom?></td>
      </tr>
      <tr>
        <td rowspan="2">5</td>
        <td rowspan="2">Проверка количества директив Host, прописанных в файле</td>
        <td class="status" <?php if(@$f_host_count_status) { echo 'style="background-color: #93C47D"'; } ?> rowspan="2"><?php if(@$f_host_count_status) { echo 'Ok'; } else { echo 'Ошибка'; } ?></td>
        <td>Состояние</td>
        <td><?=@$f_host_count?></td>
      </tr>
      <tr>
        <td>Рекомендации</td>
        <td><?=@$f_host_count_recom?></td>
      </tr>
      <tr>
        <td rowspan="2">6</td>
        <td rowspan="2">Проверка указания директивы Sitemap</td>
        <td class="status" <?php if(@$f_sitemap_enable_status) { echo 'style="background-color: #93C47D"'; } ?> rowspan="2"><?php if(@$f_sitemap_enable_status) { echo 'Ok'; } else { echo 'Ошибка'; } ?></td>
        <td>Состояние</td>
        <td><?=@$f_sitemap_enable?></td>
      </tr>
      <tr>
        <td>Рекомендации</td>
        <td><?=@$f_sitemap_enable_recom?></td>
      </tr>
    </table>
    <?php } elseif(isset($_POST['url'])) { echo '<h3>Необходимый файл не найден</h3><br><a href="/robots.php">Вернуться обратно</a>'; } ?>
</body>
</html>