<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();
$log = !empty($_SESSION['login']);

function deleteCookies($cook, $vals = 0){
    setcookie($cook.'_error', '', 100000);
    if($vals) setcookie($cook.'_value', '', 100000);
}

$db;
function connectDatabase(){
    global $db;
    include('connection.php');
}

// Define validateEmpty function here
function validateEmpty($enName, $val){
    global $errors, $messages, $error, $values;
    if ($error)
        $error = empty($_COOKIE[$enName . '_error']);

    $errors[$enName] = !empty($_COOKIE[$enName . '_error']);
    $messages[$enName] = "<div class='messageError'>$val</div>";
    $values[$enName] = empty($_COOKIE[$enName . '_value']) ? '' : strip_tags($_COOKIE[$enName . '_value']);
    deleteCookies($enName);
    return;
}

function setValue($enName, $param)
{
    global $values;
    $values[$enName] = empty($param) ? '' : strip_tags($param);
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $fullName = (!empty($_COOKIE['fullName_error']) ? $_COOKIE['fullName_error'] : '');
    $phone = (!empty($_COOKIE['phone_error']) ? $_COOKIE['phone_error'] : '');
    $email = (!empty($_COOKIE['email_error']) ? $_COOKIE['email_error'] : '');
    $birthday = (!empty($_COOKIE['birthday_error']) ? $_COOKIE['birthday_error'] : '');
    $gender = (!empty($_COOKIE['gender_error']) ? $_COOKIE['gender_error'] : '');
    $like_lang = (!empty($_COOKIE['like_lang_error']) ? $_COOKIE['like_lang_error'] : '');
    $biography = (!empty($_COOKIE['biography_error']) ? $_COOKIE['biography_error'] : '');
    $agreement = (!empty($_COOKIE['agreement_error']) ? $_COOKIE['agreement_error'] : '');

    $errors = array();
    $messages = array();
    $values = array();
    $error = true;

    if (!empty($_COOKIE['save'])) {
        setcookie('save', '', 100000);
        setcookie('login', '', 100000);
        setcookie('password', '', 100000);
        $messages['success'] = 'Спасибо, результаты сохранены.';
        if (!empty($_COOKIE['password'])) {
            $messages['info'] = sprintf('Вы можете <a href="login.php">войти</a> с логином <strong>%s</strong>
          и паролем <strong>%s</strong> для изменения данных.',
                strip_tags($_COOKIE['login']),
                strip_tags($_COOKIE['password']));
        }
    }

    validateEmpty('fullName', $fullName);
    validateEmpty('phone', $phone);
    validateEmpty('email', $email);
    validateEmpty('birthday', $birthday);
    validateEmpty('gender', $gender);
    validateEmpty('like_lang', $like_lang);
    validateEmpty('biography', $biography);
    validateEmpty('agreement', $agreement);

    $favoriteLanguagesSA = explode(',', $values['like_lang']);

    if ($error && !empty($_SESSION['login'])) {
        connectDatabase();
        try {
            $dbFD = $db->prepare("SELECT * FROM form_data WHERE user_id = ?");
            $dbFD->execute([$_SESSION['user_id']]);
            $fet = $dbFD->fetchAll(PDO::FETCH_ASSOC)[0];
            $form_id = $fet['id'];
            $_SESSION['form_id'] = $form_id;
            $dbL = $db->prepare("SELECT l.name FROM form_data_lang f
                              LEFT JOIN languages l ON l.id = f.id_lang
                              WHERE f.id_form = ?");
            $dbL->execute([$form_id]);
            $favoriteLanguagesSA = [];
            foreach ($dbL->fetchAll(PDO::FETCH_ASSOC) as $item) {
                $favoriteLanguagesSA[] = $item['name'];
            }
            setValue('fullName', $fet['fullName']);
            setValue('phone', $fet['phone']);
            setValue('email', $fet['email']);
            setValue('birthday', date("Y-m-d", $fet['birthday']));
            setValue('gender', $fet['gender']);
            setValue('like_lang', $like_lang);
            setValue('biography', $fet['biography']);
            setValue('agreement', $fet['agreement']);
        } catch (PDOException $e) {
            print('Error : ' . $e->getMessage());
            exit();
        }
    }

    include('form.php');
} else {
    $fullName = (!empty($_POST['fullName']) ? $_POST['fullName'] : '');
    $phone = (!empty($_POST['phone']) ? $_POST['phone'] : '');
    $email = (!empty($_POST['email']) ? $_POST['email'] : '');
    $birthday = (!empty($_POST['birthday']) ? $_POST['birthday'] : '');
    $gender = (!empty($_POST['gender']) ? $_POST['gender'] : '');
    $like_lang = (!empty($_POST['like_lang']) ? $_POST['like_lang'] : '');
    $biography = (!empty($_POST['biography']) ? $_POST['biography'] : '');
    $agreement = (!empty($_POST['agreement']) && $_POST['agreement'] === 'on') ? 1 : 0;

    if(isset($_POST['logout_form'])){
        deleteCookies('fullName', 1);
        deleteCookies('phone', 1);
        deleteCookies('email', 1);
        deleteCookies('birthday', 1);
        deleteCookies('gender', 1);
        deleteCookies('like_lang', 1);
        deleteCookies('biography', 1);
        deleteCookies('agreement', 1);
        session_destroy();
        header('Location: ./');
        exit();
    }

    $phone1 = preg_replace('/\D/', '', $phone);

    function val_empty($cook, $comment, $usl){
        global $error;
        $res = false;
        $setVal = $_POST[$cook];
        if ($usl) {
            setcookie($cook.'_error', $comment, time() + 24 * 60 * 60); //сохраняем на сутки
            $error = true;
            $res = true;
        }

        if($cook == 'like_lang'){
            global $like_lang;
            $setVal = ($like_lang != '') ? implode(",", $like_lang) : '';
        }

        setcookie($cook.'_value', $setVal, time() + 30 * 24 * 60 * 60); //сохраняем на месяц
        return $res;
    }

    if(!validateEmpty('fullName', 'Заполните поле', empty($fullName))){
        if(!validateEmpty('fullName', 'Длина поля > 255 символов', strlen($fullName) > 255)){
            validateEmpty('fullName', 'Поле не соответствует требованиям: <i>Фамилия Имя (Отчество)</i>, кириллицей', !preg_match('/^([а-яёА-ЯЁ]+-?[а-яёА-ЯЁ]+)( [а-яёА-ЯЁ]+-?[а-яёА-ЯЁ]+){1,2}$/Diu', $fullName));
        }
    }
    if(!validateEmpty('phone', 'Заполните поле', empty($phone))){
        if(!validateEmpty('phone', 'Длина поля > 50 символов', strlen($phone) > 50)){
            validateEmpty('phone', 'Поле не соответствует требованиям: <i>+7XXXXXXXXXX</i>', !preg_match('/^\+7[0-9]{10}$/Diu', $phone1));
        }
    }
    if(!validateEmpty('email', 'Заполните поле', empty($email))){
        if(!validateEmpty('email', 'Длина поля > 255 символов', strlen($email) > 255)){
            validateEmpty('email', 'Поле не соответствует требованиям: <i>example@mail.ru</i>', !preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/Diu', $email));
        }
    }
    if(!validateEmpty('birthday', 'Заполните поле', empty($birthday))){
        if(!validateEmpty('birthday', 'Некорректная дата', !preg_match('/^\d{4}-\d{2}-\d{2}$/Diu', $birthday))){
            validateEmpty('birthday', 'Некорректная дата', !checkdate(substr($birthday, 5, 2), substr($birthday, 8, 2), substr($birthday, 0, 4)));
        }
    }
    if(!validateEmpty('gender', 'Заполните поле', empty($gender))){
        validateEmpty('gender', 'Поле не соответствует требованиям', !in_array($gender, ['male', 'female']));
    }
    if(!validateEmpty('biography', 'Заполните поле', empty($biography))){
        validateEmpty('biography', 'Длина поля > 5000 символов', strlen($biography) > 5000);
    }

    if ($error) {
        include('form.php');
    } else {
        connectDatabase();
        if (!empty($_SESSION['user_id'])) {
            try {
                $dbUpdate = $db->prepare("UPDATE form_data SET fullName = :fullName, phone = :phone, email = :email, birthday = :birthday, gender = :gender, biography = :biography, agreement = :agreement WHERE user_id = :user_id");
                $dbUpdate->execute([
                    ':fullName' => $fullName,
                    ':phone' => $phone,
                    ':email' => $email,
                    ':birthday' => strtotime($birthday),
                    ':gender' => $gender,
                    ':biography' => $biography,
                    ':agreement' => $agreement,
                    ':user_id' => $_SESSION['user_id']
                ]);
                setcookie('save', '1', time() + 30 * 24 * 60 * 60); // сохранение на 1 месяц
                header('Location: ' . $_SERVER['PHP_SELF']);
                exit();
            } catch (PDOException $e) {
                print('Error : ' . $e->getMessage());
                exit();
            }
        } else {
            try {
                $dbInsert = $db->prepare("INSERT INTO form_data (user_id, fullName, phone, email, birthday, gender, biography, agreement) VALUES (:user_id, :fullName, :phone, :email, :birthday, :gender, :biography, :agreement)");
                $dbInsert->execute([
                    ':user_id' => $_SESSION['user_id'],
                    ':fullName' => $fullName,
                    ':phone' => $phone,
                    ':email' => $email,
                    ':birthday' => strtotime($birthday),
                    ':gender' => $gender,
                    ':biography' => $biography,
                    ':agreement' => $agreement
                ]);
                setcookie('save', '1', time() + 30 * 24 * 60 * 60); // сохранение на 1 месяц
                header('Location: ' . $_SERVER['PHP_SELF']);
                exit();
            } catch (PDOException $e) {
                print('Error : ' . $e->getMessage());
                exit();
            }
        }
    }
}
?>
