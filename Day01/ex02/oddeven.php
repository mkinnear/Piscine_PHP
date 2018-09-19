#!/usr/bin/php
<?PHP
echo "Enter a number: ";
while ($input = fgets(STDIN))
{
	$input = trim($input);
	if (!is_numeric($input))
		echo "'$input' is not a number\n";
	else if ($input % 2 == 0)
		echo "The number $input is even\n";
	else
		echo "The number $input is odd\n";
	echo "Enter a number: ";
}
echo "^D\n";
?>
