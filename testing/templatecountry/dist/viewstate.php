<?php include "theme/header.php";
include "classes/countryclass.php"; 
$obj1=new countryclass;?>
  
<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">

 
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
     State_Table
    </h1>
    </div>
</section>

<section class="section main-section">
  <div class="card-content">
    <form method="get">
      <div class="field">
        <table>
          <tr>
            
            <th>CountryName</th>
            <th>StateName</th>
            <th>Action</th>
          </tr>
          <tr>
          <?php $sql=$obj1->getdatastate(); 
          while($row=mysqli_fetch_array($sql))
          {
          ?>
          <tr>
          <td><?php echo $row["CountryName"]; ?></td>
          <td><?php echo $row['StateName'];?></td>
          <td><a type="submit" class="button green" href="editstate.php?id=<?php echo $row["Stateid"]; ?>">edit</a>
          <a type="submit" class="button red" href="deletestate.php?id=<?php echo $row["Stateid"]; ?>">delete</a></td>
        </tr>
          <?php  } ?>
          
        </table>
      </div>
    </form>
  </div>
  </div>
  </div>
</section>
</div>

<?php include "theme/footer.php";?>