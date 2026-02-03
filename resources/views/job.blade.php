<div>


    <h1>Job Listings</h1>
    <p>Welcome to the job listings page.</p>

    <p>{{ count($jobs) }} jobs available</p>

    <h1>My name is {{ $name }}</h1>

    @foreach ($jobs as $job)

        <div class="job-listing">
            <h2>{{ $job['title'] }}</h2>
            <p>{{ $job['description'] }}</p>
            <p><strong>Location:</strong> {{ $job['location'] }}</p>
            <p><strong>Company:</strong> {{ $job['company'] }}</p>
        </div>
    
    @endforeach 
    
    
</div>
