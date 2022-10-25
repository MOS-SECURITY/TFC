#!/usr/bin/env bash

apt update -y

apt install -y ssh openssh-server openssh-client ftp \
apache2 samba-common mysql-client vsftpd \
iptables rsync filezilla isc-dhcp-client \
php7.4 javascript-common python3 openvpn

cd  /home/usuario/Descargas

tar xzvf VPN-MOS-SECURITY-client-AUTORIDAD-MOS-SECURITY.tar.gz

openvpn VPN-MOS-SECURITY-client.conf
