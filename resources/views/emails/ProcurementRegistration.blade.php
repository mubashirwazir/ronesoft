<!DOCTYPE html>
<html>
<head>
    <title>New Registration</title>
</head>
<body>
    <h2>New Registration Details</h2>
    <p><strong>Company Name:</strong> {{ $data['companyName'] }}</p>
    <p><strong>Business Address:</strong> {{ $data['businessAddress'] }}</p>
    <p><strong>City:</strong> {{ $data['city'] }}</p>
    <p><strong>State/Province:</strong> {{ $data['state'] }}</p>
    <p><strong>Postal/Zip Code:</strong> {{ $data['postalCode'] }}</p>
    <p><strong>Country:</strong> {{ $data['country'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Company Website:</strong> {{ $data['companyWebsite'] }}</p>
    <p><strong>Description:</strong> {{ $data['description'] }}</p>
    <h2>User Information</h2>
    <p><strong>First Name:</strong> {{ $data['userFirstName'] }}</p>
    <p><strong>Last Name:</strong> {{ $data['userLastName'] }}</p>
    <p><strong>Email:</strong> {{ $data['userEmail'] }}</p>
    <p><strong>User Phone Number:</strong> {{ $data['userPhone'] }}</p>
</body>
</html>
