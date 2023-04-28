<!-- submit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Listing</title>
</head>
<body>
    <h1>Submit a Job Listing</h1>

    @if ($errors->any())
        <div>
            <strong>Please correct the errors below:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/submit" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="tags">Tags:</label>
        <input type="text" name="tags" id="tags" required>
        <br>
        <label for="company">Company:</label>
        <input type="text" name="company" id="company" required>
        <br>
        <label for="location">Location:</label>
        <input type="text" name="location" id="location" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="website">Website:</label>
        <input type="url" name="website" id="website" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="5" required></textarea>
        <br>
        <button type="submit">Submit Listing</button>
    </form>
</body>
</html>
