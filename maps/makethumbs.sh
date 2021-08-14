#!/bin/bash


thumbwidth="460"
suffix="-thumb.png"
suffixl="${#suffix}"
dist="-${suffixl}"
for x in *.png; do
     len="${#x}"
     if [ $len -gt $suffixl ]; then
   			 fsuffix="${x: $dist}"
   			 if [ "$fsuffix"  != "$suffix" ]; then
				 		printf '%s\n' "Processing $x"
   						convert -thumbnail x${thumbwidth} "$x" "$x$suffix";
   			 fi


     fi

done


