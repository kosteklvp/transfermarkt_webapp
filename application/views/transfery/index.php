<div class="view_container" style="padding-top: 27px; height: 100px; ">

  

  <div style='float: left; float: right; '>
    <div class="form-group">
      <div style='float: left; margin-right:8px;'>
  <input class="form-control form-control-lg" style='width: 260px;'type="text" placeholder="Wpisz szukaną frazę" id="inputLarge" >
      </div>
      <div style='float: left; margin-right:8px;'>
  <input type="submit"  value="Szukaj" class="btn btn-info btn-lg">
      </div>
    </div>
  </div>
</div>
<div class="view_container">
  <table class="table table-hover" id="myTable2">
  <thead>
    <tr>
      <th scope="col" onclick="sortTable(0)">Imię</th>
      <th scope="col" onclick="sortTable(1)">Nazwisko</th>
      <th scope="col" onclick="sortTable(2)">Data transferu</th>
      <th scope="col" onclick="sortTable(3)">Kwota transferu(€)</th>
      <th scope="col" onclick="sortTable(4)">Wartość piłkarza(€)</th>
      <th scope="col" onclick="sortTable(5)">Klub pozyskujący</th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach($transfery as $transfer) : ?>
    <tr  class="table-primary" onclick="window.location='transfery/<?php echo $transfer['ID_transfer_PK'];?>';">
      <td><?php echo $transfer['imie_pilkarza']; ?></td>
    <td><?php echo $transfer['nazwisko_pilkarza']; ?></td>
    <td><?php echo $transfer['data_transferu']; ?></td>
    <td><?php echo $transfer['kwota']; ?></td>
    <td><?php echo $transfer['wartosc_pilkarza']; ?></td>
    <td><?php echo $transfer['nazwa_klubu']; ?></td>
  </tr>
  <?php endforeach; ?>
    
    
  </tbody>
</table> 
  
</div>



