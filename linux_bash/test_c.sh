#! /bin/bash

cityes=$(awk '!/city/{
	sum[$3] += $4
}
END {
	for (item in sum) {
		print item, sum[item]
	}
}' cityes.txt | sort -k2 -nr)

echo $cityes
