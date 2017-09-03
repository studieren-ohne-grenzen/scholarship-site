@extends('layouts.app')
@section('title', 'SOG Scholarship')
@section('subtitle', 'Application - Summary')
@section('recaptcha')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('content')
  <section class="section">
    <div class="container">
      <div class="content">
        <h3>Personal</h3>
        <p><b>First name:</b> {{ Session::get('first_name') }}<br>
          <b>Family name:</b> {{ Session::get('family_name') }}<br>
          <b>Nationality:</b> {{ Session::get('nationality') }}<br>
          <b>Gender:</b> @if ( Session::get('gender') === 'male') Male @else Female @endif<br>
          <b>Current address:</b> {{ Session::get('current_address') }}<br>
          <b>Civil status:</b> {{ Session::get('civil_status') }}<br>
          <b>Date of birth:</b> {{ Session::get('date_of_birth') }}<br>
          <b>Place of birth:</b> {{ Session::get('place_of_birth') }}<br>
          <b>Phone number:</b> {{ Session::get('phone') }}<br>
          <b>E-Mail:</b> {{ Session::get('email') }}
        </p>
        <h3>Family</h3>
        <b>Name, age and profession of mother:</b>
        <p>{{ Session::get('mother') }}</p>
        <b>Name, age and profession of father:</b>
        <p>{{ Session::get('father') }}</p>
        <b>If married: name, age and profession of husband / wife:</b>
        <p>{{ Session::get('spouse') }}</p>
        <b>If applicable: age of child / children:</b>
        <p>{{ Session::get('children') }}</p>
        <b>Age and profession of sibling(s):</b>
        <p>{{ Session::get('siblings') }}</p>

        <h3>Personal situation</h3>
        <b>Please describe shortly the general conditions of your family:</b>
        <p>{{ Session::get('conditions') }}</p>
        <b>Please describe shortly the profession of your parents and how much they earn per month:</b>
        <p>{{ Session::get('parents_profession') }}</p>
        <b>Please describe shortly how and where you live:</b>
        <p>{{ Session::get('where_live') }}</p>
        <b>How many people are living there?</b>
        <p>{{ Session::get('how_many_people') }}</p>
        <b>Do you have a job/occupation? Have you worked before?</b>
        <p>{{ Session::get('job') }}</p>
        <b>Has your family been affected by the conflict? Did you have any material loss due to the conflict?</b>
        <p>{{ Session::get('conflict') }}</p>
        <b>Would you be able to afford your studies without the support of SOG?</b>
        <p>@if ( Session::get('support_needed', 'asd') === '1') Yes @else No @endif</p>
        <b>Any additional information you would like to add?</b>
        <p>{{ Session::get('additional_information') }}</p>
        
        <h3>Education</h3>
        <b>Have you already been enrolled at a university?</b>
        <p>@if ( Session::get('enrolled', 'asd') === '1') Yes @else No @endif</p>
        <b>If yes: In which field?</b>
        <p>{{ Session::get('major') }}</p>
        <b>If yes: Are you still studying?</b>
        <p>@if ( Session::get('still_studying', 'asd') === '1') Yes @else No @endif</p>
        <b>If no: What were your reasons for interrupting your studies?</b>
        <p>{{ Session::get('dropping_out_reasons') }}</p>
        <b>In what field do you want to study? What university?</b>
        <p>{{ Session::get('wanted_major') }}</p>
        <b>What languages do you speak? Please indicate level (spoken/written/mother tongue)</b>
        <p>{{ Session::get('languages') }}</p>
        <b>Do you have the possibility to live with your family during your studies?</b>
        <p>@if ( Session::get('live_with_family', 'asd') === '1') Yes @else No @endif</p>

        <h3>Engagement &amp; Motivation</h3>
        <b>Have you already been socially engaged (e.g. volunteering in an organization, own social project, etc. work without payment)? Describe your function:</b>
        <p>{{ Session::get('engagement') }}</p>
        <b>Where do you see the biggest problems in your country/region?</b>
        <p>{{ Session::get('biggest_problems') }}</p>
        <b>Where do you see yourself in the near future? What do you want to do after finishing your studies?</b>
        <p>{{ Session::get('future') }}</p>
        <b>What are your reasons/motivation for studying?</b>
        <p>{{ Session::get('motivation') }}</p>

        <h3>Personal project</h3>
        <b>Please describe shortly your idea for a personal project which would help to develop your region/society</b>
        <p>{{ Session::get('project') }}</p>
        <b>What are the concrete objects/aims of your project?</b>
        <p>{{ Session::get('project_goal') }}</p>
        <b>Who do you want to reach? How many people would benefit from your project?</b>
        <p>{{ Session::get('project_reach') }}</p>
        <b>What would be your role in the project?</b>
        <p>{{ Session::get('project_role') }}</p>
        <b>How could your project be financially supported? (please remember, SOG does not grant any financial support for the project)</b>
        <p>{{ Session::get('project_finances') }}</p>
        <b>Are there any possible partners (NGOs, local organizations, governmental institutions) who could cooperate in your project?</b>
        <p>{{ Session::get('project_partners') }}</p>
      </div>
      
      <form method="POST" action="/submitted">
        {{ csrf_field() }}

        <div class="field">
          <div class="control">
              <div class="g-recaptcha" data-sitekey="6LduLC8UAAAAAPlcIF86f_NEyW6BNHBoUmXp_7-3"></div>
          </div>
          @foreach($errors->get('g-recaptcha-response') as $error)
              <p class="help is-danger">{{ $error }}</p>
          @endforeach
        </div>

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
