<div class="view_container">
  <br>
  <h1>Trener <?php echo $trener['imie_trenera']; ?> <?php echo $trener['nazwisko_trenera']; ?></h1>
  <h5 class="napis">Wartość(€): <?php echo $trener['wartosc_pilkarza']; ?></h5>
  <h5 class="napis">Narodowość: <?php echo $trener['nazwa_kraju']; ?></h5>
  <a href="<?php echo site_url(); ?>kluby/<?php echo $trener['ID_klub_PK'];?>"><h5 class="link">Klub: <?php echo $trener['nazwa_klubu']; ?></h5></a>
 <hr>
	 <button onclick="goBack()" class="btn btn-outline-primary" style='float: left; margin-right:8px;'>Powrót</button>
	 <?php echo form_open('/trenerzy/delete/'.$trener['ID_trener_PK']); ?>
	 <?php if($this->session->userdata('logged_in')) : ?>
   <input type="submit" style='float: left; margin-right:8px;' value="Usuń" class="btn btn-danger">
   <?php endif; ?>
	</form>

	<a class="btn btn-success disabled" href="edit/<?php echo $trener['ID_trener_PK']; ?>">Modyfikuj</a>
	

	<script>
	function goBack() {
	    window.history.back();
	}
	</script>
</div>