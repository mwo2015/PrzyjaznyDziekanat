<?php include('partials/header.php') ?>
    <section class='mockup' id='panel-11'>
        <h1>Przyjazny dziekanat</h1>
        <h2>Panel pracownika administracji [7/8]</h2>
        <p>Zalogowano jako: <span class='highlight'>Ktoś z dziekanatu</span></p>

        <p class='title'>Definiowanie zakończenia semestru:</p>
        <form>
            <div>
                <p class='column'>Koniec 1 semestru:</p>
                <input type='text' value='02-02-2015' />
            </div>
            <div>
                <p class='column'>Koniec 2 semestru:</p>
                <input type='text' value='30-06-2015' />
                <p class='column'></p>
                <input type='submit' value='Zapisz' />
            </div>
        </form>

        <a href="/mow/php_dev/public/administracja-panel"><div class='side-button left'>Wstecz</div></a>
        <a href="/mow/php_dev/public/"><div class='side-button right'>Wyloguj</div></a>

    </section>

<?php include('partials/footer.php') ?>