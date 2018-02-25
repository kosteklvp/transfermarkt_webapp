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
      <th scope="col" onclick="sortTable(1)">Data założenia</th>
      <th scope="col" onclick="sortTable(2)">Stadion</th>
      <th scope="col" onclick="sortTable(3)">Pojemność Stadionu</th>
      <th scope="col" onclick="sortTable(4)">Kraj</th>
      <th scope="col" onclick="sortTable(5)">Liga</th>
      <th scope="col" onclick="sortTable(6)">Trener</th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach($kluby as $klub) : ?>
    <tr class="table-primary" onclick="window.location='kluby/<?php echo $klub['ID_klub_PK'];?>';">
      <td><?php echo $klub['nazwa_klubu']; ?></td>
    <td><?php echo $klub['data_zalozenia']; ?></td>
    <td><?php echo $klub['nazwa_stadionu']; ?></td>
    <td><?php echo $klub['pojemnosc']; ?></td>
    <td><?php echo $klub['nazwa_kraju']; ?></td>
    <td><?php echo $klub['nazwa_ligi']; ?></td>
    <td><?php echo $klub['nazwisko_trenera']; ?></td>
  </tr>
  <?php endforeach; ?>
    
    
  </tbody>
</table> 
  
</div>
