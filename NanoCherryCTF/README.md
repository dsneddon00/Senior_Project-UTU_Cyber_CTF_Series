# NanoCherryCTF
NanoCherryCTF is the third and final part of the UTU Cyber CTF Series. It's called NanoCherry due to having two DNS hosts, one for the public facing "Cherry on Top Ice Cream Shop" and the other for the more private "Cult of Nano".

## Cherry on Top Ice Cream Shop
Structured as an innnocent looking ice cream shop, this site will be public facing and can be discovered simply through simple portscanning.

### IDOR + Cookie Manipulation to access credentials
The shop will have a menu where you are able to look at different ice cream products. It will have an insecure cookie that can be changed to access additionaal resources. However, it will be hidden behind a "secret stash" which will contain the web developer's (Sam-Sprinkles) credentials. This can be accessed by identifying the IDOR vulnerability, setting it to 0, then finding the secret stash. This will initial access. 

## Cult of Nano
This page will be used to propagandize the usage of the Nano editor. On top of having a base home page, it will also have a login page that is vulnerable to SQL injection bypass. The admin panel will then have a command prompt where the admin is allowed to issue commands on the system (with certain restrictions). The user will use command injection to gain initial access to system.

## Jex's Backdoor
Jex will have a backdoor onto the machine that will allow you to gain initial access simply by paying attention and some extra recon. This will involve a Telnet protocol (or another backdoor system) that is in an unconventional port that will evade normal nmap spans. Finding this will grant you access to the machine without credentials.

## Privilege Escalation

### Users
- root: no explination needed. 
- Chad-Cherry: CEO of Cherry on Top Ice Cream Shop and charismatic antagonist.
- Molly-Milk: Queen of Marketing and Grand Oracle of the Cult of Nano. Secret crush on Chad-Cherry. 
- www-data: apache service account.
- Sam-Sprinkles: Backend developer of the main site. 
- Bob-Boba: Head of QA. Escalate to his privleges from Jex's backdoor.
- NotSus (Jex): Backdoor account on the system. 

After initial access is gained, privileges will be escalated through gaining a total of three "password segments"

### Exploitation Path
The user will access Sam-Sprinkles, Molly-Milk, and Bob-Boba to gain each password segment to access Chad-Cherry. Then they will use an exploitable nano binary to get to get to root.
