<?php include('partials/header.php') ?>

  <section class='mockup' id='panel-2'>

    <h1>Przyjazny dziekanat</h1>
    <h2>Panel studenta [1/2]</h2>
    <p>Zalogowano jako: <span class='highlight'>Jan Kowalski</span> | Tryb studiów: <span class='highlight'>warunkowy</span></p>
    <div class='wrapper1'>
      <input type='radio' name='semestr' id='semestr1' checked='checked' />
      <label for='semestr1'>Semestr 1</label>
      <br />
      <input type='radio' name='semestr' id='semestr2' />
      <label for='semestr2'>Semestr 2</label>
    </div>
    <p class='title'>Moje przedmioty:</p>
    <select>
      <option>Algorytmika - wykład</option>
      <option>Algorytmika - laboratorium</option>
      <option>Sieci komputerowe - laboratorium</option>
      <option>Podstawy Java - wykład</option>
      <option>Podstawy Java - laboratorium</option>
    </select>
    <br />
    <a href="/mow/php_dev/public/student?page=2"><input type="submit" value='ok' /></a>


    <a href="/mow/php_dev/public/"><div class='side-button right'>Wyloguj</div></a>

  </section>

<?php include('partials/footer.php') ?>