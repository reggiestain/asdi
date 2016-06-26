<!DOCTYPE html>
<html lang="en-US" >
	<head >
		<meta charset="utf-8" >
	</head >
	<body >
		<h2 >Dear {{ $user['first_name'] }}</h2 >
		<p >Your application to enrol on the {{ $user['course']['name'] }} course has not been successful!</p >
		<p >Thank You,
			<br />
			~The Admin Team
		</p >
	</body >
</html >