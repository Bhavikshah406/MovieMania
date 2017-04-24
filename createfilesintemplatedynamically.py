import os
with open('movies') as f:
    lines = f.read().splitlines()
for i in range(len(lines)):
	lines[i]=lines[i].replace(" ","_");
'''
d=open("templates/php/Begum_jaan/check_change_in_Begum_jaan.php");
d1=d.read()
d.close()
d=open("templates/php/Begum_jaan/get_Begum_jaan.php");
d2=d.read()
d.close()
d=open("templates/php/Begum_jaan/put_in_Begum_jaan.php");
d3=d.read()
d.close()
for i in lines:
	f1=d1.replace("Begum",i);
	f2=d2.replace("Begum",i);
	f3=d3.replace("Begum",i);
	f= open("templates/php/%s/check_change_in_%s.php"%(i,i) ,"w+")
	f.write(f1);
	f.close()
	f= open("templates/php/%s/get_%s.php"%(i,i),"w+")
	f.write(f2)
	f.close()
	f= open("templates/php/%s/put_in_%s.php"%(i,i) ,"w+")
	f.write(f3)
	f.close()
	#os.makedirs("templates/php/%s"%i)
	
#print(d1,d2,d3)
print(f1,f2,f3)
'''

d=open("templates/Begum_jaan.php");
d1=d.read()
d.close()
for i in lines:
	f1=d1.replace("Begum_jaan",i)
	f2=f1.replace("begum_jaan",i)
	f3=f2.replace("Begum",i)
	f= open("templates/%s.php"%i ,"w+")
	f.write(f3);
	f.close()
