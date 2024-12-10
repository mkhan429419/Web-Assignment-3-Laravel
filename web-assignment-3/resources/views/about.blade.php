@extends('layouts.app')

@section('title', 'Triathlon PK - About')

@section('content')
    <section class="section_1 container">
        <h1 class="motto">
            <i>Personal training for self confidence, health and self fulfilment</i>
        </h1>
        <h1>History</h1>
        <div class="history">
            <div class="history_right">
                <p>
                    Triathlon PK has been actively engaged in sports for the past 30
                    years. Triathlon has been a dedicated leader in sports
                    instruction, empowering many students through its training.
                    Originally located in the basement in Multan Cantt.
                </p>
            </div>
        </div>
    </section>
    <section class="section_2">
        <div class="facilities">
            <h2>Facilities</h2>
            <div class="card_section">
                @foreach ($facilities as $facility)
                    <div class="card">
                        <img src="{{ asset($facility->image_url) }}" alt="{{ $facility->title }}" />
                        <h2>{{ $facility->title }}</h2>
                        <hr />
                        <p>{{ $facility->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section_3">
    <h1>Instructors</h1>
    <div class="Profiles">
        @foreach ($instructors as $instructor)
            <div class="profile_card">
                <img src="{{ asset($instructor->image_url) }}" alt="profile {{ $loop->index + 1 }}" />
                <div class="content">
                    <h1>{{ $instructor->name }}</h1>
                    <p>{{ $instructor->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
