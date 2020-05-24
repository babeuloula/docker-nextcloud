#!/usr/bin/env bash

set -e

apt update && apt upgrade -y && apt autoremove -y
apt install -y \
    git \
    nano

apt-get install -y \
    apt-transport-https \
    ca-certificates \
    curl \
    gnupg-agent \
    software-properties-common

curl -fsSL https://download.docker.com/linux/ubuntu/gpg | apt-key add -

apt-key fingerprint 0EBFCD88

add-apt-repository \
   "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
   $(lsb_release -cs) \
   stable"

apt-get update && apt-get install -y \
    docker-ce \
    docker-ce-cli \
    containerd.io

curl -L "https://github.com/docker/compose/releases/download/1.25.5/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose
ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose

git clone https://github.com/evertramos/docker-compose-letsencrypt-nginx-proxy-companion.git nginx-proxy
cd nginx-proxy
cp .env.sample .env
./start.sh