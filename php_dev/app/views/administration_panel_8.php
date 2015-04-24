<?php include('partials/header.php') ?>

    <section class='mockup' id='panel-12'>
        <h1>Przyjazny dziekanat</h1>
        <h2>Panel pracownika administracji [8/8]</h2>
        <p>Zalogowano jako: <span class='highlight'>Ktoś z dziekanatu</span></p>

        <p class='title'>Edytowanie zajęć:</p>

        <form>
            <div>
                <p class='column'>Nazwa:</p>
                <select>
                    <option>Algorytmika - wykład</option>
                    <option>Algorytmika - laboratorium</option>
                    <option>Sieci komputerowe - laboratorium</option>
                    <option>Podstawy Java - wykład</option>
                    <option>Podstawy Java - laboratorium</option>
                </select>
            </div>
            <div>
                <p class='column'>Edytuj nazwę:</p>
                <input type='text' value='Algorytmika - wykład' />
            </div>
            <div>
                <p class='column'>Edytuj kierunek:</p>
                <select>
                    <option>Elektronika</option>
                    <option>Informatyka</option>
                    <option>Automatyka i Robotyka</option>
                    <option>Elektrotechnika</option>
                </select>
            </div>
            <p class='column'>Edytuj rok:</p>
            <select>
                <option>Rok 1</option>
                <option>Rok 2</option>
                <option>Rok 3</option>
                <option>Rok 4</option>
                <option>Rok 5</option>
            </select>
            </div>
            <div>
                <fieldset>
                    <legend>Edytuj prowadzących</legend>
                    <p><input id='prow_11' type='checkbox' /> <label for='prow_11'>prof. Gąbka Baltazar</label>
                        <input id='prow_21'type='checkbox' /> <label for='prow_21'>dr Nowak Jan </label><br />
                        <input id='prow_31'type='checkbox' /> <label for='prow_31'>prof. Kowalski Jan</label>
                        <input id='prow_41'type='checkbox' /> <label for='prow_41'>prof. Wiśniewski Henryk</label> </p>
                </fieldset>
                <p></p>
                <input type='submit' value='Zapisz' />
            </div>
        </form>

        <a href="/mow/php_dev/public/administracja-panel"><div class='side-button left'>Wstecz</div></a>
        <a href="/mow/php_dev/public/"><div class='side-button right'>Wyloguj</div></a>

    </section>

<?php include('partials/footer.php') ?>