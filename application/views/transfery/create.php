<div class="view_container">
  <br>
<h2><?= $title?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('transfery/create'); ?>
<form>

  <div class="form-group">
  	<label>Kwota</label>
    <input type="text" class="form-control" title="Wprowadź kwotę transferu. " name="kwota" required>
  </div>

  <div class="form-group">
    <label>Data transferu</label>
    <input type="text" class="form-control" title="Wprowadź datę transferu w formacie RRRR-MM-DD." name="data_transferu" required>
  </div>
  

  <div class="form-group">
  	<label>Klub pozyskujący</label>
    <select class="form-control" title="Wybierz klub pozyskujący."  name="klub_pozyskujacy">
       <?php foreach($kluby as $klub) : ?>
      <option>
          <?php echo $klub['nazwa_klubu']; ?> 
      </option>
    <?php endforeach; ?>
      </select>
  </div>

  <div class="form-group">
    <label>Piłkarz</label>
    <select class="form-control" title="Wybierz piłkarza."  name="pilkarz">
       <?php foreach($pilkarze as $pilkarz) : ?>
      <option>
          <?php echo $pilkarz['nazwisko_pilkarza']; ?>
      </option>
    <?php endforeach; ?>
      </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Dodaj</button>
</form>
</div>