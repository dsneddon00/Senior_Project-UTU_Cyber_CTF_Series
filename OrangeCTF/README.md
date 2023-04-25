# OrangeCTF
Orange CTF is a sequel to Toasty CTF intended for the club UTU Cyber. This repository will be used for development of said project.





## Setup

In order to get the file upload vulnerability to work properly, be sure to set the permissions to allow any writing and executing in both the uploads directory as well as the actual contact.php script Be sure to put the file in the /var/www/html/ directory so apache2 can run the server and the php files. (:

## Intial RCE

The user will be greeted with a place to submit a screenshot for feedback. They should also discover an exposed uploads directory. To exploit this vulnerability, they will need to bypass a blacklist (keeping out php files) and a whitelist (only allowing images) in order to submit a working php reverse shell. Then they will be able to gain initial access.

## Escalating to Citrus Cicero

The user should discover an exposed private ssh key that has a passcode. They will need to crack it with John the Ripper and can speed up the process by password inference.

## Escalating to Orange Brutus

The user should find an exposed database containing users of a supposed old website. They will plunder it and discover Orange Brutus' credentials so long as they also recognize the encoding used.

## Escalating to Root

The user will write an nmap script containing a shell and exploit a vulnerable nmap binary that will push them to root.
