<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel API Tester</title>
</head>
<body>
    <h1>Test Laravel API Routes</h1>

    <!-- GET Request -->
    <form action="{{ url('/http://sandbox.com') }}" method="GET">
        <button type="submit">Send GET Request</button>
    </form>

    <hr>

    <!-- POST Request -->
    <form action="{{ url('/cars') }}" method="POST">
        @csrf
        <h2>POST Request</h2>
        <label for="make">Make:</label>
        <input type="text" id="make" name="make" value="Toyota" required><br>
        <label for="model">Model:</label>
        <input type="text" id="model" name="model" value="Corolla" required><br>
        <label for="year">Year:</label>
        <input type="number" id="year" name="year" value="2020" required><br>
        <button type="submit">Send POST Request</button>
    </form>

    <hr>

    <!-- PUT Request -->
    <form action="{{ url('/cars/1') }}" method="POST">
        @csrf
        @method('PUT')
        <h2>PUT Request</h2>
        <label for="make">Make:</label>
        <input type="text" id="make" name="make" value="Toyota" required><br>
        <label for="model">Model:</label>
        <input type="text" id="model" name="model" value="Corolla" required><br>
        <label for="year">Year:</label>
        <input type="number" id="year" name="year" value="2021" required><br>
        <button type="submit">Send PUT Request</button>
    </form>

    <hr>

    <!-- DELETE Request -->
    <form action="{{ url('/cars/1') }}" method="POST">
        @csrf
        @method('DELETE')
        <h2>DELETE Request</h2>
        <button type="submit">Send DELETE Request</button>
    </form>
</body>
</html>
