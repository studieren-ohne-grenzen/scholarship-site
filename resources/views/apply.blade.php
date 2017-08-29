@extends('layouts.app')
@section('title', 'SOG Scholarships')
@section('subtitle', 'Application')

@section('content')
  <section class="section">
    <div class="container">
      <p class="content">There are two ways to apply. Choose whichever is more convenient to you.</p>
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <div class="tile is-child box has-text-centered">
            <h3 class="title is-3">Online Form</h3>
            <img src="/img/online.png" width="50px" height="50px">
            <p>Apply directly by filling out an online form.</p><br>
            <a class="tile is-child button is-primary is-outlined" href="/step1">Choose</a>
          </div>
        </div>
        <div class="tile is-parent">
            <div class="tile is-child box has-text-centered">
              <h3 class="title is-3">Printing</h3>
              <img src="/img/printer.png" width="50px" height="50px">
              <p>Download and print a PDF and fill it out offline. Then upload a scan or an image of the filled out document.
              <a class="tile is-child button is-primary is-outlined" href="/upload">Choose</a>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('credits')
| <a href="https://icons8.com/">Icons by icons8</a>
@endsection
