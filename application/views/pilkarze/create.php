<div class="view_container">
  <br>
<h2><?= $title?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('pilkarze/create'); ?>
<form>

  <div class="form-group">
  	<label>Imię piłkarza</label>
    <input type="text" class="form-control" title="Wprowadź imię piłkarza. " required name="imie_pilkarza">
  </div>

  <div class="form-group">
    <label>Nazwisko piłkarza</label>
    <input type="text" class="form-control" title="Wprowadź nazwisko piłkarza."  required name="nazwisko_pilkarza">
  </div>
  
  <div class="form-group">
    <label>Wartość</label>
    <input type="text" class="form-control" title="Wprowadź wartość piłkarza. " required name="wartosc_pilkarza">
  </div>

  <div class="form-group">
  	<label>Pozycja</label>
    <select class="form-control" title="Wybierz pozycję."  name="pozycja">
       <?php foreach($pozycje as $pozycja) : ?>
      <option>
          <?php echo $pozycja['nazwa_pozycji']; ?> 
      </option>
    <?php endforeach; ?>
      </select>
  </div>

  <div class="form-group">
    <label>Narodowość</label>
    <select class="form-control" title="Wybierz narodowość."  name="kraj">
       <?php foreach($kraje as $kraj) : ?>
      <option>
          <?php echo $kraj['nazwa_kraju']; ?> 
      </option>
    <?php endforeach; ?>
      </select>
  </div>

  <div class="form-group">
    <label>Klub</label>
    <select class="form-control" title="Wybierz klub."  name="klub">
       <?php foreach($kluby as $klub) : ?>
      <option>
          <?php echo $klub['nazwa_klubu']; ?> 
      </option>
    <?php endforeach; ?>
      </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Dodaj</button>
<?php echo form_close(); ?>
</div>