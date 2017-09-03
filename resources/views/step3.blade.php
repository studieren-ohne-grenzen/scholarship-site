@extends('layouts.app')
@section('title', 'SOG Scholarship')
@section('subtitle', 'Application - Step 3: Personal situation')

@section('content')
  <section class="section">
    <div class="container">
      <form method="POST" action="/step4">
        {{ csrf_field() }}

        <div class="field">
          <label class="label">Please describe shortly the general conditions of your family</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="conditions" required>{{ old('conditions', Session::get('conditions')) }}</textarea>
          </div>
          @foreach($errors->get('conditions') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Please describe shortly the profession of your parents and how much they earn per month</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="parents_profession" required>{{ old('parents_profession', Session::get('parents_profession')) }}</textarea>
          </div>
          @foreach($errors->get('parents_profession') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Please describe shortly how and where you live</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="where_live" required>{{ old('where_live', Session::get('where_live')) }}</textarea>
          </div>
          @foreach($errors->get('where_live') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">How many people are living there?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="how_many_people" required>{{ old('how_many_people', Session::get('how_many_people')) }}</textarea>
          </div>
          @foreach($errors->get('how_many_people') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Do you have a job/occupation? Have you worked before?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="job" required>{{ old('job', Session::get('job')) }}</textarea>
          </div>
          @foreach($errors->get('job') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Has your family been affected by the conflict? Did you have any material loss due to the conflict?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="conflict" required>{{ old('conflict', Session::get('conflict')) }}</textarea>
          </div>
          @foreach($errors->get('conflict') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Would you be able to afford your studies without the support of SOG?</label>
          <div class="control">
            <label class="radio">
              <input type="radio" value="1" name="support_needed" @if(old('support_needed', Session::get('support_needed', 'asd')) === '1') checked @endif required>
              Yes
            </label>
            <label class="radio">
              <input type="radio" value="0" name="support_needed" @if(old('support_needed', Session::get('support_needed', 'asd')) === '0') checked @endif required>
              No
            </label>
          </div>
          @foreach($errors->get('support_needed') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Any additional information you would like to add?</label>
          <div class="control">
            <textarea class="textarea" placeholder="" name="additional_information">{{ old('additional_information', Session::get('additional_information')) }}</textarea>
          </div>
          @foreach($errors->get('additional_information') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field is-grouped is-grouped-centered">
          <p class="control">
            <a class="button is-light" href="/step2">
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
