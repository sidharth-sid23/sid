<?php 
include "theme/header.php";
include "classes/countryclass.php"; 
$obj1=new countryclass;
?>
<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">

  <h1 class="title">
      Area_Table
    </h1>
  </div>
</section>
  <form method="post">
<section class="is-hero-bar">

  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <div class="field">
            <label class="label">Country</label>
            
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
                <select id="city-dropdown" >
                <option value="">SELECT ANY City</option>
                 </select>
                  
                </div>
              </div>
              
              <button type="submit" class="button green" name="submit">
                  Submit
                </button>
            </div>  
            
</section>
                 </form>
<section class="section main-section">
  <div class="card-content">
    <form method="get">
      <div class="field">
          <thead>
        <table >
          <tr>
            <th>CountryName</th>
            <th>StateName</th>
            <th>CityName</th>
            <th>AreaName</th>
            <th>Action</th>
          </tr>
          <tr>
        </thead>
          <tbody id="myTable">
         <?php $sql=$obj1->getdataArea(); 
        while($row=mysqli_fetch_array($sql))
        {
        ?> 
        <tr>
        <td><?php echo $row['CountryName'];?></td>
        <td><?php echo $row['StateName'];?></td>
        <td><?php echo $row['CityName'];?></td>
        <td><?php echo   $row['AreaName'];?></td>
        <td><a type="submit" class="button green" href="editarea.php?id=<?php echo $row["Areaid"]; ?>">edit</a>
        <a type="submit" class="button red" href="deletearea.php?id=<?php echo $row["Areaid"]; ?>">delete</a></td>
      </tr> 
      <?php  } ?>
          </tbody>
          
          </tr>
        </table>
            
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
<script src="./jquery/jquery.min.js"></script>
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
            console.log(city_id);
          $("form").submit(function(){

                event.preventDefault();
                 
             $.ajax({
                url: "ajaxsorttable.php",
                type: "post",
                data: {
                country_id: country_id,
                state_id:state_id,
                city_id:city_id
                },
                success: function(response){
                  console.log("hello");
                  $("#myTable").html(response);
                    // if(response=="inserted")
                    //             {   
                    //                 $("#html").show(response);
                    //                 $("#html").html(response);
                    //                 window.location.href="viewarea.php";
                    //             }
                    //             else{
                    //             alert('not inserted data in database ');
                    //             }
                }
             });
            });
         
    
          });    
        });

    });
  }

  );


</script>

      
       