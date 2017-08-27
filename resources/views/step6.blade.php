@extends('layouts.app')
@section('title', 'SOG Scholarship')
@section('subtitle', 'Application - Step 6: Personal project')

@section('content')
  <section class="section">
    <div class="container">
      <form method="POST" action="/summary">
        {{ csrf_field() }}

        <div class="field">
          <label class="label">Please describe shortly your idea for a personal project which would help to develop your region/society</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="project" required>{{ Session::get('project', '') }}</textarea>
          </div>
        </div>

        <div class="field">
          <label class="label">What are the concrete objects/aims of your project?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="project_goal" required>{{ Session::get('project_goal', '') }}</textarea>
          </div>
        </div>

        <div class="field">
          <label class="label">Who do you want to reach? How many people would benefit from your project?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="project_reach" required>{{ Session::get('project_reach', '') }}</textarea>
          </div>
        </div>

        <div class="field">
          <label class="label">What would be your role in the project?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="project_role" required>{{ Session::get('project_role', '') }}</textarea>
          </div>
        </div>

        <div class="field">
          <label class="label">How could your project be financially supported? (please remember, SOG does not grant any financial support for the project)</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="project_finances" required>{{ Session::get('project_finances', '') }}</textarea>
          </div>
        </div>

        <div class="field">
          <label class="label">Are there any possible partners (NGOs, local organizations, governmental institutions) who could cooperate in your project?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="project_partners" required>{{ Session::get('project_partners', '') }}</textarea>
          </div>
        </div>

        <div class="field is-grouped is-grouped-centered">
          <p class="control">
            <a class="button is-light" href="/step5">
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
