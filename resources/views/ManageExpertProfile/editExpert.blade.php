<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>ThesisTech</title>
    <body>
      <div class="container-form">
        <h3>Expert Informations</h3>

        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <form action="{{ route('updateExpert') }}" method="post">
            @csrf
            @method('post')
            <input type="hidden" name="id" value="{{$experts->id}}">
            <div class="section">
                <div class="form-row">
                    <div class="form-group">
                        <label for="E_Name">NAME</label>
                        <input type="text" id="E_Name" name="E_Name" required value="{{$experts->E_Name}}">
                        @error('E_Name')
                        <div class="alert alert-danger" role="alert"></div>
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-row">
                      <div class="form-group">
                          <label for="E_Email">EMAIL</label>
                          <input type="email" id="E_Email" name="E_Email" required value="{{$experts->E_Email}}">
                      </div>
                      <div class="form-group">
                        <label for="E_Gender">GENDER</label>
                        <input type="text" id="E_Gender" name="E_Gender" required value="{{$experts->E_Gender}}">
                    </div>
                </div>
                <div class="form-group">
                  <label for="E_Address">ADDRESS</label>
                  <input type="text" id="E_Address" name="E_Address" required value="{{$experts->E_Address}}">
              </div>
          </div>
                    <div class="form-group">
                        <label for="E_University">WORKPLACE</label>
                        <input type="text" id="E_University" name="E_University" required value="{{$experts->E_University}}">
                    </div>
                </div>
                    <div class="form-group">
                        <label for="E_PhoneNum">PHONE NUMBER</label>
                        <input type="tel" id="E_PhoneNum" name="E_PhoneNum" required value="{{$experts->E_PhoneNum}}">
                    </div>
                </div>

                <div class="form-group">
                  <label for="E_University">WORKPLACE</label>
                  <input type="text" id="E_University" name="E_University" required value="{{$experts->E_University}}">
              </div>
          </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
                <a href="{{ route('listexpert') }}" class="btn btn-danger">BACK</a>
            </div>
        </form>
    </div>
</div>
</div>

        
        <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>