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
      <th scope="col" onclick="sortTable(0)">Nazwa</th>
      <th scope="col" onclick="sortTable(1)">Szczebel</th>
      <th scope="col" onclick="sortTable(2)">Ilość drużyn</th>
      <th scope="col" onclick="sortTable(3)">Kraj</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($ligi as $liga) : ?>
    <tr class="table-primary" onclick="window.location='ligi/<?php echo $liga['ID_liga_PK'];?>';">
    <td><?php echo $liga['nazwa_ligi']; ?></td>
    <td><?php echo $liga['szczebel']; ?></td>
    <td><?php echo $liga['ilosc_druzyn']; ?></td>
    <td><?php echo $liga['nazwa_kraju']; ?></td>
  </tr>
  <?php endforeach; ?>
    
    
  </tbody>
</table> 
  
</div>
