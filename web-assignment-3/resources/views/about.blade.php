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
                <div class="card">
                    <img src="./images/leg_press.jpg" alt="bench" />
                    <h2>Well equipped</h2>
                    <hr />
                    <p>
                        Many equipments including benchpress, squat rack, free weights,
                        leg press, and much more.
                    </p>
                </div>
                <div class="card">
                    <img src="./images/yoga.jpg" alt="yoga" />
                    <h2>Training Floor</h2>
                    <hr />
                    <p>
                        Full yoga mats and Pilates equipment with a newly
                        installed swimming pool.
                    </p>
                </div>
                <div class="card">
                    <img src="./images/waiting.jpg" alt="wait" />
                    <h2>Waiting Area</h2>
                    <hr />
                    <p>Comfortable chairs and couches along with TV for parents.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section_3">
        <h1>Instructors</h1>
        <div class="Profiles">
            <div class="profile_card">
                <img src="./images/Jane.jpg" alt="profile 1" />
                <div class="content">
                    <h1>Jane Robinson</h1>
                    <p>
                        A yoga instructor with 10 years of experience. She is a very
                        passionate person who creates a healthy environment around her.
                    </p>
                </div>
            </div>
            <div class="profile_card">
                <img src="./images/brett.jpg" alt="profile 2" />
                <div class="content">
                    <h1>Brett Whitinui</h1>
                    <p>
                        A gym instructor who has been coaching for 15 years. He helps
                        clients achieve their fitness goals.
                    </p>
                </div>
            </div>
            <div class="profile_card">
                <img src="./images/wendyy.jpg" alt="profile 3" />
                <div class="content">
                    <h1>Wendy Jones</h1>
                    <p>
                        Wendy is a swimming coach with 8 years of experience. She is a
                        dedicated professional specializing in advanced swimming techniques.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
