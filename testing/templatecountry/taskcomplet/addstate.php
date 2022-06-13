<?php include "theme/header.php";
include "classes/countryclass.php"; 
$obj1= new countryclass;?>

<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Admin</li>
      <li>Forms</li>
    </ul>
 
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
     state
    </h1>

  </div>
</section>

  <section class="section main-section">
      <div class="card-content">
        <form method="post">     
        <div class="field">
            <label class="label">Country</label>
            <div class="form-control-xl">
              <div class="select">
              <select id="country-dropdown" >
              <option value="">SELECT ANY COUNTRY</option>
                <?php $sql=$obj1->getdata();
                 while($row=mysqli_fetch_array($sql))
                 { ?>
                  <option value="<?php echo $row['Countryid'];?>"><?php echo $row['CountryName']; ?></option>
                  <?php }?>
                </select>
                
              </div>
            </div>
          </div>    
          <div class="field">
            <label class="label">State</label>
            <input type="text" class="form-control" id="state"  placeholder="State" name="state" val="">
            <br>
           
          </div>
          <hr>
          <hr>
                  <div class="alert alert-primary" role="alert">
          
          </div>
          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button green" name="submit">
                Submit
              </button>
            </div>
           
          </div>
        </form>
      </div>
    </div>
            
  
    </div>
  </section>
</div>
<?php include "theme/footer.php"; ?>
<script src="jquery/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('#country-dropdown').on('change', function() {
          var country_id = this.value;
          
    $("form").submit(function(){
      event.preventDefault();
      var statename=$("#state").val();

          $.ajax({
          url: "ajaxstate.php",
          type: "post",
          data: {
          country_id: country_id,
          statename:statename
          },
          success: function(result){
            console.log(result);
            if(result=="inserted")
                        {   
                            window.location.href="viewstate.php";
                        }
                        else{
                        alert('not inserted data in database ');
                         }
          }
          });
          });    


    });
  });
</script>