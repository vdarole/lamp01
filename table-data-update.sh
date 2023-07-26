#!/bin/bash
# Purpose: Update data in table emp_details table of jobsearch database. 
# Version: 1.0
# Created Date: 18 May 2023
# Modified Date:
# Author : Vallabh Darole

for i in {2..421}
do
cat /var/www/html/user-data/details | head -$i | tail -1 > /tmp/temp
FN=`cat /tmp/temp | awk '{print $1}'`
LA=`cat /tmp/temp | awk '{print $2}'`
GN=`cat /tmp/temp | awk '{print $3}'`
EM=`cat /tmp/temp |awk '{print $4}'`
MO=`cat /tmp/temp |awk '{print $5}'`
DOB=`cat /tmp/temp |awk '{print $6}'`
ADD=`cat /tmp/temp |awk '{print $7}'`
AQU=`cat /tmp/temp |awk '{print $8}'`
GQU=`cat /tmp/temp |awk '{print $9}'`
YEX=`cat /tmp/temp |awk '{print $10}'`
CCO=`cat /tmp/temp |awk '{print $11}'`
PCO=`cat /tmp/temp |awk '{print $12}'`
LOC=`cat /tmp/temp |awk '{print $13}'`
NPR=`cat /tmp/temp |awk '{print $14}'`
HTE=`cat /tmp/temp |awk '{print $15}'`

mysql -u root --password=redhat -D jobsearch -e "INSERT INTO emp_details (f_name,l_name,gender,email,mobile,dob,address,a_qualification,g_certification,y_experience,c_company,l_company,location,n_period,h_technology ) VALUES ('$FN' , '$LA' , '$GN' , '$EM' , '$MO' , '$DOB' , '$ADD' , '$AQU' , '$GQU' , '$YEX', '$CCO' , '$PCO' , '$LOC' , '$NPR' , '$HTE')"
done
