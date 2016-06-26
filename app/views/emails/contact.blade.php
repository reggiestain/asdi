<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h3>Contact Request</h3>
		
		<p>The following contact request was received from the website at {{ $time }}.</p>
		<p>From: {{ $first_name }} {{ $last_name }}</p>
		<p>Email: {{ $email }}</p>
		<p>Mobile: {{ $mobile }}</p>
		<p>Comments: {{ $comments }}</p>
	</body>
</html>