#!/bin/bash
echo 'Hello there and welcome to the file size check and delete program'

contin=0
remove=0
removealpha=0
folder=''
folderalpha=''
removeDir=''
removefile=''

while [ $contin -eq 0 ]; do
    cd
    echo 'directory has been changed to /'
    sudo du -hsx * | sort -rh | head -10
    echo 'Would you like to enter a folder or exit the program'
    echo 'enter 0 if you want to enter || press 1 if you want to exit'
    read contin
    if [ $contin -eq 0 ]; then
        echo 'What folder would you like to enter?'
        read folder
        cd $folder
        echo
        sudo du -hsx * | sort -rh | head -10
        echo
        echo 'Would you like to enter another folder, remove a folder, and remove a file?'
        echo 'enter 0 if you would like to enter, enter 1 if you would like to remove a folder, enter 2 if you would like to remove a file, and enter 3 if you would like to exit.'
        read remove
        if [ $remove -eq 0 ]; then
            echo 'What folder would you like to enter?'
            read folderalpha
            cd $folderalpha
            echo
            sudo du -hsx * | sort -rh | head -10
            echo
            echo 'Would you like to remove a folder, remove a file, or exit?'
            echo 'enter 0 if you would like to remove a folder, enter 1 if you would like to remove a file, enter 2 if you would like to exit.'
            read removealpha
            
            if [ $removealpha -eq 0 ]; then
                sudo du -hsx * | sort -rh | head -10
                echo
                echo 'What folder would you like to delete?'
                read removeDir
                rm -r $removeDir
                echo $removeDir ' has been removed'
                echo 'returning you to ~'
                read -p 'Press any key to continue'
            else echo
            fi
            if [ $removealpha -eq 1 ]; then
                echo
                sudo du -hsx * | sort -rh | head -10
                echo
                echo 'What file would you like to delete?'
                read removefile
                rm $removefile
                echo $removefile ' has been deleted'
                echo 'returning you to ~'
                read -p 'Press any key to continue'
            else echo
            fi
            if [ $removealpha -eq 3 ]; then
                echo 'returning you to ~'
                read -p 'Press any key to continue'
            else echo
            fi
        else
        echo 'returning you to ~'
        fi
        if [ $remove -eq 1 ]; then
            sudo du -hsx * | sort -rh | head -10
            echo
            echo 'What folder would you like to delete?'
            read removeDir
            rm -r $removeDir
            echo $removeDir ' has been removed'
            echo 'returning you to ~'
            read -p 'Press any key to continue'
        else
        echo
        fi
        if [ $remove -eq 2 ]; then
            echo
            sudo du -hsx * | sort -rh | head -10
            echo
            echo 'What file would you like to delete?'
            read removefile
            rm $removefile
            echo $removefile ' has been deleted'
            echo 'returning you to ~'
            read -p 'Press any key to continue'
        else
        echo
        fi
        if [ $remove -eq 3 ]; then
            echo 'returning you to ~'
            read -p 'Press any key to continue'
        else echo
        fi
        else echo
        fi
    
    if [ $contin -eq 1 ]; then
        exit 0
    else 
        echo
    fi
done
