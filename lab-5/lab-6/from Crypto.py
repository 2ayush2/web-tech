## encryption using SHA-1 in python

import hashlib 

text = 'Hello There'
result = hashlib.sha1(text.encode())

print("The hexadecimal equivalent of hash using SHA-1 is : ", end ="")
print(result.hexdigest())


## encryption using SHA-2 (256) in python

import hashlib 

text = 'Master Kenobi'
result = hashlib.sha256(text.encode())

print("The hexadecimal equivalent of hash using SHA-1 is : ", end ="")
print(result.hexdigest())

