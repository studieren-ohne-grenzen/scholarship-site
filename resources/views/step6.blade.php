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
            <textarea class="textarea" placeholder="" name="project" required>{{ old('project', Session::get('project')) }}</textarea>
          </div>
          @foreach($errors->get('project') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">What are the concrete objects/aims of your project?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="project_goal" required>{{ old('project_goal', Session::get('project_goal')) }}</textarea>
          </div>
          @foreach($errors->get('project_goal') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Who do you want to reach? How many people would benefit from your project?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="project_reach" required>{{ old('project_reach', Session::get('project_reach')) }}</textarea>
          </div>
          @foreach($errors->get('project_reach') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">What would be your role in the project?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="project_role" required>{{ old('project_role', Session::get('project_role')) }}</textarea>
          </div>
          @foreach($errors->get('project_role') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">How could your project be financially supported? (please remember, SOG does not grant any financial support for the project)</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="project_finances" required>{{ old('project_finances', Session::get('project_finances')) }}</textarea>
          </div>
          @foreach($errors->get('project_finances') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Are there any possible partners (NGOs, local organizations, governmental institutions) who could cooperate in your project?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="project_partners" required>{{ old('project_partners', Session::get('project_partners')) }}</textarea>
          </div>
          @foreach($errors->get('project_partners') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
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
