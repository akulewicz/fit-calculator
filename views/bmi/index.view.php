<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitKalkulator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <nav class="top-navigation">
        <div class="logo"><span><i class="fa-solid fa-heart-pulse logo__icon"></i></span>FitKalkulator</div>
        <ul class="top-navigation__list">
            <li class="top-navigation__item"><a class="top-navigation__link" href="/bmi">Kalkulator BMI</a></li>
            <li class="top-navigation__item"><a class="top-navigation__link" href="/bmr">Kalkulator BMR</a></li>
        </ul>
    </nav>
    <section class="calculator">
        <div class="calculator__columns">
            <div class="index-description">
                <h2 class="index-description__heading">BMI</h2>
                <p class="index-description__text">Wsaźnik BMI (ang. Body Mass Index) pozwala obliczyć proporcję wagi do
                    wzrostu. Wartość BMI wskazuje, czy Twoja waga jest właściwa, czy może masz niedowagę, nadwagę lub
                    otyłość.</p>
            </div>
            <div class="calculator__form">
                <h1 class="calculator__heading">Kalkulator BMI</h1>
                <p class="calculator__description">Uzupełnij dane i sprawdź swoje BMI</p>
                <form class="bmi-form" method="POST">
                    <div class="bmi-form__inputs">
                        <p class="bmi-form__item">
                            <label for="height">Wzrost</label>
                            <input class="bmi-form__input" type="text" name="height" id="height" placeholder="cm">
                        </p>
                        <p class="bmi-form__item">
                            <label for="weight">Waga</label>
                            <input class="bmi-form__input" type="text" name="weight" id="weight" placeholder="kg">
                        </p>
                    </div>
                    <button class="bmi-form__button">Oblicz swoje BMI</button>
                </form>
                <div class="result-box">
                    <p>Twoje BMI wynosi: <span class="result"><?= $result ?? '-' ?></span></p>
                    <p>Oznacza to: -</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>