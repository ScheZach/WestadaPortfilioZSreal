#!/bin/bash

echo 'Welcome to the SSN redaction program (uses .txt)'

filename=''

echo 'What file would you like to search'
ls -l | grep 'txt'
read filename
echo 'You have entered ' $filename
sed 's/[0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9][0-9][0-9]/xxx-xx-xxxx/g' $filename
