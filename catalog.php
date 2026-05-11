<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/catalog.css">
    <script src="js/searchTests.js" defer></script>
    <script src="js/test.js" defer></script>
    <title>Document</title>
</head>
<body>
<div class="wrap">
    <header>
    <div class="logo">
        <h1>26</h1>
        <h2>ДВАДЦАТЬШЕСТЫЕ</h2>
    </div>
</header>

    <h3>КАТАЛОГ</h3>

    <div class="search">
        <select id="filterLevel">
            <option value="all">Все</option>
            <option value="light">Легкий</option>
            <option value="medium">Средний</option>
            <option value="hard">Сложный</option>
        </select>
    </div>

    <div class="tests">

        <div class="test"  id="seachTest" data-level="light">
            <div class="link">
                    <img src="media\test1.jpg">
                    <div class="quaTime">
                        <p>10 вопросов</p>
                        <p>⌛ 15 минут</p>
                    </div>
                    <div class="level">
                        <p> Сложность ⚔︎</p>
                    </div>
            </div>
            <div class="text"> 
                <p>"Да НЕ продавала Екатерина II Аляску"</p> 
                <a href="tests\test1.php">Пройти тест</a>
            </div> 
        </div>


        <div class="test"  id="seachTest" data-level="medium">
            <div class="link">
                    <img src="media\test2.jpg">
                    <div class="quaTime">
                        <p>10 вопросов</p>
                        <p>⌛ 15 минут</p>
                    </div>
                    <div class="level">
                        <p> Сложность ⚔︎⚔︎</p>
                    </div>
            </div>
            <div class="text"> 
                <p> "А ты знал, что Никон старообрядец?" </p>
                <a href="tests\test2.php">Пройти тест</a>
            </div>
        </div>


        <div class="test"  id="seachTest" data-level="hard">
            <div class="link">
                    <img src="media\test3.jpg">
                    <div class="quaTime">
                        <p>10 вопросов</p>
                        <p>⌛ 15 минут</p>
                    </div>
                    <div class="level">
                        <p> Сложность ⚔︎⚔︎⚔︎</p>
                    </div>
            </div>
            <div class="text"> 
                <p>"Лера Грозная есть печенегов на обед" </p>
                <a href="tests\test3.php">Пройти тест</a>
            </div>
        </div>

    </div>


</div>
</body>
</html>