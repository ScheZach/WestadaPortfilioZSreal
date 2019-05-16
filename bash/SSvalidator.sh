#!/bin/bash

echo 'valid ss numbers (structure)'
egrep '^[0-9]{3}-[0-9]{2}-[0-9]{4}$' $1

read -p 'press any key to continue'
echo

echo 'true valid ss numbers'
grep -P '^(?!219-09-9999|078-05-1120)(?!666|000|9\d{2})\d{3}-(?!00)\d{2}-(?!0{4})\d{4}$' $1

read -p 'press any key to continue'
echo

echo 'valid emails'
egrep '^.+\@.+\..+$' $1

read -p 'press any key to continue'
echo

echo 'valid emails stricter version'
egrep '^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$' $1
