#!/bin/bash
a=`ls -l`
echo $a
echo
echo "$a"
echo

R=$(cat /etc/redhat-release)
arch=$(uname -m)
echo $R
echo
echo $arch
echo
exit 0
