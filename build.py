# adds basic php-based authentication to a static html file

import sys

data = data_2 = ''

if (len(sys.argv) > 1):
	file_name = sys.argv[1]
else:
	file_name = 'index.html'


auth_file_name = 'auth.php'

with open(auth_file_name) as fp:
    data = fp.read()

with open(file_name) as fp:
    data_2 = fp.read()

data += "\n"
data += data_2

with open('index.php', 'w') as fp:
    fp.write(data)
    fp.close()




