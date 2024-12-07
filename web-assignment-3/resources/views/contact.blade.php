@extends('layouts.app')

@section('title', 'Triathlon PK - Contact')

@section('content')
<section class="section_1">
    <div class="anime">
        <i class="fa fa-bicycle" aria-hidden="true"></i>
    </div>
    <div class="container">
        <h1>Follow Us</h1>
        <div class="following">
            <div class="card side">
                <img src="{{ asset('images/instaa.jpg') }}" alt="Instagram">
                <div class="cardcontent">
                    <h2>Triathlon_the_fittest</h2>
                </div>
            </div>
            <div class="card mid">
                <img src="{{ asset('images/facebook.jpg') }}" alt="Facebook">
                <div class="cardcontent">
                    <h2>Channel_Triathlon</h2>
                </div>
            </div>
            <div class="card side">
                <img src="{{ asset('images/twitter.jpg') }}" alt="Twitter">
                <div class="cardcontent">
                    <h2>Triathlon_the_best</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section_2">
    <h1>Contact Us</h1>
    <div class="contact">
        <div class="contact_left">
            <form>
                <div class="form">
                    <div class="content">
                        <label for="name">Name:</label>
                        <input type="text" id="name" placeholder="Enter your name" required />
                        <hr />
                    </div>
                    <div class="content">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" id="phone" placeholder="XXX-XXX-XXXX" required />
                        <hr />
                    </div>
                    <div class="content">
                        <label for="email">Email:</label>
                        <input type="email" id="email" placeholder="Enter your email" required />
                        <hr />
                    </div>
                    <div class="content">
                        <label for="trainer">Trainers:</label>
                        <select id="trainer" class="Trainers">
                            <option value="Jane Robinson">Jane Robinson</option>
                            <option value="Brett Whitinui">Brett Whitinui</option>
                            <option value="Wendy Jones">Wendy Jones</option>
                        </select>
                    </div>
                    <div class="content">
                        <label for="message">Message:</label>
                        <textarea id="message" placeholder="Enter your message..." rows="4" required></textarea>
                    </div>
                    <div class="button_for_submit">
                        <button class="submit" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="contact_right">
            <img src="{{ asset('images/section_bg.jpg') }}" alt="Contact image">
        </div>
    </div>
</section>
@endsection
