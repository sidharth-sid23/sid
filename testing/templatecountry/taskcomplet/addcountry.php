<?php include "theme/header.php"; ?>

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
     country
    </h1>

  </div>
</section>

  <section class="section main-section">
      <div class="card-content">
        <form method="post">          
          <div class="field">
            <label class="label">Country</label>
            <input type="text" class="form-control" placeholder="country" name="country">
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
<script src="jquery/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#html").hide();
        $("form").submit(function(){
            event.preventDefault();
            var formdata = $(this).serialize();
            $.ajax({
                url:"ajax.php",
                type:"post",
                data:formdata,
                success:function(response){
                        console.log(response);
                        $("#html").show();
                        $("#html").html(response);
                        if(response=="inserted")
                        {   
                            window.location.href="viewcountry.php";
                        }
                        else{
                        alert('not inserted data in database ');
                         }
                     }
            });
                    
        });
    });
   
</script>
<?php include "theme/footer.php"; ?>
</body>
</html>
