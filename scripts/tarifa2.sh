#!/usr/bin/env bash

apt update -y

apt install -y samba-common rsync ssh \
isc-dhcp-client apache2 php7.4 javascript-common python3 \
openvpn


echo ""
read -p "Hola, escriba el nombre de usuario con el que trabaja: " user
echo ""
cd  /home/$user/Descargas
ruta=$(pwd)
echo "Para trabajar con VPN deberás partir siempre desde el escritotio"
echo ""
echo "Se encuentra en el directorio ${ruta}" 

# DESCOMPRESIÓN Y LOGEO EN VPN DE ZENTYAL

tar xzvf VPN-MOS-SECURITY-client-AUTORIDAD-MOS-SECURITY.tar.gz
mkdir MOS-VPN
mv VPN-MOS-SECURITY-client.conf 966E8287774297BE.pem AUTORIDAD-MOS-SECURITY.pem cacert.pem /home/$user/Descargas/MOS-VPN
rm -r VPN-MOS-SECURITY-client-AUTORIDAD-MOS-SECURITY.tar.gz
chmod -R u+x MOS-VPN
mv MOS-VPN /home/$user/Escritorio
cd /home/$user/Escritorio/MOS-VPN
openvpn VPN-MOS-SECURITY-client.conf
