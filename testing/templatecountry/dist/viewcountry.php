<?php include "theme/header.php"; ?>

<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">


  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      Country_Table
    </h1>
    <?php
    include "classes/countryclass.php";
    $obj1=new countryclass;
    
    ?>

  </div>
</section>

<section class="section main-section">
  <div class="card-content">
    <form method="get">
      <div class="field">
        <table>
          <tr>
            <th>Countryid</th>
            <th>CountryName</th>
            <th>Action</th>
          </tr>
          <?php $sql=$obj1->getdata(); 
          while($row=mysqli_fetch_array($sql))
          { 

         
          ?>
          <tr>
            
          <td><?php echo $row['Countryid'];?></td>
          <td><?php echo $row['CountryName'];?></td>
          <td><a type="submit" class="button green" href="updatecountry.php?id=<?php echo $row["Countryid"]; ?>">edit</a>
          <a type="submit" class="button red" href="deletecountry.php?id=<?php echo $row["Countryid"]; ?>">delete</a></td>
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
<script src="jquery/jquery.min.js"></script>
<?php require('theme/footer.php');
