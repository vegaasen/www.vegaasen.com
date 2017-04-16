#!/usr/bin/env bash

echo "Initiating deployment for vegaasen.com :-). Defining private key";

SSH_KEY_NAME=host_private_key.pem;
PATH_DIST=dist;

echo "Preparing ssh-agent";

eval "$(ssh-agent -s)";

# creates
echo -e "$SSH_DEPLOYMENT_KEY" > ${SSH_KEY_NAME};

echo "Key-file created. Changing access to the key";

chmod 600 ${SSH_KEY_NAME};

echo "Adding the key to the ssh structure";

ssh-add ${SSH_KEY_NAME};

echo "Transferring files using rsync";

rsync -r --delete-after --quiet -avz -e "ssh -i ${SSH_KEY_NAME}" ${TRAVIS_BUILD_DIR}/dist/ ${SSH_HOST_USER_USERNAME}@${SSH_HOST_IP}:${SSH_DEPLOYMENT_LOCATION};

echo "Transfer completed to ${SSH_DEPLOYMENT_LOCATION} :-)";