#!/bin/sh

echo "‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡" 
echo -e "\e[32m[+]  Starting your local php Server\e[0m"
echo "‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡‡"

if php -t . -S localhost:4545;
then
	exit 0
else
	printf "\033[1;31m[-] Please make sure you are connected to the Internet :(\033[0m\n"
	exit 1
fi

