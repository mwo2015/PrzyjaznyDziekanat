<?php include('partials/header.php') ?>

<section class='mockup' id='panel-4'>
    <h1>Przyjazny dziekanat</h1>
    <h2>Panel prowadzącego [1/3]</h2>
    <p>Zalogowano jako: <span class='highlight'>Adam Nowak</span></p>
    <p>Moje zajęcia:</p>
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
            <p class='column'>Wydział:</p>
            <select>
                <option>wszystkie</option>
                <option>EAIE</option>
                <option>IMIR</option>
                <option>IMIC</option>
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
    <input type='submit' value='Szukaj' />

    <div class='side-button right'>Wyloguj</div>
</section>

<?php include('partials/footer.php') ?>
