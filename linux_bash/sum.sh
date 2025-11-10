#! /bin/bash

if [ "$#" -ne 2 ]
then
	echo "Please get two numbers"
	exit
fi


arg1=$1
arg2=$2

sum=$(echo "$arg1 + $arg2" | bc)

echo $sum
