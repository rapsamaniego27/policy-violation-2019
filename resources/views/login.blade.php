@extends('index')

@section('content')

 <div class="column is-4 is-offset-4 login-container">
      <article class="message">
        <div class="message-header">
          <p>Policy Violation</p>
          
        </div>
        <div class="message-body">
          <form action="/" method="POST">
            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input" type="username" placeholder="Username">
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
                <!-- <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span> -->
              </p>
            </div>
            <div class="field">
              <p class="control has-icons-left">
                <input class="input" type="password" placeholder="Password">
                <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
            </div>
            <div class="field btn-login--container">
              <p class="control">
                <button type="submit" class="button is-primary">
                  Login
                </button>
              </p>
            </div>
          </form>
        </div>
      </article>
    </div>


@endsection