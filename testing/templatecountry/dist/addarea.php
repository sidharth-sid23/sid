<?php 
include "theme/header.php";
include "classes/countryclass.php";
$obj1= new countryclass;
?>

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
    AREA
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
                while($row=mysqli_fetch_array($sql)){ ?>
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
              <label class="label">City</label>
              <div class="form-control-xl">
                <div class="select">
                <select id="city-dropdown">
                <option value="">SELECT ANY CITY</option>
                 </select>
                  
                </div>
              </div>
            </div>      
            <div class="field">
              <label class="label">AREA</label>
              <input type="text" class="form-control" placeholder="area" id="area" name="area" value="">
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
<?php 
include "theme/footer.php";
?>
<script src="jquery/jquery.min.js"></script>
<script>
  $(document).ready(function(){
      $("#html").hide();
      $('#country-dropdown').on('change', function() {
          var country_id = this.value;
          
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
          
          $.ajax({
                    url:"ajaxgetcitydata.php",
                    type:"post",
                data:{
                    state_id:state_id
                },
                success:function(response)
                {    
                   
                    $('#city-dropdown').html(response);
                }
            });


            $('#city-dropdown').on('change', function() {

         
            var city_id=this.value;
          $("form").submit(function(){

                event.preventDefault();
                var areaname=$("#area").val();  
                console.log(areaname); 
             $.ajax({
                url: "ajaxarea.php",
                type: "post",
                data: {
                country_id: country_id,
                state_id:state_id,
                city_id:city_id,
                areaname:areaname
                },
                success: function(response){
                    if(response=="inserted")
                                {   
                                    $("#html").show(response);
                                    $("#html").html(response);
                                    window.location.href="viewarea.php";
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
  }

  );</script>