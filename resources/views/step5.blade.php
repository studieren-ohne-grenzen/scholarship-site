@extends('layouts.app')
@section('title', 'SOG Scholarship')
@section('subtitle', 'Application - Step 5: Engagement & Motivation')

@section('content')
  <section class="section">
    <div class="container">
      <form method="POST" action="/step6">
        {{ csrf_field() }}

        <div class="field">
          <label class="label">Have you already been socially engaged (e.g. volunteering in an organization, own social project, etc. work without payment)? Describe your function</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="engagement" required>{{ Session::get('engagement', '') }}</textarea>
          </div>
        </div>

        <div class="field">
          <label class="label">Where do you see the biggest problems in your country/region?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="biggest_problems" required>{{ Session::get('biggest_problems', '') }}</textarea>
          </div>
        </div>

        <div class="field">
          <label class="label">Where do you see yourself in the near future? What do you want to do after finishing your studies?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="future" required>{{ Session::get('future', '') }}</textarea>
          </div>
        </div>

        <div class="field">
          <label class="label">What are your reasons/motivation for studying?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="motivation" required>{{ Session::get('motivation', '') }}</textarea>
          </div>
        </div>

        <div class="field is-grouped is-grouped-centered">
          <p class="control">
            <a class="button is-light" href="/step4">
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
