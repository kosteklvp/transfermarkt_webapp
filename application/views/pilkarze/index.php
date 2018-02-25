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
<div class="view_container">
  <table class="table table-hover" id="myTable2">
  <thead>
    <tr>
      <th scope="col" onclick="sortTable(0)">Imię</th>
      <th scope="col" onclick="sortTable(1)">Nazwisko</th>
      <th scope="col" onclick="sortTable(2)">Pozycja</th>
      <th scope="col" onclick="sortTable(3)">Narodowość</th>
      <th scope="col" onclick="sortTable(4)">Klub</th>
      <th scope="col" onclick="sortTable(5)">Wartość(€)</th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach($pilkarze as $pilkarz) : ?>
    <tr class="table-primary" onclick="window.location='pilkarze/<?php echo $pilkarz['ID_pilkarz_PK'];?>';">
      <td><?php echo $pilkarz['imie_pilkarza']; ?></td>
    <td><?php echo $pilkarz['nazwisko_pilkarza']; ?></td>
    <td><?php echo $pilkarz['nazwa_pozycji']; ?></td>
    <td><?php echo $pilkarz['nazwa_kraju']; ?></td>
    <td><?php echo $pilkarz['nazwa_klubu']; ?></td>
    <td><?php echo $pilkarz['wartosc_pilkarza']; ?></td>
  </tr>
  <?php endforeach; ?>
    
    
  </tbody>
</table> 
  
</div>



