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
            <input type="text" class="input @if($errors->has('first_name')) is-danger @endif" name="first_name" placeholder="" value="{{ old('first_name', Session::get('first_name')) }}" required>
          </div>
          @foreach($errors->get('first_name') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Family name</label>
          <div class="control">
            <input type="text" class="input @if($errors->has('family_name')) is-danger @endif" name="family_name" placeholder="" value="{{ old('family_name', Session::get('family_name')) }}" required>
          </div>
          @foreach($errors->get('family_name') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Nationality</label>
          <div class="control">
            <input type="text" class="input @if($errors->has('nationality')) is-danger @endif" name="nationality" placeholder="" value="{{ old('nationality', Session::get('nationality')) }}" required>
          </div>
          @foreach($errors->get('nationality') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Gender</label>
          <div class="control">
            <label class="radio">
              <input type="radio" name="gender" value="male" @if(old('gender', Session::get('gender', 'asd')) === 'male') checked @endif required>
              Male
            </label>
            <label class="radio">
              <input type="radio" name="gender" value="female" @if(old('gender', Session::get('gender', 'asd')) === 'female') checked @endif required>
              Female
            </label>
          </div>
          @foreach($errors->get('gender') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Current address</label>
          <div class="control">
            <input type="text" class="input @if($errors->has('current_address')) is-danger @endif" name="current_address" placeholder="" value="{{ old('current_address', Session::get('current_address')) }}" required>
          </div>
          @foreach($errors->get('current_address') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Civil status</label>
          <div class="control">
            <input type="text" class="input @if($errors->has('civil_status')) is-danger @endif" name="civil_status" placeholder="" value="{{ old('civil_status', Session::get('civil_status')) }}" required>
          </div>
          @foreach($errors->get('civil_status') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Date of birth</label>
          <div class="control">
            <input type="date" class="input @if($errors->has('date_of_birth')) is-danger @endif" name="date_of_birth" placeholder="" value="{{ old('date_of_birth', Session::get('date_of_birth')) }}" required>
          </div>
          @foreach($errors->get('date_of_birth') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Place of birth</label>
          <div class="control">
            <input type="text" class="input @if($errors->has('place_of_birth')) is-danger @endif" name="place_of_birth" placeholder="" value="{{ old('place_of_birth', Session::get('place_of_birth')) }}" required>
          </div>
          @foreach($errors->get('place_of_birth') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Phone number</label>
          <div class="control">
            <input type="tel" class="input @if($errors->has('phone')) is-danger @endif" name="phone" placeholder="" value="{{ old('phone', Session::get('phone')) }}" required>
          </div>
          @foreach($errors->get('phone') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">E-Mail</label>
          <div class="control">
            <input type="email" class="input @if($errors->has('email')) is-danger @endif" name="email" placeholder="" value="{{ old('email', Session::get('email')) }}" required>
          </div>
          @foreach($errors->get('email') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
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
