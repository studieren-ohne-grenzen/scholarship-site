@extends('layouts.app')
@section('title', 'SOG Scholarship')
@section('subtitle', 'Application - Step 4: Education')

@section('content')
  <section class="section">
    <div class="container">
      <form method="POST" action="/step5">
        {{ csrf_field() }}

        <div class="field">
          <label class="label">Have you already been enrolled at a university?</label>
          <div class="control">
            <label class="radio">
              <input type="radio" value="1" name="enrolled" @if ( Session::get('enrolled', 'asd') === '1') checked @endif required>
              Yes
            </label>
            <label class="radio">
              <input type="radio" value="0" name="enrolled" @if ( Session::get('enrolled', 'asd') === '0') checked @endif required>
              No
            </label>
          </div>
        </div>

        <div class="field">
          <label class="label">If yes: In which field?</label>
          <div class="control">
            <input type="text" class="input" name="major" placeholder="" value="{{ Session::get('major', '') }}">
          </div>
        </div>

        <div class="field">
          <label class="label">If yes: Are you still studying?</label>
          <div class="control">
            <label class="radio">
              <input type="radio" value="1" name="still_studying" @if ( Session::get('still_studying', 'asd') === '1') checked @endif>
              Yes
            </label>
            <label class="radio">
              <input type="radio" value="0" name="still_studying" @if ( Session::get('still_studying', 'asd') === '0') checked @endif>
              No
            </label>
          </div>
        </div>

        <div class="field">
          <label class="label">If no: What were your reasons for interrupting your studies?</label>
          <div class="control">
            <input type="text" class="input" name="dropping_out_reasons" placeholder="" value="{{ Session::get('dropping_out_reasons', '') }}">
          </div>
        </div>

        <div class="field">
          <label class="label">In what field do you want to study? What university?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="wanted_major" required>{{ Session::get('wanted_major', '') }}</textarea>
          </div>
        </div>

        <div class="field">
          <label class="label">What languages do you speak? Please indicate level (spoken/written/mother tongue)</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="languages" required>{{ Session::get('languages', '') }}</textarea>
          </div>
        </div>

        <div class="field">
          <label class="label">Do you have the possibility to live with your family during your studies?</label>
          <div class="control">
            <label class="radio">
              <input type="radio" value="1" name="live_with_family" @if ( Session::get('live_with_family', 'asd') === '1') checked @endif required>
              Yes
            </label>
            <label class="radio">
              <input type="radio" value="0" name="live_with_family" @if ( Session::get('live_with_family', 'asd') === '0') checked @endif required>
              No
            </label>
          </div>
        </div>

        <div class="field is-grouped is-grouped-centered">
          <p class="control">
            <a class="button is-light" href="/step3">
              Back
            </a>
          </p>
          <p class="control">
            <button type="submit" class="button is-primary">Next</button>
          </p>
        </div>
      </form>
    </div>
  </section>
@endsection
