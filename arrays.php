<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>untitled</title>
  </head>
  <body>
    Part 1.
    <br />
    <?php 
        $string = array("rain", "sunshine", "clouds", "hail",
        "sleet", "snow", "wind");
        echo "We've seen all kinds of weather this month. At the 
        beginning of the month, we had $string[5] and $string[6]. 
        Then came $string[1] with a few $string[2] and some $string[0]. 
        At least we didn't get any $string[3] or $string[4].";
    ?>
  </body>
</html>
