<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Dear {{ $user['first_name'] }}</h2>
		
		<p>Your application to enrol on the {{ $user['course']['name'] }} course has been successful!</p>
		<p>Please use the following link to pay online.</p>
		<p>{{ link_to('/portal/courses') }}</p>
		<p>Congratulations, <br />
			~The Admin Team</p>
	</body>
</html>