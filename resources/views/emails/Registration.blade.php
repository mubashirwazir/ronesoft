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
    <p><strong>Email, General Mailbox:</strong> {{ $data['email'] }}</p>
    <p><strong>User First Name:</strong> {{ $data['userFirstName'] }}</p>
    <p><strong>User Last Name:</strong> {{ $data['userLastName'] }}</p>
    <p><strong>User Email:</strong> {{ $data['userEmail'] }}</p>
    <p><strong>Selected Service:</strong> {{ $data['service'] }}</p>
</body>
</html>
