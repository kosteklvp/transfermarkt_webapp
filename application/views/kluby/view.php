<div class="view_container"><br>
  <h1><?php echo $klub['nazwa_klubu']; ?></h1>
  <h5 class="napis">Kraj: <?php echo $klub['nazwa_kraju']; ?></h5>
  <h5 class="napis">Data założenia: <?php echo $klub['data_zalozenia']; ?></h5>
  <a href="<?php echo site_url(); ?>ligi/<?php echo $klub['ID_liga_PK'];?>"><h5 class="link">Liga: <?php echo $klub['nazwa_ligi']; ?></h5></a>
  <h5 class="napis">Stadion: <?php echo $klub['nazwa_stadionu']; ?>(<?php echo $klub['pojemnosc']; ?>)</h5>
  <a href="<?php echo site_url(); ?>trenerzy/<?php echo $klub['ID_trener_PK'];?>"><h5 class="link">Trener: <?php echo $klub['imie_trenera']; ?>&nbsp;<?php echo $klub['nazwisko_trenera']; ?></h5></a>

   <hr>
   <button onclick="goBack()" class="btn btn-outline-primary" style='float: left; margin-right:8px;'>Powrót</button>
   <?php echo form_open('/kluby/delete/'.$klub['ID_klub_PK']); ?>

   <?php if($this->session->userdata('logged_in')) : ?>
   <input type="submit" style='float: left; margin-right:8px;' value="Usuń" class="btn btn-danger">
   <?php endif; ?>
   
  </form>
<a class="btn btn-success disabled" href="edit/<?php echo $klub['ID_klub_PK']; ?>">Modyfikuj</a>
  
  
  
	<script>
	function goBack() {
	    window.history.back();
	}
	</script>
</div>

</div>

