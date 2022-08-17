#!/bin/bash
git checkout dev && git pull origin dev
echo '==== PULLED FROM DEV====\n'
echo '==== BUILD STARTED ====\n'
npm run build
echo '\n==== BUILD FINSIHED ====\n'