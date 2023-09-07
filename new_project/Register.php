<html>
<head>
  <title>Form in Dark Mode</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="dark">
  <form action="#">
    <div class="mb-4">
      <label for="name" class="block text-gray-700 font-semibold mb-1">Name</label>
      <input type="text" id="name" class="form-control w-full">
    </div>
    <div class="mb-4">
      <label for="age" class="block text-gray-700 font-semibold mb-1">Age</label>
      <input type="number" id="age" class="form-control w-full">
    </div>
    <div class="mb-4">
      <label for="roll_no" class="block text-gray-700 font-semibold mb-1">Roll No</label>
      <input type="text" id="roll_no" class="form-control w-full">
    </div>
    <div class="mb-4">
      <label for="college" class="block text-gray-700 font-semibold mb-1">College</label>
      <input type="text" id="college" class="form-control w-full">
    </div>
    <div class="mb-4">
      <label for="city" class="block text-gray-700 font-semibold mb-1">City</label>
      <input type="text" id="city" class="form-control w-full">
    </div>
    <div class="mb-4">
      <label for="state" class="block text-gray-700 font-semibold mb-1">State</label>
      <input type="text" id="state" class="form-control w-full">
    </div>
    <div class="mb-4">
      <label for="country" class="block text-gray-700 font-semibold mb-1">Country</label>
      <input type="text" id="country" class="form-control w-full">
    </div>
    <div class="mb-4">
      <label for="address" class="block text-gray-700 font-semibold mb-1">Address</label>
      <input type="text" id="address" class="form-control w-full">
    </div>
    <div class="mb-4">
      <label for="about" class="block text-gray-700 font-semibold mb-1">About</label>
      <textarea id="about" class="form-control w-full"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>
</html>
