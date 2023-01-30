# Totally good and not at all faulty "encryption" algorithm provided

userInput = input("String to encrypt: ")

result = ""

for char in userInput:
	result += str((ord(char) * 8) + 2) + " "

print(result)
