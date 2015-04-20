<?php include('partials/header.php') ?>

  <section class='mockup' id='panel-2'>
    <h1>Przyjazny dziekanat</h1>
    <h2>Panel studenta [1/2]</h2>
    <p>Zalogowano jako: <span class='highlight'>Jan Kowalski</span></p>
    <div class='wrapper1'>
      <input type='radio' name='semestr' id='semestr1' checked='checked' />
      <label for='semestr1'>Semestr 1</label>
      <br />
      <input type='radio' name='semestr' id='semestr2' />
      <label for='semestr2'>Semestr 2</label>
    </div>
    <p>Moje przedmioty:</p>
    <select>
      <option>Algorytmika - wykład</option>
      <option>Algorytmika - laboratorium</option>
      <option>Sieci komputerowe - laboratorium</option>
      <option>Podstawy Java - wykład</option>
      <option>Podstawy Java - laboratorium</option>
    </select>
    <br />
    <a href="2"><input type='submit' value='OK' /></a>

    <a href="login"><div class='side-button right'>Wyloguj</div></a>
  </section>

<?php include('partials/footer.php') ?>