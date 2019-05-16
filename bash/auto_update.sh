#!/bin/bash
 
echo Hello, welcome to my BASH updater script
echo Who are you
read name
read -p "Hello there $name, please press enter to continue"
echo "Would you like to update? (Y/n)"
read action
case "$action" in
    Y)
        sudo apt update -y
        ;;
     y)
        sudo apt update -y
        ;;
     YES)
        sudo apt update -y
        ;;
     yes)
        sudo apt update -y
        ;;
     Yes)
        sudo apt update -y
        ;;
    *)
        echo "Skipping update"
esac
echo "Would you like to upgrade? (Y/n)"
read action2
case "$action2" in
    Y)
         
        sudo apt upgrade -y
        ;;
     y)
         
        sudo apt upgrade -y
        ;;
     YES)
         
        sudo apt upgrade -y
        ;;
     yes)
         
        sudo apt upgrade -y
        ;;
     Yes)
         
        sudo apt upgrade -y
        ;;
    *)
        echo "Skipping upgrade"
esac
echo "Would you like to autoclean? (Y/n)"
read action3
case "$action3" in
    Y)
         
        sudo apt autoclean -y
        ;;
     y)
         
        sudo apt autoclean -y
        ;;
     YES)
         
        sudo apt autoclean -y
        ;;
     yes)
         
        sudo apt autoclean -y
        ;;
     Yes)
         
        sudo apt autoclean -y
        ;;
    *)
        echo "Skipping autoclean"
esac
echo "Would you like to autoremove? (Y/n)"
read action4
case "$action4" in
    Y)
         
        sudo apt autoremove -y
        ;;
     y)
         
        sudo apt autoremove -y
        ;;
     YES)
         
        sudo apt autoremove -y
        ;;
     yes)
         
        sudo apt autoremove -y
        ;;
     Yes)
         
        sudo apt autoremove -y
        ;;
    *)
        echo "Skipping autoclean"
esac
echo
read -p "Please press enter to exit"
 
exit 0

