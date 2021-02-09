arr = []
for x in range(5):
    n = int(input("Enter a number: "))
    arr.append(n)

for i in arr:
    if i == 0:
        arr.pop(-1)
        arr.insert(0, 0)
print(arr)
