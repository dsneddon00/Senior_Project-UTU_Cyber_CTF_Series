# Senior_Project-UTU_Cyber_CTF_Series

## Summary

The UTU Cyber CTF Series is a series of capture the flag games meant to provide vulnerable machines to teach students and club members practical skills in ethical hacking. This repository will contain the documentation, source code, and configuration guides for each 'box'. Each box is a self-contained themed CTF that is meant to run on its own, seperate from the others. Each box is meant as a stepping stone in diffculty and complexity and is designed with learning specifically in mind.

I encourage members of the community who wish to play these CTFs to administer self control in viewing the source code as it will have spoilers for how each vulnerability is exploited as well as the flags hidden within.

As the project goes on, I will provide Virtual Machine images meant to be deployed for use as well as guidance for how to use them.

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

## Further Work
