#!/usr/bin/env bash
IMG_NAME=margus
CNT_NAME=marbu
docker stop ${CNT_NAME}
docker rm ${CNT_NAME}
docker build -t ${IMG_NAME} container
docker run --name ${CNT_NAME} -d -p 80:80 ${IMG_NAME}