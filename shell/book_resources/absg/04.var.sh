#!/bin/bash

echo -n "Values of \"a\" in hte loop are: "
for a in 1, 2, 3, 4
do
    echo -n "$a "
done

echo

echo -n "Enter \"a\" "
read a
echo "The value of \"a\" is now $a."

echo

exit 0
