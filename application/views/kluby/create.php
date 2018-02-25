<div class="view_container">
<br><h2><?= $title?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('kluby/create'); ?>
<form>

  <div class="form-group">
  	<label>Nazwa</label>
    <input type="text" class="form-control" title="Wprowadź nazwę klubu." name="nazwa" required>
  </div>

  <div class="form-group">
    <label>Data założenia</label>
    <input type="text" class="form-control" title="Wprowadź datę w formacie RRRR-MM-DD." name="data_zalozenia" required>
  </div>

  <div class="form-group">
  	<label>Kraj</label>
    <select class="form-control" title="Wybierz kraj."  name="kraj" required>
       <?php foreach($kraje as $kraj) : ?>
      <option>
          <?php echo $kraj['nazwa_kraju']; ?> 
      </option>
    <?php endforeach; ?>
      </select>
  </div>

  <div class="form-group">
    <label>Stadion</label>
    <select class="form-control" title="Wybierz stadion."  name="stadion">
       <?php foreach($stadiony as $stadion) : ?>
      <option>
          <?php echo $stadion['nazwa_stadionu']; ?> 
      </option>
    <?php endforeach; ?>
      </select>
  </div>

  <div class="form-group">
    <label>Trener</label>
    <select class="form-control" title="Wybierz trenera."  name="trener">
       <?php foreach($trenerzy as $trener) : ?>
      <option>
          <?php echo $trener['nazwisko_trenera']; ?> 
      </option>
    <?php endforeach; ?>
      </select>
  </div>

  <div class="form-group">
    <label>Liga</label>
    <select class="form-control" title="Wybierz ligę."  name="liga">
       <?php foreach($ligi as $liga) : ?>
      <option>
          <?php echo $liga['nazwa_ligi']; ?> 
      </option>
    <?php endforeach; ?>
      </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Dodaj</button>
</form>
</div>