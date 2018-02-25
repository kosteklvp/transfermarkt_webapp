<div class="view_container">
	<br>
  <h1><?php echo $liga['nazwa_ligi']; ?></h1>
  <h5 class="napis">Kraj: <?php echo $liga['nazwa_kraju']; ?></h5>
  <h5 class="napis">Szczebel: <?php echo $liga['szczebel']; ?></h5>
  <h5 class="napis">Ilość drużyn: <?php echo $liga['ilosc_druzyn']; ?></h5>
	 <hr>
	 <button onclick="goBack()" class="btn btn-outline-primary" style='float: left; margin-right:8px;'>Powrót</button>
	 <?php echo form_open('/ligi/delete/'.$liga['ID_liga_PK']); ?>
	 <?php if($this->session->userdata('logged_in')) : ?>
   <input type="submit" style='float: left; margin-right:8px;' value="Usuń" class="btn btn-danger">
   <?php endif; ?>
	
</form>
	<a class="btn btn-success disabled" href="edit/<?php echo $liga['ID_liga_PK']; ?>">Modyfikuj</a>
	

	<script>
	function goBack() {
	    window.history.back();
	}
	</script>

	
</div>

