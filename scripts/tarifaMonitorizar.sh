#!/usr/bin/env bash

# INSTALACIÓN DE SOFTWARE

apt install -y ssh openssh-server ftp apache2 filezilla isc-dhcp-client php7.4 javascript-common python3 curl openvpn

# INSTALACIÓN DE ANYDESK

curl -fsSL https://keys.anydesk.com/repos/DEB-GPG-KEY | gpg --dearmor -o /etc/apt/trusted.gpg.d/anydesk.gpg
echo "deb http://deb.anydesk.com/ all main" | tee /etc/apt/sources.list.d/anydesk-stable.list
apt update -y
apt install anydesk -y

echo " "
echo "Para trabajar con VPN deberás partir siempre desde el escritorio"
echo " "
read -p "Hola, escriba el nombre de usuario con el que trabaja: " user
echo " "
cd  /home/$user/Descargas
ruta=$(pwd)
echo " "
echo "Se encuentra en el directorio ${ruta}"

# DESCOMPRESIÓN Y LOGEO EN VPN DE ZENTYAL

tar xzvf MOS-SECURITY-client-cliente-MOS-SECURITY.tar.gz
mkdir MOS-VPN
mv MOS-SECURITY-client.conf 5D7FC5FE1FED3B6A.pem cliente-MOS-SECURITY.pem cacert.pem /home/$user/Descargas/MOS-VPN
rm -r MOS-SECURITY-client-cliente-MOS-SECURITY.tar.gz
chmod -R u+x MOS-VPN
mv MOS-VPN /home/$user/Escritorio
rm -r /home/$user/Descargas/MOS-VPN
cd /home/$user/Escritorio/MOS-VPN
openvpn MOS-SECURITY-client.conf