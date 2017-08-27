@extends('layouts.app')
@section('title', 'SOG Scholarship')
@section('subtitle', 'Application - Summary')

@section('content')
  <section class="section">
    <div class="container">
      <h2 class="title is-2">Personal</h2>
      TODO: Summery zeigen
      {{ Session::get('project', '') }}
      
      <form method="POST" action="/submitted">
        {{ csrf_field() }}

        <div class="field is-grouped is-grouped-centered">
          <p class="control">
            <a class="button is-light" href="/step6">
              Back
            </a>
          </p>
          <p class="control">
            <button type="submit" class="button is-primary">Submit</button>
          </p>
        </div>
      </form>
    </div>
  </section>
@endsection
