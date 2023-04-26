# Senior_Project-UTU_Cyber_CTF_Series

## Summary

The UTU Cyber CTF Series is a series of capture the flag games meant to provide vulnerable machines to teach students and club members practical skills in ethical hacking. This repository will contain the documentation, source code, and configuration guides for each 'box'. Each box is a self-contained themed CTF that is meant to run on its own, seperate from the others. Each box is meant as a stepping stone in diffculty and complexity and is designed with learning specifically in mind.

I encourage members of the community who wish to play these CTFs to administer self control in viewing the source code as it will have spoilers for how each vulnerability is exploited as well as the flags hidden within.

You can play the machines using the following links:

### TryHackMe
- ToastyCTF: https://tryhackme.com/jr/toastyctf
- OrangeCTF: https://tryhackme.com/jr/orangectf
- NanoCherryCTF: https://tryhackme.com/jr/nanocherryctf
### Raw Download
- ToastyCTF: https://mega.nz/file/bAY2ECpJ#qBSClN7ihnqy-iSCrYhU5NVeW_2XPryRjuFgGfZu2f4
- OrangeCTF: https://mega.nz/file/TFRgnK6Z#0rczvYq75RQS1ocnoXEYL_JQ5LuynHTrC3DZBdaCTeA
- NanoCherryCTF: https://mega.nz/file/6UpmDQJT#K_iLqHLlLGeb1Fajf89hKEJNj8ugSDZTwG60_FH-HuE
### Writeups Containing Full Solutions
- ToastyCTF Official Writeup: https://medium.com/@dsneddon00/toastyctf-official-writeup-965144b78c3c
- OrangeCTF Official Writeup: https://medium.com/@dsneddon00/orangectf-official-writeup-7742cd7c1c13
- NanoCherryCTF Official Writeup: https://medium.com/@dsneddon00/nanocherryctf-official-writeup-a51d2fd9487
### Local Setup Guide
- Local Setup Guide: https://docs.google.com/document/d/1xOlGjG8mJHQHcUg8kawGf3Y7DzSAFu52df1nThDc-mQ/edit 

## Problem Facing

