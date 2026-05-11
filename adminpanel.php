<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/adminpanel.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <header>
        <div class = "logo">
            <h1>26</h1>
            <p>двадцатьшестые</p>
        </div>
        <div class="nav">
                <a href="catalog.html">Главная</a>
                <a href="catalog.html">Каталог</a>
                <a href="autoPage.php">Аккаунт</a>
            </div>
    </header>
    <?php
    require_once 'database/connection.php';
    $scenarios = $conn->query("SELECT * from scenarios");
    $scenarios = $scenarios->fetchAll();
    $questions = $conn->query("SELECT * from questions");
    $questions = $questions->fetchAll();
    $users = $conn->query("SELECT * from users");
    $users = $users->fetchAll();
    $results = $conn->query("SELECT * from results r JOIN users u ON r.user_id = u.id JOIN scenarios s ON r.scenario_id = s.id JOIN result_text e ON r.result_id = e.id");
    $results = $results->fetchAll();         
    ?>
    <div id="parent">
        <div class="tab active">
            <div class="link">
                <a href="#">Добавить тест</a>
            </div>
            <div class="text">
    <form action="addscenario.php" method="POST">
        <h3>Добавить сценарий</h3>
        <input type="text" name="title" placeholder="Название">
        <input type="text" name="description" placeholder="Описание">
        <input type="text" name="category" placeholder="Категория">
        <input type="submit" name="btnGame" value="Добавить сценарий" class="accent-button" id="submit">
    </form>
    <form action="addquestion.php" method="POST">
        <h3>Добавить вопрос</h3>
        <select name="scenario" id="">
            <?php foreach ($scenarios as $scenario) { ?>
                <option value="<?= $scenario["id"]; ?>"><?= $scenario["title"]; ?></option>
            <?php } ?>
        </select>
        <input type="text" name="question_text" placeholder="Описание">
        <input type="number" name="question_order" placeholder="Номер">
        <input type="submit" name="btnGame" value="Добавить сценарий" class="accent-button" id="submit">
    </form>
    <form action="addanswer.php" method="POST">
        <h3>Добавить ответ</h3>
         <select name="question" id="">
            <?php foreach ($questions as $question) { ?>
                <option value="<?= $question["id"]; ?>"><?= $question["question_text"]; ?></option>
            <?php } ?>
        </select>
        <input type="text" name="answer_text" placeholder="Описание">
        <input type="number" name="score" placeholder="Баллы">
        <input type="submit" name="btnGame" value="Добавить сценарий" class="accent-button" id="submit">
    </form>
            </div>
        </div>
        <div class="tab">
            <div class="link">
                <a href="#">Удалить тест</a>
            </div>
            <div class="text">
                <form action="delete.php" method="POST">
                <?php foreach ($scenarios as $scenario) { ?>
                <h3><?= $scenario['title']; ?></h3>
                <p><?= $scenario['description']; ?></p>
               <input type="submit" name="btnGame" value="Удалить сценарий" class="accent-button" id="submit">
               <input type="hidden" name="id" value="<?= $scenario['id'] ?>" class="accent-button">
            <?php } ?></form>
            </div>
        </div>
        <div class="tab">
            <div class="link">
                <a href="#">Изменить тест</a>
            </div>
            <div class="text">
                <form action="updatequestion.php" method="POST">
                <?php foreach ($questions as $question) { ?>
                <h3><?= $question['question_text']; ?></h3>
               <input type="number" name="question_order[<?= $question['id'] ?>]" value="<?= $question['question_order'] ?>" class="accent-button">
               <button type="submit" id="submit">Сохранить порядок</button>
            <?php } ?>
        
        </form>
            </div>
        </div>
        <div class="tab">
            <div class="link">
                <a href="#">Посмотреть историю</a>
            </div>
            <div class="text">
                <?php foreach ($results as $result) { ?>
                <div class="history">
                <p>Пользователь: <?= $result['login']; ?></p>
                <p><?= $result['title']; ?></p>
                <div class="top"><p><?= $result['passed_at']; ?></p>
                <p><?= $result['total_score']; ?> баллов</p></div>
                <p>Результат: <?= $result['title_text']; ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <a href="" class="">Главная</a></div>
    <a href="php/logOut.php" class="">Выйти</a></div>
</body>
</html>
