
<!doctype html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> 
    <title>Login</title> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
  </head> 
 
  <!-- Section: Design Block --> 
<section class="background-radial-gradient overflow-hidden"> 
  <style> 
    .background-radial-gradient { 
      background-color: hsl(218, 41%, 15%); 
      background-image: radial-gradient(650px circle at 0% 0%, 
          hsl(218, 41%, 35%) 15%, 
          hsl(218, 41%, 30%) 35%, 
          hsl(218, 41%, 20%) 75%, 
          hsl(218, 41%, 19%) 80%, 
          transparent 100%), 
        radial-gradient(1250px circle at 100% 100%, 
          hsl(218, 41%, 45%) 15%, 
          hsl(218, 41%, 30%) 35%, 
          hsl(218, 41%, 20%) 75%, 
          hsl(218, 41%, 19%) 80%, 
          transparent 100%); 
 
          background-position: center; /* Center the background image */ 
          background-repeat: no-repeat; /* Do not repeat the background image */ 
          background-size: cover; /* Cover the entire background */ 
    } 
 
    #radius-shape-1 { 
      height: 220px; 
      width: 220px; 
      top: -60px; 
      left: -130px; 
      background: radial-gradient(#44006b, #ad1fff); 
      overflow: hidden; 
      background-size: cover; /* Cover the entire background */ 
    } 
 
    #radius-shape-2 { 
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%; 
      bottom: -60px; 
      right: -110px; 
      width: 300px; 
      height: 300px; 
      background: radial-gradient(#44006b, #ad1fff); 
      overflow: hidden; 
      background-size: cover; /* Cover the entire background */ 
    } 
 
    .bg-glass { 
      background-color: hsla(0, 0%, 100%, 0.9) !important; 
      backdrop-filter: saturate(200%) blur(25px); 
      background-size: cover; /* Cover the entire background */ 
    } 
  </style> 
 
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5"> 
    <div class="row gx-lg-5 align-items-center mb-5"> 
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10"> 
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)"> 
          The best offer <br /> 
          <span style="color: hsl(218, 81%, 75%)">Finish your Thesis within 6 months?</span> 
        </h1> 
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)"> 
        ThesisTech offers you opportunity to help you finish your thesis and graduate on time ! Do not lose this opportunity! 
        </p> 
      </div> 
 
      <div class="col-lg-6 mb-5 mb-lg-0 position-relative"> 
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div> 
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div> 
 
        <div class="card bg-glass"> 
          <div class="card-body px-4 py-5 px-md-5"> 
            <form> 
              <!-- 2 column grid layout with text inputs for the first and last names --> 
              <div class="row"> 
                <div class="col-md-6 mb-4"> 
                   
                </div> 
                <div class="text-center"> 
                  <h1 >Welcome to ThesisTech!</h1> 
                  <br><br><br> 
                </div> 
              </div> 
 
              <!-- Email input --> 
              <div data-mdb-input-init class="form-outline mb-4"> 
                <input type="text" id="form3Example3" class="form-control" /> 
                <label class="form-label" for="form3Example3">Username</label> 
              </div> 
 
              <!-- Password input --> 
              <div data-mdb-input-init class="form-outline mb-4"> 
                <input type="password" id="form3Example4" class="form-control" /> 
                <label class="form-label"


for="form3Example4">Password</label> 
<div data-mdb-input-init class="form-outline mb-4"> 
<label for="category">Choose a category:</label>

              <select name="Select" > 
              <option value="Platinum">Platinum</option> 
              <option value="Mentor">Mentor</option> 
              <option value="Staff">Staff</option> 
              </select> 
              </div> 
              </div> 
 
              
 
               
 
              <!-- Submit button --> 
              <div class="text-center"> 
              <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4"> 
                Login 
              </button> 
               </div> 
 
              <!-- Register buttons --> 
              
                 
              </div> 
            </form> 
          </div> 
        </div> 
      </div> 
    </div> 
  </div> 
</section> 
<!-- Section: Design Block --> 
</html>