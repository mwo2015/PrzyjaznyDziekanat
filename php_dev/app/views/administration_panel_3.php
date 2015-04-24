<?php include('partials/header.php') ?>

    <section class='mockup' id='panel-8'>
        <h1>Przyjazny dziekanat</h1>
        <h2>Panel pracownika administracji [3/8]</h2>
        <p>Zalogowano jako: <span class='highlight'>Ktoś z dziekanatu</span></p>

        <p class='title'>Dodanie prowadzącego:</p>

        <form>
            <div>
                <p class='column'>Imię:</p>
                <input type='text' />
            </div>
            <div>
                <p class='column'>Nazwisko:</p>
                <input type='text' />
            </div>
            <div>
                <p class='column'>Tytuł naukowy:</p>
                <input type='text' />
            </div>
            <div>
                <p class='column'>Adres:</p>
                <input type='text' />
            </div>
            <div>
                <p class='column'>Telefon:</p>
                <input type='text' />
            </div>
            <div>
                <p class='column'>Email:</p>
                <input type='text' />
                <p class='column'></p>
                <input type='submit' value='Zapisz' />
            </div>
        </form>

        <a href="/mow/php_dev/public/administracja-panel"><div class='side-button left'>Wstecz</div></a>
        <a href="/mow/php_dev/public/"><div class='side-button right'>Wyloguj</div></a>

    </section>

<?php include('partials/footer.php') ?>