@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section style="background-color: #141D2B; padding-top: 5rem; padding-bottom: 4rem;">
    <div class="container">
        <div class="mb-4 d-flex justify-content-center">
            <div class="d-inline-flex p-1 rounded-pill" style="background-color: #0d141d">
                <span class="badge rounded-pill bg-primary align-bottom">New</span>
                <a class="px-2 text-decoration-none text-white-50" href="">HTB Business CTF is back: A hacking competition for companies | $50K worth of prizes! 
                    <span>&nbsp;<i class="bi bi-chevron-right"></i></span></a>
            </div>
        </div>
        
        <div class="d-block">
            <h1 class="mx-auto mb-3 text-white fw-bold text-center display-3">A Massive</br>Coding Playground</h1>
            <p class="mx-auto mb-3 text-white-50 col-12 col-md-9 col-lg-6 text-center lead">Join a dynamically growing hacking community and take your cybersecurity skills to the next level through the most captivating, gamified, hands-on training experience!</h1>
            <div class="mb-3 d-flex justify-content-center">
                <button type="button" class="mx-auto btn btn-primary">Join Now</button>
            </div>
        </div>
    </div>
</section>
@endsection
