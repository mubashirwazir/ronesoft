<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <h2>Contact Form Submission</h2>
    <p><strong>Name:</strong> {{ $data['companyName'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone Number:</strong> {{ $data['phone'] }}</p>
    <p><strong>Message:</strong> {{ $data['description'] }}</p>
</body>
</html>
