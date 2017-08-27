@extends('layouts.app')
@section('title', 'SOG Scholarship')
@section('subtitle', 'Application - Step 2: Family')

@section('content')
  <section class="section">
    <div class="container">
      <form method="POST" action="/step3">
        {{ csrf_field() }}
        <div class="field">
          <label class="label">Name, age and profession of mother</label>
          <div class="control">
            <input type="text" class="input" name="mother" placeholder="" value="{{ Session::get('mother', '') }}" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Name, age and profession of father</label>
          <div class="control">
            <input type="text" class="input" name="father" placeholder="" value="{{ Session::get('father', '') }}" required>
          </div>
        </div>

        <div class="field">
          <label class="label">If married: name, age and profession of husband / wife</label>
          <div class="control">
            <input type="text" class="input" name="spouse" placeholder="" value="{{ Session::get('spouse', '') }}">
          </div>
        </div>

        <div class="field">
          <label class="label">If applicable: age of child / children</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="children">{{ Session::get('children', '') }}</textarea>
          </div>
        </div>

        <div class="field">
          <label class="label">Age and profession of sibling(s)</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="siblings">{{ Session::get('siblings', '') }}</textarea>
          </div>
        </div>

        <div class="field is-grouped is-grouped-centered">
          <p class="control">
            <a class="button is-light" href="/step1">
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
