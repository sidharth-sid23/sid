 <?php  
include "theme/header.php";
 if(isset($_GET['id']))
 {
    $id = $_GET['id'];
    echo $id;
 
 //include "classes/countryclass.php";
//include "viewcountry.php";
include "classes/connection.php";
//$obj1= new countryclass;

$slt="SELECT * FROM country WHERE Countryid='$id' ";
 $qry=mysqli_query($conn,$slt);
 if(mysqli_num_rows($qry)>0)
            {
            while($row=mysqli_fetch_assoc($qry))
            {
 ?> 
<section class="section main-section">
      <div class="card-content">
        <form method="post" action="update.php"> 
        <div class="field">
            <label class="label">Country</label>
            <input type="text" class="form-control" placeholder="countryid" name="id" value="<?php echo $row["Countryid"]; ?>">
            <br>
           
          </div>         
          <div class="field">
            <label class="label">Country</label>
            <input type="text" class="form-control" placeholder="country" name="country" value="<?php echo $row["CountryName"]; ?>">
            <br>
           
          </div>
          <hr>
          <hr>
          <div class="alert alert-primary" id="html" role="alert">
 </div>
          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button green" name="update" >

                update
              </button>
            </div>
           
          </div>
        </form>
      </div>
    </div>
            
  
    </div>
  </section>
<!-- // $obj1 = new selectdata;
// $obj1->selectupdateCountry($id); -->

<?php } }}
include "theme/footer.php"; ?>