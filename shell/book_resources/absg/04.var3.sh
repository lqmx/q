#/bin/bash

MINPARAMS=10

echo

echo "The name of this script is \"$0\"."
echo "The name of this script is \"`basename $0`\"."

echo

if [ -n "$1" ]
then
    echo "Parameter #1 is $1"
fi

if [ -n "$2" ]
then
    echo "Parameter #2 is $2"
fi

if [ -n "$3" ]
then
    echo "Parameter #3 is $3"
fi

if [ -n "${10}" ]
then
    echo "Parameter #10 is ${10}"
fi

echo

echo "All the command-line paramster are "$*""

if [ $# -lt "$MINPARAMS" ]
then
    echo
    echo "This script needs at least $MINPARAMS command-line arguments"
fi

echo

exit 0
