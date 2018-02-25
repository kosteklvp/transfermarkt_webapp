<div class="view_container"><br>
  <h1><?php echo $pilkarz['imie_pilkarza']; ?> <?php echo $pilkarz['nazwisko_pilkarza']; ?></h1>
  <h5 class="napis">Wartość(€): <?php echo $pilkarz['wartosc_pilkarza']; ?></h5>
  <h5 class="napis">Pozycja: <?php echo $pilkarz['nazwa_pozycji']; ?></h5>
  <h5 class="napis">Narodowość: <?php echo $pilkarz['nazwa_kraju']; ?></h5>
  <h5 class="napis">Wiek: 27 lat</h5>
  <a href="<?php echo site_url(); ?>kluby/<?php echo $pilkarz['ID_klub_PK'];?>"><h5 class="link">Klub: <?php echo $pilkarz['nazwa_klubu']; ?></h5></a>
	  <hr>
	 <button onclick="goBack()" class="btn btn-outline-primary" style='float: left; margin-right:8px;'>Powrót</button>
	 <?php if($this->session->userdata('logged_in')) : ?>
   <input type="submit" style='float: left; margin-right:8px;' value="Usuń" class="btn btn-danger">
   <?php endif; ?>
	</form>

	<a class="btn btn-success disabled" href="edit/<?php echo $pilkarz['ID_pilkarz_PK']; ?>">Modyfikuj</a>
	


	<script>
	function goBack() {
	    window.history.back();
	}
	</script>
</div>
