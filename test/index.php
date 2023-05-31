<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><script>// Create the data to be sent
const data = {
  name: 'John',
  email: 'john@example.com'
};

// Convert the data to a URL-encoded string
const formData = new URLSearchParams(data).toString();

// Create an AJAX request
const xhr = new XMLHttpRequest();
xhr.open('GET', 'http://localhost/xampp-personal/test/index.php', true);
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

// Define the callback function to handle the response
xhr.onload = function() {
  if (xhr.status === 200) {
    // Request was successful
    console.log(xhr.responseText);
  } else {
    // Request failed
    console.error('Request failed. Status:', xhr.status);
  }
};

// Send the POST request
xhr.send(formData);
</Script>
</head>
<body>
</body>
</html>