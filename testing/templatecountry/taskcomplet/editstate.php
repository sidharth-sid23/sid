<?php include "theme/header.php";
 if(isset($_GET['id']))
 {
    $id = $_GET['id'];
    echo $id;
 
 //include "classes/countryclass.php";
//include "viewcountry.php";
include "classes/connection.php";
//$obj1= new countryclass;

$slt="SELECT * FROM state WHERE Stateid='$id' ";
 $qry=mysqli_query($conn,$slt);
 if(mysqli_num_rows($qry)>0)
            {
            while($row=mysqli_fetch_assoc($qry))
            {
 ?> 
<section class="section main-section">
      <div class="card-content">
        <form method="post" action="updatestate.php"> 
        <div class="field">
            <label class="label">Stateid</label>
            <input type="text" class="form-control" placeholder="stateid" name="id" value="<?php echo $row["Stateid"]; ?>">
            <br>
           
          </div>         
          <div class="field">
            <label class="label">StateName</label>
            <input type="text" class="form-control" placeholder="state" name="state" value="<?php echo $row["StateName"]; ?>">
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