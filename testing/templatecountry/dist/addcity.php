<?php include "theme/header.php"; ?>
<?php include "classes/countryclass.php";
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
     city
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
                  <option value="<?php echo $row['Countryid'];?>"><?php echo $row['CountryName'];?></option>
                      <?php }?>           
                    </select>
                
              </div>
            </div>
          </div>
        <div class="field">
            <label class="label">State</label>
            <div class="form-control-xl">
              <div class="select">
              <select id="state-dropdown" >
              <option value="">SELECT ANY STATE</option>
               </select>
                
              </div>
            </div>
          </div>         
          <div class="field">
            <label class="label">city</label>
            <input type="text" class="form-control" placeholder="city" id="city" name="city" value="">
            <br>
           
          </div>
          <hr>
          <hr>
          <div class="alert alert-primary" id="html" role="alert">
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
          console.log(country_id);
          $.ajax({   
           url:"ajaxgetstatedata.php",
           type:"post",
           data:{
            country_id:country_id
           },
           success:function(response){
             console.log("ok");
            
             $('#state-dropdown').html(response);
           }
         })
          $('#state-dropdown').on('change', function() {

         
          var state_id=this.value;
    $("form").submit(function(){
      event.preventDefault();
      var cityname=$("#city").val();      
        
          $.ajax({
          url: "ajaxcity.php",
          type: "post",
          data: {
          country_id: country_id,
          state_id:state_id,
          cityname:cityname
          },
          success: function(response){
            if(response!=="inserted")
                        {   
                            window.location.href="viewcity.php";
                        }
                        else{
                        alert('not inserted data in database ');
                         }
          }
          });
          });    
        });

    });
  });
</script>