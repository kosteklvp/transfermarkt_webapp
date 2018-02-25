
<div class="view_container">
	<br>
  <h1>Transfer piłkarza <?php echo $transfer['imie_pilkarza']; ?> <?php echo $transfer['nazwisko_pilkarza']; ?></h1>
  <h5 class="napis">Wartość(€): <?php echo $transfer['wartosc_pilkarza']; ?></h5>
  <h5 class="napis">Kwota transferu(€): <?php echo $transfer['kwota']; ?></h5>
  <a href="<?php echo site_url(); ?>kluby/<?php echo $transfer['ID_klub_PK'];?>"><h5 class="link">Klub pozyskujący: <?php echo $transfer['nazwa_klubu']; ?></h5></a>
  <h5 class="napis">Data transferu: <?php echo $transfer['data_transferu']; ?></h5>
	   <hr>
	 <button onclick="goBack()" class="btn btn-outline-primary" style='float: left; margin-right:8px;'>Powrót</button>
	 <?php echo form_open('/transfery/delete/'.$transfer['ID_transfer_PK']); ?>
	 <?php if($this->session->userdata('logged_in')) : ?>
   <input type="submit" style='float: left; margin-right:8px;' value="Usuń" class="btn btn-danger">
   <?php endif; ?>
	</form>

	<a class="btn btn-success disabled" href="edit/<?php echo $transfer['ID_transfer_PK']; ?>">Modyfikuj</a>
	

	<script>
	function goBack() {
	    window.history.back();
	}
	</script>
</div>
