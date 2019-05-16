#!/bin/bash

#define function above

function total_files() {
    echo "Number of files in $src:"
    find $1 -type f | wc -l
}

function total_directories() {
    find $1 -type d | wc -l
}

clear
echo -e "\e[30;47mMaking a tar backup of my Bash directory, press any key to continue\e[0m"
read -p ""

day=$(date +%A)
daynum=$(date +%d)
month=$(date +%B)
year=$(date +%Y)
time=$(date +%r)

echo -e "\e[93;44;1mIt is $day, $month $daynum, $year at $time\e[0m"
echo
cal
echo


# hostname information
echo -e "\e[30;47m**** Hostname information ****\e[0m"
hostnamectl
echo " "

# filesystem disk space useage
echo -e "\e[30;47m**** Filesystem disk space useage ****\e[0m"
df -h
echo ""

echo -e "\e[30;47m**** Memory --free and used ****\e[0m"
free -h
echo ""

echo -e "\e[30;47m**** System Uptime and Performance Load ****\e[0m"
uptime
echo ""

echo -e "\e[30;47m**** Users currently logged in ****\e[0m"
who
echo ""

echo -e "\e[30;47m**** Top 5 Processes ****\e[0m"
ps -eo %mem,%cpu,comm --sort=-%mem | head -n 11
echo ""


# folder / dest = destination src= source (don't use 'source' since that is a keyword)
dest=$2
src=$1
compsci="/home/compsci"

echo "Please enter your desired backup folder name (a timestamp will be automatically added)"
read name

total_files $src
echo
total_directories $compsci

echo 

if [[ -d $dest ]]; then
echo -e "\e[93;44;1mBackup folder exists\e[0m"
else
echo -e "\e[93;44;1mBackup folder does not exist, creating it now\e[0m"
mkdir -p $dest
echo
fi
read -p "Press any key to continue" -n1 -s
mkdir -p $dest/"$name $time"
echo
echo -e "\e[93;44;1mBackup started ...\e[0m"
tar cvfz $dest/"$name $time"/bash_backup.tgz $src
echo
echo -e "\e[93;44;1mHere is the contents of your backup directory:\e[0m"
cd $dest
ls -hl &> logAll.txt

echo
echo -e "\e[93;44;1mAnd here is what is inside that directory:\e[0m"
cd "$day $daynum $month $year $time"
ls -hl
echo

echo -e "\e[93;44;1mAll done, press enter to exit, thank you\e[0m"
read -p ""
cd ~
clear
