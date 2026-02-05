<x-layout :title="$title ?? 'Job Listings'">

<h1><strong>{{ $title }}</strong></h1>

<h3>Welcome to the job listings page.</h3>


    <h1>My name is <strong>{{ $name }}</strong></h1> <br>

    <hr> <br>

    @foreach ($jobs as $job)

        <div class="job-listing">
            <h2>{{ $job['title'] }}</h2>
            <p>{{ $job['description'] }}</p>
            <p><strong>Location:</strong> {{ $job['location'] }}</p>
            <p><strong>Company:</strong> {{ $job['company'] }}</p>
        </div>
    
    @endforeach 

</x-layout>


