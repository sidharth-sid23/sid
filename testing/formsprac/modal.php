<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-group" id="form1" action="" method="post" onsubmit="submitLoginForm($(this))" >
            <div class="row">
                <div class="col">
                    <label> name</label>
                    <input type="text" class="form-control" placeholder="First name" name="name">
                    <span class="error" ></span>
                </div>
                <div class="col">
                    <label> age</label>
                    <input type="number" class="form-control" placeholder="age" name="age">
                    <span class="error" ></span>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label> qualification`</label>
                    <input type="text" class="form-control" placeholder="qualification" name="qualification">
                    <span class="error" ></span>
                </div>
                <div class="col">
                    <label> hobbies</label>
                    <input type="text" class="form-control" placeholder="hobbies" name="hobbies">
                    <span class="error"></span>
                </div>
            </div>

           
            
            <button class="btn btn-primary" name="submit" type="submit">submit</button>
            <button class="btn btn-danger" name="destroy" type="submit">destroy</button>
        </form>
      </div>
      
    </div>
  </div>
</div>
