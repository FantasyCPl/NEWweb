#!/bin/sh

git add *
echo "Enter comment:  "
read text
git commit -m $text
#echo "$text"
git push origin main
