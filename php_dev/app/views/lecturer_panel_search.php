<?php include('partials/header.php') ?>

<section class='mockup' id='panel-4'>
    <h1>Przyjazny dziekanat</h1>
    <h2>Panel prowadzącego [1/3]</h2>
    <p>Zalogowano jako: <span class='highlight'>Adam Nowak</span></p>
    <p class='title'>Moje zajęcia:</p>
    <form>
        <div>
            <p class='column'>Przedmiot:</p>
            <select>
                <option>wszystkie</option>
                <option>Podstawy Java - wykład</option>
                <option>Podstawy Java - laboratorium</option>
            </select>
        </div>
        <div>
            <p class='column'>Kierunek:</p>
            <select>
                <option>wszystkie</option>
                <option>Elektronika</option>
                <option>Informatyka</option>
                <option>Automatyka i Robotyka</option>
                <option>Elektrotechnika</option>
            </select>
        </div>
        <div>
            <p class='column'>Tryb:</p>
            <select>
                <option>wszystkie</option>
                <option>Studia dzienne</option>
                <option>Studia zaoczne</option>
                <option>Studia podyplomowe</option>
            </select>
        </div>
        <div>
            <p class='column'>Rok studiów:</p>
            <select>
                <option>wszystkie</option>
                <option>Rok 1</option>
                <option>Rok 2</option>
                <option>Rok 3</option>
                <option>Rok 4</option>
                <option>Rok 5</option>
            </select>
        </div>
        <div>
            <p class='column'>Semestr:</p>
            <select>
                <option>wszystkie</option>
                <option>Semestr 1</option>
                <option>Semestr 2</option>
            </select>
        </div>
        <div>
            <p class='column'>Grupa:</p>
            <select>
                <option>wszystkie</option>
                <option>Grupa 1</option>
                <option>Grupa 2</option>
                <option>Grupa 3</option>
            </select>
        </div>
    </form>
    <a href="/mow/php_dev/public/wykladowca-wyszukaj-wyniki"><input type='submit' value='Szukaj' /></a>

    <a href="/mow/php_dev/public/"><div class='side-button right'>Wyloguj</div></a>
</section>

<?php include('partials/footer.php') ?>
