<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitKalkulator</title>
</head>
<body>
    <nav class="top-navigation">
        <img src="" alt="FitKalkulator" class="logo">
        <ul class="top-navigation__list">
            <li class="top-navigation__item">Kalkulator BMI</li>
            <li class="top-navigation__item">Kalkulator BMR</li>
        </ul>
    </nav>
    <section class="calculator">
        <h1 class="calculator__heading">Kalkulator BMI</h1>
        <p class="calculator__description">Uzupełnij dane i sprawdź swoje BMI</p>
        <form class="bmi-form" method="POST">
            <div class="bmi-form__inputs">
                <p>
                    <label for="height">Wzrost</label>
                    <input type="text" name="height" id="height">
                </p>
                <p>
                    <label for="weight">Waga</label>
                    <input type="text" name="weight" id="weight">
                </p>
            </div>
            <button class="bmi-form__button">Oblicz swoje BMI</button>
        </form>
        <div class="result-box">
            <p>BMI wynosi: <?= $result ?? '-' ?></p>
        </div>
    </section>
    
</body>
</html>