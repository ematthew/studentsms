 <div class="container-fluid">
      <div class="row">
        <div class="col-10">

            @if($layout == 'index')
      <div class="container">
        <div class="row">
          <section class="col-sm">
                       
          @include("studentslist")
          </section>
         <section class="col">
           
         </section>
       </div>
    </div>

       @elseif($layout == 'create')
    <div class="container">
      <div class="row">
        <section class="col-sm">
          @include("studentslist")
        </section>
          <section class="col">   
              <form>
                  <div class="form-group">
                    <label>One</label>
                    <input name="one" type="text" class="form-control" placeholder="one">
                  </div>
                   
              </form>     
          </section>
      </div>
    </div>



      </div>
          
   </div>

    

    @elseif($layout == 'show')
    <div class="container">
      <div class="row">
        <section class="col">
          @include("studentslist")
        </section>
        <section class="col"> 
        </section>
      </div>
    </div>

    @elseif($layout == 'edit')
    <div class="container">
      <div class="row">
        <section class="col">
          @include("studentslist")
        </section>
        <section class="col">
          
        </section>
      </div>
    </div>
    @endif
          




        </div>
      </div>
    </div>

