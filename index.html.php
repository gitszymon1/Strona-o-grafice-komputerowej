<!DOCTYPE html>
<html lang="pl">

<head>
   
    <title>Grafika Komputerowa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #1e3a5f;
            color: #f5f5f5;
            line-height: 1.6;
            font-size: 16px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #header,
        #footer {
            background-color: #264e70;
            color: #f8f9fa;
            text-align: center;
            padding: 40px;
            font-size: 30px;
            font-weight: bold;
        }

        #nav {
            background-color: #1b2a41;
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
            color: #f8f9fa;
            text-decoration: none;
            font-size: 22px;
            transition: color 0.3s ease;
        }

        #nav ul li a:hover {
            color: #ffcc00;
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
            color: #ffcc00;
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

        .content .image img {
            
            max-width: 65%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        
        
    </style>
</head>

<body>
    <div id="header">Grafika Komputerowa</div>
    <div id="nav">
        <ul>
            <li><a href="Grafika wektorowa.php">Grafika Wektorowa</a></li>
            <li><a href="Grafika rastrowa.php">Grafika Rastrowa</a></li>
            <li><a href="Trójwymiar.php">Trójwymiar</a></li>
            <li><a href="Kompendium podstrona.php">Kompendium</a></li>
        </ul>
    </div>

    <div class="content">
      
        <div class="text">
            <h2>Co to jest Grafika komputerowa?</h2>
            <p>Grafika komputerowa to technologia tworzenia i edytowania obrazów za pomocą komputerów. Stosuje się ją w wielu dziedzinach, takich jak projektowanie, gry komputerowe, filmy, reklama i inne.</p>

            <h2>Historia grafiki komputerowej</h2>
            <p>Grafika komputerowa zaczęła się rozwijać w latach 50. XX wieku. W 1962 roku stworzono pierwszą grę komputerową *Spacewar!*. W latach 80-tych popularne stały się programy takie jak *Illustrator* i *Photoshop*. W 1995 roku powstał pierwszy film animowany w pełni komputerowo stworzony – *Toy Story*.</p>

            <h2>Rodzaje grafiki komputerowej</h2>
            <ul>
                <li><strong>Grafika rastrowa</strong> – obrazy tworzone z pikseli, np. zdjęcia.</li>
                <li><strong>Grafika wektorowa</strong> – obrazy tworzone na podstawie matematycznych kształtów, np. logo.</li>
                <li><strong>Grafika 3D</strong> – trójwymiarowe modele wykorzystywane w filmach i grach.</li>
            </ul>

            <h2>Zastosowanie grafiki komputerowej</h2>
            <ul>
                <li>Tworzenie stron internetowych.</li>
                <li>Projektowanie gier komputerowych.</li>
                <li>Tworzenie reklam i logo.</li>
                <li>Wizualizacje w budownictwie i inżynierii.</li>
                <li>Produkcja efektów specjalnych w filmach.</li>
            </ul>
        </div>

      
        <div class="image">
            <h2>Przykładowe Zdjęcie</h2>
            <img src="komputerowa.jpg" alt="Grafika komputerowa">
            <p>Obraz przedstawiający przykładową grafikę komputerową.</p>
            <h2>Inne Przykłady</h2>
            <img src="komputerowa2.jpg" alt="Przykładowa grafika">
            <p>Drugi przykład zastosowania grafiki komputerowej.</p>
        </div>
    </div>

</body>

</html>
