<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Grafika Rastrowa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0d2c18; 
            color: #f5f5f5;
            line-height: 1.6;
            font-size: 16px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #header,
        #footer {
            background-color: #093015; 
            color: #f8f9fa;
            text-align: center;
            padding: 40px;
            font-size: 30px;
            font-weight: bold;
        }

        #nav {
            background-color: #165b33; 
            color: white;
            padding: 20px;
            font-size: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        #nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        #nav ul li {
            margin: 0 20px;
        }

        #nav ul li a {
            color: #4caf50; 
            text-decoration: none;
            font-size: 22px;
            transition: color 0.3s ease;
        }

        #nav ul li a:hover {
            color: #0d47a1; 
        }

        .content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-top: 20px;
            padding: 0 20px;
        }

        .content .text {
            flex: 1;
            margin-right: 20px;
        }

        .content .text h2 {
            text-align: left;
            font-size: 24px;
            margin-bottom: 20px;
            color: #0d47a1; 
        }

        .content .text ul {
            margin-top: 10px;
        }

        .content .text ul li {
            margin-bottom: 8px;
        }

        .content .image {
            flex: 1;
            text-align: center;
        }

        .content .image h2 {
            color: #0d47a1; 
        }

        .content .image img {
            width: 56%;
            max-width: 100%;
            height: auto;
            border-radius:10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div id="header">Grafika Rastrowa</div>
    <div id="nav">
        <ul>
        <ul> <li><a href="Strona internetowa grafika.php">Grafika komputerowa</a></li>
            <li><a href="Grafika wektorowa.php">Grafika Wektorowa</a></li>
            <li><a href="Trójwymiar.php">Trójwymiar</a></li>
            <li><a href="Kompendium podstrona.php">Kompendium</a></li>
        </ul>
    </div>

    <div class="content">
      
        <div class="text">
            <h2>Co to jest Grafika Rastrowa?</h2>
            <p>Grafika rastrowa to technika tworzenia obrazów za pomocą pikseli – najmniejszych jednostek obrazu. Każdy piksel ma swój kolor i razem tworzą pełen obraz. Przykłady grafiki rastrowej to zdjęcia cyfrowe, obrazy zapisane w formatach JPEG, PNG, BMP.</p>

            <h2>Historia grafiki rastrowej</h2>
            <p>Początki grafiki rastrowej sięgają lat 60. XX wieku, kiedy zaczęto stosować monitory CRT do wyświetlania obrazów. Pierwsze formaty graficzne, takie jak BMP, pojawiły się w latach 80. Popularność zyskały również programy graficzne, np. Adobe Photoshop (1990), który zrewolucjonizował edycję zdjęć.</p>

            <h2>Charakterystyka grafiki rastrowej</h2>
            <ul>
                <li>Obraz składa się z pikseli.</li>
                <li>Jakość obrazu zależy od rozdzielczości.</li>
                <li>Nie można go dowolnie powiększać bez utraty jakości.</li>
                <li>Popularne formaty: JPEG, PNG, GIF, BMP.</li>
            </ul>

            <h2>Zastosowanie grafiki rastrowej</h2>
            <ul>
                <li>Fotografia cyfrowa.</li>
                <li>Tworzenie tekstur w grach komputerowych.</li>
                <li>Obróbka i edycja zdjęć.</li>
                <li>Projektowanie stron internetowych.</li>
                <li>Tworzenie plakatów i grafik reklamowych.</li>

                <h2>Co to są piksele ?</h2>
            <p>Piksele to fundamentalne, najmniejsze adresowalne jednostki składowe obrazów rastrowych (bitmapowych) wyświetlanych na ekranach cyfrowych. Każdy piksel jest dyskretnym elementem o określonym położeniu w dwuwymiarowej siatce (określanym przez jego współrzędne) i zawiera informacje o kolorze oraz jasności w tym konkretnym punkcie obrazu. To właśnie te mikroskopijne, kolorowe kwadraciki, zgromadzone w ogromnej liczbie, tworzą iluzję ciągłego i złożonego obrazu, jaki widzimy na monitorach komputerów, ekranach smartfonów, telewizorach i innych urządzeniach cyfrowych. Rozdzielczość obrazu rastrowego jest określana przez liczbę pikseli w poziomie i pionie – im więcej pikseli, tym większa szczegółowość i potencjalna jakość obrazu</p>
            </ul>
        </div>

        <div class="image">
            <h2>Przykładowe Zdjęcie</h2>
            <img src="d.jpg" alt="Grafika rastrowa">
            <p>Obraz przedstawiający przykładową grafikę rastrową.</p>
            <h2>Inne Przykłady</h2>
            <img src="raster.jpg" alt="Przykład grafiki rastrowej">
            <p>Drugi przykład zastosowania grafiki rastrowej.</p>
            <img src="vectorraster.jpg" alt="Przykład grafiki rastrowej">
            <p>Trzeci przykład zastosowania grafiki rastrowej.</p>
        </div>
    </div>

</body>

</html>