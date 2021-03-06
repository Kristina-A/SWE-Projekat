<!-- LOGIN -->
<div id="loginModal" class="modal">       
  <form class="modal-content col s12" action="{{ route('login') }}" method="post">
    @csrf
    <div class="row center">
      <h4>PH</h4>        
      <div class="divider"></div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        {{Form::email('email','', ['required'=>'required'])}}
        {{Form::label('email','Email',['for'=>'email'])}}
      </div>
      <div class="input-field col s12">
        {{Form::password('password'), ['required'=>'required']}}
        {{Form::label('password','Lozinka',['for'=>'password'])}}
      </div>         
      <div class="col s12 right-align">
        <a href="#">Zaboravili ste lozinku?</a>
      </div>
    </div>
    <div class="row center-align">
      {{Form::button('Prijava <i class="material-icons right">send</i>',['type'=>'submit', 'class'=>'btn s12 teal waves-effect waves-light'])}}      
    </div>
    <div class="row center-align">
      <div class="divider"></div>
      <h5>Nemate nalog?</h5>
      <a class="waves-effect waves-light btn white teal-text modal-trigger modal-close" href="#registerModal">Registracija</a></li>
    </div>
  </form> 
</div>
<!-- REGISTER -->

<div id="registerModal" class="modal">
  <form class="modal-content col s12" action="{{ route('register') }}" method="post">
    @csrf
    <div class="row center">
      <h4>PH</h4>
      <div class="divider"></div>
    </div>
    <div class="row">
      <div class="input-field col s12 m6">        
        {{Form::text('first_name','', ['required'=>'required'])}}
        {{Form::label('first_name','Ime',['for'=>'first_name'])}}
      </div>          
      <div class="input-field col s12 m6">     
        {{Form::text('last_name','', ['required'=>'required'])}}
        {{Form::label('last_name','Prezime',['for'=>'last_name'])}}
      </div>
      <div class="input-field col s12 m6">        
        {{Form::email('email','', ['required'=>'required'])}}
        {{Form::label('email','Email',['for'=>'email'])}}
      </div>      
      <div class="input-field col s12 m6">
        {{Form::text('city','', ['required'=>'required'])}}
        {{Form::label('city','Grad',['for'=>'city'])}}
      </div>
      <div class="input-field col s12">        
        {{Form::password('password', ['required'=>'required'])}}
        {{Form::label('password','Lozinka',['for'=>'password'])}}
      </div>
      <div class="input-field col s12">
        {{Form::password('password_confirmation', ['required'=>'required'])}}
        {{Form::label('password_confirmation','Potvrdite lozinku',['for'=>'password_confirmation'])}}
      </div>    
    </div>
    <div class="row center-align">
        {{Form::button('Registracija <i class="material-icons right">send</i>',['type'=>'submit', 'class'=>'btn s12 teal waves-effect waves-light'])}}
    </div>
    <div class="divider"></div>
    <div class="row center-align">
      <h5>Već imate nalog?</h5>
      <a class="waves-effect waves-light btn white teal-text modal-trigger modal-close" href="#loginModal">Prijava</a></li>
    </div>
  </form>
</div>