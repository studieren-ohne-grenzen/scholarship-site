@extends('layouts.app')
@section('title', 'SOG Scholarships')
@section('subtitle', 'Application - Upload')
@section('recaptcha')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('content')
  <section class="section">
    <div class="container">
      <h3 class="title is-3">Step 1: Download PDF</h3>
      <p>First, download and fill out the following application document.</p><br>
      <a class="button is-primary" href="document.pdf">Click here to download the PDF</a><br><br>
      <h3 class="title is-3">Step 2: Upload</h3>
      <p>Now, please enter your name and upload a copy of your filled out document.</p><br>
      <form method="POST" action="/uploaded" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="field">
          <label class="label">First name</label>
          <div class="control">
            <input type="text" class="input" name="first_name" placeholder="" value="{{ old('first_name') }}" required>
          </div>
          @foreach($errors->get('first_name') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <label class="label">Family name</label>
          <div class="control">
            <input type="text" class="input" name="family_name" placeholder="" value="{{ old('family_name') }}" required>
          </div>
          @foreach($errors->get('family_name') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <div class="file" id="fileUpload">
            <label class="file-label">
              <input class="file-input" type="file" name="application_pdf" id="file-upload" required>
              <span class="file-cta">
                <svg role="img" title="youtube" class="svg-icon-small">
                  <use xlink:href="img/icons.svg#upload"/>
                </svg>
                <span class="file-label">
                  Choose a file…
                </span>
              </span>
              <span class="file-name is-hidden" id="file-upload-name"></span>
            </label>
          </div>
          @foreach($errors->get('application_pdf') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <div class="control">
              <div class="g-recaptcha" data-sitekey="6LduLC8UAAAAAPlcIF86f_NEyW6BNHBoUmXp_7-3"></div>
          </div>
          @foreach($errors->get('g-recaptcha-response') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

        <div class="field">
          <div class="control">
              <button type="submit" class="button is-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </section>
@endsection
