  <html>
<head>
<title>Date Function</title>
</head>
<body>  
   <h4><u>DATE FUNCTION</u></h4>
    <h5>1.DATE()</h5>
    <?php
    echo date('d/m/y');
    ?>

    <h5>2.DATE FORMATS()</h5>
    <?php
    //It displays the current date,month and year in various formats
    echo "The Date is: " . date('d') . "<br><br>";
    echo "The Month is: " . date('m') . "<br><br>";
    echo "The Month is: " . date('M') . "<br><br>";
    echo "The Year is: " . date('y') . "<br><br>";
    echo "The Year is: " . date('Y') . "<br><br>";
    ?>

    <h5>3.ADD & SUBTRACT DATE USING DATE_MODIFY()</h5>
    <?php
    //ADD
    $date = date_create("10-10-2002");
    date_modify($date, "15 days");
    echo date_format($date, "d - M - Y") . "<br><br>";
    ?>

    <?php
    //SUBTRACT
    $date = date_create("1993-10-28");
    date_modify($date, "-14days");
    echo date_format($date, "d /F / Y");
    ?>

    <h5>4.ADD DATE USING DATE_ADD()</h5>
    <?php
    $date = date_create("19-11-2014");
    date_add($date, date_interval_create_from_date_string("24 days"));
    echo date_format($date, "M - d - Y");
    ?>

    <h5>5.SUBTRACT DATE USING DATE_SUB()</h5>
    <?php
    $date = date_create("18-04-2018");
    date_sub($date, date_interval_create_from_date_string("30 days"));
    echo date_format($date, "Y - F - d");
    ?>

    <h5>6.DATE_CREATE()</h5>
    <?php
    $date = date_create("2019-07-27");
    echo date_format($date, "d - m - Y");
    ?>

    <h5>7.CHECKDATE()</h5>
    <?php
    //It checks the (SYSTEM DATE FORMAT)
    if (checkdate(06, 21, 2004)) {
        echo "Date Format is matched";
    } else {
        echo "sorry date format is not matched";
    }
    echo "<br><br>";
    ?>
    <?php
    if (checkdate(22, 05, 2012)) {
        echo "Date Format is matched";
    } else {
        echo "sorry date format is not matched";
    }
    ?>

    <h5>8.MKTIME()</h5>
    <?php
    echo date('D', mktime(0, 0, 0, 10, 10, 2023));
    ?>

    <h5>9.STRTOTIME()</h5>
    <?php
    $str = "April 20 2023";
    echo date('d-F-Y', strtotime($str));
    echo "<br><br>";
    ?>
    <?php
    echo date("Y-m-d", strtotime("next monday"));
    echo "<br><br>";
    ?>
    <?php
    echo date("d-M-Y", strtotime("now"));
    echo "<br><br>";
    ?>
    <?php
    echo date("F-d-Y", strtotime("yesterday"));
    echo "<br><br>";
    ?>
    <?php
    echo date("d-M-Y", strtotime("tomorrow"));
    ?>

    <h4><u>OTHER EXAMPLES OF DATE FUNCTION</u></h4>
    <h5>1.TO DISPLAY THE DAY</h5>
    <?php
    echo date("l");
    ?>

    <h5>2.TO DISPLAY THE FIRST THREE LETTER OF DAY</h5>
    <?php
    echo date('D');
    ?>

    <h5>3.TO FIND LEAP YEAR OR NOT</h5>
    <?php
    echo date('L');
    ?>

    <h5>4.DYNAMIC YEAR IN FOOTER</h5>
    copyright &copy; 2013-
    <?php
    echo date('Y');
    ?>

    <h5>5.TO DISPLAY THE MONTH IN FULL FORMAT</h5>
    <?php
    echo date('F');
    ?>
	</body>
	</html>