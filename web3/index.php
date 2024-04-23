
<?php
  header('Content-Type: text/html; charset=UTF-8');

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!empty($_GET['save'])) {
      print('<div class="message">Спасибо, данные сохранены.</div>');
    }
    include('form_data.php');
    exit();
  }

  function errp($error){
    print("<div class='messageError'>$error</div>");
    exit();
  }

  function val_empty($val, $name, $o = 0){
    if(empty($val)){
      if($o == 0){
        errp("Заполните поле $name!<br/>");
      }
      if($o == 1){
        errp("Выберите $name!<br/>");
      }
      if($o == 2){
        errp("Ознакомьтесь с контрактом!<br/>");
      }
      exit();
    }
  }

  $errors = '';
  $fullName = (isset($_POST['fullName']) ? $_POST['fullName'] : '');
  $phone = (isset($_POST['phone']) ? $_POST['phone'] : '');
  $email = (isset($_POST['email']) ? $_POST['email'] : '');
  $birthdate = (isset($_POST['birthdate']) ? strtotime($_POST['birthdate']) : '');
  $gender = (isset($_POST['gender']) ? $_POST['gender'] : '');
  $like_lang = (isset($_POST['like_lang']) ? $_POST['like_lang'] : '');
  $bio = (isset($_POST['bio']) ? $_POST['bio'] : '');
  $agreement = (isset($_POST['agreement']) ? $_POST['agreement'] : '');

  $phone = preg_replace('/\D/', '', $phone);
  
  $like_lang_s = ($like_lang != '') ? implode(", ", $like_lang) : [];
  
  val_empty($fullName, "имя");
  val_empty($phone, "телефон");
  val_empty($email, "email");
  val_empty($birthdate, "дата");
  val_empty($gender, "пол", 1);
  val_empty($like_lang, "языки", 1);
  val_empty($bio, "биографию");
  val_empty($agreement, "ознакомлен", 2);
  if(empty($fullName)){
    print('Поле "Фамилия, имя и отчество" не заполнено!');
  }

  if(strlen($fio) > 255){
    $errors = 'Длина поля "Фамилия, имя и отчество" > 255 символов';
  }
  elseif(count(explode(" ", $fullName)) < 2 || !preg_match('/^([а-яa-zё]+-?[а-яa-zё]+)( [а-яa-zё]+-?[а-яa-zё]+){1,2}$/Diu', $fullName)){
    $errors = 'Неверный формат фамилии, имени и отчества';
  } 
  elseif(strlen($phone) != 11 || !preg_match('/^\d{11}$/', $phone)){
    $errors = 'Неверное значение поля "Телефон"';
  }
  elseif(strlen($email) > 255){
    $errors = 'Длина поля "Адрес электронной почты" > 255 символов';
  }
  elseif(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $email)){
    $errors = 'Неверное значение поля "email"';
  }
  elseif(!is_numeric($birthdate) || strtotime("now") < $birthdate){
    $errors = 'Укажите корректную дату';
  }
  elseif($gender != "male" && $gender != "female"){
    $errors = 'Укажите пол';
  }
  elseif(count($like_lang) == 0){
    $errors = 'Укажите любимые языки программирования';
  }

  if ($errors != '') {
    errp($errors);
  }
  
  $db = new PDO('mysql:host=localhost;dbname=u67495', '', '');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $inQuery = implode(',', array_fill(0, count($like_lang), '?'));

  try {
    $dbLangs = $db->prepare("SELECT id, name FROM languages WHERE name IN ($inQuery)");
    foreach ($like_lang as $key => $value) {
      $dbLangs->bindValue(($key+1), $value);
    }
    $dbLangs->execute();
    $languages = $dbLangs->fetchAll(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
    print('Error : ' . $e->getMessage());
    exit();
  }

  echo $dbLangs->rowCount().'**'.count($like_lang);
  
  if($dbLangs->rowCount() != count($like_lang)){
    $errors = 'Неверно выбраны языки';
  }
  elseif(strlen($biography) > 65535){
    $errors = 'Длина поля "Биография" > 65 535 символов';
  }

  if ($errors != '') {
    errp($errors);
  }

  try {
    $stmt = $db->prepare("INSERT INTO form_data (fullName, phone, email, birthdate, gender, bio) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$fullName, $phone, $email, $birthdate, $gender, $bio]);
    $fid = $db->lastInsertId();
    $stmt1 = $db->prepare("INSERT INTO form_data_lang (id_form, id_lang) VALUES (?, ?)");
    foreach($languages as $row){
        $stmt1->execute([$fid, $row['id']]);
    }
  }
  catch(PDOException $e){
    print('Error : ' . $e->getMessage());
    exit();
  }

  header('Location: ?save=1');
