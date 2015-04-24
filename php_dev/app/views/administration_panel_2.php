<?php include('partials/header.php') ?>

    <section class='mockup' id='panel-7'>
        <h1>Przyjazny dziekanat</h1>
        <h2>Panel pracownika administracji [2/8]</h2>
        <p>Zalogowano jako: <span class='highlight'>Ktoś z dziekanatu</span></p>

        <p class='title'>Dodanie studenta:</p>

        <form class='wide'>
            <fieldset>
                <legend>Dane osobowe</legend>
                <div class='floated-left'>
                    <p class='column'>Nr albumu:</p>
                    <input type='text' class='medium' readonly value='00054743' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Imię:</p>
                    <input type='text' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Nazwisko:</p>
                    <input type='text' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Adres:</p>
                    <input type='text' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Telefon:</p>
                    <input type='text' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Email:</p>
                    <input type='text' />
                </div>
            </fieldset>
        </form>
        <form>
            <div>
                <p class='column'>Kierunek studiów:</p>
                <select>
                    <option>Elektronika</option>
                    <option>Informatyka</option>
                    <option>Automatyka i Robotyka</option>
                    <option>Elektrotechnika</option>
                </select>
            </div>
            <div>
                <p class='column'>Rok studiów:</p>
                <select>
                    <option>Rok 1</option>
                    <option>Rok 2</option>
                    <option>Rok 3</option>
                    <option>Rok 4</option>
                    <option>Rok 5</option>
                </select>
            </div>
            <div>
                <p class='column'>Grupa:</p>
                <select>
                    <option>Grupa 1</option>
                    <option>Grupa 2</option>
                    <option>Grupa 3</option>
                    <option>Grupa 4</option>
                </select>
                <p class='column'></p>
                <input type='submit' value='Zapisz' />
            </div>
        </form>

        <a href="/mow/php_dev/public/administracja-panel"><div class='side-button left'>Wstecz</div></a>
        <a href="/mow/php_dev/public/"><div class='side-button right'>Wyloguj</div></a>

    </section>

<?php include('partials/footer.php') ?>