<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BMI Calculator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow p-4">

                <h2 class="text-center mb-4">
                    BMI Calculator
                </h2>

                <input type="number"
                id="weight"
                class="form-control mb-3"
                placeholder="Enter Weight in KG">

                <input type="number"
                id="height"
                class="form-control mb-3"
                placeholder="Enter Height in Meters">

                <button onclick="calculateBMI()"
                class="btn btn-primary w-100">

                Calculate BMI

                </button>

                <h4 class="text-center mt-4"
                id="result">

                </h4>

            </div>

        </div>

    </div>

</div>

<script>

function calculateBMI(){

    let weight =
    document.getElementById("weight").value;

    let height =
    document.getElementById("height").value;

    let bmi = weight / (height * height);

    document.getElementById("result")
    .innerHTML = "Your BMI is: " + bmi.toFixed(2);
}

</script>

</body>
</html>