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
      City_Table
    </h1>
   
</section>

<section class="section main-section">
  <div class="card-content">
    <form method="get">
      <div class="field">
        <table>
          <tr>
            <th>Countryid</th>
           
            <th>Stateid</th>
           
            
            <th>CityName</th>
            <th>Action</th>
          </tr>
          <tr>
          <?php $sql=$obj1->getdatacity(); 
          while($row=mysqli_fetch_array($sql))
          {
          ?>
          <tr>
          <td><?php echo $row['Countryid'];?></td>
          <td><?php echo $row['Stateid'];?></td>
          <td><?php echo $row['CityName'];?></td>
          <td><a type="submit" class="button green" href="editcity.php?id=<?php echo $row["Cityid"]; ?>">edit</a>
          <a type="submit" class="button red" href="deletecity.php?id=<?php echo $row["Cityid"]; ?>">delete</a></td>
        </tr>
          <?php  } ?>
          
          </tr>
        </table>
      </div>
    </form>
  </div>
  </div>
  </div>
</section>
</div>

<?php include "theme/footer.php";?>