@extends('_layouts.master')

@section('body')

<section class="h-screen -mt-20 flex flex-col items-center justify-center">
    <img class="w-40 rounded-full" src="assets/images/profile.jpg" alt="Luke Bouch">
    <h1>Luke Bouch</h1>
    <p class="text-center max-w-2xl">Luke is a web developer in Charlottesville Virginia offering custom solutions to
        clients that
        are effective and
        tailored to the their individual needs. He specializes in the TALL stack which was made popular by Matt
        Stauffer.</p>
</section>
<section class="narrow py-10">
    <h2>What is the TALL stack?</h2>
    <p>The TALL stack is collection of tools to aid in the development of streamlined and interactive web applications
        without
        the cost of many solutions by big tech companies. It's growth in popularity could be contributed to a number of
        reasons
        but the simplicity and easy of use have caused it to see wide scale adoption.</p>
    <p>By removing the time consuming complexities of the Single-Page-Applications produced by large tech companies,
        Luke is
        able to provide high quality solutions without the outrageous expense of similar solutions.</p>
</section>
<section class="bg-blue-800 text-white py-10">
    <div class="narrow">
        <h2>Contact</h2>
        <p><strong>Need a great developer to work on your next project?</strong><br />
            Just will out the form bellow and I will be sure to be in touch soon.</p>
        @include('_components.contact-form')
    </div>
</section>

@endsection