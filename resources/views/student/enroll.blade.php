@extends('index')

@section('content')

<h1 class="is-size-1 content-title">Enrollment</h1>

      <form action="{{ route('post-enroll') }}" method="POST" class="form">
        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Name:</label>
          </div>
          <div class="field-body">

            <div class="field">
              <div class="control">
              <input class="input {{ $errors->has('first_name') ? ' is-danger' : '' }}" type="text" placeholder="First Name" name="first_name" value="{{ old('first_name') }}">
              </div>
              @if($errors->has('first_name'))
                <p class="help is-danger">
                   {{$errors->first('first_name')}}
                </p>
              @endif
              
            </div>

            <div class="field">
              <div class="control">
              <input class="input {{ $errors->has('last_name') ? ' is-danger' : '' }}" type="text" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}">
              </div>
              @if($errors->has('last_name'))
                <p class="help is-danger">
                   {{$errors->first('last_name')}}
                </p>
              @endif
              
            </div>


          </div>
        </div>


        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Personal Info:</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input class="input" type="text" id="datepicker" placeholder="Birthday">
              </div>
              <p class="help">
                This field is required
              </p>
            </div>
            

            <div class="field">
              <div class="control">
                <input class="input" type="text" id="datepicker" placeholder="Address">
              </div>
              <p class="help">
                This field is required
              </p>
            </div>

          </div>
          
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Course</label>
          </div>
          <div class="field-body">
            <div class="field is-narrow">
              <div class="control">
                <div class="select is-fullwidth">
                  <select>
                    <option value="">---</option>
                    <option value="BSBA Accounting<">BSBA Accounting</option>
                    <option value="BS Information Techonology">BS Information Techonology</option>
                    <option value="BS HRM">BS HRM</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Password:</label>
          </div>
          <div class="field-body">

            <div class="field">
              <div class="control">
              <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" placeholder="Password" name="password" >
              </div>
              @if($errors->has('password'))
                <p class="help is-danger">
                   {{$errors->first('password')}}
                </p>
              @endif
              
            </div>

            <div class="field">
              <div class="control">
              <input class="input" type="text" placeholder="Confirm Password" name="confirm_password">
              </div>
      
            </div>

          </div>
        </div>


        <div class="field is-horizontal">
          <div class="field-label">
            <!-- Left empty for spacing -->
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <button class="button is-primary">
                  Enroll
                </button>
              </div>
            </div>
          </div>
        </div>

        @csrf
      </form>

@endsection