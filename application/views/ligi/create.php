<div class="view_container">
<br><h2><?= $title?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('ligi/create'); ?>
<form>
  <div class="form-group">
  	<label>Nazwa</label>
    <input type="text" class="form-control" title="Wprowadź nazwę ligi." name="nazwa" required>
  </div>
  <div class="form-group">
  	<label>Szczebel</label>
    <select class="form-control" title="Wybierz szczebel."  name="szczebel" required >
       <?php for($x = 1; $x <= 10; $x++) : ?>
	    <option><?php echo $x; ?></option>
		<?php endfor; ?>
      </select>
  </div>
  <div class="form-group" >
  	<label>Ilość drużyn</label>
    <select class="form-control" title="Wybierz ilość drużyn."  name="ilosc" >
        <?php for($x = 1; $x <= 32; $x++) : ?>
	    <option><?php echo $x; ?></option>
		<?php endfor; ?>
      </select>
  </div>
  <div class="form-group">
      <label>Kraj</label>
      <select class="form-control" title="Wybierz kraj."  name="kraj">
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