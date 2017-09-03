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
            <input type="text" class="input @if($errors->has('mother')) is-danger @endif" name="mother" placeholder="" value="{{ old('mother', Session::get('mother')) }}" required>
          </div>
          @foreach($errors->get('mother') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Name, age and profession of father</label>
          <div class="control">
            <input type="text" class="input @if($errors->has('father')) is-danger @endif" name="father" placeholder="" value="{{ old('father', Session::get('father')) }}" required>
          </div>
          @foreach($errors->get('father') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">If married: name, age and profession of husband / wife</label>
          <div class="control">
            <input type="text" class="input @if($errors->has('spouse')) is-danger @endif" name="spouse" placeholder="" value="{{ old('spouse', Session::get('spouse')) }}">
          </div>
          @foreach($errors->get('spouse') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">If applicable: age of child / children</label>
          <div class="control">
            <textarea class="textarea @if($errors->has('children')) is-danger @endif" placeholder="" name="children">{{ old('children', Session::get('children')) }}</textarea>
          </div>
          @foreach($errors->get('children') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Age and profession of sibling(s)</label>
          <div class="control">
            <textarea class="textarea @if($errors->has('siblings')) is-danger @endif" placeholder="" name="siblings">{{ old('siblings', Session::get('siblings')) }}</textarea>
          </div>
          @foreach($errors->get('siblings') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
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
