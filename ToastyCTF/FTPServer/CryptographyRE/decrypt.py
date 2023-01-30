# The solution, not provided to the user but for proof of concept.

userInput = input("String to decrypt: ")

lst = userInput.split(" ")

result = ""

for item in lst:
	result += chr((int(item) - 2) // 8)

print(result)

