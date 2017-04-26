#/usr/bin/bash

for n in `seq 1 100`;
do
	shuf -i4-100 -n1 > $n.txt
done
