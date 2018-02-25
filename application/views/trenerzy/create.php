<div class="view_container"><br>
<h2><?= $title?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('trenerzy/create'); ?>
<form>

  <div class="form-group">
  	<label>Imię</label>
    <input type="text" class="form-control" title="Wprowadź imię trenera." name="imie" required>
  </div>

  <div class="form-group">
    <label>Nazwisko</label>
    <input type="text" class="form-control" title="Wprowadź nazwisko trenera." name="nazwisko" required>
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
  
  <button type="submit" class="btn btn-primary">Dodaj</button>
</form>
</div>