#!/usr/bin/env bash

apt update -y

apt install -y ssh openssh-server openssh-client vsftpd ftp filezilla javascript-common python3 apache2 php7.4 openvpn

echo " "
echo "Para trabajar con VPN deberás partir siempre desde el escritotio"
echo " "
read -p "Hola, escriba el nombre de usuario con el que trabaja: " user
echo " "
cd  /home/$user/Descargas
ruta=$(pwd)
echo " "
echo "Se encuentra en el directorio ${ruta}"

# DESCOMPRESIÓN Y LOGEO EN VPN DE ZENTYAL

tar xzvf MOS-SECURITY-client-MOS-SECURITY.tar.gz
mkdir MOS-VPN
mv MOS-SECURITY-client.conf 5D650147FD170F7D.pem MOS-SECURITY.pem cacert.pem /home/$user/Descargas/MOS-VPN
rm -r MOS-SECURITY-client-MOS-SECURITY.tar.gz
chmod -R u+x MOS-VPN
mv MOS-VPN /home/$user/Escritorio
cd /home/$user/Escritorio/MOS-VPN
openvpn MOS-SECURITY-client.conf