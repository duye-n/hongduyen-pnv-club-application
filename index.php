<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <form action="result.php" method="post">
            Name : <input type="text" name="Name">
            <div class="form-group d-flex">

                <p class="mt-2">Club you want to apply:</p>
                <select class="form-control ml-2" name="club" style="width:50%" id="clubSelect">
                    <option value="Robotic Club">Robotic Club</option>
                    <option value="Cultural Club">Cultural Club</option>
                    <option value="Sports Club">Sports Club</option>
                </select>
            </div>
            <div>
                Be time for you:
                <input type="radio" name="time" value="SaturdayMorning" id="SaturdayMorning" checked>
                <label for="SaturdayMorning">Saturday Morning</label><br>
                <input type="radio" name="time" value="SaturdayAfternoon" id=" SaturdayAfternoon">
                <label for="SaturdayAfternoon">Saturday afternoon</label><br>
                <input type="radio" name="time" value="SundayAfternoon" id=" SundayAfternoon">
                <label for="SundayAfternoon">Sunday afternoon</label>
            </div>

            <h3>Skills:</h3>

            <style>
                .checkbox-yellow input[type="checkbox"] {
                    display: none;
                }

                .checkbox-yellow label {
                    display: inline-block;
                    width: 16px;
                    height: 16px;
                    background-color: #fff;
                    border: 1px solid #ccc;
                    border-radius: 3px;
                    transition: background-color 0.3s;
                }

                .checkbox-yellow input[type="checkbox"]:checked+label {
                    background-color: orange;
                }
            </style>

            <script>
                // Lắng nghe sự kiện click trên các ô checkbox
                var checkboxes = document.querySelectorAll('.checkbox-yellow input[type="checkbox"]');
                checkboxes.forEach(function(checkbox) {
                    checkbox.addEventListener('click', function() {
                        // Thay đổi màu sắc của label khi checkbox được click
                        var label = checkbox.nextElementSibling;
                        label.style.backgroundColor = checkbox.checked ? 'orange' : '#fff';
                    });
                });
            </script>

            <div class="row">
                <div class="col-md-6">
                    <div class="checkbox-yellow">
                        <input type="checkbox" name="habbit[]" value="bestCoder" id="bestCoder">
                        <label for="bestCoder"></label>
                        <span>the best coder</span>
                    </div><br>
                    <div class="checkbox-yellow">
                        <input type="checkbox" name="habbit[]" value="superStar" id="superStar">
                        <label for="superStar"></label>
                        <span>A super star</span>
                    </div><br>
                    <div class="checkbox-yellow">
                        <input type="checkbox" name="habbit[]" value="singer" id="singer">
                        <label for="singer"></label>
                        <span>singer</span>
                    </div><br>
                </div>

                <div class="col-md-6">
                    <div class="checkbox-yellow">
                        <input type="checkbox" name="habbit[]" value="bestEater" id="bestEater">
                        <label for="bestEater"></label>
                        <span>the best eater</span>
                    </div><br>
                    <div class="checkbox-yellow">
                        <input type="checkbox" name="habbit[]" value="arts" id="arts">
                        <label for="arts"></label>
                        <span>good in arts</span>
                    </div><br>
                    <div class="checkbox-yellow">
                        <input type="checkbox" name="habbit[]" value="czaryDancer" id="czaryDancer">
                        <label for="czaryDancer"></label>
                        <span>A czary dancer</span>
                    </div><br>
                    <div class="checkbox-yellow">
                        <input type="checkbox" name="habbit[]" value="design" id="design">
                        <label for="design"></label>
                        <span>Good in design</span>
                    </div><br>
                </div>
            </div>

            <style>
                .bt {
                    background-color: orange;
                }
            </style>
            <button class="bt" type="submit">Submit</button>


        </form>
    </div>



</body>

</html>