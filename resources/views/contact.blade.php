@extends('navbar')

@section('heder')
@endsection
<div class="container" style="margin-top: 5% ; width:50%">
    <div class="container py-4">

        <!-- Bootstrap 5 starter form -->
        <form id="contactForm" method="POST" action="contact-my" >
      @csrf

      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <!-- Name input -->
          <div class="mb-3">
            <label class="form-label" for="name" >Name</label>
            <input class="form-control" id="name" name="name" value="{{ old('name') }}" type="string" placeholder="Name" />
          </div>

          <!-- Email address input -->
          <div class="mb-3">
            <label class="form-label" for="emailAddress">Email Address</label>
            <input class="form-control" id="emailAddress" type="email" placeholder="Email Address"  name="email"  value="{{ old('email') }}"/>
          </div>

          <!-- Message input -->
          <div class="mb-3">
            <label class="form-label" for="message">Message</label>
            <textarea class="form-control" id="message" type="text" placeholder="Message"  name="contact" style="height: 10rem;" >{{ old('contact') }}</textarea>
          </div>

          <!-- Form submit button -->
          <div class="d-grid">
            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
          </div>

        </form>


      </div>
    </div>

