<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Задание 5</title>
</head>
<body class="bg-gray-900 h-screen flex items-center justify-center">
<div class="flex flex-col gap-2 border-2 border-white/10 rounded-xl text-white p-4 w-1/4">
    <form  class="flex flex-col gap-2" method="post">
        <h3 class="text-3xl font-semibold text-center">Форма</h3>
        <div class="message"><?php if(isset($messages['success'])) echo $messages['success']; ?></div>
        <div class="message message_info"><?php if(isset($messages['info'])) echo $messages['info']; ?></div>
        <div class="flex flex-col gap-1">
            <p class="text-xs text-white/20">Фамилия, имя и отчество</p>
            <input class="rounded-lg p-1 border-2 border-white/10 bg-gray-900 text-sm w-full <?php echo ($errors['fullName'] != NULL) ? 'borred' : ''; ?>" value="<?php echo $values['fullName']; ?>" type="text" name="fullName" placeholder="Введите фамилию, имя и отчество...">
            <div><?php echo $messages['fullName']?></div>
        </div>
        <div class="flex flex-col gap-1">
            <p class="text-xs text-white/20">Номер мобильного телефона</p>
            <input class="rounded-lg p-1 border-2 border-white/10 bg-gray-900 text-sm w-full <?php echo ($errors['phone'] != NULL) ? 'borred' : ''; ?>" value="<?php echo $values['phone']; ?>" type="tel" name="phone" placeholder="Введите номер телефона...">
            <div><?php echo $messages['phone']?></div>
        </div>
        <div class="flex flex-col gap-1">
            <p class="text-xs text-white/20">Адрес электронной почты</p>
            <input class="rounded-lg p-1 border-2 border-white/10 bg-gray-900 text-sm w-full <?php echo ($errors['email'] != NULL) ? 'borred' : ''; ?>" value="<?php echo $values['email']; ?>" type="email" name="email" placeholder="Введите адрес электронной почты...">
            <div><?php echo $messages['email']?></div>
        </div>
        <div class="flex flex-col gap-1">
            <p class="text-xs text-white/20">Дата рождения</p>
            <input class="rounded-lg p-1 border-2 border-white/10 bg-gray-900 text-sm w-full <?php echo ($errors['birthday'] != NULL) ? 'borred' : ''; ?>" value="<?php if(strtotime($values['birthday']) > 100000) echo $values['birthday']; ?>" type="date" name="birthday">
            <div><?php echo $messages['birthday']?></div>
        </div>
        <div class="ent">
            <div>Пол:</div>
            <label>
                <input type="radio" name="gender" value="male" <?php if($values['gender'] == 'male') echo 'checked'; ?>>
                <span class="<?php echo ($errors['gender'] != NULL) ? 'colred' : ''; ?>">Мужской</span>
            </label>
            <br>
            <label>
                <input type="radio" name="gender" value="female" <?php if($values['gender'] == 'female') echo 'checked'; ?>>
                <span class="<?php echo ($errors['gender'] != NULL) ? 'colred' : ''; ?>">Женский</span>
            </label>
            <div><?php echo $messages['gender']?></div>
        </div>
        <div class="ent">
            <select class="rounded-lg p-1 border-2 border-white/10 bg-gray-900 text-sm w-full <?php echo ($errors['like_lang'] != NULL) ? 'borred' : ''; ?>" name="like_lang[]" id="like_lang" multiple="multiple">
                <option disabled selected>Любимый язык программирования</option>
                <option value="Pascal" <?php echo (in_array('Pascal', $like_langsa)) ? 'selected' : ''; ?>>Pascal</option>
                <option value="C" <?php echo (in_array('C', $like_langsa)) ? 'selected' : ''; ?>>C</option>
                <option value="C++" <?php echo (in_array('C++', $like_langsa)) ? 'selected' : ''; ?>>C++</option>
                <option value="JavaScript" <?php echo (in_array('JavaScript', $like_langsa)) ? 'selected' : ''; ?>>JavaScript</option>
                <option value="PHP" <?php echo (in_array('PHP', $like_langsa)) ? 'selected' : ''; ?>>PHP</option>
                <option value="Python" <?php echo (in_array('Python', $like_langsa)) ? 'selected' : ''; ?>>Python</option>
                <option value="Java" <?php echo (in_array('Java', $like_langsa)) ? 'selected' : ''; ?>>Java</option>
                <option value="Haskel" <?php echo (in_array('Haskel', $like_langsa)) ? 'selected' : ''; ?>>Haskel</option>
                <option value="Clojure" <?php echo (in_array('Clojure', $like_langsa)) ? 'selected' : ''; ?>>Clojure</option>
                <option value="Prolog" <?php echo (in_array('Prolog', $like_langsa)) ? 'selected' : ''; ?>>Prolog</option>
                <option value="Scala" <?php echo (in_array('Scala', $like_langsa)) ? 'selected' : ''; ?>>Scala</option>
            </select>
            <div><?php echo $messages['like_lang']?></div>
        </div>
        <div>
            <textarea name="biography" placeholder="Биография" class="rounded-lg p-1 border-2 border-white/10 bg-gray-900 text-sm w-full <?php echo ($errors['biography'] != NULL) ? 'borred' : ''; ?>"><?php echo $values['biography']; ?></textarea>
            <div><?php echo $messages['biography']?></div>
        </div>
        <div>
            <input type="checkbox" name="agreement" id="agreement" <?php echo ($values['agreement'] != NULL) ? 'checked' : ''; ?>>
            <label for="agreement" class="text-sm <?php echo ($errors['agreement'] != NULL) ? 'colred' : ''; ?>">С контрактом ознакомлен (а)</label>
            <div><?php echo $messages['agreement']?></div>
        </div>
        <?php
            if($log) echo '<button type="submit" class="editBut">Изменить</button>';
            else echo '<button type="submit" class="p-2 rounded-lg bg-green-600 text-sm hover:bg-opacity-90 transition-colors hover:shadow-lg">Отправить</button>';
        ?>
    </form>
        <div class="mt-2 flex justify-between items-center w-full">
            <p class="text-sm opacity-50">Войдите в аккаунт</p>
            <?php
            if($log) echo '<button type="submit" class="logout_form" name="logout_form">Выйти</button>';
            else echo '<a href="login.php" class="p-2 rounded-lg bg-gray-600 text-sm hover:bg-opacity-90 transition-colors hover:shadow-lg" name="logout_form">Войти</a>';
            ?>
        </div>
  </div>
</body>
</html>