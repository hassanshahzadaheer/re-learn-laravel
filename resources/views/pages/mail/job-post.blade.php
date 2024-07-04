<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs Listing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 10px;
        }
        a {
            color: #3490dc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Jobs Listing</h1>

       
            <div>
                <h2>{{ $job->title }}</h2>
                <p>Salary: {{ $job->salary }}</p>
                <p>Posted: {{ $job->created_at->format('M d, Y') }}</p>
                <p>
                    <a href="{{ url('/jobs/' . $job->id) }}">View Job Details</a>
                </p>
                <hr>
            </div>
     

     
</body>
</html>
