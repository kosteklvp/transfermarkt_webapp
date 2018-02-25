<div class="view_container" style="padding-top: 27px; height: 100px; ">

  

  <div style='float: left;  float: right; '>
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
<div class="view_container" >
  <table class="table table-hover" id="myTable2">
  <thead>
    <tr>
      <th scope="col" onclick="sortTable(0)">Imię</th>
      <th scope="col" onclick="sortTable(1)">Nazwisko</th>
      <th scope="col" onclick="sortTable(2)">Klub</th>
      <th scope="col" onclick="sortTable(3)">Narodowość</th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach($trenerzy as $trener) : ?>
    <tr  class="table-primary" onclick="window.location='trenerzy/<?php echo $trener['ID_trener_PK'];?>';">
    <td><?php echo $trener['imie_trenera']; ?></td>
    <td><?php echo $trener['nazwisko_trenera']; ?></td>
    <td><?php echo $trener['nazwa_klubu']; ?></td>
    <td><?php echo $trener['nazwa_kraju']; ?></td>
  </tr>
  <?php endforeach; ?>
    
    
  </tbody>
</table> 
  
</div>

