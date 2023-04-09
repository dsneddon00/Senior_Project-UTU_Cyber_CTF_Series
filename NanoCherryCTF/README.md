# NanoCherryCTF
NanoCherryCTF is the third and final part of the UTU Cyber CTF Series. It's called NanoCherry due to having two DNS hosts, one for the public facing "Cherry on Top Ice Cream Shop" and the other for the more private "Cult of Nano".

## Cherry on Top Ice Cream Shop
Structured as an innnocent looking ice cream shop, this site will be public facing and can be discovered simply through simple portscanning.

### IDOR + User Manipulation to access credentials
The shop has a menu where the user is able to enjoy looking at facts about ice cream. It will have insecure parameters that can be changed to access additionaal resources. However, it will be hidden behind a "secret stash" which will contain the web developer's (Sam-Sprinkles) credentials along with other easter eggs. This can be accessed by identifying the IDOR vulnerability, fuzzing it, then finding the secret stash. This will grant initial access. 

## Cult of Nano
Sits on an apache vhost on the server. Will require the user to apply their knowlege of DNS and apache in order to discover. This page will be used to propagandize the usage of the Nano editor. On top of having a base home page, it will also have a login page that is vulnerable to cluster bomb attacks via a web proxy. The admin panel will allow for password disclosure. The user will use command injection to gain initial access to system.

## Jex's Backdoor
Jex will have a backdoor onto the machine that will allow you to gain initial access simply by paying attention and some extra recon. This will involve banner grabbing a backdoor script that is automatically running and is on an unconventional port that will evade normal nmap spans. Finding this will grant you access to the machine without credentials. The hacker will then be able to increase their persistance and escalate from there.

## Privilege Escalation

Each user will have part of Chad Cherry's credentials and in order to gain access to his account, will have to escalate their privleges both laterally and vertically to every other account on the system. 

Sam and Molly's credentials can be found on the system. Bob will require the exploitation and discovery of a misconfiguration to pop a reverse shell.

Afterward, the user must escalate via an exploitable binary in order to get root.

### Users
- root: no explination needed. 
- Chad-Cherry: CEO of Cherry on Top Ice Cream Shop and charismatic antagonist.
- Molly-Milk: Queen of Marketing and Grand Oracle of the Cult of Nano. Secret crush on Chad-Cherry. 
- www-data: apache service account.
- Sam-Sprinkles: Backend developer of the main site. 
- Bob-Boba: Head of financies. Escalate to his privleges from Jex's backdoor.
- NotSus (Jex): Backdoor account on the system. 

After initial access is gained, privileges will be escalated through gaining a total of three "password segments"

### Exploitation Path
The user will access Sam-Sprinkles, Molly-Milk, and Bob-Boba to gain each password segment to access Chad-Cherry. Then they will use an exploitable nano binary to get to get to root.

## Kill Switch
The kill switch present on the machine was a malicious piece of code I wrote and obfuscated in bash. It bricks the machine by removing as many root directories as possible and attempts to write null bytes onto every file it can. It will render the machine useless upon being ran.
