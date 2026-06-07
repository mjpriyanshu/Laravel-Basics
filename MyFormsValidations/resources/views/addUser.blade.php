<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add User</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container py-5" style="max-width: 520px;">
		<h3 class="mb-4">Add User</h3>

		<form action="{{ route('addUser') }}" method="POST" class="border rounded p-4">
			@csrf
			<div class="mb-3">
				<label for="name" class="form-label">Name</label>
				<input type="text" value="{{old('name')}}" class="form-control" id="name" name="name" placeholder="Enter name">
			</div>

			<div class="mb-3">
				<label for="email" class="form-label">Email</label>
				<input type="email" value="{{old('email')}}" class="form-control" id="email" name="email" placeholder="Enter email">
			</div>

			<div class="mb-3">
				<label for="age" class="form-label">Age</label>
				<input type="number" value="{{old('age')}}" class="form-control" id="age" name="age" placeholder="Enter age">
			</div>

			<div class="mb-4">
				<label for="city" class="form-label">City</label>
				<select  class="form-select" id="city" name="city">
					<option selected disabled>Select city</option>
					<option value="new-york">New Delhi</option>
					<option value="london">Patna</option>
					<option value="dubai">Hyderabad</option>
					<option value="delhi">Lucknow</option>
				</select>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

        @if($errors->any())
            <div class="alert alert-danger mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
	</div>
</body>
</html>


<!--  
here we have shown error by foreach loop, but if we need to show after each input,
then:

<span>
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</span>


-->