#!/bin/bash

# created by Zachary Scherer 11 Sept 2018
# Practice in conditionals and loops for the common task
# of making choices for program execution

clear

choice=0
echo "1. update"
echo "2. upgrade"
echo "3. autoclean"
echo "4. autoremove"
echo "5. all complete"

while [ $choice -eq 0 ]; do
echo "Please input your prefered action in the numeric value"
read choice
if [ $choice -eq 1 ]; then
echo "You want to do an update"
choice=0
echo
else
    if [ $choice -eq 2 ]; then
    echo "You want to do an upgrade"
    choice=0
    echo
    else 
        if [ $choice -eq 3 ]; then
        echo "You want to autoclean"
        choice=0
        echo
        else
            if [ $choice -eq 4 ]; then
            echo "You want to autoremove"
            choice=0
            echo
            else 
                if [ $choice -eq 5 ]; then
                exit 0
                else 
                echo "Sorry, I do not understand your request -please retype your request"
                choice=0
                echo
                fi
            fi
        fi
    fi
fi 
done
