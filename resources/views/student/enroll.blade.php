@extends('index')

@section('content')

<h1 class="is-size-1 content-title">Enrollment</h1>

      <form action="/" method="POST" class="form">
        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Name:</label>
          </div>
          <div class="field-body">

            <div class="field">
              <div class="control">
                <input class="input is-danger" type="text" placeholder="First Name">
              </div>
              <p class="help is-danger">
                This field is required
              </p>
            </div>

            <div class="field">
              <div class="control">
                <input class="input" type="text" placeholder="Middle Name">
              </div>

            </div>

            <div class="field">
              <div class="control">
                <input class="input" type="text" placeholder="Last Name">
              </div>

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
          <div class="field-label">
            <!-- Left empty for spacing -->
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <button class="button is-primary">
                  Update
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>

@endsection