Cyber crime has been and is only going to continue rising. [In 2022 alone, there were $6 trillion in damages from cyber crime and its predicted that 33 billion accounts will be breached in 2023.](https://www.getastra.com/blog/security-audit/cyber-crime-statistics/#:~:text=General%20Cyber%20Crime%20Statistics%201%20%246%20trillion%20%E2%80%93,earns%20cybercriminals%20%241.5%20trillion%20every%20year.%20More%20items) These are staggering statistics and should make anyone working with technology think twice about their actions, and yet that outside of the security world there is a "this will never happen to me" attitude. 

Truth is, [chances is that every one of us have had an account of ours' breached or credentials leaked](https://haveibeenpwned.com/), whether we know it or not with more pwned accounts there are people on planet earth. And those are the ones we know about. So, in order to help with plugging the many leaks in our giant boat that is the internet, I've aimed my efforts at those working with sensitive information: developers and IT personnel.

Classically, Sun Tzu always said "Know the enemy and know yourself in a hundred battles you will never be in peril". After spending a year teaching myself ethical hacking from scratch, I found that most of Utah Tech University lacks any knowlege on how hacking is even performed. Especially among developers. There is often times a mysticism linked to the topic. So with the UTU Cyber CTF Series, I aim to fix that as in my experiance, unfortunately, I was not satisfied by the avaliable hackable machines online due to sharp difficulty and lackluster quality. So I created my own, customized toward Utah Tech University students and their knowlege base. My goal is to get them curious enough to do research exploits on their own, keep them from getting overwhelmed through a relatively soft learning curve, and at the same time maintain realism from my experiance in freelance bug bounties and security assestments.

I believe by teaching people to become hackers, they can know how cyber criminals think and can develop secure applications and defend their networks accordingly. Afterall, I believe a technical employee with no security experiance is just yet another exploitable bug in a system. And a critical one at that.

## Solution Description

I created a series of three unique CTFs that aim to teach a variety of security skills and gradually rise in difficulty. As mentioned before, they are each contained in a "box" that is a virtual machine that runs the servers and technologies needed to serve the simulation. They are built to interface with both industry standard tools (nmap, john, hydra, zap, burp, etc.) as well as custom build payloads and programming libraries. 

## Technical Overview

The source code contained on this git repo is only half the work. In order to construct each box, I used a hypervisor with a ubuntu server iso to create lightweight machine instances. Afterwards, I cleaned each machine before uploading and source code or making configurations to create less of a footprint so they could far easier to download. I minimized the machines to only allow for the following:

- Essential Operating System binaries and features
- Essential components to configure the servers as intended
- Scripting languages so users that would normally appear on these machines so users could use them (such as rigging up impromptu python web servers for exfiltration)

Each machine has a web server that utilizes html, css, js, jquery, and bootstrap for the front end and php for the backend. I avoided backend frameworks for multiple reasons, the primary of which being: backend frameworks are full of security holes. While I intend the machines to be hackable, one of my complaints about other CTFs is that if those backend frameworks were not properly secured (which default installations often don't), then it can create a rabbit hole that leads no where. This is bad because it often leads those new to hacking to obsessing over potential exploits that either won't get them closer to their goal or aren't intended by the creator. While it is more realistic to encounter an overwhelming ammount of vulnerable technology in real world pentests or bug bounties, there are ways of handling overwhelming ammounts of vulnerabilities that are effective and organized. That is a topic that is outside of the scope of the project and would be less fun or engaging for the user.

I chose php because of the astoinding ammount I find it in the real world. [With over 78% of websites powered on it, most of which on outdated versions.](https://haydenjames.io/78-of-the-web-powered-by-php-1-on-php-8/). It simply made sense to do that.

If you dig through the source code on the website, you will find numerous files that are organized based on their purpose. Everything else, such as OS scripts that I had to modify, can be found on the machines themselves and would be ludecrous to upload them here due to nature as part of the OS itself. Later in the deployment section of this project, I will include links to download each one to see for yourself.

## Resarch Summary

If I were only to include the resources I used since January, it wouldn't paint the full picture. When I decided that I didn't want to do traditional development as of March of last year, I began my journey into security and ethical hacking. My knowlege on the topic was very minimally taught by school, almost everything I know on the topic I know because of my own study. In a strange way, I've been prepping for this senior project since March of 2022 through my own study and certifications.

I have at least about 500 hours of total CTF experiance (I have commited myself to playing at least 30 minutes a day but have often commited more than 4 hours a day to them) and about 120 of those are since January of 2023. Because of what I have learned as part of it, I would file that under part of my work this semester. 

### CTFs

- [Hack The Box](https://app.hackthebox.com/profile/977550) - Where I got my start. Hack The Box is an industry grade CTF league and publisher. They're know as the more "hardcore" players in the industry due to their strict "no spoilers" policy and raw difficulty of their boxes. "Easy" on their platform is normally considered "medium" or "hard" on other platforms. Either way, as of writing, I am in the top 800 players in the world out of about 600,000 players. Linked is my profile to verify that claim. I used this simply to become more familar with the world of hacking and gain a greater understanding of the cyber security world.
- [Hack The Box Academy](https://academy.hackthebox.com/) - There is no public profile but you can find my course work and transcript on my [Linkedin](https://www.linkedin.com/in/derek-sneddon-510b85159/) and have successfully breached 256 targets on the site. Hack The Box Academy is a learning platform that provides industry grade certifications with a CTF learning approach. Again, like its parent site, it has a strict "no spoiler" policy. Covered a variety of topics including OSINT, web exploitation, and privilege escalation among many others.
- [Try Hack Me](https://tryhackme.com/p/dsneddon00) - A similar publisher and CTF league to Hack The Box, I started on this platform 52 days ago as of writing (4/12/2023) and have reached the top 0.3% of users on the platform out of around 1,860,000+ users. This is the prublisher I am publishing my CTFs through. Part of the reason I was able to move so quickly through the ranks was due to all the skills I gained from Hack The Box. I've competed in over 170 of their "rooms" which are comprised of differing CTFs as well as practical tutorials. They cover just about every topic in the security field, but some of their best CTFs covered the OWASP Top 10 in detail and various forms of privelege escalation.
- [Vulnhub](https://www.vulnhub.com/) - A publisher of raw .ova files (virtual machine images) to break into and practice against. I contacted them for publishing, but I never heard back. However, they haven't published a new machine since 11/04/2022. While it is the platform I have used the least, I have pwned several of their machines.

### Web Development
- [The Odin Project](https://www.theodinproject.com/) - A completely free and open source full-stack curriculum to teach you from the ground up how to be a skilled developer and work with various frameworks. They made me more familar with Bootstrap and in general better at front-end development. 
- [CSS Zen Garden](https://www.csszengarden.com/) - Mainly used for inspiration for front-end development. I know my limits, however, especially when it comes to figuring out CSS animations (for OrangeCTF) they came in handy by observing via example. 
- [BootStrap Docs](https://getbootstrap.com/docs/5.3/customize/overview/) - For ToastyCTF and NanoCherryCTF due to their broader scope, I wanted to create more "professional" looking sites for them. So I used Bootstrap in order to get the job done. This naturally branched off into me using jquery for media queries and open source icons library [themify-icons](https://github.com/lykmapipo/themify-icons) to help develop the front web pages of the boxes further.
- [Learn X in Y Minutes PHP](https://learnxinyminutes.com/docs/php/) - "A whirlwind tour of your next favorite language." Learn X in Y Minutes is a site I use whenever picking up something new or refreshing knowlege of something old. Getting started with PHP was a bit weird and finicky, given that it can be much harder to debug than a typical web language like Javascript or Ruby. This helped me formulate the basics before I started writing vulnerable upload pages or crackable login prompts. 
- [Learn PHP Programming From Scratch](https://www.udemy.com/course/learn-php-programming-from-scratch/) - Unfortunately I haven't had the time work through the entire course here, but I picked apart the parts I needed. Primarily debugging php, building authenthication systems, and getting to interact with SQL smoothly.

## Further Work

- Competitve Publishing through TryHackMe - The UTU Cyber CTF Series is currently under review to be admitted into TryHackMe’s competitive pool with almost 2 million users!
- Enterprise Network - Future CTFs could be an entire Active Directory network simulating a full corporation utilizing several virtual machines. I am waiting to work with Active Directory professionally before I touch this.
- IOT Hacking - I wish to create virtual machines based on (or ripped directly from) internet of things (IOT) smart devices, then fill them with flags and security challenges to make them into CTFs. [Inspired by this talk at DEF CON 23.](https://www.youtube.com/watch?v=5CzURm7OpAA)

