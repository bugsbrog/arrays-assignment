<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">

<head>
    <title>Arrays Assignment</title>
</head>

<body>
    Part 1.
    <br />
    <?php
    
    // Normal array
    $string = array(
        "rain", "sunshine", "clouds", "hail",
        "sleet", "snow", "wind"
    );
    echo "We've seen all kinds of weather this month. At the 
        beginning of the month, we had $string[5] and $string[6]. 
        Then came $string[1] with a few $string[2] and some $string[0]. 
        At least we didn't get any $string[3] or $string[4].";
    ?><br />
    Part 2.
    <br />

    <!-- Associative array w/city, country -->
    <?php $assoc = array(
        "Japan" => "Tokyo", "Mexico" => "Mexico City",
        "USA" => "New York City", "India" => "Mumbai", "South Korea" => "Seoul",
        "China" => "Shanghai", "Nigeria" => "Lagos", "Argentina" => "Buenos 
Aires", "Egypt" => "Cairo", "England" => "London"
    ); ?>

    <!-- Loop through to put all data on the screen -->
    <?php foreach ($assoc as $country => $city) {
        echo $city . ", " . $country . "<br />";
    } ?><br />

</body>

</html>