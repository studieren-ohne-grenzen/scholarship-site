@extends('layouts.app')
@section('title', 'SOG Scholarship')
@section('subtitle', 'Application - Step 1: Personal')

@section('content')
  <section class="section">
    <div class="container">
      <form method="POST" action="/step2">
        {{ csrf_field() }}
        <div class="field">
          <label class="label">First name</label>
          <div class="control">
            <input type="text" class="input" name="first_name" placeholder="" value="{{ Session::get('first_name', '') }}" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Family name</label>
          <div class="control">
            <input type="text" class="input" name="family_name" placeholder="" value="{{ Session::get('family_name', '') }}" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Nationality</label>
          <div class="control">
            <input type="text" class="input" name="nationality" placeholder=""required>
          </div>
        </div>

        <div class="field">
          <label class="label">Gender</label>
          <div class="control">
            <label class="radio">
              <input type="radio" name="gender" value="male" @if ( Session::get('gender', 'asd') === 'male') checked @endif required>
              Male
            </label>
            <label class="radio">
              <input type="radio" name="gender" value="female" @if ( Session::get('gender', 'asd') === 'female') checked @endif required>
              Female
            </label>
          </div>
        </div>

        <div class="field">
          <label class="label">Current address</label>
          <div class="control">
            <input type="text" class="input" name="current_address" placeholder="" value="{{ Session::get('current_address', '') }}" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Civil status</label>
          <div class="control">
            <input type="text" class="input" name="civil_status" placeholder="" value="{{ Session::get('civil_status', '') }}" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Date of birth</label>
          <div class="control">
            <input type="date" class="input" name="date_of_birth" placeholder="" value="{{ Session::get('date_of_birth', '') }}" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Place of birth</label>
          <div class="control">
            <input type="text" class="input" name="place_of_birth" placeholder="" value="{{ Session::get('place_of_birth', '') }}" required>
          </div>
        </div>

        <div class="field">
          <label class="label">Phone number</label>
          <div class="control">
            <input type="tel" class="input" name="phone" placeholder="" value="{{ Session::get('phone', '') }}" required>
          </div>
        </div>

        <div class="field">
          <label class="label">E-Mail</label>
          <div class="control">
            <input type="email" class="input" name="email" placeholder="" value="{{ Session::get('email', '') }}" required>
          </div>
        </div>

        <div class="field is-grouped is-grouped-centered">
          <p class="control">
            <a class="button is-light">
              Cancel
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
