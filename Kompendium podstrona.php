<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Kompendium Grafiki Komputerowej</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #cc0000; /* Czerwone tło */
            color: #f5f5f5;
            line-height: 1.6;
            font-size: 16px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #header,
        #footer {
            background-color: #990000; /* Ciemniejsza czerwień */
            color: #f8f9fa;
            text-align: center;
            padding: 40px;
            font-size: 30px;
            font-weight: bold;
        }

        #nav {
            background-color: #b30000; /* Średnia czerwień */
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
            color: #ff4d4d; /* Jasnoczerwone linki */
            text-decoration: none;
            font-size: 22px;
            transition: color 0.3s ease;
        }

        #nav ul li a:hover {
            color: #ff9900; /* Pomarańczowy po najechaniu */
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
            color: #ff9900; /* Pomarańczowe nagłówki */
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
            color: #ff9900; /* Pomarańczowe nagłówki w sekcji obrazków */
        }

        .content .image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div id="header">Kompendium Grafiki Komputerowej</div>
    <div id="nav">
        <ul>
            <li><a href="Grafika wektorowa.php">Grafika Wektorowa</a></li>
            <li><a href="Grafika rastrowa.php">Grafika Rastrowa</a></li>
            <li><a href="Trójwymiar.php">Trójwymiar</a></li>
            <li><a href="Kompendium.php">Kompendium</a></li>
        </ul>
    </div>

    <div class="content">
     
        <div class="text">
            <h2>Czym jest grafika komputerowa?</h2>
            <p>Grafika komputerowa to dziedzina zajmująca się tworzeniem, edycją i renderowaniem obrazów cyfrowych. Obejmuje zarówno grafikę rastrową, wektorową, jak i trójwymiarową.</p>

            <h2>Podstawowe rodzaje grafiki</h2>
            <ul>
                <li><strong>Grafika rastrowa</strong> – oparta na pikselach, używana w fotografiach i obrazach cyfrowych.</li>
                <li><strong>Grafika wektorowa</strong> – tworzona za pomocą równań matematycznych, stosowana w logo i ikonach.</li>
                <li><strong>Grafika trójwymiarowa</strong> – bazuje na modelach przestrzennych, wykorzystywana w animacjach i grach.</li>
            </ul>

            <h2>Narzędzia do grafiki komputerowej</h2>
            <ul>
                <li><strong>Adobe Photoshop</strong> – edycja grafiki rastrowej.</li>
                <li><strong>Adobe Illustrator</strong> – tworzenie grafiki wektorowej.</li>
                <li><strong>Blender</strong> – modelowanie i animacja 3D.</li>
                <li><strong>GIMP</strong> – darmowa alternatywa dla Photoshopa.</li>
                <li><strong>CorelDRAW</strong> – narzędzie do grafiki wektorowej.</li>
            </ul>

            <h2>Zastosowanie grafiki komputerowej</h2>
            <ul>
                <li>Tworzenie stron internetowych.</li>
                <li>Projektowanie reklam i plakatów.</li>
                <li>Grafika do gier i filmów.</li>
                <li>Wizualizacje architektoniczne.</li>
                <li>Obróbka fotografii.</li>
    </ul>
            <ul>
                <h2>Charakterystyczne cechy kompendium grafiki komputerowej</h2>
                <li>Szeroki zakres: Obejmuje wiele dziedzin grafiki komputerowe</li>
                <li>Usystematyzowane: Wiedza logicznie uporządkowana</li>
                <li>Kompletne: Dąży do pokrycia kluczowych zagadnień</li>
                <li>Różny poziom: Może być dla początkujących i zaawansowanych</li>
                <li>Ilustrowane: Zawiera przykłady i grafiki</li>
    </ul>
            </ul>
        </div>

        <div class="image">
            <h2>Przykładowe Zdjęcie</h2>
            <img src="ksiazka.jpg" alt="Grafika komputerowa">
            <p>Obraz przedstawiający przykłady różnych typów grafiki komputerowej.</p>
            <h2>Inne Przykłady</h2>
            <img src="ksiazka2.jpg" alt="Przykład grafiki komputerowej">
            <p>Drugi przykład zastosowania grafiki komputerowej.</p>
           
        
        </div>
    </div>

</body>

</html>

