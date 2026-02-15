<!DOCTYPE html>
<html>
<head>
    <title>SQL Functions Demo</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 40px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #4a90d9; color: white; }
        tr:nth-child(even) { background: #f4f4f4; }
        h1 { color: #333; }
        h2 { margin-top: 40px; color: #4a90d9; border-bottom: 2px solid #4a90d9; padding-bottom: 5px; }
        a { color: #4a90d9; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<h1>SQL Functions Demonstration</h1>

<h2>String Functions</h2>
<table>
<tr><th>Function</th><th>Description</th><th>Example</th><th>Output</th></tr>
<tr><td>ASCII()</td><td>Returns ASCII value of first character</td><td>SELECT ASCII(name) FROM employees;</td><td><a href="string/ascii.php">View</a></td></tr>
<tr><td>CHAR_LENGTH()</td><td>Returns length of string in characters</td><td>SELECT CHAR_LENGTH(name) FROM employees;</td><td><a href="string/char_length.php">View</a></td></tr>
<tr><td>CHARACTER_LENGTH()</td><td>Same as CHAR_LENGTH()</td><td>SELECT CHARACTER_LENGTH(name) FROM employees;</td><td><a href="string/character_length.php">View</a></td></tr>
<tr><td>CONCAT()</td><td>Joins strings together</td><td>SELECT CONCAT(name, ' - ', department) FROM employees;</td><td><a href="string/concat.php">View</a></td></tr>
<tr><td>CONCAT_WS()</td><td>Concatenates with a separator</td><td>SELECT CONCAT_WS(' | ', name, department) FROM employees;</td><td><a href="string/concat_ws.php">View</a></td></tr>
<tr><td>FIELD()</td><td>Returns index position of value in list</td><td>SELECT FIELD(department, 'HR', 'IT', 'Finance') FROM employees;</td><td><a href="string/field.php">View</a></td></tr>
<tr><td>FIND_IN_SET()</td><td>Returns position in comma-delimited list</td><td>SELECT FIND_IN_SET(department, 'HR,IT,Finance') FROM employees;</td><td><a href="string/find_in_set.php">View</a></td></tr>
<tr><td>FORMAT()</td><td>Formats a number with commas</td><td>SELECT FORMAT(salary, 2) FROM employees;</td><td><a href="string/format.php">View</a></td></tr>
<tr><td>INSERT()</td><td>Inserts a string within another string</td><td>SELECT INSERT(name, 1, 5, 'XXXXX') FROM employees;</td><td><a href="string/insert.php">View</a></td></tr>
<tr><td>INSTR()</td><td>Returns position of first occurrence of substring</td><td>SELECT INSTR(name, 'a') FROM employees;</td><td><a href="string/instr.php">View</a></td></tr>
<tr><td>LCASE()</td><td>Converts string to lowercase (alias of LOWER)</td><td>SELECT LCASE(name) FROM employees;</td><td><a href="string/lcase.php">View</a></td></tr>
<tr><td>LEFT()</td><td>Extracts characters from the left</td><td>SELECT LEFT(name, 5) FROM employees;</td><td><a href="string/left.php">View</a></td></tr>
<tr><td>LENGTH()</td><td>Returns length of string in bytes</td><td>SELECT LENGTH(name) FROM employees;</td><td><a href="string/length.php">View</a></td></tr>
<tr><td>LOCATE()</td><td>Returns position of first occurrence of substring</td><td>SELECT LOCATE('o', name) FROM employees;</td><td><a href="string/locate.php">View</a></td></tr>
<tr><td>LOWER()</td><td>Converts string to lowercase</td><td>SELECT LOWER(name) FROM employees;</td><td><a href="string/lower.php">View</a></td></tr>
<tr><td>LPAD()</td><td>Pads string on the left to a specified length</td><td>SELECT LPAD(name, 20, '*') FROM employees;</td><td><a href="string/lpad.php">View</a></td></tr>
<tr><td>LTRIM()</td><td>Removes leading spaces</td><td>SELECT LTRIM('   Hello');</td><td><a href="string/ltrim.php">View</a></td></tr>
<tr><td>MID()</td><td>Extracts a substring (alias of SUBSTRING)</td><td>SELECT MID(name, 1, 5) FROM employees;</td><td><a href="string/mid.php">View</a></td></tr>
<tr><td>POSITION()</td><td>Returns position of substring in string</td><td>SELECT POSITION('a' IN name) FROM employees;</td><td><a href="string/position.php">View</a></td></tr>
<tr><td>REPEAT()</td><td>Repeats a string a specified number of times</td><td>SELECT REPEAT(LEFT(name,1), 5) FROM employees;</td><td><a href="string/repeat.php">View</a></td></tr>
<tr><td>REPLACE()</td><td>Replaces occurrences of a substring</td><td>SELECT REPLACE(name, 'a', 'X') FROM employees;</td><td><a href="string/replace.php">View</a></td></tr>
<tr><td>REVERSE()</td><td>Reverses a string</td><td>SELECT REVERSE(name) FROM employees;</td><td><a href="string/reverse.php">View</a></td></tr>
<tr><td>RIGHT()</td><td>Extracts characters from the right</td><td>SELECT RIGHT(name, 5) FROM employees;</td><td><a href="string/right.php">View</a></td></tr>
<tr><td>RPAD()</td><td>Pads string on the right to a specified length</td><td>SELECT RPAD(name, 20, '.') FROM employees;</td><td><a href="string/rpad.php">View</a></td></tr>
<tr><td>RTRIM()</td><td>Removes trailing spaces</td><td>SELECT RTRIM('Hello   ');</td><td><a href="string/rtrim.php">View</a></td></tr>
<tr><td>SPACE()</td><td>Returns a string of specified number of spaces</td><td>SELECT CONCAT(name, SPACE(5), department) FROM employees;</td><td><a href="string/space.php">View</a></td></tr>
<tr><td>STRCMP()</td><td>Compares two strings</td><td>SELECT STRCMP(name, 'Bob Smith') FROM employees;</td><td><a href="string/strcmp.php">View</a></td></tr>
<tr><td>SUBSTR()</td><td>Extracts a substring (alias of SUBSTRING)</td><td>SELECT SUBSTR(name, 1, 5) FROM employees;</td><td><a href="string/substr.php">View</a></td></tr>
<tr><td>SUBSTRING()</td><td>Extracts a substring from a string</td><td>SELECT SUBSTRING(name, 1, 5) FROM employees;</td><td><a href="string/substring.php">View</a></td></tr>
<tr><td>SUBSTRING_INDEX()</td><td>Returns substring before delimiter occurrence</td><td>SELECT SUBSTRING_INDEX(name, ' ', 1) FROM employees;</td><td><a href="string/substring_index.php">View</a></td></tr>
<tr><td>TRIM()</td><td>Removes leading and trailing spaces</td><td>SELECT TRIM(name) FROM employees;</td><td><a href="string/trim.php">View</a></td></tr>
<tr><td>UCASE()</td><td>Converts string to uppercase (alias of UPPER)</td><td>SELECT UCASE(name) FROM employees;</td><td><a href="string/ucase.php">View</a></td></tr>
<tr><td>UPPER()</td><td>Converts string to uppercase</td><td>SELECT UPPER(name) FROM employees;</td><td><a href="string/upper.php">View</a></td></tr>
</table>

<h2>Numeric Functions</h2>
<table>
<tr><th>Function</th><th>Description</th><th>Example</th><th>Output</th></tr>
<tr><td>ABS()</td><td>Returns absolute value</td><td>SELECT ABS(salary - 60000) FROM employees;</td><td><a href="numeric/abs.php">View</a></td></tr>
<tr><td>ACOS()</td><td>Returns arc cosine of a number</td><td>SELECT ACOS(0.5);</td><td><a href="numeric/acos.php">View</a></td></tr>
<tr><td>ASIN()</td><td>Returns arc sine of a number</td><td>SELECT ASIN(0.5);</td><td><a href="numeric/asin.php">View</a></td></tr>
<tr><td>ATAN()</td><td>Returns arc tangent of a number</td><td>SELECT ATAN(1);</td><td><a href="numeric/atan.php">View</a></td></tr>
<tr><td>ATAN2()</td><td>Returns arc tangent of two numbers</td><td>SELECT ATAN2(1, 1);</td><td><a href="numeric/atan2.php">View</a></td></tr>
<tr><td>AVG()</td><td>Returns average value</td><td>SELECT AVG(salary) FROM employees;</td><td><a href="numeric/avg.php">View</a></td></tr>
<tr><td>CEIL()</td><td>Rounds up to nearest integer</td><td>SELECT CEIL(AVG(salary)) FROM employees;</td><td><a href="numeric/ceil.php">View</a></td></tr>
<tr><td>CEILING()</td><td>Same as CEIL()</td><td>SELECT CEILING(AVG(salary)) FROM employees;</td><td><a href="numeric/ceil.php">View</a></td></tr>
<tr><td>COS()</td><td>Returns cosine of a number</td><td>SELECT COS(0);</td><td><a href="numeric/cos.php">View</a></td></tr>
<tr><td>COT()</td><td>Returns cotangent of a number</td><td>SELECT COT(1);</td><td><a href="numeric/cot.php">View</a></td></tr>
<tr><td>COUNT()</td><td>Returns number of rows</td><td>SELECT COUNT(*) FROM employees;</td><td><a href="numeric/count.php">View</a></td></tr>
<tr><td>DEGREES()</td><td>Converts radians to degrees</td><td>SELECT DEGREES(PI());</td><td><a href="numeric/degrees.php">View</a></td></tr>
<tr><td>DIV</td><td>Integer division operator</td><td>SELECT salary DIV 1000 FROM employees;</td><td><a href="numeric/div.php">View</a></td></tr>
<tr><td>EXP()</td><td>Returns e raised to the power of a number</td><td>SELECT EXP(1);</td><td><a href="numeric/exp.php">View</a></td></tr>
<tr><td>FLOOR()</td><td>Rounds down to nearest integer</td><td>SELECT FLOOR(AVG(salary)) FROM employees;</td><td><a href="numeric/floor.php">View</a></td></tr>
<tr><td>GREATEST()</td><td>Returns the greatest value in a list</td><td>SELECT GREATEST(salary, 60000) FROM employees;</td><td><a href="numeric/greatest.php">View</a></td></tr>
<tr><td>LEAST()</td><td>Returns the smallest value in a list</td><td>SELECT LEAST(salary, 60000) FROM employees;</td><td><a href="numeric/least.php">View</a></td></tr>
<tr><td>LN()</td><td>Returns the natural logarithm</td><td>SELECT LN(salary) FROM employees;</td><td><a href="numeric/ln.php">View</a></td></tr>
<tr><td>LOG()</td><td>Returns the logarithm to a specified base</td><td>SELECT LOG(10, salary) FROM employees;</td><td><a href="numeric/log.php">View</a></td></tr>
<tr><td>LOG10()</td><td>Returns the base-10 logarithm</td><td>SELECT LOG10(salary) FROM employees;</td><td><a href="numeric/log10.php">View</a></td></tr>
<tr><td>LOG2()</td><td>Returns the base-2 logarithm</td><td>SELECT LOG2(salary) FROM employees;</td><td><a href="numeric/log2.php">View</a></td></tr>
<tr><td>MAX()</td><td>Returns highest value</td><td>SELECT MAX(salary) FROM employees;</td><td><a href="numeric/max.php">View</a></td></tr>
<tr><td>MIN()</td><td>Returns lowest value</td><td>SELECT MIN(salary) FROM employees;</td><td><a href="numeric/min.php">View</a></td></tr>
<tr><td>MOD()</td><td>Returns remainder of division</td><td>SELECT MOD(salary, 10000) FROM employees;</td><td><a href="numeric/mod.php">View</a></td></tr>
<tr><td>PI()</td><td>Returns the value of PI</td><td>SELECT PI();</td><td><a href="numeric/pi.php">View</a></td></tr>
<tr><td>POW()</td><td>Returns value raised to a power</td><td>SELECT POW(salary/10000, 2) FROM employees;</td><td><a href="numeric/pow.php">View</a></td></tr>
<tr><td>POWER()</td><td>Same as POW()</td><td>SELECT POWER(2, 10);</td><td><a href="numeric/power.php">View</a></td></tr>
<tr><td>RADIANS()</td><td>Converts degrees to radians</td><td>SELECT RADIANS(180);</td><td><a href="numeric/radians.php">View</a></td></tr>
<tr><td>RAND()</td><td>Returns a random decimal number (0 to 1)</td><td>SELECT RAND() FROM employees;</td><td><a href="numeric/rand.php">View</a></td></tr>
<tr><td>ROUND()</td><td>Rounds a number</td><td>SELECT ROUND(salary, -3) FROM employees;</td><td><a href="numeric/round.php">View</a></td></tr>
<tr><td>SIGN()</td><td>Returns sign of a number</td><td>SELECT SIGN(salary - 60000) FROM employees;</td><td><a href="numeric/sign.php">View</a></td></tr>
<tr><td>SIN()</td><td>Returns sine of a number</td><td>SELECT SIN(PI()/2);</td><td><a href="numeric/sin.php">View</a></td></tr>
<tr><td>SQRT()</td><td>Returns square root of a number</td><td>SELECT SQRT(salary) FROM employees;</td><td><a href="numeric/sqrt.php">View</a></td></tr>
<tr><td>SUM()</td><td>Returns sum of values</td><td>SELECT SUM(salary) FROM employees;</td><td><a href="numeric/sum.php">View</a></td></tr>
<tr><td>TAN()</td><td>Returns tangent of a number</td><td>SELECT TAN(PI()/4);</td><td><a href="numeric/tan.php">View</a></td></tr>
<tr><td>TRUNCATE()</td><td>Truncates number to specified decimal places</td><td>SELECT TRUNCATE(salary, -3) FROM employees;</td><td><a href="numeric/truncate.php">View</a></td></tr>
</table>

<h2>Date Functions</h2>
<table>
<tr><th>Function</th><th>Description</th><th>Example</th><th>Output</th></tr>
<tr><td>ADDDATE()</td><td>Adds a time/date interval to a date</td><td>SELECT ADDDATE(hire_date, 30) FROM employees;</td><td><a href="date/adddate.php">View</a></td></tr>
<tr><td>ADDTIME()</td><td>Adds a time interval to a time/datetime</td><td>SELECT ADDTIME('10:00:00', '02:30:00');</td><td><a href="date/addtime.php">View</a></td></tr>
<tr><td>CURDATE()</td><td>Returns current date</td><td>SELECT CURDATE();</td><td><a href="date/curdate.php">View</a></td></tr>
<tr><td>CURRENT_DATE()</td><td>Same as CURDATE()</td><td>SELECT CURRENT_DATE();</td><td><a href="date/current_date.php">View</a></td></tr>
<tr><td>CURRENT_TIME()</td><td>Returns current time</td><td>SELECT CURRENT_TIME();</td><td><a href="date/current_time.php">View</a></td></tr>
<tr><td>CURRENT_TIMESTAMP()</td><td>Returns current date and time</td><td>SELECT CURRENT_TIMESTAMP();</td><td><a href="date/current_timestamp.php">View</a></td></tr>
<tr><td>CURTIME()</td><td>Returns current time</td><td>SELECT CURTIME();</td><td><a href="date/curtime.php">View</a></td></tr>
<tr><td>DATE()</td><td>Extracts date part from a datetime</td><td>SELECT DATE(hire_date) FROM employees;</td><td><a href="date/date.php">View</a></td></tr>
<tr><td>DATEDIFF()</td><td>Returns difference between two dates in days</td><td>SELECT DATEDIFF(CURDATE(), hire_date) FROM employees;</td><td><a href="date/datediff.php">View</a></td></tr>
<tr><td>DATE_ADD()</td><td>Adds a time/date interval to a date</td><td>SELECT DATE_ADD(hire_date, INTERVAL 30 DAY) FROM employees;</td><td><a href="date/date_add.php">View</a></td></tr>
<tr><td>DATE_FORMAT()</td><td>Formats a date value</td><td>SELECT DATE_FORMAT(hire_date, '%M %d, %Y') FROM employees;</td><td><a href="date/date_format.php">View</a></td></tr>
<tr><td>DATE_SUB()</td><td>Subtracts a time/date interval from a date</td><td>SELECT DATE_SUB(hire_date, INTERVAL 30 DAY) FROM employees;</td><td><a href="date/date_sub.php">View</a></td></tr>
<tr><td>DAY()</td><td>Returns the day of the month</td><td>SELECT DAY(hire_date) FROM employees;</td><td><a href="date/day.php">View</a></td></tr>
<tr><td>DAYNAME()</td><td>Returns the name of the weekday</td><td>SELECT DAYNAME(hire_date) FROM employees;</td><td><a href="date/dayname.php">View</a></td></tr>
<tr><td>DAYOFMONTH()</td><td>Returns the day of the month (1-31)</td><td>SELECT DAYOFMONTH(hire_date) FROM employees;</td><td><a href="date/dayofmonth.php">View</a></td></tr>
<tr><td>DAYOFWEEK()</td><td>Returns weekday index (1=Sunday)</td><td>SELECT DAYOFWEEK(hire_date) FROM employees;</td><td><a href="date/dayofweek.php">View</a></td></tr>
<tr><td>DAYOFYEAR()</td><td>Returns the day of the year (1-366)</td><td>SELECT DAYOFYEAR(hire_date) FROM employees;</td><td><a href="date/dayofyear.php">View</a></td></tr>
<tr><td>EXTRACT()</td><td>Extracts a specific part from a date</td><td>SELECT EXTRACT(YEAR FROM hire_date) FROM employees;</td><td><a href="date/extract.php">View</a></td></tr>
<tr><td>FROM_DAYS()</td><td>Returns a date from a numeric day value</td><td>SELECT FROM_DAYS(738000);</td><td><a href="date/from_days.php">View</a></td></tr>
<tr><td>HOUR()</td><td>Returns the hour part of a time</td><td>SELECT HOUR(NOW());</td><td><a href="date/hour.php">View</a></td></tr>
<tr><td>LAST_DAY()</td><td>Returns last day of the month for a date</td><td>SELECT LAST_DAY(hire_date) FROM employees;</td><td><a href="date/last_day.php">View</a></td></tr>
<tr><td>LOCALTIME()</td><td>Returns current local date and time</td><td>SELECT LOCALTIME();</td><td><a href="date/localtime.php">View</a></td></tr>
<tr><td>MAKEDATE()</td><td>Creates a date from year and day-of-year</td><td>SELECT MAKEDATE(2026, 60);</td><td><a href="date/makedate.php">View</a></td></tr>
<tr><td>MAKETIME()</td><td>Creates a time from hour, minute, second</td><td>SELECT MAKETIME(10, 30, 45);</td><td><a href="date/maketime.php">View</a></td></tr>
<tr><td>MICROSECOND()</td><td>Returns microseconds part of a time</td><td>SELECT MICROSECOND('10:30:45.123456');</td><td><a href="date/microsecond.php">View</a></td></tr>
<tr><td>MINUTE()</td><td>Returns the minute part of a time</td><td>SELECT MINUTE(NOW());</td><td><a href="date/minute.php">View</a></td></tr>
<tr><td>MONTH()</td><td>Returns the month from a date</td><td>SELECT MONTH(hire_date) FROM employees;</td><td><a href="date/month.php">View</a></td></tr>
<tr><td>MONTHNAME()</td><td>Returns full name of the month</td><td>SELECT MONTHNAME(hire_date) FROM employees;</td><td><a href="date/monthname.php">View</a></td></tr>
<tr><td>NOW()</td><td>Returns current date and time</td><td>SELECT NOW();</td><td><a href="date/now.php">View</a></td></tr>
<tr><td>PERIOD_ADD()</td><td>Adds months to a period</td><td>SELECT PERIOD_ADD(202601, 3);</td><td><a href="date/period_add.php">View</a></td></tr>
<tr><td>PERIOD_DIFF()</td><td>Returns difference between two periods in months</td><td>SELECT PERIOD_DIFF(202601, 202501);</td><td><a href="date/period_diff.php">View</a></td></tr>
<tr><td>QUARTER()</td><td>Returns the quarter of the year (1-4)</td><td>SELECT QUARTER(hire_date) FROM employees;</td><td><a href="date/quarter.php">View</a></td></tr>
<tr><td>SECOND()</td><td>Returns the seconds part of a time</td><td>SELECT SECOND(NOW());</td><td><a href="date/second.php">View</a></td></tr>
<tr><td>SEC_TO_TIME()</td><td>Converts seconds to HH:MM:SS format</td><td>SELECT SEC_TO_TIME(3661);</td><td><a href="date/sec_to_time.php">View</a></td></tr>
<tr><td>STR_TO_DATE()</td><td>Converts a string to a date</td><td>SELECT STR_TO_DATE('Jan 15 2026', '%M %d %Y');</td><td><a href="date/str_to_date.php">View</a></td></tr>
<tr><td>SUBDATE()</td><td>Subtracts a time/date interval from a date</td><td>SELECT SUBDATE(hire_date, 30) FROM employees;</td><td><a href="date/subdate.php">View</a></td></tr>
<tr><td>SUBTIME()</td><td>Subtracts a time from a time/datetime</td><td>SELECT SUBTIME('12:00:00', '02:30:00');</td><td><a href="date/subtime.php">View</a></td></tr>
<tr><td>SYSDATE()</td><td>Returns current date and time at execution time</td><td>SELECT SYSDATE();</td><td><a href="date/sysdate.php">View</a></td></tr>
<tr><td>TIME()</td><td>Extracts the time portion from a datetime</td><td>SELECT TIME(NOW());</td><td><a href="date/time.php">View</a></td></tr>
<tr><td>TIME_FORMAT()</td><td>Formats a time value</td><td>SELECT TIME_FORMAT(NOW(), '%h:%i %p');</td><td><a href="date/time_format.php">View</a></td></tr>
<tr><td>TIME_TO_SEC()</td><td>Converts a time to seconds</td><td>SELECT TIME_TO_SEC('01:00:30');</td><td><a href="date/time_to_sec.php">View</a></td></tr>
<tr><td>TIMEDIFF()</td><td>Returns difference between two time values</td><td>SELECT TIMEDIFF('12:00:00', '08:30:00');</td><td><a href="date/timediff.php">View</a></td></tr>
<tr><td>TIMESTAMP()</td><td>Returns a datetime from a date</td><td>SELECT TIMESTAMP(hire_date) FROM employees;</td><td><a href="date/timestamp.php">View</a></td></tr>
<tr><td>TO_DAYS()</td><td>Returns number of days since year 0</td><td>SELECT TO_DAYS(hire_date) FROM employees;</td><td><a href="date/to_days.php">View</a></td></tr>
<tr><td>WEEK()</td><td>Returns week number for a date (0-53)</td><td>SELECT WEEK(hire_date) FROM employees;</td><td><a href="date/week.php">View</a></td></tr>
<tr><td>WEEKDAY()</td><td>Returns weekday index (0=Monday)</td><td>SELECT WEEKDAY(hire_date) FROM employees;</td><td><a href="date/weekday.php">View</a></td></tr>
<tr><td>WEEKOFYEAR()</td><td>Returns the calendar week of the year (1-53)</td><td>SELECT WEEKOFYEAR(hire_date) FROM employees;</td><td><a href="date/weekofyear.php">View</a></td></tr>
<tr><td>YEAR()</td><td>Returns the year from a date</td><td>SELECT YEAR(hire_date) FROM employees;</td><td><a href="date/year.php">View</a></td></tr>
<tr><td>YEARWEEK()</td><td>Returns year and week number for a date</td><td>SELECT YEARWEEK(hire_date) FROM employees;</td><td><a href="date/yearweek.php">View</a></td></tr>
</table>

<h2>Advanced Functions</h2>
<table>
<tr><th>Function</th><th>Description</th><th>Example</th><th>Output</th></tr>
<tr><td>BIN()</td><td>Returns binary representation of a number</td><td>SELECT BIN(id) FROM employees;</td><td><a href="advanced/bin.php">View</a></td></tr>
<tr><td>BINARY</td><td>Converts value to binary for case-sensitive compare</td><td>SELECT BINARY name = 'alice johnson' FROM employees;</td><td><a href="advanced/binary.php">View</a></td></tr>
<tr><td>CASE</td><td>Multiple condition logic</td><td>SELECT CASE WHEN salary > 60000 THEN 'High' ELSE 'Low' END FROM employees;</td><td><a href="advanced/case.php">View</a></td></tr>
<tr><td>CAST()</td><td>Converts a value to a specified data type</td><td>SELECT CAST(salary AS UNSIGNED) FROM employees;</td><td><a href="advanced/cast.php">View</a></td></tr>
<tr><td>COALESCE()</td><td>Returns first non-null value in a list</td><td>SELECT COALESCE(department, 'None') FROM employees;</td><td><a href="advanced/coalesce.php">View</a></td></tr>
<tr><td>CONNECTION_ID()</td><td>Returns unique connection ID</td><td>SELECT CONNECTION_ID();</td><td><a href="advanced/connection_id.php">View</a></td></tr>
<tr><td>CONV()</td><td>Converts a number from one base to another</td><td>SELECT CONV(id, 10, 16) FROM employees;</td><td><a href="advanced/conv.php">View</a></td></tr>
<tr><td>CONVERT()</td><td>Converts a value to a specified data type</td><td>SELECT CONVERT(salary, UNSIGNED) FROM employees;</td><td><a href="advanced/convert.php">View</a></td></tr>
<tr><td>CURRENT_USER()</td><td>Returns current MySQL username and hostname</td><td>SELECT CURRENT_USER();</td><td><a href="advanced/current_user.php">View</a></td></tr>
<tr><td>DATABASE()</td><td>Returns the name of the current database</td><td>SELECT DATABASE();</td><td><a href="advanced/database.php">View</a></td></tr>
<tr><td>DISTINCT</td><td>Removes duplicate rows from result</td><td>SELECT DISTINCT department FROM employees;</td><td><a href="advanced/distinct.php">View</a></td></tr>
<tr><td>EXISTS</td><td>Tests for existence of rows in a subquery</td><td>SELECT name FROM employees WHERE EXISTS (SELECT 1 FROM employees WHERE salary > 75000);</td><td><a href="advanced/exists.php">View</a></td></tr>
<tr><td>GROUP BY</td><td>Groups rows that have the same values</td><td>SELECT department, COUNT(*) FROM employees GROUP BY department;</td><td><a href="advanced/groupby.php">View</a></td></tr>
<tr><td>HAVING</td><td>Filters records on grouped rows</td><td>SELECT department, COUNT(*) FROM employees GROUP BY department HAVING COUNT(*) > 1;</td><td><a href="advanced/having.php">View</a></td></tr>
<tr><td>IF()</td><td>Returns value based on a condition</td><td>SELECT IF(salary >= 60000, 'High', 'Low') FROM employees;</td><td><a href="advanced/if.php">View</a></td></tr>
<tr><td>IFNULL()</td><td>Replaces NULL with a specified value</td><td>SELECT IFNULL(department, 'Unknown') FROM employees;</td><td><a href="advanced/ifnull.php">View</a></td></tr>
<tr><td>ISNULL()</td><td>Returns 1 if expression is NULL, else 0</td><td>SELECT ISNULL(department) FROM employees;</td><td><a href="advanced/isnull.php">View</a></td></tr>
<tr><td>LAST_INSERT_ID()</td><td>Returns AUTO_INCREMENT id of last inserted row</td><td>SELECT LAST_INSERT_ID();</td><td><a href="advanced/last_insert_id.php">View</a></td></tr>
<tr><td>NULLIF()</td><td>Returns NULL if two expressions are equal</td><td>SELECT NULLIF(department, 'IT') FROM employees;</td><td><a href="advanced/nullif.php">View</a></td></tr>
<tr><td>SESSION_USER()</td><td>Returns current MySQL username and hostname</td><td>SELECT SESSION_USER();</td><td><a href="advanced/session_user.php">View</a></td></tr>
<tr><td>SYSTEM_USER()</td><td>Returns current MySQL username and hostname</td><td>SELECT SYSTEM_USER();</td><td><a href="advanced/system_user.php">View</a></td></tr>
<tr><td>USER()</td><td>Returns current MySQL username and host</td><td>SELECT USER();</td><td><a href="advanced/user.php">View</a></td></tr>
<tr><td>VERSION()</td><td>Returns current MySQL version</td><td>SELECT VERSION();</td><td><a href="advanced/version.php">View</a></td></tr>
</table>

</body>
</html>
